<?php

$num1 = 5;
$num2 = 5;

function calculator($num1 = 1, $num2 = 1, $num3 = 10)
{
    return $num1 * $num2 * $num3;
}

// gives 250 since we have a default of 10 for $num3
echo (calculator($num1, $num2));
