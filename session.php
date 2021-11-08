<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Session exists as long as same browser is open
    // Way more secure than using cookies so better for handling passwords

    session_start();

    // Store info
    $_SESSION["Name"] = "Bob";
    $_SESSION["Age"] = 11;

    echo $_SESSION["Name"];
    echo "<br>";
    print_r($_SESSION);

    // session_destroy only takes effect when we close down our browser
    session_destroy();
    ?>
</body>

</html>