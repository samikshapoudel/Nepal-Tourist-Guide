<?php 


	$server = 'localhost';
	$username = 'root';
	$password = 'root';
	$dbname = 'user';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	session_start();

	


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
</head>
<body>
		<strong> <h1 style="text-align: center;" >Account successflly created!!</h1>  </strong> 
		<strong> <h1 style="text-align: center;" > <?php echo $_SESSION['email'] ?> !!</h1>  </strong> 

		<a href="loginandsignup.php" style=" margin-left: 600px; font-weight: bold; font-size: 20px;">Back to login page?</a>
		


</body>
</html>