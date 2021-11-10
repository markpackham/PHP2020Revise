<?php

if (isset($_POST['submit'])) {

    require 'database.php';

    // htmlentities protects us from JavaScript injections
    $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['password']);

    if (empty($username) || empty($password)) {
        header("Location: ../loginRegister.php?error=emptyfields&username=" . $username);
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username = ?";
        // $connection comes from [require 'database.php']
        $stmt = mysqli_stmt_init($connection, $sql);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../loginRegister.php?error=sqlerror");
            exit();
        } else {
            // see if the data entered in the login form matches the database
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            // fetch everything from variable result and put into an associated array 
            // so we can work with it
            if ($row = mysqli_fetch_assoc($result)) {
                // check if password entered in form matches hashed password in database
                $passCheck = password_verify($password, $row['password']);
                if ($passCheck == false) {
                    header("Location: ../loginRegister.php?error=wrongpass");
                    exit();
                } elseif ($passCheck) {
                    // login user via session
                    // don't save a password in a session since that's sensative info
                    session_start();
                    $_SESSION['sessionId'] = $row['id'];
                    $_SESSION['sessionUser'] = $row['username'];
                    header("Location: ../loginRegister.php?success=loggedin");
                    exit();
                } else {
                    header("Location: ../loginRegister.php?error=wrongpass");
                    exit();
                }
            } else {
                header("Location: ../loginRegister.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: ../loginRegister.php?error=accessforbidden");
    exit();
}
