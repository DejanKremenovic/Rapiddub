<?php 
session_start();
date_default_timezone_set('Europe/Belgrade');
include("header.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RapidDub</title>

	<!--StyleSheet-->
	<link rel="StyleSheet" href="css/bootstrap.min.css">
	<link rel="StyleSheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container-fluid site">
		
		<div class="container post-page"><!--category sectio-->
			
			
			

					<?php 
	if(isset($_GET['vid_id'])){
	
	$video_id = $_GET['vid_id'];
	
	$get_vid = "select * from videos where video_id='$video_id'";

	$run_vid = mysqli_query($con, $get_vid); 
	
	while($row_vid=mysqli_fetch_array($run_vid)){
	
		$vid_id = $row_vid['video_id'];
		$vid_name = $row_vid['video_name'];
		$vid_link = $row_vid['video_link'];
		$vid_category = $row_vid['video_category'];
		$vid_image = $row_vid['video_image'];
		$vid_description = $row_vid['video_description'];
		$vid_keywords = $row_vid['video_keywords'];
	
	
		echo "
				<div id='single_product'>
				<h1 class='h1 heading'>$vid_name</h1>
					
					
					<div>$vid_link</div>
					
				<div class='row content'>
				<div class='col-lg-8 border' >
					<p class='p-content' id='p-content1'>
					$vid_description</p>
					
				
					
				
					

				
				</div>
		
		
		";
	
	}
	}
?>



 <div class="video_komentari" >
                      <?php
                      $video_id=$_GET['vid_id'];
                       if(!isset($_SESSION['id'])){echo '<form method="POST" action="'.userLogin($con).'" >
                        <input type="text" name="user" placeholder="Korisničko ime" required>
                        <input type="password" name="password" placeholder="Lozinka" required>
                         <button type="submit" name="loginSubmit" class="w3-btn">Prijavi se</button>
                        <a href="singup.php?vid_id='. $video_id .'">Nisi registrovan? Registruj se ovde!</a>
                    </form> ';} 
if(isset($_SESSION['id'])) {
   echo "<p style='color:white;' >Prijavljen si!</p>";
}
else {
     echo "Moras biti prijavljen da bi ostavio komentar!";
}
 if (isset($_SESSION['id'])) { echo '<form method="POST" action="'.userLogout().'">
                        <button type="submit" name="logoutSubmit" class="w3-btn w3-blue">Odjavi se</button>
                        
                    </form>' ;}
                    ?>
                <br><br>
                    <?php if (isset($_SESSION['id'])) { echo '<form class="komentari" method="POST" action="'.setComments($con).'">
               			
                       <input type="hidden" name="date" value="'.date('d-m-Y H:i:s').'">
                       <input type="hidden" name="name" placeholder="name" style="width: 300px; position:left ; margin-left: 0px; margin-bottom: 10px;" value="'.$_SESSION['id'].'" ><br>
                       <textarea type="text" rows="6" name="comment" placeholder="Komentarisi" required style="width: 300px; position: left;"></textarea><br>
                       <button type="submit" name="commentSubmit" class="w3-btn w3-blue">Komentarisi</button><br>
                     </form>';}?>
                <div class="komentari"><?php getComments($con);?></div>
                <a href='index.php' >Idi nazad</a>

                </div>
				</div>
			</div>
</div>
		
	</div>
	<?php
include('footer.php');
?>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>