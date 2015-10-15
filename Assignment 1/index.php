
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Employees</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="scripts.js"></script>
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF']; ?>"  method="get" name="Search">
    <p>Search:
        <input name="string" type="text" value="<?php echo $_GET['string'];?>">
    </p>

    <p>
        <input name="DisplayInfo" type="submit" value="Search Query">
    </p>
</form>

<form action="create.html"  method="post" name="Create">
    <p>
        <input name="create" type="submit" value="Add Employee Record">
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

    $search = $_GET["string"];

    $sql = "SELECT COUNT(emp_no) FROM employees WHERE first_name LIKE '%$search%' OR last_name LIKE '%$search%'";
    $result = mysqli_query($db,$sql);

    if(!$result)
    {
        die('Could not retrieve records from the Employees Database: ' . mysqli_error($db));
    }

    $row = mysqli_fetch_array($result, MYSQLI_NUM);
    $row_count=$row[0];

    echo "<p>$row_count</p>";

    if (isset($_GET{"page"})){
        $page= $_GET{"page"}+1;
        $offset = $limit * $page;
    }else{
        $page=0;
        $offset=0;
    }

    $left_rec = $row_count - (($page * $limit));


    $sql = "SELECT * FROM employees WHERE first_name LIKE '%$search%' OR last_name LIKE '%$search%' LIMIT $offset, $limit" ;
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
            <td>
                <form action="update.php"  method="post" name="UpdateForm">
                    <input id = "update" name="update" type="submit" value="">
                    <input type="hidden" name="emp_no" value="<?php echo $row["emp_no"]?>">
                </form>
            </td>
            <td>
                <form action="del.php"  method="post" name="DelForm">
                    <input id = "del" name="del" type="submit" value="" onclick="if(!confirm('Delete this record?')){return false;}">
                    <input type="hidden" name="emp_no" value="<?php echo $row["emp_no"]?>">
                </form>
            </td>

        </tr>
    <?php

    }//end of while loop
    if( $page > 0 )
    {
        $last = $page - 2;
        echo "<a href=\"$_PHP_SELF?string=$search&DisplayInfo=Search+Query&page=$last\">Last 25 Records</a>";
        echo "<a href=\"$_PHP_SELF?string=$search&DisplayInfo=Search+Query&page=$page\">Next 25 Records</a>";
    }

    else if( $page == 0 )
    {
        echo "<a href=\"$_PHP_SELF?string=$search&DisplayInfo=Search+Query&page=$page\">Next 25 Records</a>";
    }

    else if( $left_rec < $limit )
    {
        $last = $page - 2;
        echo "<a href=\"$_PHP_SELF?string=$search&DisplayInfo=Search+Query&page=$last\">Last 25 Records</a>";
    }


    ?>
    </tbody>
</table>
</body>
</html>