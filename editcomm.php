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
		
		<div class="container about anime"> <!--about section-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 brdr">
				<img src="img/category.png" alt="..." class="img-responsive">
				<h3 class="category-name text-center">Uredi komentar</h3>
			</div>
		    <div class="row">
		        <div class="col-xs-offset-3 col-xs-6 s-text"  style="margin-top: -5%">
		            <div class="carousel-inner">
		                <div class="item active">
		                    <div class="carousel-content">
		                        <div class="container">
									<div class="row animer">
										
									<?php
	
		$cid = $_POST['cid'];
        $date = $_POST['date'];
        $comment = $_POST['comment'];
        $name = $_POST['name'];
        $video_id = $_POST['video_id'];
  echo '<form class="editComment" method="post" action="'.editComments($con).'">
                        <input type="hidden" name="cid" value="'.$cid.'">
                        <input type="hidden" name="date" value="'.$date.'">
                         <input type="hidden" name="video_id" value="'.$video_id.'">
                        <input type="hidden" name="name" value="'.$name.'">
                        <textarea name="comment"  rows="6" cols="60">'.$comment.'</textarea><br>
                       <button class="w3-btn w3-blue" type="submit" name="commentEdit">Uredi</button><br>
         
       </form>'; 

									?>



									</div>
								</div>
		                    </div>
		                </div>
		             </div>
		        </div>
			</div>-->
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


