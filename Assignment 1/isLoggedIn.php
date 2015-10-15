<?php

function checkIfLoggedIn(){
    session_start();
    If(empty($_SESSION['loginUser']) || empty($_SESSION['loginPassword'])){
        header("location:login.html");
    }
}
?>
