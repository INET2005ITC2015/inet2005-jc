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
        $db = getDBConnection();

        $actorId = $_POST["actorId"];

        $sql = "SELECT first_name, last_name, actor_id FROM actor WHERE actor_id =  '$actorId';";

        $result = mysqli_query($db, $sql);
        if (!$result) {
            die('Could not find Query records in the Sakila Database: ' . mysqli_error($db));
        }

        $record = mysqli_fetch_assoc($result);
        $firstName = $record ["first_name"];
        $lastName = $record ["last_name"];

    }

?>

<form id="updateForm" name="updateForm" method="post" action="index3.php">
    <p>
        <label>First Name: <input type="text" name="firstName" id="firstName" value = "<?php echo $firstName ?>"/> </label>
    </p>

    <p>
        <label>Last Name:<input type="text" name="lastName" id="lastName" value = "<?php echo $lastName ?>"/></label>
    </p>

    <p>

    </p><input type="hidden" name="actorID" id="actorID" value = "<?php echo $actorId ?>"/></label>
    </p>


    <p>
        <input type="submit" name="submit" id="submit" value="Submit" />
    </p>
</form>

</body>
</html>