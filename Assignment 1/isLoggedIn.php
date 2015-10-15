<?php

function checkIfLoggedIn(){
    session_start();
    If(empty($_SESSION['loginUser'])){
        header("location:login.html");
    }
}
?>
