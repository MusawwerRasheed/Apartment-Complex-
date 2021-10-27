<?php include("include/header.php") ?>
<div class="page-content">
    <!--breadcrumb-->
    <div class="row">
        <div class="col-md-12">
            <h3>Add Floor</h3>
        </div>
    </div>
    <div class="page-content container-fluid">
        <!--  Start Row  -->
        <div class="card">
            <div class="card-body">
                <!-- <h3>Add Product</h3> -->
                <br>
                <form method="POST">
                    <div class="modal-body">
                        <!--  Start Row  -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Plaza Name</label>
                                    <select name="plazaname" class="form-control custom-select">
                                        <option>--Select Plaza--</option>
                                        <?php 
                                            $select=" SELECT * from plaza ";
                                            $result=mysqli_query($connection,$select);                   
                                            while ($row = $result->fetch_assoc()) {
                                            ?>
                                        <option value="<?php echo $row["id"]; ?>">
                                            <?php  echo $row["name"];?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Total Floors</label>
                                    <input type="text" name="tflooors" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <!--  Start Row  -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Floor Number</label>
                                    <input type="text" name="floor" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Number of Appatments </label>
                                    <input type="text" name="apartments" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <!--  Start Row  -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Number of Shops </label>
                                    <input type="text" name="shops" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Number of Office </label>
                                    <input type="text" name="offices" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
            </div>
            <!-- End Row  -->
            <div class="row">
                <div class="form-actions text-end">
                    <div class="card-body ">
                        <button type="submit" name="saveData" class="btn btn-success"> <i class="fa fa-check"></i>
                            Save</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
<!-- End Row  -->
</div>
<?php include("include/footer.php") ?>
<?php
       if (isset($_POST['saveData'])) {
        $plazaname =  $_POST['plazaname'];
        $tfloors = $_POST['tfloors'];
        $floor = $_POST['floor'];
        $apartments = $_POST['apartments'];
        $shops = $_POST['shops'];
        $offices = $_POST['offices'];
                     
        $insert = "INSERT INTO floor(total_floor,floor_number,floor_num_of_apps,floor_num_of_shops,floor_num_of_offices,,plaza_id) VALUES ('$plazaname','$tfloors','$floor','$apartments','$shops','$offices')";

        $run = mysqli_query( $connection, $insert );
        if($run)
          {
          echo " <!DOCTYPE html>
              <html>
              <body>
                  <script>
                  Swal.fire(
                  'Added!',
                  'Plaza has been successfully added!',
                  'success'
                  ).then((result) => {
                  if (result.isConfirmed) {
                  window.location.href = 'add_plaza.php';
                  }
                  });
                  </script>
              </body>
              </html>";
          }
              else
                  {
                      echo "<!DOCTYPE html>
                      <html>
                      <body>
                      <script>
                      Swal.fire(
                      'Error !',
                      'Plaza not add, Some error occure',
                      'error'
                      ).then((result) => {
                      if (result.isConfirmed) {
                      window.location.href = 'add_plaza.php';
                      }
                      });
                      </script>
                      </body>
                      </html>";
                  }
      }
?>