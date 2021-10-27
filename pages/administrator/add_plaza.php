<?php include("include/header.php") ?>
<div class="page-content">
    <!--breadcrumb-->
    <div class="row">
        <div class="col-md-12">
            <h3>Add Plaza</h3>
        </div>
    </div>
    <div class="page-content container-fluid">
        <!--  Start Row  -->

        <div class="card">
            <div class="card-body">
                <!-- <h3>Add Product</h3> -->
                <br>
                <form method="POST">
                    <!--  Start Row  -->
                    <div class="row">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Plaza name</label>
                                        <input type="text" name="plazaname" class="form-control sss"
                                            placeholder=" Add Plaza Name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Plaza Address</label>
                                        <input type="text" name="plazaadd" class="form-control"
                                            placeholder=" Add Plaza Address">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row  -->
                    <div class="row">
                        <div class="form-actions">
                            <div class="card-body">
                                <button type="submit" name="submit" class="btn btn-success"> <i class="fa fa-check"></i>
                                    Save
                                </button>
                                <button type="button" class="btn btn-dark">Cancel</button>
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
  if (isset($_POST['submit'])) {

    $plzaname= $_POST['plazaname'];
    $plzaadd= $_POST['plazaadd'];

   $sql = "INSERT INTO plaza (plaza_name, plaza_address) VALUES ('$plzaname', '$plzaadd')";
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