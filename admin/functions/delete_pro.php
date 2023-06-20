<?php

$id = $_GET['id'];
require_once "connect.php";
$deleteAdmin = "DELETE FROM products WHERE id = '$id' ";
if ($conn ->query($deleteAdmin)){
    header("location: ../products.php");
}
