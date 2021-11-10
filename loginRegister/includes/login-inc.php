<?php

if (isset($_POST['submit'])) {

    require 'database.php';

    // htmlentities protects us from JavaScript injections
    $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['password']);
} else {
    header("Location: ../loginRegister.php?error=accessforbidden");
    exit();
}
