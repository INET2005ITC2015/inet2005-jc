<?php

function getDBConnection(){
    $db = mysqli_connect("localhost","root", "inet2005","sakila");
    if (!$db)
    {
        die('Could not connect to the Sakila Database: ' . mysqli_error($db));
    }

    return $db;
}

function closeDBConnection($db){
    mysqli_close($db);
}