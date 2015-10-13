<?php

function getDBConnection(){
    $db = mysqli_connect("localhost","root", "inet2005","employees");
    if (!$db)
    {
        die('Could not connect to the Employees Database: ' . mysqli_error($db));
    }

    return $db;
}

function closeDBConnection($db){
    mysqli_close($db);
}