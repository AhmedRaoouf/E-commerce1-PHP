<div class="table-responsive">
<div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Products Data</h6>
        </div>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Sale</th>
                            <th>description</th>
                            <th>img</th>
                            <th>category</th>
                            <th>Controls</th>
                        </tr>
                    </thead>                                
                    <tbody>
                    <?php
                    require_once  "functions/connect.php";
                    $select_pro = "SELECT * FROM products";
                    $query = $conn -> query($select_pro);
                    $counter = 1;
                    foreach ($query as $pro) {
                    ?>
                        <tr>
                            <td><?= $counter++?></td>
                            <td><?= $pro['Name'] ?></td>
                            <td><?= $pro['price'] ?></td>
                            <td><?= $pro['sale'] ?></td>
                            <td><?= $pro['description'] ?></td>
                            <td> 
                                <?php
                                $allImg = $pro['img'];
                                $allImg = explode(",",$allImg);
                                   foreach ($allImg as $img) {?>
                                     <img src="new_images/<?=$img?>" style="width: 50px;height:50px">
                                <?php }?>
                            </td>
                            <td>
                            <?php
                            $id = $pro['cat_id'];
                            $selet_cat = "SELECT Name from category where id = '$id' " ;
                            $query = $conn->query($selet_cat) -> fetch_assoc();
                            echo $query['Name'];
                            ?>
                            </td>
                            <td>
                            <?php
                                if ($_SESSION['priv'] == 1 ||  $_SESSION['priv'] == 2){
                                ?>
                                <a class="btn btn-primary" href="?action=edit&id=<?= $pro['id'] ?>">Edit</a>
                                <?php }?>
                                                                <!-- Button trigger modal -->
                                <?php
                                if ($_SESSION['priv'] == 1){
                                ?>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#a<?=$pro['id']?>">
                                Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="a<?=$pro['id']?>" tabindex="-1" role="dialog" aria-labelledby="<?= $pro['id'] ?>" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="<?= $admin['id'] ?>">Ready for delete?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure to delete user : <span class="text-danger font-weight-bold"><?= $pro['Name'] ?></span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a class="btn btn-danger" href="functions/delete_pro.php?id=<?= $pro['id'] ?>">Delete</a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </td>
                            <?php } ?>
                    </div>
                        </tr>       
                    <?php } ?>                                
    </tbody>
</table>
</div>