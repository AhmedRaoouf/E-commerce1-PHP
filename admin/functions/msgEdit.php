<?php
require_once "connect.php";

//Change View 
$id = $_POST['id'];
$editMsg  = "UPDATE messages SET view = 1 WHERE id ='$id' ";
$query = $conn->query($editMsg);
if ($query){
    $countMsg = "SELECT count(*) as nums FROM messages WHERE view = 0";
    $n = $conn -> query($countMsg) -> fetch_assoc();
    echo $n['nums'];
}

if (isset($_POST['reset'])){
    $conn->query("UPDATE messages SET view = 0 ");
}

// Count messages

// delete Messages
if (isset($_POST['del'])){
    $id = $_POST['id'];
    $del = "DELETE FROM messages WHERE id = '$id'";
    $conn -> query($del);
}

?>