<?php include("includes/header.php") ?>
<?php include("includes/connection.php") ?>
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb border-bottom">
  <div class="row">
    <div class="col-lg-3 col-md-4 col-xs-12 justify-content-start d-flex align-items-center">
      <h5 class="font-medium text-uppercase mb-0">Add Office Form</h5>
    </div>
    <div class="col-lg-9 col-md-8 col-xs-12 d-flex justify-content-start justify-content-md-end align-self-center">
      <nav aria-label="breadcrumb" class="mt-2">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="../../dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="add_office.php">Add Office</a></li>
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
            <label>Office Number</label>
            <input type="text" class="form-control">
          </div>
        </div>
      
        <div class="col-md-6">
          <div class="form-group">
            <label>Office size</label>
            <input type="text" class="form-control" placeholder="like:-(40x21)">
          </div>
        </div>
         </div>
      <!--/row-->
      <!--  Start Row  -->  
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Office Washroom</label>
            <input type="text" class="form-control" placeholder="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Plaza Name</label>
              <select name="plazaname" class="form-control custom-select">
              <option>--Select Plaza--</option>
               <?php 
              $select=" SELECT * from plaza ";
              $result=mysqli_query($conn,$select);

                   
                   while ($row = $result->fetch_assoc()) {
                ?>
                <option value="<?php echo $row["plaza_id"]; ?>"><?php  echo $row["plaza_name"];?></option>
                 <?php } ?>
                                        
            </select>
          </div>
        </div>
      
       
      </div>
      <!-- /dropdown -->
      <!--  Start Row  -->  
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Floor</label>
            <select class="form-control custom-select">
              <option>--Select Plaza Floors--</option>
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
        <div class="col-md-6">
          <div class="form-group">
            <label>Status</label>
           <select name="status" class="form-control custom-select">
              <option>--Select Shop Status--</option>
               <?php 
              $select=" SELECT * from status ";
              $result=mysqli_query($conn,$select);

                   
                   while ($row = $result->fetch_assoc()) {
                ?>
                <option value="<?php echo $row["status_id"]; ?>"><?php  echo $row["status_name"];?></option>
                 <?php } ?>
             
            </select>
          </div>
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
<!-- End Container fluid  -->
<?php include("includes/footer.php") ?>