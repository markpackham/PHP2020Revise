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
    // show us file name of file being uploaded, the type and the location
    echo $name = $_FILES['file']['name'];
    echo "<br>";
    echo $type = $_FILES['file']['type'];
    echo "<br>";
    echo $tmp_location = $_FILES['file']['tmp_name'];
    echo "<br>";
    // will show a 0 is all is good and a 1 if there is a problem
    echo $error = $_FILES['file']['error'];
    ?>
    <!-- enctype="multipart/form-data" specifies how form should be encoded -->
    <form action="files.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" />
        <button type="submit">Submit</button>
    </form>
</body>

</html>