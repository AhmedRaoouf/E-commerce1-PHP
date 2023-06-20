
<!-- Header -->
<?php 
require_once "includes/header.php";
?>
<!-- End Header -->
<!-- Sidebar -->
<?php 
require_once "includes/sideBar.php";
?>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<!-- Topbar -->
<?php
    require_once "includes/topBar.php"
?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">       
        <div class="card-body">
        <div class="table-responsive"> 
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Messages</h6>
        </div>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>View</th>
                            <th>Control</th>
                        </tr> 
                    </thead>                                
                    <tbody>
                    <?php
                    require_once  "functions/connect.php";
                    $select_user = "SELECT * FROM messages";
                    $query = $conn -> query($select_user);
                    $counter = 1;
                    foreach ($query as $msg) {
                    ?>
                        <tr class=msg-<?= $msg['id'] ?>>
                            <td><?= $counter++?></td>
                            <td><?= $msg['Name'] ?></td>
                            <td><?= $msg['email'] ?></td>
                            <td><?= $msg['phone'] ?></td>
                            <td class="view"><?= $msg['view'] == '1' ? 'Read': 'Unread'?></td>   
                            <td><button type="button" class="btn btn-primary viewMsg" data-toggle="modal" data-target="#modal" 
                                    data-id ="<?= $msg['id'] ?>" data-name = "<?= $msg['Name'] ?>" data-message="<?= $msg['messages'] ?>">
                                View Messages
                                </button>
                            </td>                        
                    </div>
                        </tr> 
                             
                    <?php } ?>                                
    </tbody>
    
    <!-- Modal -->
    <div class="modal fade modalUserDelete" id="modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id=""></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="text-danger font-weight-bold msgName"></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-danger deleteMsg" href="">Delete</button>
            </div>
            </div>
        </div>
    </div>
</table>
</div>
        </div>
    </div>
    <button type="button" class="btn btn-primary resetMsg" >reset</button>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
<div class="container my-auto">
    <div class="copyright text-center my-auto">
        <span>Copyright &copy; RaOouf Website 2023</span>
    </div>
</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

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
<?php 
require_once "includes/footer.php";
?>
<!-- End Footer -->

<!-- change view Message -->
<script src="js/msg.js"></script>