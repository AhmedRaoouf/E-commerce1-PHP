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
                <?php require_once "includes/topBar.php"?>
                <!-- End of Topbar -->
           
                <!-- Begin Page Content -->
                <div class="container-fluid">
                <div class="card shadow my-4">
        
                    <div class="card-body">

                    <!-- Page Heading -->
                    <h1 class="h3 my-3 text-gray-800 ">New Admin</h1>

                    <form method="post" action="functions/add_admin.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">username</label>
                            <input type="text" name="username" value="" class="form-control" id="exampleInputEmail1" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">password</label>
                            <input type="password" name="password"  class="form-control" id="exampleInputEmail1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone Number</label>
                            <input type="text" name="phone" value="" class="form-control" id="exampleInputEmail1" >
                        </div>
                        
                            <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" value="" class="form-control" id="exampleInputEmail1" required >
                        </div>
                        
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" >
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" >
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Address</label>
                            <input type="text" name="address" value="" class="form-control" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                        <select name="priv" class="form-control">
                            <option value="1">Super Admin</option>
                            <option value="2">Admin</option>
                            <option value="3">Moder</option>
                        </select>
                        </div>
                        <br>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    </div>
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