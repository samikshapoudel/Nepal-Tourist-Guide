<?php
	//connect to php 
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "nepal_tourist";
	// Create connection
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
	}

	
	$conn =  mysqli_connect($servername, $username, $password, $dbname);
	
?>
