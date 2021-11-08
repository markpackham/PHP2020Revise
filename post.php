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
    if (isset($_POST)) {
        if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
            echo $_POST['firstname'] . " " . $_POST['lastname'];
        }
        echo "<br>";
        print_r($_POST);
    }
    ?>
    <form action="post.php" method="post">
        <input type="text" name="firstname" placeholder="Your firstname">
        <input type="text" name="lastname" placeholder="Your lastname">
        <button type="submit">Submit</button>
    </form>
</body>

</html>