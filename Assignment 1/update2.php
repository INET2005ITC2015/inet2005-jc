<?php

require 'isLoggedIn.php';
checkIfLoggedIn();

?>

<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Update Employee</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class = "log">
    <p><?php echo $_SESSION["loginUser"] ?> ,Logged In</p>
    <form name="LogOutForm" action="logOut.php" id = "logBtn" method="post">
        <input type="submit" name="logOutButton" value="Log Out">
    </form>
</div>

<?php

require_once('dbConn.php');
$db = getDBConnection();

$num = $_POST["emp_no"];
$fName = $_POST["firstName"];
$lName = $_POST["lastName"];
$bDate = $_POST["birthDate"];
$hDate = $_POST["hireDate"];
$gender = $_POST["gender"];

$resultUpdate = mysqli_query($db,"UPDATE employees SET first_name = '$fName', last_name = '$lName', birth_date = '$bDate', hire_date = '$hDate', gender = '$gender' WHERE emp_no = '$num';");
if(!$resultUpdate)
{
    die('Could not Update records in the Employees Database: ' . mysqli_error($db));
}else{
    echo "<p>Successful! You have Updated"." ".mysqli_affected_rows($db)." ". "row(s).</p>";
}

closeDBConnection($db);
?>

<a href="index.php">Back</a>

</body>
</html>