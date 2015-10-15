
<?php

require 'isLoggedIn.php';
checkIfLoggedIn();

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Add Actor Form</title>
    <script src="scripts.js"></script>
</head>
<body>

<form id="addForm" name="addForm" method="post" action="create2.php" onSubmit="return checkForm()">
    <p>
        <label>First Name: <input type="text" name="firstName" id="firstName" /></label><span id="Warning"></span>
    </p>

    <p>
        <label>Last Name:<input type="text" name="lastName" id="lastName" /></label><span id="Warning2"></span>
    </p>

    <p>
        <label>Birth Date:<input type="text" name="birthDate" id="birthDate" /></label><span id="Warning3"></span>
    </p>

    <p>
        <label>Hire Date:<input type="text" name="hireDate" id="hireDate" /></label><span id="Warning4"></span>
    </p>

    <p>
        <Label>Gender:<input type="text" name="gender" id= "gender"></Label><span id="Warning5"></span>
    </p>

    <p>
        <input type="submit" name="submit" id="submit" value="Submit"/>
    </p>
</form>

<form name="LogOutForm" action="logOut.php" method="post">
    <input type="submit" name="logOutButton" value="Log Out">
</form>


</body>

</html>