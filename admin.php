<?php
include ('functions.php');
date_default_timezone_set('Europe/Belgrade');

session_start(); 

if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=Nisi registrovan kao administrator!','_self')</script>";
}
else {

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
	<style>
	#right a:link, a:visited {
    background-color:  #668cff;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	}


	#right a:hover, a:active {
    background-color: #1a53ff;
	}
</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
</head>
<body>
	<div class="container-fluid site">
		<div class="header"><!--header start-->
			<nav class="navbar navbar-inverse nav-header">
				<div class="container-fluid cf">
					<div class="navbar-header">
						<button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php"><img src="img/rapiddub-logo.png" alt="Dispute Bills"><h1>Rapid<span>Dub</span></h1></a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
					<ul class="nav navbar-nav pull-right navigation">
							<li><a href="index.php">Početna</a></li>
							<?php getCats(); ?>
							<li><a href="#">O nama</a></li>
							<li><a href="#"">Vesti</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div><!--header stop-->
		<div class="container about anime"> <!--about section-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 brdr">
				<img src="img/category.png" alt="..." class="img-responsive">
				<h3 class="category-name text-center">Admin stranica</h3>
			</div>
		    <div class="row">
		        <div class="col-xs-offset-3 col-xs-6 s-text"  style="margin-top: -5%">
		            <div class="carousel-inner">
		                <div class="item active">
		                    <div class="carousel-content">
		                        <div class="container">
									<div class="row animer">
							


<div id="right">
		<h2 style="text-align:center;">Uredi sadrzaj</h2>
			
			<a href="admin.php?insert_video">Dodaj novi video</a>
			<a href="admin.php?view_videos">Prikazi sve klipove</a>
			<a href="admin.php?insert_quote">Dodaj novi citat</a>
			<a href="logout.php">Odjavi se</a>
		
		</div>

<div id="left">
		<h2 style="color:red; text-align:center;"><?php echo @$_GET['logged_in']; ?></h2>
		<?php 
		if(isset($_GET['insert_video'])){
		
		include("insert_video.php"); 
		
		}
		if(isset($_GET['view_videos'])){
		
		include("view_videos.php"); 
		
		}
		if(isset($_GET['insert_quote'])){
		
		include("insert_quote.php"); 
		
		}
		if(isset($_GET['edit_video'])){
		
		include("edit_video.php"); 
		
		}
		if(isset($_GET['delete_video'])){
		
		include("delete_video.php"); 
		
		}
		
		
		
		
		
		
		?>
		</div>






	</div>


</body>
</html>

<?php } ?>



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
