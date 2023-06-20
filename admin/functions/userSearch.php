<?php
require_once "connect.php";

if(isset($_POST['search'])){
    $search = $_POST['search'];
    $select = "SELECT * FROM products WHERE Name LIKE '%$search%' limit 3";
    $query = $conn ->query($select);
    foreach ($query as $pro) {
        $id = $pro['id'];
        $name = $pro['Name'];
        $price = $pro['price'];
        $des = $pro['description'];
        echo "
        <a href='detail.php?id=$id' style='text-decoration:none'>
                <table class='table table-hover table-search'  '>                
                  <tbody class='table-body'>
                  <tr>
                  <td>$name</td>
                  <td>$price</td>
                  <td>$des</td> 
                  </tr> 
                  </tbody>
                </table>
                </a>
            

        ";

        
    }
   

}

