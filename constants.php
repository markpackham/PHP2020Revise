<?php

// less common way to create a constant (works at run time)
define("COMPANY_NAME", "Apple");

// notice constants do not use $, that's only for variables
echo COMPANY_NAME;

// More common way to create a constant (works at compile time)
// CONST
const MY_NAME = "Timmy";
echo MY_NAME;
