<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
require_once('dbConn.php');
$db = getDBConnection();

$fName = $_POST["firstName"];
$lName = $_POST["lastName"];
$hDate = $_POST["hireDate"];
$bDate = $_POST["birthDate"];
$gender = $_POST["male"];
$gender = $_POST["female"];

    $resultInsert = mysqli_query($db, "INSERT INTO employees (emp_no, first_name, last_name, birth_date, hire_date, gender) VALUES ('$fName','$lName','$bDate','$hDate','$gender')");
    if (!$resultInsert) {
        die('Could not insert records to the Employees Database: ' . mysqli_error($db));
    } else {
        echo "<h1>Employee Inserted</h1>";
    }
?>

</body>
</html>