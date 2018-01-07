<?php 
	include("functions.php"); 
	
	if(isset($_GET['delete_video'])){
	
	$delete_id = $_GET['delete_video'];
	
	$delete_vid = "delete from videos where video_id='$delete_id'"; 
	
	$run_delete = mysqli_query($con, $delete_vid); 
	
	if($run_delete){
	
	echo "<script>alert('Video je izbrisan!')</script>";
	echo "<script>window.open('admin.php?view_products','_self')</script>";
	}
	
	}





?>