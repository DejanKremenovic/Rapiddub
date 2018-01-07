<?php
include('header.php');
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
		<!--header stop-->
		<div class="container about anime"> <!--about section-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 brdr">
				<img src="img/category.png" alt="..." class="img-responsive">
				<h3 class="category-name text-center">Rezultati pretrage</h3>
			</div>
		    <div class="row">
		        <div class="col-xs-offset-3 col-xs-6 s-text"  style="margin-top: -5%">
		            <div class="carousel-inner">
		                <div class="item active">
		                    <div class="carousel-content">
		                        <div class="container">
									<div class="row animer" style="height: 100%;">
										
																	<?php 
	
	if(isset($_GET['search'])){
	
	$search_query = mysqli_real_escape_string($con, $_GET['user_query']);
	if (!empty($search_query)) {
		
	
	$get_vid = "select * from videos where video_keywords like '%$search_query%'";

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
				
					
				
					
				
		
							<div class='col-lg-6 category'>
							<h3>$vid_name</h3>
											<a href='single.php?vid_id=$vid_id'><img src='video_images/$vid_image' alt='...' class='img-responsive'></a>
										</div>
		";
	
	
	}}
	else {
		echo "<h3>Nije pronađeno ništa za vašu pretragu</h3>";
	}
	}
	?>
									</div>
								</div>
		                    </div>
		                </div>
		             </div>
		        </div>
			</div>
		</div><!--about end-->
		
	</div>
		<?php
include('footer.php');
?>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/scrolling-nav.js"></script>
</body>
</html>


