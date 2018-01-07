

<?php 
// veza sa bazom podataka
include ('db.php');



//getting the categories

function getCats(){
	
	global $con; 
	
	$get_cats = "select * from categories WHERE cat_id < 5";
	
	$run_cats = mysqli_query($con, $get_cats);
	
	while ($row_cats=mysqli_fetch_array($run_cats)){
	
		$cat_id = $row_cats['cat_id']; 
 		$cat_name = $row_cats['cat_name'];
	
	echo "<li><a href='category.php?cat=$cat_id'>$cat_name</a></li>";
	
	
	}


}
// getting category name
function getCatName(){
	
	global $con; 
	$vid_cat= $_GET['cat'];
	$get_cats = "select * from categories WHERE cat_id = '$vid_cat'";
	
	$run_cats = mysqli_query($con, $get_cats);
	
	while ($row_cats=mysqli_fetch_array($run_cats)){
	
		$cat_id = $row_cats['cat_id']; 
 		$cat_name = $row_cats['cat_name'];
	
	echo $cat_name;
	
	
	}


}

// funkcija za prikazivanje klipova

function getVideos(){


		
	global $con; 
	
	$vid_cat= $_GET['cat'];
	$get_vid = "select * from videos WHERE video_category = '$vid_cat' ORDER BY video_id DESC ";

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
	
	}
	
//}

}







