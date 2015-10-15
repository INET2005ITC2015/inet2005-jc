<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
    <script src="scripts.js"></script>
  <title>Update Employee</title>

</head>
<body>
<?php

    require_once('dbConn.php');
    $db = getDBConnection();

    $num = $_POST["emp_no"];

    $sql = "SELECT * FROM employees WHERE emp_no =  '$num';";

    $result = mysqli_query($db, $sql);
    if (!$result) {
        die('Could not find Query records in the Employees Database: ' . mysqli_error($db));
    }

    $record = mysqli_fetch_assoc($result);
    $firstName = $record ["first_name"];
    $lastName = $record ["last_name"];
    $bDate = $record ["birth_date"];
    $hDate = $record ["hire_date"];
    $gender = $record ["gender"];

?>
    <form id="updateForm" name="updateForm" method="post" action="update2.php" onsubmit="return checkForm()">

        <p>
            <input type="hidden" name="emp_no" id="emp_no" value="<?php echo $num ?>"/>
        </p>

        <p>
            <label>First Name: <input type="text" name="firstName" id="firstName" value="<?php echo $firstName ?>"/></label><span id="Warning"></span>
        </p>

        <p>
            <label>Last Name:<input type="text" name="lastName" id="lastName" value="<?php echo $lastName ?>" /></label><span id="Warning2"></span>
        </p>

        <p>
            <label>Birth Date:<input type="text" name="birthDate" id="birthDate" value="<?php echo $bDate ?>"/></label><span id="Warning3"></span>
        </p>

        <p>
            <label>Hire Date:<input type="text" name="hireDate" id="hireDate" value="<?php echo $hDate ?>"/></label><span id="Warning4"></span>
        </p>

        <p>
            <Label>Gender:<input type="text" name="gender" id= "gender" value="<?php echo $gender ?>"></Label><span id="Warning5"></span>
        </p>

        <p>
            <input type="submit" name="submit" id="submit" value="Submit"/>
        </p>

    </form>

</body>
</html>