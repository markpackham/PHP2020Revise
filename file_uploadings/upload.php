<?php

if (isset($_POST['submit'])) {
    // look for name "file" in input field
    $file = $_FILES['file'];
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    // split between file name and the file extension
    $tempExtension = explode('.', $name);

    // PHP is case sensative to PNG and png differ
    // end takes the last element in an array
    $fileExtension = strtolower(end($tempExtension));

    $allowedExtensions = ['jpg', 'jpeg', 'png', 'pdf', 'txt'];

    // check that only valid files have been uploaded, no evil .exe files
    // check that we have no errors ergo "0"
    if (in_array($fileExtension, $allowedExtensions) && $error === 0) {
        // make sure file size is less than 3000 kb or 2.9296875 MB
        if ($size < 3000) {
            // generate id based on microtime
            // re-add the extension we previously exploded
            $newFileName = uniqid('', true) . "." . $fileExtension;
            $fileDestination = "uploads/$newFileName";
            // move file to it's new location
            move_uploaded_file($tmp_name, $fileDestination);
            // redirect user to files.php
            header("Location: files.php?uploadedsuccess");
        } else {
            echo "Sorry your file must be less than 2.9MB";
        }
    } else {
        echo "Sorry your file type is not accepted";
    }
}
