<?php

require 'isLoggedIn.php';
checkIfLoggedIn();

?>

<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Update Employee</title>
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

$id = $_POST["id"];
$name = $_POST["name"];
$password = $_POST["password"];


$resultUpdate = mysqli_query($db,"UPDATE members SET username = '$name', password = MD5('$password') WHERE user_id = '$id';");
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