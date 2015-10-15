<?php

require 'isLoggedIn.php';
checkIfLoggedIn();

?>

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
$gender = $_POST["gender"];
$num = 0;
$sql = "SELECT * FROM employees ORDER BY emp_no DESC LIMIT 1";

$result = mysqli_query($db, $sql);

if(!$result)
{
    die('Could not retrieve records from the Employees Database: ' . mysqli_error($db));
}

while ($row = mysqli_fetch_assoc($result)){
    $num = $row['emp_no']+1;
}


    $resultInsert = mysqli_query($db, "INSERT INTO employees (emp_no, first_name, last_name, birth_date, hire_date, gender) VALUES ('$num','$fName','$lName','$bDate','$hDate','$gender')");
    if (!$resultInsert) {
        die('Could not insert records to the Employees Database: ' . mysqli_error($db));
    } else {
        echo "<p>You have added ". $fName. " " . $lName. " to the employees table </p>";
    }

?>
<a href="index.php">Back</a>
<form name="LogOutForm" action="logOut.php" method="post">
    <input type="submit" name="logOutButton" value="Log Out">
</form>
</body>
</html>