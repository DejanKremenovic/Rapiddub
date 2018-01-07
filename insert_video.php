<?php
include ('db.php');

if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=Nisi registrovan kao administrator!','_self')</script>";
}
else {

?>

<!DOCTYPE>
<form action="" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="795" border="2" bgcolor="#187eae" style="color: black;background-color: 	 #f2f2f2;">
			
			<tr align="center">
				<td colspan="7"><h2>Dodaj novi video</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Naziv videa:</b></td>
				<td><input type="text" name="video_name" size="60" required/></td>
			</tr>
			<tr>
				<td align="right"><b>Link videa:</b></td>
				<td><input type="text" name="video_link" size="60" /></td>
			</tr>
			<tr>
				<td align="right"><b>Kategorija videa:</b></td>
				<td>
				<select name="video_category"><option>Izaberi kategoriju</option>
<?php
global $con; 
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
				<td><input type="file" name="video_image" /></td>
			</tr>
	
			
			<tr>
				<td align="right"><b>Opis videa:</b></td>
				<td><textarea name="video_description" cols="20" rows="10"></textarea></td>
			</tr>
			
			<tr>
				<td align="right"><b>Kljucne rijeci:</b></td>
				<td><input type="text" name="video_keywords" size="50" required/></td>
			</tr>
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Dodaj video"/></td>
			</tr>
		
		</table>
	
	
	</form>

<br>
<h4>Uputstvo za koristenje:<br></h4>
	<h5>*Dodavanje video klipa sa sajta Youtube se vrši tako što se uđe u određeni klip, desnim klikom se klikne na video i odabere opcija ,,kopiraj kod za ugradnju".Nakon toga kod se nalepi u polje ,,link videa".<br>
*Ukoliko kopirate tekst potrebno je da nalepite ,,sirovi" tekst, a to ćete uraditi tako što odaberete prilikom kopiranja opciju ,,lepljenje u obliku otvorenog teksta". Nakon toga tekst možete uredjivati po želji pomoću text editor-a u okviru ovog sajta.
</h5>

<?php 


//dodavanje videa

if(isset($_POST['insert_post'])){
	
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
		
	
		 $insert_video = "insert into videos (video_name, video_link, video_category,  video_image, video_description, video_keywords) values ('$video_name','$video_link','$video_category','$video_image','$video_description','$video_keywords')";
		 
		 $insert_vid = mysqli_query($con, $insert_video);
		 
		 if($insert_vid){
		 
		 echo "<script>alert('video je objavljen!!')</script>";
		 echo "<script>window.open('admin.php?insert_video','_self')</script>";
		 
		 }
	}
 } 