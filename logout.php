<?php
session_start();
if(isset($_SESSION['user']['username'])){
    echo "<script>alert('You have been logged out ".$_SESSION['user']['username']. "')</script>";
    session_unset();
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged Out</title>
    <style>
        body{
            padding:300px 600px;
            background-image: url(./img/loginimage2.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            
            font-size:24px;
            font-weight: 200%;
        }
        </style>
</head>

<body>
    
    <p> Do you want to Login/Signup?</p>
    <a style="background-color:beige;padding:7px;border-radius:20px; margin-left:120px;text-decoration: none; color:maroon; font weight: 500%;" href="./login.html">Yes!</a>
</body>
</html>
