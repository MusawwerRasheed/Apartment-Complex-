<?php include("includes/header.php") ?>
<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb border-bottom">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-xs-12 justify-content-start d-flex align-items-center">
            <h5 class="font-medium text-uppercase mb-0">Floors Detail</h5>
        </div>
        <div class="col-lg-9 col-md-8 col-xs-12 d-flex justify-content-start justify-content-md-end align-self-center">
            <nav aria-label="breadcrumb" class="mt-2">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="../../dashboard.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="floor_detail.php">Floor Detail</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- End Bread crumb and right sidebar toggle -->
<!-- Container fluid  -->
<div class="page-content container-fluid p-3 mb-2 bg-secondary text-white">
    <!--  Start Row  -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="">
                    <div class="card-body">
                        <!-- ==========================================table view================================= -->
                        <table class="table table-bordered table-hover bg-gray shadow datatable text-center "
                            style="font-size: 12px">
                            <thead class="p-3 mb-2 bg-secondary text-white">
                                <th>S-No</th>
                                <th>Plaza Name</th>
                                <th>Total Floors</th>
                                <th>Floor Number</th>
                                <th>Apparments</th>
                                <th>Shops</th>
                                <th>Offices</th>
                                <th>Action</th>

                            </thead>
                            <?php
                // $query="SELECT plaza.plaza_name,floor.floor_id,floor.floor_number,floor.total_floor,floor.floor_num_of_apps,floor.floor_num_of_shops,floor.floor_num_of_offices     FROM plaza INNER JOIN floor ON plaza.plaza_id = floor.floor_plaza_id";
                $query="SELECT p.plaza_name,f.floor_id,f.floor_number,f.total_floor,f.floor_num_of_apps,f.floor_num_of_shops,f.floor_num_of_offices FROM floor AS f LEFT JOIN plaza AS p ON p.plaza_id = f.floor_plaza_id";
                echo $query; 
                $result1=mysqli_query($conn,$query) or die("not connected");
                  $i=1;
                   while ($row = $result1->fetch_assoc()) {
                  ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['plaza_name'];?></td>
                                <td><?php echo $row['total_floor'];?></td>
                                <td><?php echo $row['floor_number']; ?></td>
                                <td><?php echo $row['floor_num_of_apps']; ?></td>
                                <td><?php echo $row['floor_num_of_shops']; ?></td>
                                <td><?php echo $row['floor_num_of_offices']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#deleteModal<?php echo $row['floor_id']; ?>"><i
                                            class="fas fa-minus-circle"></i></button>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal<?php echo $row['floor_id']; ?>"><i
                                            class="far fa-edit"></i></button>
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
<?php 
        //  $select1 ="SELECT f.floor_id,f.floor_number,f.total_floor,f.floor_num_of_apps,f.floor_num_of_shops,f.floor_num_of_offices FROM floor AS f LEFT JOIN plaza AS p ON p.plaza_id = f.floor_plaza_id";
         $select1="SELECT p.plaza_id,p.plaza_name,f.floor_id,f.floor_number,f.total_floor,f.floor_num_of_apps,f.floor_num_of_shops,f.floor_num_of_offices FROM floor AS f LEFT JOIN plaza AS p ON p.plaza_id = f.floor_plaza_id ";             
        $result1= mysqli_query($conn,$select1) or die("!...");      
        $i=1;
        while ($row1= $result1->fetch_assoc()) {
      ?>
<!-- ===========================================Delete model ====================== -->
<div class="modal fade" id="deleteModal<?php echo $row1['floor_id']; ?>" tabindex="-1"
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
                            href="delete.php?floordelete=<?php echo $row1['floor_id']; ?>">Yes...!</a>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ===========================================Edit model ====================== -->
<div class="modal fade" id="exampleModal<?php echo $row1['floor_id']; ?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Floor Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-3 mb-2 bg-secondary text-white">
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row1['floor_id']; ?>">
                    <label>Plaza Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <!-- <input type="text" class="form-control" name="p_name" class="" value="<?php //echo $row1['plaza_name']?>"><?php //echo $row1['plaza_name']?><br> -->
                    <select name="p_name" value="<?php echo $row1['plaza_name']?>" class="form-control custom-select">

                        <?php 
              $select=" SELECT * from plaza ";
              $result=mysqli_query($conn,$select);                   
                   while ($row = $result->fetch_assoc()) {
                ?>
                        <option value="<?php echo $row["plaza_id"]; ?>"><?php  echo $row["plaza_name"];?></option>
                        <?php } ?>


                    </select>
                    <label>Total floor:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" class="form-control" name="t_floor" class=""
                        value="<?php echo $row1['total_floor']; ?>"><br>
                    <label>Floors Number:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" class="form-control" name="floornumber"
                        value="<?php echo $row1['floor_number']; ?>"><br>
                    <label>Number Of Appartments:</label>
                    <input type="text" class="form-control" name="apps"
                        value="<?php echo $row1['floor_num_of_apps']; ?>"><br>
                    <label>Number Of shops:</label>
                    <input type="text" class="form-control" name="shops"
                        value="<?php echo $row1['floor_num_of_shops']; ?>"><br>
                    <label>Number Of Offices:</label>
                    <input type="text" class="form-control" name="offices"
                        value="<?php echo $row1['floor_num_of_offices']; ?>"><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                    </div>
                </form>
                <?php 

          if (isset ($_POST['update'])) {
              $id = $_POST['id'];
              $plazaname = $_POST['p_name']; 
              $totalfloor = $_POST['t_floor']; 
              $floorn = $_POST['floornumber']; 
              $appss = $_POST['apps']; 
              $shopss = $_POST['shops']; 
              $offic = $_POST['offices']; 
             $sql2 = "UPDATE floor set floor_plaza_id='{$plazaname}',floor_number='{$floorn}',total_floor='{$totalfloor}',floor_num_of_apps='{$appss}',floor_num_of_shops='{$shopss}',floor_num_of_offices='{$offic}' where floor_id ='{$id}'";

           if(mysqli_query($conn, $sql2) or die("connection error") ){
             echo "<script>window.location='floor_detail.php'</script>";
           }                 
              }
          ?>
            </div>
        </div>
    </div>

</div><?php } ?>
<!-- End Container fluid  -->
<?php include("includes/footer.php") ?>