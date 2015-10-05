<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Update Form</title>
</head>
<body>
<?php

    if(!empty($_POST["actorId"])) {
        require_once('dbConn.php');
        getDBConnection();

        $actorId = $_POST["actorId"];

        echo"<h1>$actorId</h1>";

        $fName = mysqli_query($db, "SELECT first_name, actor_id FROM actor WHERE actor_id =  '$actorId';");
        if (!$fName) {
            die('Could not find fNane records in the Sakila Database: ' . mysqli_error($db));
        }

        $lName = mysqli_query($db, "SELECT last_name FROM actor WHERE actor_id = '$actorId';'");
        if (!$lName) {
            die('Could not find lName records in the Sakila Database: ' . mysqli_error($db));
        }
    }else{
        echo "<h1>Did Nothing</h1>";
    }
?>

<form id="updateForm" name="updateForm" method="post" action="index3.php">
    <p>
        <label>First Name: <input type="text" name="firstName" id="firstName" /> </label>
    </p>

    <p>
        <label>Last Name:<input type="text" name="lastName" id="lastName" /></label>
    </p>

    <p>
        <input type="submit" name="submit" id="submit" value="Submit" />
    </p>
</form>

</body>
</html>