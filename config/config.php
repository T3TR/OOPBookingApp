<?php

function dbConnect(){

    $mySQLI = new mysqli("localhost", "root", "root", "users", 3306);

    if($mySQLI->connect_error){
        die("Connection failed: " . $mySQLI->connect_error);
    }
    else{
        return $mySQLI;
    }
};

?>