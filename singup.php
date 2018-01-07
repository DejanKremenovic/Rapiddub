<?php
include ('header.php');
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
  	<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
</head>
<body>
	<div class="container-fluid site">
	
		<div class="container about anime"> <!--about section-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 brdr">
				<img src="img/category.png" alt="..." class="img-responsive">
				<h3 class="category-name text-center">Registruj se!</h3>
			</div>
		    <div class="row">
		        <div class="col-xs-offset-3 col-xs-6 s-text"  style="margin-top: -5%">
		            <div class="carousel-inner">
		                <div class="item active">
		                    <div class="carousel-content">
		                        <div class="container">
									<div class="row animer">
					    <?php
               $vid_id = $_GET['vid_id']; ?>					

<a href="single.php?vid_id=<?php echo "$vid_id"; ?>" style=" text-decoration: underline;">Vrati se nazad</a><br><br>
                <div class="singupForm" style="color: black;">
               <?php
               
                echo '<form method="POST" action="'.singupSubmit($con).'" style="color:white;">
                       <label for="user">Korisničko ime:</label><br>
                        <input type="text" name="user" placeholder="Korisničko ime" required style="color:black;"><br><br> 
                        <label for="password">Lozinka:</label><br>
                        <input type="password" name="password" placeholder="Lozinka" required style="color:black;"><br><br>
                        <button type="submit" name="singupSubmit" class="w3-btn w3-blue">Registruj se!</button><br>
                    <br>
                    </form> '; ?>
                </div>










										</div>
									</div>
								</div>
		                    </div>
		                </div>
		             </div>
		        </div>
			</div>
		</div><!--about end-->
		
	
		<?php
include('footer.php');
?>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/scrolling-nav.js"></script>
</body>
</html>

