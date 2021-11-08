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
    // small file webserver stores in client server
    // can only be read by domain it is set from but easily hackable so not secure

    // Cookie can have 6 arguments, Name, Value and Expire are a MUST
    // Name of Cookie
    // Value of Cookie
    // Expire time (in seconds) often you set it for something like a month
    // Path on server where cookie available
    // Domain where cookie is available
    // Security to say only send on Secure HTTPS conneciton

    // 86400 seconds in a day multiplied by 30 days is added to time NOW
    $time = time() + 86400 * 30;

    // If no expire date is included the cookie is only stored for the current session
    setcookie("name", "Billy", $time);

    print_r($_COOKIE);

    echo "<br/>";

    echo $_COOKIE["name"];

    // cookies have no destroy function, instead they die when their time has expired
    // so you could always do, time() - 86400 * 30;
    ?>
</body>

</html>