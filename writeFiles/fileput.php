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


    if (isset($_POST['submit'])) {

        // $myFile = fopen("uploads/file.txt", "w");

        // amend should be used, since "w" would overwrite everything
        $myFile = fopen("uploads/file.txt", "a");

        $txt = "Hello World, my age is " . $_POST['age'] . "\n";

        fwrite($myFile, $txt);

        // $txt = "Hello Universe";
        // fwrite($myFile, $txt);

        fclose($myFile);

        echo $myFile;
    }

    ?>

    <form action="fileput.php" method="post">
        <input type="text" name="age" />
        <button name="submit" type="submit">Submit</button>
    </form>
</body>

</html>