<?php

// rand() generates a number between 0 and 2147483647 by default
echo getrandmax();
echo " ";
$min = 1;
$max = 10;
echo rand($min, $max);
