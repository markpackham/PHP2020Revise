<?php

$cars = ["Audi" => 50.5, "BMW" => 40.7, "Ford" => 60.3];
var_dump($cars);
echo "<br>";
print_r($cars);
echo "<br>";

$car1["Honda"] = 60.3;
echo $car1["Honda"];
echo "<br>";


foreach ($cars as $key => $value) {
    echo "My {$key} has {$value} mileage <br>";
}
