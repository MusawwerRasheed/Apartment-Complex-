<?php include("include/header.php") ?>
<div class="page-content">
    <!--breadcrumb-->
    <div class="row mb-2">
        <div class="col-md-12">
            <h3>Plaza Details</h3>
        </div>
        <div>
            <div class="page-content container-fluid">
                <!--  Start Row  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-left">
                                </div>
                                <br>
                                <table class="table table-bordered table-hover shadow  datatable text-center"
                                    style="font-size: 12px" style="font-size: 12px">
                                    <thead class="bg-dark text-white">
                                        <th>S-No</th>
                                        <th>Plaza Name</th>
                                        <th>Address</th>
                                        <th>Action</th>

                                    </thead>
                                    <?php
                                      $query= "SELECT * FROM plaza;";                       
                                        $result1=mysqli_query($connection,$query) or die("not connected");
                                        $i=1;
                                        while ($row = $result1->fetch_assoc()) {
                                          $id = $row['id'];
                                        ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td>
                                            <a href="plaza_edit.php?plaza_id=<?php echo $id ?>"
                                                class="Data_Ajax title btn btn-success btn-sm" title="Edit"><i
                                                    class="bx bx-edit"></i></a>
                                            <button onclick="deleteData(<?php echo $id ?>)"
                                                class=" btn btn-sm shadow btn-danger " title="Delete" name="delete"><i
                                                    class="bx bx-trash"></i>
                                            </button>

                                        </td>
                                    </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row  -->
            </div>
        </div>
        <?php include("include/footer.php") ?>
        <!-- END of add product model -->
        <!-- delete and sweet alert -->
        <script type="text/javascript">
        function deleteData(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "To delete the selected record !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "plaza_detail.php?deleteId=" + id;
                }
            });
        }
        </script>
        <?php
                  if(isset($_GET['deleteId']))
                  {
                  $id = $_GET['deleteId'];
                  $query = "DELETE FROM plaza WHERE plaza_id = '$id'";
                   $run = mysqli_query($connection,$query);
                  if($run)
                    {
                     echo "<!DOCTYPE html>
                        <html>
                          <body>
                            <script>
                            Swal.fire(
                            'Deleted!',
                            'Plaza has been successfully Deleted!',
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
                  }
                  
                  ?>
        <!-- end of delete and sweet alert -->