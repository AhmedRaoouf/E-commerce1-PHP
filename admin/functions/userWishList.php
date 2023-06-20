<?php
session_start();
$proId = $_GET['id'];
$userId = $_SESSION['user_id'];
$q = 1;
require_once "connect.php";

$addPro = "INSERT INTO wishList SET pro_id = '$proId' , user_id = '$userId' ";

if ($conn -> query($addPro)){
    header("location:../../wishList.php");
}

