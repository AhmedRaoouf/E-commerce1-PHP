<?php

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$gender = $_POST['gender'];
$address = $_POST['address'];

require_once "connect.php";

$addUser = "INSERT INTO users SET Name='$name',age='$age',email = '$email' ,
                password = '$password' ,gender = '$gender' ,address = '$address' " ;

if ($conn -> query($addUser)){
    header("location:../../login.php");
} 