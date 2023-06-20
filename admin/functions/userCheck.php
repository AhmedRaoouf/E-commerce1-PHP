<?php

$email = $_POST['email'];
$password = md5($_POST['password']);

require_once "connect.php";

$selectUser = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
$query = $conn ->query($selectUser) ;
$user = $query -> fetch_assoc();
$id = $user['id'];

session_start();

if ($query -> num_rows>0){
    $_SESSION['user_id'] = $id;
    header("location:../../index.php");
}else{
    $_SESSION['user_error'] = "Wrong Credentials";
    header("location:../../login.php");
}