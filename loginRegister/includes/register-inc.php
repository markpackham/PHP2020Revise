<?php

if (isset($_POST['submit'])) {
    // Add db connection
    require 'database.php';

    // If we didn't use prepared statements we'd have to do this to prevent SQL injecitons
    // via mysqli_real_escape_string
    // $username = mysqli_real_escape_string($connection, htmlentities($_POST['username']));
    // $password = mysqli_real_escape_string($connection, htmlentities($_POST['password']));
    // $confirmPassword = mysqli_real_escape_string($connection, htmlentities($_POST['confirmPassword']));

    // htmlentities protects us from JavaScript injections
    $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['password']);
    $confirmPass = htmlentities($_POST['confirmPassword']);

    if (empty($username) || empty($password) || empty($confirmPass)) {
        header("Location: ../register.php?error=emptyfields&username=" . $username);
        // jump out of code with exist() so you don't bother with the other checks
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
        header("Location: ../register.php?error=invalidusername&username=" . $username);
        exit();
    } elseif ($password !== $confirmPass) {
        header("Location: ../register.php?error=passwordsdonotmatch&username=" . $username);
        exit();
    } else {
        // make sure username isn't already taken
        $sql = "SELECT username FROM users WHERE username = ?";
        // Our Prepared STATEMENT which only needs to be called once so speeds stuff up
        // it also saves us from SQL injections
        $stmt = mysqli_stmt_init($connection);
        // check if statement failed
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../register.php?error=sqlerror");
            exit();
        } else {
            // "s" stands for string eg $username "i" stands for Int and "b" stands for boolean
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            // we will either get 0 or 1 row back, if all's good we want 0
            $rowCount = mysqli_stmt_num_rows($stmt);

            if ($rowCount > 0) {
                header("Location: ../register.php?error=usernametaken");
                exit();
            } else {
                // add user to database table users
                $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
                $stmt = mysqli_stmt_init($connection);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../register.php?error=sqlerror");
                    exit();
                } else {
                    // hash our password, https://www.php.net/manual/en/function.password-hash.php
                    // PASSWORD_DEFAULT - Use the bcrypt algorithm (default as of PHP 5.5.0). 
                    // Note that this constant is designed to change over time as new and stronger 
                    // algorithms are added to PHP. Make sure database column can handle large strings
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPassword);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../register.php?succes=registered");
                    exit();
                }
            }
        }
    }

    // to save resources close statement
    mysqli_stmt_close($stmt);
    // close database connection
    mysqli_close($conneciton);
}
