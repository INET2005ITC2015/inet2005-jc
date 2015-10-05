<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    require_once('dbConn.php');
    getDBConnection();

    $actorId = $_POST["actorIdUpdate"];

    $fName = mysqli_query($db, "SELECT first_name FROM actor WHERE actor_id = $actorId");
    if (!$fName) {
        die('Could not find records in the Sakila Database: ' . mysqli_error($db));
    }

    $lName = mysqli_query($db, "SELECT last_name FROM actor WHERE actor_id = $actorId");
    if (!$lName) {
    die('Could not find records in the Sakila Database: ' . mysqli_error($db));
    }
?>

<form action="index3.php"  method="post" name="updateActor">
    <p>First Name:
        <input name="fName" type="text" value= "<?php $fName ?>">
    </p>

    <p>Last Name:
        <input name="lName" type="text" value="<?php $lName ?>">
    </p>

    <p>
        <input name="UpdateActor" type="submit" value="Submit">
    </p>
</form>

</body>
</html>