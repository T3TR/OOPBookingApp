<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();

function dbConnect(){

    $mySQLI = new mysqli("localhost", "root", "root", "booking_app", 3306);

    if($mySQLI->connect_error){
        die("Connection failed: " . $mySQLI->connect_error);
    }
    else{
        return $mySQLI;
    }
};

if(isset($_POST["submit"])){


    $id = 0;
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $fullname = $_POST["fullname"];

    $connect = dbConnect();

    $statement = "INSERT INTO users ( id, username, email, password, fullname)" .
         "VALUES ( '$id', '$username','$email','$password','$fullname')";
    
    
    if ($result = $connect->query($statement)){
        return $result;
        $connect->close();
    }
    else {
        die("Connection failed: " . $connect->error);
    }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    
    <div>
        <h1>Register</h1>
        <form method="post">
            <input type="text" name="username" placeholder="Enter you Desired Username">
            <input type="email" name="email" placeholder="Enter Your Email">
            <input type="password" name="password" placeholder="Enter Your Desired Password">
            <input type="text" name="fullname" placeholder="Enter Your Fullname">
            <input type="submit" name="submit">
        </form>
    </div>

    <p>123</p>

</body>
</html>