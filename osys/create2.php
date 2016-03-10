<?php

require 'isLoggedIn.php';
checkIfLoggedIn();

?>

<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
require_once('dbConn.php');
$db = getDBConnection();

$username = $_POST["username"];
$password = $_POST["password"];

$resultInsert = mysqli_query($db, "INSERT INTO members (username, password) VALUES ('$username', MD5('$password'))");
    if (!$resultInsert) {
        die('Could not insert records to the osys Database: ' . mysqli_error($db));
    } else {
        echo "<p>You have added ". $username." to the employees table </p>";
    }

?>
<a href="index.php">Back</a>
<form name="LogOutForm" action="logOut.php" method="post">
    <input type="submit" name="logOutButton" value="Log Out">
</form>
</body>
</html>