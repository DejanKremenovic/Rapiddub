<?php 
session_start();

?>
<!DOCTYPE>
<html>
	<head>
		<title>Login Form</title>
<link rel="stylesheet" href="css/login_style.css" media="all" /> 

	</head>
<body>
<div class="login">
<h2 style="color:white; text-align:center;"><?php echo @$_GET['not_admin']; ?></h2>

<h2 style="color:white; text-align:center;"><?php echo @$_GET['logged_out']; ?></h2>
	
	<h1>Admin Prijavljivanje</h1>
    <form method="post" action="login.php">
    	<input type="text" name="email" placeholder="Email" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large" name="login">Prijavi se</button>
    </form>
</div>


</body>
</html>
<?php 

include("functions.php"); 
	
	if(isset($_POST['login'])){
	
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$pass = mysqli_real_escape_string($con, $_POST['password']);
	
	$sel_user = "select * from admins where user_email='$email' AND user_pass= PASSWORD('$pass')";
	
	$run_user = mysqli_query($con, $sel_user); 
	
	 $check_user = mysqli_num_rows($run_user); 
	
	if($check_user==1){
	
	$_SESSION['user_email']=$email; 
	
	echo "<script>window.open('admin.php?logged_in=Uspesno ste se prijavili kao administrator!','_self')</script>";
	
	}
	else {
	
	echo "<script>alert('Pogresan email ili lozinka!')</script>";
	
	}
	
	
	}
	
	
	
	
	








?>