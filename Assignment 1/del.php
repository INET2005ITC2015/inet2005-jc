<?php

require 'isLoggedIn.php';
checkIfLoggedIn();

?>

<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Deleted Employee</title>
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

    $idDel = $_POST["emp_no"];

    $resultDel = mysqli_query($db,"DELETE FROM employees WHERE emp_no = $idDel");
    if(!$resultDel)
    {
        die('Could not Delete records from the Employees Database: ' . mysqli_error($db));
    }else{
        echo "<p>Successful! You have deleted"." ".mysqli_affected_rows($db)." ". "row(s).</p>";
    }

    closeDBConnection($db);

?>
<a href="index.php">Back</a>

</body>
</html>