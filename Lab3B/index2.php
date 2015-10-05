<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Deleted Actors</title>
</head>
<body>

    <?php

    require_once('dbConn.php');
    $db = getDBConnection();

    $idDel = $_POST["actorId"];

    $resultDel = mysqli_query($db,"DELETE FROM actor WHERE actor_id = $idDel");
    if(!$resultDel)
    {
        die('Could not Delete records from the Sakila Database: ' . mysqli_error($db));
    }else{
        echo "<p>Successful! You have deleted"." ".mysqli_affected_rows($db)." ". "row(s).</p>";
    }

    closeDBConnection($db);
    ?>

    <a href="index.php">Back</a>

</body>
</html>