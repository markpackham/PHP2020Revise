<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- This will NOT work on xampp or local sites unless you re-configure the php.init file */
<body>
    <form action="contact.php" method="post">
        <input type="text" name="name" placeholder="Full Name">
        <textarea name="message" placeholder="Enter Message"></textarea>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>