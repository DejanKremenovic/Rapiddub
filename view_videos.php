
<?php 
if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>
<table width="795" align="center" border="2" bgcolor="#187eae" style="color: black;background-color: 	 #f2f2f2;"> 

	
	<tr align="center">
		<td colspan="6"><h2>Svi klipovi</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<th>Naziv klipa</th>
		<th>Slika</th>
		<th></th>
		<th></th>
		
	</tr>

<?php
global $con; 
if (!$con) {
	die("Connection failed");
}
	
	$get_vid = "select * from videos";

	$run_vid = mysqli_query($con, $get_vid); 
	
	while($row_vid=mysqli_fetch_array($run_vid)){
	
		 $vid_id = $row_vid['video_id'];
		$vid_name = $row_vid['video_name'];
		$vid_link = $row_vid['video_link'];
		$vid_category = $row_vid['video_category'];
		$vid_image = $row_vid['video_image'];
		$vid_description = $row_vid['video_description'];
		$vid_keywords = $row_vid['video_keywords'];
	
		
				
					
				?>
					
				<tr>
	
		<td><?php echo "$vid_name";?></td>
	
		<td><img src="video_images/<?php echo $vid_image;?>" width="80" height="60"/></td>
		
		<td><a href="admin.php?edit_video=<?php echo $vid_id; ?>">Uredi</a></td>
		<td><a href="delete_video.php?delete_video=<?php echo $vid_id;?>">Izbrisi</a></td>
		
			</tr>			
		
	
<?php	
}	
?>

	
	
	
</table>
<?php } ?>

