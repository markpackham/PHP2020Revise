<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "phptutorial";

// in mysqli_connect the "i" stands for "improved" since it has more feature
// than the older mysql_connect
$connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$connection) {
    die("Database connection failed!");
}
