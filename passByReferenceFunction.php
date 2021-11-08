<?php

// Pass by Reference

$x = 10;

function addByValue($x)
{
    $x += 1;
}
addByValue($x);
addByValue($x);
addByValue($x);
echo $x;

echo " ";

function addByReference(&$x)
{
    $x += 1000;
}

addByReference($x);
addByReference($x);
addByReference($x);
echo $x;
echo " ";
