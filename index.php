<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();

//echo $_POST["username"], $_POST["email"], $_POST["password"], $_POST["fullname"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking App</title>

    <link src="./CSS/index.css">

</head>
<body>

    <div class="login">

        <div class="loginForm">
            <h1>Login</h1>
            <form action="./broswe.php" method="post">
                <input type="email" name="email" placeholder="Enter Your Email">
                <input type="password" name="password" placeholder="Enter Your Password">
                <button type="submit">Login</button>
            </form>
        </div>
        
        <div>
            <a href="register.php">Don't Have An Account?</a>
        </div>

    </div>
    
</body>
</html>