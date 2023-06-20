<?php

require_once "functions/connect.php";
$id = $_GET['id'];
$selectUser = "SELECT * FROM admins WHERE id = $id";
$query = $conn -> query($selectUser) -> fetch_assoc();
?>
        <h1 class="h3 my-3 text-gray-800 ">Edit Admin</h1>

        <form method="post" action="functions/edit_admin.php">
            <div class="form-group">
                <input type="hidden" value="<?=$id?>" name="id">
                <label for="exampleInputEmail1">username</label>
                <input type="text" name="username" value="<?= $query['Name'] ?>" class="form-control" id="exampleInputEmail1"  autofocus>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">password</label>
                <input type="password" name="password"  class="form-control" id="exampleInputEmail1" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone Number</label>
                <input type="text" name="phone" value="<?= $query['Phone'] ?>" class="form-control" id="exampleInputEmail1" >
            </div>
            
                <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" value="<?= $query['Email'] ?>" class="form-control" id="exampleInputEmail1"  >
            </div>
            
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0"<?= $query['Gender']==0?"checked":"" ?> >
            <label class="form-check-label" for="inlineRadio1">Male </label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" <?= $query['Gender']==1?"checked":"" ?>>
            <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"> Address</label>
                <input type="text" name="address" value="<?= $query['Address'] ?>" class="form-control" id="exampleInputEmail1" >
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
