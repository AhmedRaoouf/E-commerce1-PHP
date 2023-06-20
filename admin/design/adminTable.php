<div class="table-responsive"> 
<div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Admin Data</h6>
        </div>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Control</th>
                        </tr> 
                    </thead>                                
                    <tbody>
                    <?php
                    require_once  "functions/connect.php";
                    $select_user = "SELECT * FROM admins";
                    $query = $conn -> query($select_user);
                    $counter = 1;
                    foreach ($query as $admin) {
                    ?>
                        <tr class=<?= $admin['Name'] ?>>
                            <td><?= $counter++?></td>
                            <td><?= $admin['Name'] ?></td>
                            <td><?= $admin['Phone'] ?></td>
                            <td><?= $admin['Email'] ?></td>
                            <td><?= $admin['Address'] ?></td>
                            <td><?=$admin['Gender'] == 0?"Male":"Female"?></td>
                            <td>
                            <?php
                                if ($_SESSION['priv'] == 1 ||  $_SESSION['priv'] == 2){
                                ?>
                                <a class="btn btn-primary" href="?action=edit&id=<?= $admin['id'] ?>">Edit</a>
                                <?php }?>
                                                                <!-- Button trigger modal -->
                                <?php
                                if ($_SESSION['priv'] == 1){
                                ?>
                                <button type="button" class="btn btn-danger deleteModal" data-toggle="modal" data-target="#modal" 
                                    data-id ="<?= $admin['id'] ?>" data-name="<?= $admin['Name'] ?>">
                                Delete
                                </button>
                            </td>
                            <?php }?>
                    </div>
                        </tr> 
                             
                    <?php } ?>                                
    </tbody>
    
    <!-- Modal -->
    <div class="modal fade modalUserDelete" id="modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Ready for delete?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure to delete user: <span class="text-danger font-weight-bold userName"></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-danger deleteUser" href="">Delete</button>
            </div>
            </div>
        </div>
    </div> 
</table>
</div>