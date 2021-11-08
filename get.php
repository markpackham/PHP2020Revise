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
    if (isset($_GET['name'])) {
        echo $_GET['name'];
        echo "<br/>";
        print_r($_GET);
    }
    ?>

    <form action="get.php" method="get">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>
</body>

</html>