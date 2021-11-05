<?php

$role = "Visitor";

switch ($role) {
    case "Visitor":
        echo "Welcome Visitor";
        break;
    case "Admin":
        echo "Welcome Admin";
        break;
    case "Super Admin":
        echo "Welcome Super Admin";
        break;
    case "Boss":
        echo "Welcome Boos";
        break;
    default:
        echo "Who the hell are you?";
}
