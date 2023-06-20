<?php
$id = $_GET['id'];
$name = $_GET['name'];

if (isset($_GET['del'])){
    require_once "connect.php";
    $deleteAdmin = "DELETE FROM admins WHERE id = '$id' ";
    $conn ->query($deleteAdmin);
}

