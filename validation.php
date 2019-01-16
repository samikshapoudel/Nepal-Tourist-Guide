<?php 				

	$server = 'localhost';
	$username = 'root';
	$password = 'root';
	$dbname = 'nepal_tourist';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	
	$email = $_POST['email'];
	$email = strtolower($email);
	$visible = $_POST['visible'];

	$password = md5($_POST['password']."##tourist##");

	
	
	
	$q = "SELECT `id` FROM `users` WHERE `email` = '$email'";
	$result = mysqli_query($conn, $q); 
	$data = mysqli_fetch_assoc($result);
	$id =  $data['id'];
	
	$visibleQ = mysqli_query($conn, "SELECT `visible` FROM `users` WHERE `id` = '$id'");
	$dataVisible = mysqli_fetch_assoc($visibleQ);
	$visible = $dataVisible['visible'];
	if($visible == "1")
	{
		header('location: form.php?status=5');

	}
	else
	{
		$num = mysqli_num_rows($result);
		

		if($num == 1)
		{
				$result = mysqli_query($conn, "SELECT * FROM `users` WHERE `id` = '$id' AND `password` = '$password' ");
				$num = mysqli_num_rows($result);
				if($num > 0)
				{
				    session_start();
					$_SESSION['id'] = $id;

					header('location: index.php');
					
					

				}
				
				else
				{
					header('location: form.php?status=4');
				}
		}

		else
		{
			header('location:form.php?status=4');
		}
	}



 ?>