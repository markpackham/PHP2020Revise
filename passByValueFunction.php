<?php

// Pass by Value

$num1 = 1;
$num2 = 2;

function add($num1, $num2)
{
    $result = $num1 + $num2;
    return $result;
}

echo add($num1, $num2);

echo " ";


function subtract($num1, $num2)
{
    $result = $num1 - $num2;
    return $result;
}

echo subtract($num1, $num2);
