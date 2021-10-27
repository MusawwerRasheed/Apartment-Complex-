<?php include("include/header.php");

    $plaza_id = $_GET['plaza_id'];
?>
<div class="page-content">
    <!--breadcrumb-->
    <div class="row">
        <div class="col-md-12">
            <h3> Plaza Edit</h3>
        </div>
    </div>
    <div class="page-content container-fluid">
        <!--  Start Row  -->
        <?php 
            $select = "SELECT * FROM plaza WHERE id = '$plaza_id'";
            $result = mysqli_query($connection,$select);
            $row = mysqli_fetch_assoc($result);
            $id = $row['id'];
            $name = $row['name'];
            $address = $row['address'];
        ?>
        <div class="card">
            <div class="card-body">
                <!-- <h3>Add Product</h3> -->
                <br>
                <form method="POST">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Plaza Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Product Name" name="name"
                                        value="<?php echo $name?>">
                                </div>
                            </div>
                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" placeholder="Address" name="address"
                                        value="<?php echo $address?>">
                                </div>
                            </div>
                        </div>
                        <center><button type="submit" name="saveData" class="btn btn-primary float-end">Update</button>
                        </center>

                </form>


            </div>
        </div>
        <!-- End Row  -->
    </div>
    <?php include("include/footer.php") ?>
    <?php
          if (isset($_POST['saveData'])) {
          $name =  $_POST['name'];
          $address =  $_POST['address'];
         
          $update = "UPDATE plaza SET name ='$name', address='$address' WHERE id = '$plaza_id'";
          $run =mysqli_query($connection,$update);
           if($run)
                    {
                    echo " <!DOCTYPE html>
                      <html>
                        <body>
                          <script>
                          Swal.fire(
                          'Updated!',
                          'Plaza has been successfully updated!',
                          'success'
                          ).then((result) => {
                          if (result.isConfirmed) {
                          window.location.href = 'plaza_detail.php';
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
                                'Plaza not update, Some error occure',
                                'error'
                                ).then((result) => {
                                if (result.isConfirmed) {
                                window.location.href = 'plaza_detail.php';
                                }
                                });
                                </script>
                              </body>
                              </html>";
                            }
          }
          ?>