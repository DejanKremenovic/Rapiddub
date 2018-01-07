<!DOCTYPE>

<?php 
include('db.php');



if(isset($_GET['edit_video'])){

	$get_id = $_GET['edit_video']; 
	
	$get_vid = "select * from videos where video_id='$get_id'";
	
	$run_vid = mysqli_query($con, $get_vid); 
	
	$i = 0;
	
	$row_vid=mysqli_fetch_array($run_vid);
		
		$vid_id = $row_vid['video_id'];
		$vid_name = $row_vid['video_name'];
		$vid_link = $row_vid['video_link'];
		$vid_category = $row_vid['video_category'];
		$vid_image = $row_vid['video_image'];
		$vid_description = $row_vid['video_description'];
		$vid_keywords = $row_vid['video_keywords'];
		
		$get_cat = "select * from categories where cat_id='$vid_category'";
		
		$run_cat=mysqli_query($con, $get_cat); 
		
		$row_cat=mysqli_fetch_array($run_cat); 
		
		$category_name = $row_cat['cat_name'];
		
		
		
}
?>
<html>
	<head>
		<title>Uredi video</title> 
		
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
	</head>
	
<body bgcolor="skyblue">


	<form action="" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="795" border="2" bgcolor="#187eae" style="color: black;background-color: 	 #f2f2f2;">
			
			<tr align="center">
				<td colspan="7"><h2>Uredi video</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Naziv videa:</b></td>
				<td><input type="text" name="video_name" size="60" required value="<?php echo $vid_name;?>"/></td>
			</tr>
			<tr>
				<td align="right"><b>Link videa:</b></td>
				<td><input type="text" name="video_link" size="60" value="<?php echo $vid_link;?>"/></td>
			</tr>
			<tr>
				<td align="right"><b>Kategorija videa:</b></td>
				<td>
				<select name="video_category"><option><?php echo $category_name; ?></option>
<?php

$query = "SELECT * FROM categories";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($result)) {
 	$cat_id = $row['cat_id'];
 	$cat_name = $row['cat_name'];
 	echo "<option value='$cat_id'>$cat_name</option>";
 } ?>
 
				</select>

				</td>
			</tr>

  		
			<tr>
				<td align="right"><b>Video slika:</b></td>
				<td><input type="file" name="video_image" /><img src="video_images/<?php echo $vid_image; ?>" width="80" height="80"/></td>
			</tr>
	
			
			<tr>
				<td align="right"><b>Opis videa:</b></td><br><br>
				<td><textarea name="video_description" cols="20" rows="10" ><?php echo $vid_description;?></textarea></td>
			</tr>
			
			<tr>
				<td align="right"><b>Kljucne rijeci:</b></td>
				<td><input type="text" name="video_keywords" size="50" required value="<?php echo $vid_keywords;?>"/></td>
			</tr>
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="update_video" value="Uredi video"/></td>
			</tr>
		
		</table>
	
	
	</form>

</body> 
</html>
<?php 




if(isset($_POST['update_video'])){
		$update_id = $vid_id;
		
		//getting the text data from the fields
		$video_name = $_POST['video_name'];
		$video_link= $_POST['video_link'];
		$video_category= $_POST['video_category'];
		
		$video_description = $_POST['video_description'];
		$video_keywords = $_POST['video_keywords'];
	
		
		//getting the image from the field
		$video_image = $_FILES['video_image']['name'];
		$video_image_tmp = $_FILES['video_image']['tmp_name'];
		
		move_uploaded_file($video_image_tmp,"video_images/$video_image");
		
	
		 $update_video = "update videos set  video_name ='$video_name', video_link = '$video_link', video_category = '$video_category',  video_image = '$video_image', video_description = '$video_description', video_keywords = '$video_keywords'  where video_id='$update_id'";
		 
		 $run_vid = mysqli_query($con, $update_video);
		 
		 if($run_vid){
		 
		 echo "<script>alert('video je uredjen!!')</script>";
		 echo "<script>window.open('admin.php?view_videos','_self')</script>";
		 
		 }
	}
 




?>












