<?php include("include/header.php") ?>
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb border-bottom">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-xs-12 justify-content-start d-flex align-items-center">
            <h5 class="font-medium text-uppercase mb-0">Fill Agreement Form</h5>
        </div>
        <div class="col-lg-9 col-md-8 col-xs-12 d-flex justify-content-start justify-content-md-end align-self-center">
            <nav aria-label="breadcrumb" class="mt-2">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="../../dashboard.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="add_agreement.php">Add Agreement</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- End Bread crumb and right sidebar toggle -->
<!-- Container fluid  -->
<form action="">
    <div class="page-content container-fluid">
        <!--  Start Row  -->
        <div class="row">
            <div class="card-body">
                <!--  Start Row  -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Agreement For</label>
                            <input type="text" class="form-control" placeholder="Shop,Appartment or Office">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Total Advance</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <!--/row-->
                <!--  Start Row  -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Received Advance</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Remaining Advance</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <!--/row-->
                <!--  Start Row  -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Total Rent</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Received Rent</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <!--/row-->
                <!-- dropdown -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Remaining Rent</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Floor</label>
                            <select class="form-control custom-select">
                                <option>--Select Appartment Floor--</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!--/row-->
                <!-- dropdown -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Client Name</label>
                            <select class="form-control custom-select">
                                <option>--Select Client name--</option>
                                <option>Atif</option>
                                <option>Umair</option>
                                <option>Rahat</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Plaza Name</label>
                            <select class="form-control custom-select">
                                <option>--Select Plaza--</option>
                                <option>Jan plaza</option>
                                <option>Alam plaza</option>
                                <option>Moon plaza</option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Description</label>
                            <!-- <input type="text" class="form-control" placeholder=""> -->
                            <textarea class="form-control" rows="5">
            </textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="file" id="myFile" name="filename">
                    </div>
                </div>
            </div>
        </div>

        <!-- End Row  -->
        <div class="row">
            <div class="form-actions">
                <div class="card-body">
                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                    <button type="button" class="btn btn-dark">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End Container fluid  -->
<?php include("include/footer.php") ?>