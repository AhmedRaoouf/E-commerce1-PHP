<?php

require_once "functions/connect.php";
$id = $_GET['id'];
$selectUser = "SELECT * FROM products WHERE id = $id";
$query = $conn -> query($selectUser) -> fetch_assoc();
?>
        <h1 class="h3 my-3 text-gray-800 ">Edit Product</h1>

        <form method="post" action="functions/edit_pro.php" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" value="<?=$id?>" name="id">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="username" value="<?= $query['Name'] ?>" class="form-control" id="exampleInputEmail1"  autofocus>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" name="price" value="<?= $query['price'] ?>" class="form-control" id="exampleInputEmail1" >
            </div>
            
                <div class="form-group">
                <label for="exampleInputEmail1">Sale</label>
                <input type="text" name="sale" value="<?= $query['sale'] ?>" class="form-control" id="exampleInputEmail1"  >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"> Description</label>
                <input type="text" name="description" value="<?= $query['description'] ?>" class="form-control" id="exampleInputEmail1" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"> img</label>
                <input type="file" name="img[]" value="<?= $query['img'] ?>" id="exampleInputEmail1" class="form-control" multiple>

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"> Category</label>
                <select name="category" class="form-control">
                    <?php 
                    $select_cat = "SELECT * FROM category ";
                    $query = $conn -> query($select_cat);
                    foreach ($query as $cat) {   
                    ?>
                    <option value="<?= $cat['id'] ?>"><?= $cat['Name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
    <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.php">Logout</a>
    </div>
</div>
</div>
</div>

<!-- Footer -->
