<?php include("include/header.php") ?>
<div class="page-content">
    <!--breadcrumb-->
    <div class="row">
        <div class="col-md-12">
            <h3>Add Shop</h3>
        </div>
    </div>
    <div class="page-content container-fluid">
        <div class="card">
            <div class="card-body">
                <br>
                <form action="" method="POST">
                    <!--  Start Row  -->
                    <div class="row">
                        <div class="card-body">
                            <!--  Start Row  -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Shop Number</label>
                                        <input type="text" name="shopnumber" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Shop size</label>
                                        <input type="text" name="shopsize" class="form-control"
                                            placeholder="like:-(40x21)">
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                            <!--  Start Row  -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Plaza Name</label>
                                        <select name="plazaname" class="form-control custom-select">

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Floor</label>
                                        <select name="floor" class="form-control custom-select">
                                            <option>--Select Plaza Floors--</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                            <!--/row-->
                            <!--  Start Row  -->
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control custom-select">
                                            <option>--Select Shop Status--</option>


                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-actions text-end">
                                        <div class="card-body ">
                                            <button type="submit" name="saveData" class="btn btn-success"> <i
                                                    class="fa fa-check"></i>
                                                Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </form>
            </div>
        </div>
        <!-- End Row  -->
    </div>
</div>
<?php include("include/footer.php") ?>
<?php
        if (isset($_POST['saveData'])) {
          $shopnum= $_POST['shopnumber'];
          $shopsize= $_POST['shopsize'];
          $floor= $_POST['floor'];
          $status= $_POST['status'];
          $plazaname= $_POST['plazaname'];
      
        $sql = "INSERT INTO shop (shop_number,shop_size,shop_floor_id,shop_status_id,shop_plaza_id) VALUES ('$shopnum','$shopsize','$floor','$status','$plazaname')";
         $run = mysqli_query($connection,$sql);
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