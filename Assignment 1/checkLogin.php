<?php
session_start();

ob_start();

require_once('dbConn.php');
$db = getDBConnection();

if(!$db){
    die("could not connect to Employees:" .mysqli_error($db));
}
$loginUser = $_POST["loginUser"];
$loginPassword = $_POST["loginPassword"];


$loginUser = stripslashes($loginUser);
$loginPassword = stripcslashes($loginPassword);

$loginUser = mysqli_real_escape_string($db,$loginUser);
$loginPassword = mysqli_real_escape_string($db,$loginPassword);

$hashPwd = hash("sha512",$loginPassword);

$sql = "Select * FROM WebUsers WHERE user_name = '$loginUser' and user_password = '$hashPwd'";

$result = mysqli_query($db, $sql);

$count = mysqli_num_rows($result);

mysqli_close($db);

if($count == 1){
    $_SESSION['loginUser'] = $loginUser;
    header("location:index.php");
}else{
    echo "Wrong Password or User Name";
    echo "<br />";
    echo "<a href ='login.html'> Try Again</a>";
}
ob_end_flush();
?>

