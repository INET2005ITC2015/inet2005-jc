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
            <th>Title</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
<?php

    $search = $_POST["string"];

    $db = mysqli_connect("localhost","root", "inet2005","sakila");
    if (!$db)
    {
        die('Could not connect to the Sakila Database: ' . mysqli_error($db));
    }

    $result = mysqli_query($db,"SELECT * FROM film WHERE description LIKE  '%$search%'");
    if(!$result)
    {
        die('Could not retrieve records from the Sakila Database: ' . mysqli_error($db));
    }
    while ($row = mysqli_fetch_assoc($result))
    {
        ?>
        <tr>
            <td><?php echo $row["title"] ?></td>
            <td><?php echo $row["description"]?></td>
        </tr>
        <?php

    }//end of while loop

    mysqli_close($db);

    ?>
    </tbody>
</table>

</body>
</html>