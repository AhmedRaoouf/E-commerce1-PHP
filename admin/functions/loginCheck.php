<?php
$email    = $_POST['email'];
$password = md5($_POST['password']);

require_once "connect.php";

$login = "SELECT * FROM admins WHERE Email = '$email' AND Password = '$password' ";
$query = $conn -> query($login);
$user = $query -> fetch_assoc();
$id = $user['id'];
$priv = $user['priv_id'];
session_start();
if ($query -> num_rows>0){        
    $_SESSION['login_id'] = $id;
    $_SESSION['priv'] = $priv;
    header("location:../index.php");
}else{
    $_SESSION['login_error'] = "Wrong Credentials";
    header("location:../login.php");
} 