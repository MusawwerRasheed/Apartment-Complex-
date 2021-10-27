<?php include("includes/header.php") ?>
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb border-bottom">
  <div class="row">
    <div class="col-lg-3 col-md-4 col-xs-12 justify-content-start d-flex align-items-center">
      <h5 class="font-medium text-uppercase mb-0">Add Status Form</h5>
    </div>
    <div class="col-lg-9 col-md-8 col-xs-12 d-flex justify-content-start justify-content-md-end align-self-center">
      <nav aria-label="breadcrumb" class="mt-2">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="../../dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="add_status.php">Add Status</a></li>
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
    <div class="card-body">  
     <!--  Start Row  -->  
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Add Status</label>
            <input type="text" class="form-control" name="">
          </div>
        </div>
       </div>
      <!--/row-->
      
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
<!-- End Container fluid  -->
<?php include("includes/footer.php") ?>