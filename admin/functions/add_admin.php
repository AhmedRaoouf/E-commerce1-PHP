<?php

$username = $_POST['username'];
$password = md5($_POST['password']);
$phone    = $_POST['phone'];
$email    = $_POST['email'];
$gender   = $_POST['gender'];
$address  = $_POST['address'];
$priv = $_POST['priv'];
// insert new admin in DB
include_once "connect.php";
$insertAdmin = "INSERT INTO admins (Name,Password,Phone,Email,Gender,Address,priv_id) VALUES('$username','$password','$phone','$email','$gender','$address','$priv')";

$query = $conn -> query($insertAdmin);
if($query){
    header("location:../tables.php");
}else{
    echo $conn -> error;
}