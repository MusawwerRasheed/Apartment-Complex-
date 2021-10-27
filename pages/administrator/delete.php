<?php include("includes/connection.php") ?>
<?php
// get the value from input field
	//=============================================================================//
	// delete data from plaza table(data)
	
	if (isset($_GET['plazadelete'])) {
		$getid= $_GET['plazadelete'];
		$del="DELETE FROM plaza where plaza_id = '$getid'";
		$delete=mysqli_query($conn,$del) . mysqli_error($conn);


// Close connection
	mysqli_close($conn);
	echo "<script>window.location='plaza_detail.php'</script>";
}


	//=============================================================================//
	// delete data from floor table(data)
	
	if (isset($_GET['floordelete'])) {
		$getid= $_GET['floordelete'];
		$del="DELETE FROM floor where floor_id = '$getid'";
		$delete=mysqli_query($conn,$del) . mysqli_error($conn);


// Close connection
	mysqli_close($conn);
	echo "<script>window.location='floor_detail.php'</script>";
}