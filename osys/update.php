<?php

require 'isLoggedIn.php';
checkIfLoggedIn();

?>

<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Update User</title>

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

    $name = $_SESSION["loginUser"];

    $sql = "SELECT * FROM members WHERE username = '$name';";

    $result = mysqli_query($db, $sql);
    if (!$result) {
        die('Could not find Query records in the osys Database: ' . mysqli_error($db));
    }

    $record = mysqli_fetch_assoc($result);
    $name = $record ["username"];
    $password = $record ["password"];
    $id = $record ["user_id"];

?>
    <form id="updateForm" name="updateForm" method="post" action="update2.php" onsubmit="return checkForm()">

        <p>
            <input type="hidden" name="id" id="id" value="<?php echo $id ?>"/>
        </p>

        <p>
            <label>Username: <input type="text" name="name" id="name" value="<?php echo $name ?>"/></label><span id="Warning"></span>
        </p>

        <p>
            <label>Password:<input type="password" name="password" id="password" value="" /></label><span id="Warning2"></span>
        </p>

        <p>
            <input type="submit" name="submit" id="submit" value="Submit"/>
        </p>

    </form>

</body>
</html>