// funkcija za prikazivanje klipova - pocetna
function getVideos_home($vid_cat, $cat_name){

	global $con; 
	
	$get_vid = "select * from videos WHERE video_category = '$vid_cat'  ORDER BY video_id DESC LIMIT 1";

	$run_vid = mysqli_query($con, $get_vid); 
	
	while($row_vid=mysqli_fetch_array($run_vid)){
	
		$vid_id = $row_vid['video_id'];
		$vid_name = $row_vid['video_name'];
		$vid_link = $row_vid['video_link'];
		$vid_category = $row_vid['video_category'];
		$vid_image = $row_vid['video_image'];
		$vid_description = $row_vid['video_description'];
		$vid_keywords = $row_vid['video_keywords'];

		$get_vid2 = "select * from videos WHERE video_category = '$vid_cat'  ORDER BY video_id DESC LIMIT 1, 1";

		$run_vid2 = mysqli_query($con, $get_vid2); 
		while($row_vid2=mysqli_fetch_array($run_vid2)){
	
			$vid_id2 = $row_vid2['video_id'];
			$vid_image2 = $row_vid2['video_image'];
	

	if (!empty($vid_id2)) {
		
		echo "	
				
		
							<div class='col-lg-5 category cat-sl'>
						
											<a href='single.php?vid_id=$vid_id'><img src='video_images/$vid_image' alt='...' class='img-responsive'></a>
										</div>
										<h3 class='col-md-2 logoHeader'>$cat_name</h3>
											
											
							<div class='col-lg-5 category cat-sl'>
						
											<a href='single.php?vid_id=$vid_id2'><img src='video_images/$vid_image2' alt='...' class='img-responsive'></a>
										</div>
										
		
		";}}
	
	
	}

}





// funkcija za prikazivanje projekata - pocetna

function getProjects(){

	global $con; 
	$vid_cat= 5;
	$get_vid = "select * from videos WHERE video_category = '$vid_cat'  ORDER BY video_id DESC LIMIT 2";

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
				
					
				
					
				
		
							<div class='col-lg-5 category cat-sl' style='padding-bottom:10px;position:center;margin-left:4%;'>
						
										<a>	<img src='video_images/$vid_image' alt='...' class='img-responsive' style='margin:auto;'></a>
										</div>
		";
	
	}
	
//}

}



// funkcija za prikazivanje citata
function getQuotes(){


		
	global $con; 

	$get_quote = "select * from quotes ORDER BY id DESC LIMIT 1";

	$run_quote = mysqli_query($con, $get_quote); 
	
	while($row_quote=mysqli_fetch_array($run_quote)){
	
		$quote_author = $row_quote['author'];
		$quote = $row_quote['quote'];
		
		echo "
				
					
				
					<h3 class='citat'>$quote</h3>
					<h2 class='author text-center'>$quote_author</h2>
		";
	
	}
	
//}

}



function setComments($con){
	if (isset($_POST['commentSubmit'])) {
		$video_id = $_GET['vid_id'];
        $date = $_POST['date'];
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $comment = mysqli_real_escape_string($con, $_POST['comment']);


      
        $result = mysqli_query($con, "INSERT INTO comments ( date, video_id, name, comment) VALUES ('$date', '$video_id', '$name', '$comment')");
        
    }
}

function getComments($con) {
  
  $video_id = $_GET['vid_id'];
  $query = mysqli_query($con, "SELECT * FROM comments  WHERE video_id = '$video_id' ORDER BY comment_id DESC ");
 
  while ($row = mysqli_fetch_assoc($query)) {
      $user = $row['name'];
      $query_users = mysqli_query($con, "SELECT * FROM users_table WHERE id = $user ");
      if ($row1 = mysqli_fetch_assoc($query_users)) {
      
      echo "<div class='komentar'>";
      echo $row['date']."<br>";
      echo $row1['name']."<br>"; 
      echo nl2br($row['comment'])."<br>"."<br>";
       if (isset($_SESSION['id'])) {
        if ($_SESSION['id']==$row1['id']) {
          echo '<form class="editComm" method="post" action="editcomm.php">
                        <input type="hidden" name="cid" value="'.$row['comment_id'].'"> 
                        <input type="hidden" name="video_id" value="'.$video_id.'"> 
                        <input type="hidden" name="date" value="'.date('d-m-Y H:i:s').'">
                        <input type="hidden" name="name" value="'.$row1['id'].'">
                        <input type="hidden" name="comment" value="'.$row['comment'].'">
                       <button type="submit" name="commentSubmit">Uredi</button><br>
         
       </form> 
       <form class="deleteComm" method="post" action="'.deleteComments($con).'">
                   
                        <input type="hidden" name="cid" value="'.$row['comment_id'].'">
                       <button type="submit" name="commentDelete">Izbrisi</button><br>
         
       </form> ';
        }
       }
       
      echo ' </div>

       ';
}}}




function singupSubmit($con){	if(isset($_POST['singupSubmit'])){
global $vid_id;
$name = $_POST['user'];
$result = $con->query("SELECT * FROM users_table WHERE name='$name'");

if ( $result->num_rows > 0 ) {
 
    echo '<h3 style = "color:white;">Korisničko ime već postoji!</h3>';

}
else {
$name =mysqli_real_escape_string($con, $_POST['user']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$sqli = "INSERT INTO users_table (name, password) VALUES('$name', PASSWORD('$password'))";

	
      $result = mysqli_query($con, $sqli);
      if (!$result) {
      	echo "Nije moguće dodati korisnika";
      }
      else{
          	
      echo "<h3 style = 'color:white;'>Sada ste registrovani kao korisnik sajta RapidDub, vratite se na prethodnu stranu da ostavite komentar! :) </h3>";
 
}}
	
	
} }



function userLogin($con) {
	if (isset($_POST['loginSubmit'])) {
	
  $name =mysqli_real_escape_string($con, $_POST['user']);
  $password =mysqli_real_escape_string($con, $_POST['password']);
  
  $sqli = "SELECT * FROM users_table WHERE name  = '$name' AND password = PASSWORD('$password') ";
	
 $result = mysqli_query($con, $sqli);

  if (mysqli_num_rows(mysqli_query($con, $sqli)) > 0) {
   	if ($row = mysqli_fetch_assoc($result)) {
   	 global	$vid_id;
    $_SESSION['id'] = $row['id'];
  
     echo "<script>location='single.php?vid_id=$vid_id'</script>";
   
   header("Location: single.php?vid_id=$vid_id");
   	}

   }
   else {echo "Netačna lozinka ili korisničko ime!";}
}

} 
 function userLogout () {if (isset($_POST['logoutSubmit'])) {
 global $vid_id;
 	session_destroy();
header("Location: single.php?vid_id=$vid_id");
 	echo "<script>location='single.php?vid_id=$vid_id'</script>";
 } }
 function editComments($con){
	if (isset($_POST['commentEdit'])) {
		$cid = $_POST['cid'];
        $date = $_POST['date'];
        $name = $_POST['name'];
    	$video_id = $_POST['video_id'];

        $comment = $_POST['comment'];

       
   
        $result = mysqli_query($con, "UPDATE comments SET comment = '$comment'  WHERE name = '$name' AND comment_id='$cid'");
        header("Location: single.php?vid_id=$video_id");
        header("Location: single.php?vid_id=$video_id");
        if ($result) {
          echo "<script>location='single.php?vid_id=$video_id'</script>";
        echo '<p> komentar je uredjen</p>';
       
        
        }
        else{
 echo '<p> komentar nije uredjen</p>';
}
    }
}
 
function deleteComments($con){
	if (isset($_POST['commentDelete'])) {
		$comment_id = $_POST['cid'];
     
        $result = mysqli_query($con, "DELETE FROM comments WHERE comment_id = '$comment_id'");
  		echo "<meta http-equiv='refresh' content='0'>";
    }
}
 



