<?php
session_start();
require_once "connect.php";

if (isset($_GET['id'])) {
    $proId = $_GET['id'];
    $userId = $_SESSION['user_id'];   
    $selectId = "SELECT quantity from cart where pro_id = '$proId' ";
    $pro = $conn -> query($selectId)->fetch_assoc();
    // increase quantity
    if ($pro['quantity'] > 0){
        $q = $pro['quantity']+1;
        $update_quantity = "UPDATE cart SET quantity = '$q' WHERE pro_id = '$proId' ";
        $conn -> query($update_quantity); 
          
    }
    // new pro in cart 
    else{
        $q = 1;
        $addPro = "INSERT INTO cart SET pro_id = '$proId' , user_id = '$userId' , quantity = '$q' ";
        $conn -> query($addPro);
    }   
}
 // decrease quantity
if (isset($_GET['dec'])) {
    if ($q >1){
        $q = $_GET['quan'];
        $dec_quantity = "UPDATE cart SET quantity = '$q' WHERE pro_id = '$proId' ";
        $conn -> query($dec_quantity);
    }
} 
// delete Product from cart 

if (isset($_POST['del'])) {
    $id = $_POST['id'];
    $delete = "DELETE FROM cart WHERE pro_id = $id";
    $conn ->query($delete);
}
// delete Product from Wish list 

if (isset($_POST['wish'])) {
    $id = $_POST['id'];
    $delete = "DELETE FROM wishlist WHERE pro_id = $id";
    $conn ->query($delete);
}

header("location:../../cart.php");


