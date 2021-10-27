<?php include("include/header.php") ?>
<div class="page-content">
    <!--breadcrumb-->
    <div class="row">
        <div class="col-md-12">
            <h3>Add Client</h3>
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Client Full Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Father Name</label>
                                    <input type="text" name="fname" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <!--  Start Row  -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Client CNIC</label>
                                    <input type="text" name="cnic" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Client Contact</label>
                                    <input type="text" name="contact" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <!--  Start Row  -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Client Address</label>
                                    <input type="text" name="address" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Plaza Name</label>
                                    <select name="plazaname" class="form-control custom-select">
                                        <option>Select Plaza</option>
                                        <?php 
                                            $select="SELECT * from plaza ";
                                            $result=mysqli_query($connection,$select);                   
                                            while ($row = $result->fetch_assoc()) {
                                            ?>
                                        <option value="<?php echo $row["id"]; ?>">
                                            <?php  echo $row["name"];?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <!--  Start Row  -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Floor</label>
                                    <input type="text" name="floor" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Appatment Number</label>
                                    <input type="text" name="apartment" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <!--  Start Row  -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Shop Number</label>
                                    <input type="text" name="shop" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Office Number</label>
                                    <input type="text" name="office" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
            </div>
            <!-- End Row  -->
            <div class="card-body">
                <button type="submit" name="saveData" class="btn btn-success">
                    Save</button>

            </div>
        </div>
        </form>
    </div>
</div>
<!-- End Row  -->
</div>
<?php include("include/footer.php"); 

                if (isset($_POST['saveData'])) {
                $name =  $_POST['name'];
                $fname = $_POST['fname'];
                $cnic = $_POST['cnic'];
                $contact = $_POST['contact'];
                $address = $_POST['address'];
                $plazaname = $_POST['plazaname'];
                $floor = $_POST['floor'];
                $apartment = $_POST['apartment'];
                $shop = $_POST['shop'];
                $office = $_POST['office'];                
                echo $insert = "INSERT INTO client (`name`, `fname`, `cnic`, `contact`, `address`, `plaza_id`, `floor_id`, `apartment_id`, `shop_id`, `office_id`) VALUES ('$name','$fname','$cnic','$contact','$address','$plazaname','$floor','$apartment','$shop','$office')";
                exit();
                $run = mysqli_query($connection,$insert);
                
              
                if($run)
                            {
                            echo "<!DOCTYPE html>
                            <html>
                                <body>
                                <script>
                                Swal.fire(
                                'Added!',
                                'Client has been successfully added!',
                                'success'
                                ).then((result) => {
                                if (result.isConfirmed) {
                                window.location.href = 'add_client.php';
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
                                        'Client not add, Some error occure',
                                        'error'
                                        ).then((result) => {
                                        if (result.isConfirmed) {
                                        window.location.href = 'add_client.php';
                                        }
                                        });
                                        </script>
                                    </body>
                                    </html>";
                                    }
                   }
                ?>