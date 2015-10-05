<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Actors</title>
    <style type="text/css">
        table, td, th{
            border: double red;
        }

    </style>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Actor ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Last Updated</th>
    </tr>
    </thead>
    <tbody>
    <?php

    require_once('dbConn.php');
    $db = getDBConnection();

    $fName = $_POST["firstName"];
    $lName = $_POST["lastName"];

    If(!empty($_POST['firstName']) && !empty($_POST['lastName'])) {

        $resultInsert = mysqli_query($db, "INSERT INTO actor (first_name, last_name) VALUES ('$fName','$lName')");
        if (!$resultInsert) {
            die('Could not insert records to the Sakila Database: ' . mysqli_error($db));
        } else {
            echo "<h1>Actor Inserted</h1>";
        }
    }//end of if

        $resultDisplay = mysqli_query($db, "SELECT * FROM actor ORDER BY actor_id DESC LIMIT 10");

        if (!$resultDisplay) {
            die('Could not display records from the Sakila Database: ' . mysqli_error($db));
        }

        while ($row = mysqli_fetch_assoc($resultDisplay)) {
            ?>
            <tr>
                <td><?php echo $row["actor_id"] ?></td>
                <td><?php echo $row["first_name"]?></td>
                <td><?php echo $row["last_name"]?></td>
                <td><?php echo $row["last_update"]?></td>
            </tr>
        <?php

        }//end of while loop

        closeDBConnection($db);

    ?>
    </tbody>
</table>

<form id="delForm" name="delForm" method="post" action="index2.php">
    <p>
        <label>Id to be deleted: <input type="text" name="actorId" id="actorId" /> </label>
    </p>

    <p>
        <input type="submit" name="submit" id="submit" value="Submit" />
    </p>
</form>


<form id="updateForm" name="updateForm" method="post" action="form2.php">
    <p>
        <label>Id to be Updated: <input type="text" name="actorId" id="actorId" /> </label>
    </p>

    <p>
        <input type="submit" name="submit" id="submit" value="Submit" />
    </p>
</form>


</body>
</html>