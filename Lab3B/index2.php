<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Deleted Actors</title>
</head>
<body>

    <?php

    if(!empty($_POST["actorId"])){

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


    }else{
    echo "<h1>Did Nothing</h1>";
    }
?>
    <a href="index.php">Back</a>

</body>
</html>