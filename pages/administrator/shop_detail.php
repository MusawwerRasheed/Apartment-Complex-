<?php include("includes/header.php") ?>
<?php include("includes/connection.php") ?>
<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb border-bottom">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-xs-12 justify-content-start d-flex align-items-center">
            <h5 class="font-medium text-uppercase mb-0">Shops Detail</h5>
        </div>
        <div class="col-lg-9 col-md-8 col-xs-12 d-flex justify-content-start justify-content-md-end align-self-center">
            <nav aria-label="breadcrumb" class="mt-2">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="../../dashboard.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="shop_detail.php">Shop Detail</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- End Bread crumb and right sidebar toggle -->
<!-- Container fluid  -->
<div class="page-content container-fluid">
    <!--  Start Row  -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="">
                    <div class="card-body">
                        <!-- ==========================================table view================================= -->
                        <table class="table table-bordered table-hover bg-gray shadow datatable text-center "
                            style="font-size: 12px">
                            <thead class="">
                                <th>S-No</th>
                                <th>Shop Number</th>
                                <th>Shop Size</th>
                                <th>Plaza Name</th>
                                <th>Floor</th>
                                <th>Status</th>
                                <th>Action</th>

                            </thead>
                            <?php
                $query= "SELECT * FROM shop;";                       
                  $result1=mysqli_query($conn,$query) or die("not connected");
                  $i=1;
                   while ($row = $result1->fetch_assoc()) {
                  ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['shop_number'];?></td>
                                <td><?php echo $row['shop_size']; ?></td>
                                <td><?php echo $row['shop_plaza_id']; ?></td>
                                <td><?php echo $row['shop_floor_id']; ?></td>
                                <td><?php echo $row['shop_status_id']; ?></td>

                                <td>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#deleteModal<?php echo $row['shop_id']; ?>"><i
                                            class="fas fa-minus-circle"></i></button>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal<?php echo $row['shop_id']; ?>"><i
                                            class="far fa-edit"></i></button>

                                    <!-- <a class=""  data-toggle="modal" data-target=""><i class=""></i></a>  -->

                                </td>
                            </tr>
                            <?php } ?>
                        </table>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- End Row  -->
</div>


<!-- Modal -->
<?php 
        $select1 ="SELECT * from shop";
        $result1= mysqli_query($conn,$select1) or die("!...");      
        $i=1;
        while ($row1= $result1->fetch_assoc()) {
      ?>

<!-- ===========================================Delete model ====================== -->
<div class="modal fade" id="deleteModal<?php echo $row1['shop_id']; ?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Notification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="" method="POST">
                    <label>Are You Want To Delete This Record...!</label>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <a class="btn btn-primary"
                            href="delete.php?shopdelete=<?php echo $row1['shop_id']; ?>">Yes...!</a>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ===========================================Edit model ====================== -->
<div class="modal fade" id="exampleModal<?php echo $row1['shop_id']; ?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Shop Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row1['shop_id']; ?>">
                    <label>Shop Number:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="s_number" class="" value="<?php echo $row1['shop_number']; ?>"><br>
                    <label>Shop Size:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="shopsize" value="<?php echo $row1['shop_size']; ?>"><br>
                    <label>Floor Number:</label>
                    <input type="text" name="floor" value="<?php echo $row1['shop_floor_id']; ?>"><br>
                    <div class="modal-footer">
                        <label>Floor Number:</label>
                        <input type="text" name="shopstatus" value="<?php echo $row1['shop_status_id']; ?>"><br>
                        <div class="modal-footer">
                            <label>Floor Number:</label>
                            <input type="text" name="shopplaza" value="<?php echo $row1['shop_plaza_id']; ?>"><br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="update" class="btn btn-primary">Update</button>
                            </div>
                </form>
                <?php 

    if (isset ($_POST['update'])) {
        $id = $_POST['id'];
        $shopnumber = $_POST['s_number']; 
        $shopsize = $_POST['shopsize']; 
        $shopfloor = $_POST['floor']; 
        $shopstatus = $_POST['shopstatus']; 
        $shopplaza = $_POST['shopplaza']; 
       $sql2 = "UPDATE shop set shop_number='{ $shopnumber}',shop_size='{$shopsize}',shop_floor_id='{$shopfloor}',shop_status_id='{$shopstatus}',shop_plaza_id='{$shopplaza}' where shop_id ='{$id}'";

     if(mysqli_query($conn, $sql2) or die("connection error") ){

       echo "<script>window.location='shop_detail.php'</script>";
     }                 
        }
    ?>

            </div>
        </div>
    </div>
</div><?php } ?>
<!-- End Container fluid  -->
<?php include("includes/footer.php") ?>