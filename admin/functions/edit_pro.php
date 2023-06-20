<?php

$id = $_POST['id'];
$username = $_POST['username'];
$price = $_POST['price'];
$sale = $_POST['sale'];
$description = $_POST['description'];
$category = $_POST['category'];

$imgCount = [];
for($i=0; $i < count($_FILES['img']['name']);$i++) {
    $img = $_FILES['img'];
    $imgName = $img['name'][$i];
    $temp = $img['tmp_name'][$i];
    if( $img['error'][$i] == 0){
        $extention = ['jpg','png','jpeg','gif'];
        $ext = pathinfo($imgName,PATHINFO_EXTENSION);
        if (in_array($ext,$extention)) {
            if ($img['size'][$i]<(5*1024*1024)) {
                $newName = md5(uniqid()) .".$ext";
                move_uploaded_file($temp,"..//new_images/$newName");
                array_push($imgCount,$newName);
            }else{
                echo "image is too big";
            }
        }else{
        echo "extention not allowed";
        }
    }else{
        echo "you should upload image";
    }
}
$allImg = implode(',',$imgCount);
require_once "connect.php";
$editPro = "UPDATE products SET Name = '$username',price = '$price',sale = '$sale',description = '$description',img = '$allImg',cat_id = '$category' WHERE id = '$id' ";

if($conn -> query($editPro)){
    header("location:../products.php");
}