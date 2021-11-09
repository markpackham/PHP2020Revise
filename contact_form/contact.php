<?php

if (isset($_POST['submit'])) {
    // trim removes whitespace on left and right hand side of string
    $name = trim($_POST['name']);
    $message = trim($_POST['message']);

    $myMail = "markpackham1@gmail.com";
    $header = "From: " . "sometestingemail@hotmail.com";
    $message2 = "You got a message from " . $name . " \n\n" . $message;

    // 1 email sending it to
    // 2 subject
    // 3 message
    // 4 header
    mail($myMail, "Test Email Subject", $message2, $header);
    header("Location: contact_form.php?mailsend");
}
