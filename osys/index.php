
<!-- login validation -->
<?php
require 'isLoggedIn.php';
checkIfLoggedIn();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>User</title>
</head>
<body>

<div class = "log">
<p><?php echo $_SESSION["loginUser"] ?> ,Logged In</p>
<form name="LogOutForm" action="logOut.php" id = "logBtn" method="post">
    <input type="submit" name="logOutButton" value="Log Out">
</form>
</div>


<!-- Create User Button -->
<form action="create.php"  method="post" name="Create" id="create">
    <p>
        <input name="create" type="submit" value="New User">
    </p>
</form>

<!-- Update User Button -->
<form action="update.php"  method="post" name="UpdateForm">
    <input id = "update" name="update" type="submit" value="Edit Me">
    <input type="hidden" name="username" value="<?php echo $_SESSION["loginUser"]?>">
</form>

<br>

<!--Delete User Button -->
<form action="del.php"  method="post" name="DelForm">
    <input id = "del" name="del" type="submit" value="Delete Me" onclick="if(!confirm('Delete this record?')){return false;}">
    <input type="hidden" name="username" value="<?php echo $_SESSION["loginUser"]?>">
</form>



</body>
</html>