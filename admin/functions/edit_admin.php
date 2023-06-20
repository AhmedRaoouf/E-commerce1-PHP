<?php
$id = $_POST['id'];
$name = $_POST['username'];
$password = $_POST['password'];
$phone    = $_POST['phone'];
$email    = $_POST['email'];
$gender   = $_POST['gender'];
$address  = $_POST['address'];

require_once "connect.php";

if(!empty($password)){
    $pass = md5($password);
    $updatePass = "UPDATE admins SET Password = '$pass' WHERE id = '$id'";
    $conn -> query($updatePass);
}
$updateUser = "UPDATE admins SET Name = '$name',Phone = '$phone', Email = '$email' ,Gender = '$gender', Address = '$address' WHERE id = '$id'";

$query = $conn -> query($updateUser);
if ($query){
    header("location:../tables.php");
} 