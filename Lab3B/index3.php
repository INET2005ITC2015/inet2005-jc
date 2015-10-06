<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Updated Actors</title>
</head>
<body>

<?php

require_once('dbConn.php');
$db = getDBConnection();

$fName = $_POST["firstName"];
$lName = $_POST["lastName"];
$actorId = $_POST["actorID"];

$resultUpdate = mysqli_query($db,"UPDATE actor SET first_name = '$fName', last_name = '$lName' WHERE actor_id= '$actorId';");
if(!$resultUpdate)
{
    die('Could not Update records in the Sakila Database: ' . mysqli_error($db));
}else{
    echo "<p>Successful! You have Updated"." ".mysqli_affected_rows($db)." ". "row(s).</p>";
}

closeDBConnection($db);
?>

<a href="index.php">Back</a>

</body>
</html>