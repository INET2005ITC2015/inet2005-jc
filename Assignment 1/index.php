<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Employees</title>
    <style type="text/css">
        table, td, th{
            border: double red;
        }

    </style>
</head>
<body>

<form action="index.php"  method="post" name="Search">
    <p>Search:
        <input name="string" type="text" value="">
    </p>

    <p>
        <input name="DisplayInfo" type="submit" value="Search Query">
    </p>
</form>

<table>
    <thead>
    <tr>
        <th>Emp. Number</th>
        <th>Birth Date</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Hire Date</th>
    </tr>
    </thead>
    <tbody>
    <?php

    require_once('dbConn.php');
    $db = getDBConnection();

    //$search = $_POST["string"];

    $result = mysqli_query($db,"SELECT * FROM employees"); //WHERE description LIKE  '%$search%'");
    if(!$result)
    {
        die('Could not retrieve records from the Employees Database: ' . mysqli_error($db));
    }
    while ($row = mysqli_fetch_assoc($result))
    {
        ?>
        <tr>
            <td><?php echo $row["emp_no"] ?></td>
            <td><?php echo $row["birth_date"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            <td><?php echo $row["hire_date"]?></td>
        </tr>
    <?php

    }//end of while loop

    closeDBConnection($db);

    ?>
    </tbody>
</table>

</body>
</html>