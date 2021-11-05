<?php

$cars1 = "BMW";
$cars2 = "BMWmk2";
$cars3 = "BMWmk3";

$cars = array($cars1, "Land Rover", "Batmobiles");
$cars2 = ["Ferrari", "Lotus", "Thundertank"];

echo $cars[0];
echo "<br>";

$myCar = array("Audi", 1930, 12.11);
var_dump($myCar);
echo "<br>";
print_r($myCar);
echo "<br>";

$cars = array_merge($cars, $cars2);
var_dump($cars);
echo "<br>";
print_r($cars);
