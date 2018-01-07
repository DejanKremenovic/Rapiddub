
<?php include ('db.php'); ?>
<!DOCTYPE>
<form action="insert_quote.php" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="795" border="2" bgcolor="#187eae" style="color: black;background-color: 	 #f2f2f2;">
			
			<tr align="center">
				<td colspan="7"><h2>Dodaj novi citat</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Naziv autora:</b></td>
				<td><input type="text" name="author" size="60"></td>
			</tr>
			
			<tr>
		<td>	 <input type="hidden" name="date" value="<?php date('d-m-Y H:i:s'); ?>"></td> 

  		</tr>
			
	
			
			<tr>
				<td align="right"><b>Citat:</b></td>
				<td><textarea name="quote" cols="20" rows="6"></textarea></td>
			</tr>
			
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_quote" value="Dodaj citat"/></td>
			</tr>
		
		</table>
	
	
	</form>

<br>
<h4>Uputstvo za koristenje:<br>
*Ukoliko kopirate citat potrebno je da nalepite ,,sirovi" tekst, a to ćete uraditi tako što odaberete prilikom kopiranja opciju ,,lepljenje u obliku otvorenog teksta". Nakon toga tekst možete uredjivati po želji pomoću text editor-a u okviru ovog sajta.<br>
*Na početnoj strani sajta se objavljuje citat koji ste poslednji dodali i ostaje aktivan sve dok ne dodate neki novi.
</h4>
<?php


//dodavanje citata
//'$date', date, 
	if (isset($_POST['insert_quote'])) {
        $date = $_POST['date'];
        $author = $_POST['author'];
        $quote = $_POST['quote'];

		global $con; 
		
        $query = "INSERT INTO quotes (date, author, quote) VALUES ('$date', '$author', '$quote')";
      
        $result = mysqli_query($con, $query);
         if(!$result){
		 
		 echo "<script>alert('Citat nije objavljen!')</script>";
	//	 echo "<script>window.open('admin.php?insert_quote','_self')</script>";
    }
         if($result){
		 
		 echo "<script>alert('Citat je objavljen!')</script>";
		 echo "<script>window.open('admin.php?insert_quote','_self')</script>";
    }} ?>