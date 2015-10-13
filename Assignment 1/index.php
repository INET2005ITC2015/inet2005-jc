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

    $limit = 25;

    require_once('dbConn.php');
    $db = getDBConnection();

    $search = $_POST["string"];

    $sql = "SELECT COUNT(emp_no) FROM employees";
    $result = mysqli_query($db,$sql);

    if(!$result)
    {
        die('Could not retrieve records from the Employees Database: ' . mysqli_error($db));
    }

    $row_count= mysqli_num_rows($result);

    if (isset($_GET{"page"})){
        $page= $_GET{"page"}+1;
        $offset = $limit * $page;
    }else{
        $page=0;
        $offset=0;
    }

    $left_rec = $row_count - (($page * $limit));


    $sql = "SELECT * FROM employees WHERE first_name LIKE '%$search%' OR last_name LIKE '%$search%' LIMIT $offset, $limit";
    $result = mysqli_query($db, $sql);

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
    if( $page > 0 )
    {
        $last = $page - 2;
        echo "<a href=\"$_PHP_SELF?page=$last\">Last 25 Records</a>";
        echo "<a href=\"$_PHP_SELF?page=$page\">Next 25 Records</a>";
    }

    else if( $page == 0 )
    {
        echo "<a href=\"$_PHP_SELF?page=$page\">Next 25 Records</a>";
    }

    else if( $left_rec < $limit )
    {
        $last = $page - 2;
        echo "<a href=\"$_PHP_SELF?page=$last\">Last 25 Records</a>";
    }


    closeDBConnection($db);

    ?>
    </tbody>
</table>
</body>
</html>