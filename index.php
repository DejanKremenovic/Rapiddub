<?php include ('header.php'); ?>
 
		<div class="container about anime" style="z-index: -1;"> <!--about section-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 brdr">
				<img src="img/asd.png" alt="..." class="img-responsive">
			</div>
			<div id="text-carousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
			  <ol class="carousel-indicators indikator">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			    <li data-target="#myCarousel" data-slide-to="3"></li>
			    
			  </ol>

			    <!-- Wrapper for slides -->
			    <div class="row">
			        <div class="col-xs-offset-3 col-xs-6 s-text"  style="margin-top: -5%">
			            <div class="carousel-inner">
			                <div class="item active">
			                    <div class="carousel-content">
			                        <div class="container">
										<div class="row animer">
											<?php getVideos_home(1, 'Pesme'); ?>
										</div>
									</div>
			                    </div>
			                </div>
			                <div class="item">
			                    <div class="carousel-content">
			                        <div class="container">
										<div class="row animer">
											<?php getVideos_home(2, 'Isečci'); ?>
										</div>
									</div>
			                    </div>
			                </div>
			                <div class="item">
			                    <div class="carousel-content">
			                        <div class="container">
										<div class="row animer">
											<?php getVideos_home(3, 'filmovi'); ?>
										</div>
									</div>
			                    </div>
			                </div>

			                <div class="item">
			                    <div class="carousel-content">
			                        <div class="container">
										<div class="row animer">
											<?php getVideos_home(4, 'Serije'); ?>
										</div>
									</div>
			                    </div>
			                </div>

			               
			        
			            </div>
			        </div>
			    </div>


			  <a class="left carousel-control lc" href="#text-carousel" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left glip" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control lc" href="#text-carousel" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right glip" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>-->
		</div><!--about end-->
		<div class="container-fluid anime"><!--anime section-->
			<div class="container-fluid t-projekti">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 brdr">
					<img src="img/projekti.png" alt="..." class="img-responsive">
				</div>
				<div class="row animer" >
					<div  style="margin-left: 14%; margin-right: 14%; margin-top: -5%;margin-bottom: 10px;"> 
						
						 <?php getProjects(); ?>
					</div>
					   
				</div>
			</div>
			<div class="container-fluid kvota">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 brdr">
					<img src="img/kvota.png" alt="..." class="img-responsive">
					
					<?php getQuotes(); ?>
					
				</div>
			</div>
		</div></div>
		
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