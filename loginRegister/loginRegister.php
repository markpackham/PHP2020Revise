<?php
// Header has access to the database connection file
require_once 'includes/header.php';
?>

<?php
$sql = "SELECT * FROM users";
$result = mysqli_query($connection, $sql);
$rowCount = mysqli_num_rows($result);

if ($rowCount > 0) {
    echo "<ol>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<li>" . $row['username'] . "</li>";
    }
    echo "</ol>";
} else {
    echo "<p>No results found.</p>";
}


if (isset($_SESSION['sessionId'])) {
    echo "<p>You are logged in!</p>";
} else {
    echo "<p>Home Page</p>";
}
?>

<?php
require_once 'includes/footer.php';
?>