<?php 
	session_start();

	$server = 'localhost';
	$username = 'root';
	$password = 'root';
	$dbname = 'nepal_tourist';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = md5($_POST['password']."##tourist##");
	$visible = 0;

		$email = strtolower($email);
		$fname = strtolower($fname);
		$lname = strtolower($lname);

		
		$password = $password;

	$q= "SELECT * FROM `users` WHERE `email` = '$email'";
	$result = mysqli_query($conn, $q);
	$num = mysqli_num_rows($result);

	if($num > 0)
	{
		header('location: form.php?status=1');
	
	}
	else
	{
		

		$qy = "INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `visible`) 
		VALUES (NULL, '$fname', '$lname', '$email', '$password', '$visible')";

		$result = mysqli_query($conn, $qy);
		
		header('location: form.php?status=2');
	}
	
?>
	
			


 