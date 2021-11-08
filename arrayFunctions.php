<?php

$personalInfo = ["Name" => "Billy", "Age" => 10, "City" => "Paris"];
$moreInfo = ["Country" => "France", "Weight" => 85];

$personalInfo = array_merge($personalInfo, $moreInfo);

// print_r($personalInfo);
// print_r(array_keys($personalInfo));
print_r(array_values($personalInfo));

$cars = ["Volvo", "Nissan", "Ferrari"];
array_push($cars, "Ford");
print_r($cars);

// gives index of 0 since it is first
echo array_search("Volvo", $cars);
echo " ";
// gives 4
echo count($cars);
