<?php
    session_start();

    if(!isset($_SESSION['authenticated'])){
        header('location: login.php');    
    }
     
    $auth_user = $_SESSION['auth_user'];

    echo 'Welcome to your profile '.'<br>'. $auth_user['email'] .'<br>'. $auth_user['password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <br>
    <button> <a href="logout.php">Logout</a> </button>
</body>
</html>