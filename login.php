<?php
session_start();

$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];

$user = [
    'email' => $user_email,
    'password' => $user_password
];

// user is authenticated.
$_SESSION['auth_user'] = $user;
$_SESSION['authenticated'] = true;

if(isset($_SESSION['authenticated'])){
    header('location: profile.php');    
}

