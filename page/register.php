<?php
	//Defineerime muutujad
	$email_error = "";
	$password_error = "";
	$password_error2 = "";
	$password_error3 = "";
	//kontrollin kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo"jah";
		
		//kas e-post on tühi
		if( empty($_POST["email"]) ) {
			
			//jah oli tühi
			$email_error = "See väli on kohustuslik";
			
		}
		if( empty($_POST["password"]) ) {
			
			//jah oli tühi
			$password_error = "See väli on kohustuslik";
		}
		if( empty($_POST["password2"]) ) {
			
			//jah oli tühi
			$password_error2 = "See väli on kohustuslik";
		} elseif( empty($_POST["password2"]) == false && $_POST["password"] != $_POST["password2"]) {
			
			$password_error3 = "Paroolid ei kattu omavahel";
			//echo"Paroolid ei kattu omavahel!";
		}
	}
?>
<?php require_once("../header.php") ?>
		<h2>Register</h2>
		<form action="register.php" method="post">
		<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?> <br><br>
		<input name="password" type="password" placeholder="Parool" > <?php echo $password_error; ?> <br><br>
		<input name="password2" type="password" placeholder="Parool" > <?php echo $password_error2; echo $password_error3;?> <br><br>
		<input type="submit" value="register"> <br><br>
		</form>
		
<?php require_once("../footer.php") ?>