<?php

$x = 100;
$y = 200;

function add()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

add();
// we can call the Global z from wherever we want, it gives us 300
echo $z;
