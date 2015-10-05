<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>First Ten Films</title>
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

    $fName = $_POST["fName"];
    $lName = $_POST["lName"];

    If(!empty($_POST['fName']) && !empty($_POST['lName'])) {

        $resultInsert = mysqli_query($db, "INSERT INTO actor (first_name, last_name) VALUES ('$fName','$lName')");
        if (!$resultInsert) {
            die('Could not insert records to the Sakila Database: ' . mysqli_error($db));
        } else {
            echo "<h1>Actor Inserted</h1>";
        }
    }

    $resultDisplay = mysqli_query($db,"SELECT * FROM actor ORDER BY actor_id DESC LIMIT 10");

    if(!$resultDisplay){
        die('Could not display records from the Sakila Database: ' . mysqli_error($db));
    }

    while ($row = mysqli_fetch_assoc($resultDisplay))
    {
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

<form action="index2.php" method="post" name="deleteRecord">
    <p><input name="actorId" type="text"></p>
    <p><input name="deleteId" type="submit" value="Delete"></p>
</form>

</body>
</html>