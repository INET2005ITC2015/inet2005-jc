<?php

require 'isLoggedIn.php';
checkIfLoggedIn();

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Add User Form</title>
</head>
<body>

<div class = "log">
    <p><?php echo $_SESSION["loginUser"] ?> ,Logged In</p>
    <form name="LogOutForm" action="logOut.php" id = "logBtn" method="post">
        <input type="submit" name="logOutButton" value="Log Out">
    </form>
</div>

<h1>Create New User</h1>

<form id="addForm" name="addForm" method="post" action="create2.php" onSubmit="return checkForm()">
    <p>
        <label>Username: <input type="text" name="username" id="username" /></label><span id="Warning"></span>
    </p>

    <p>
        <label>Password:<input type="password" name="password" id="password" /></label><span id="Warning2"></span>
    </p>

    <p>
        <input type="submit" name="submit" id="submit" value="Submit"/>
    </p>
</form>

</body>

</html>