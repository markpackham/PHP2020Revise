<?php

$str = "Hello World !!!!!";
// strlen is more useful for checking that setting a max in Html since hackers can bypass that with Inspect Element
// 17
echo strlen($str);
echo " ";
// gives 2
echo str_word_count($str);
echo " ";
$email = "myemail@gmail.com";
if (strpos($email, "@")) {
    // ucwords uppercases every first letter of a word
    echo ucwords("This is a valid email") . strtoupper(" please please uppercase me");
}
