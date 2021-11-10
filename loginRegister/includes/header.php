<?php
// we get sessions from login-inc.php
session_start();
require_once 'database.php';
require_once 'register-inc.php';
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>loginRegister</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="loginRegister.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>