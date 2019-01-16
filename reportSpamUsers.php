<?php
	include('db.php');
	$id = $_GET['id'];
	$status = $_GET['status'];
	$value = $status == 1 ? 0 : 1;
	$query = mysqli_query($conn, "UPDATE `users` SET `visible` = '$value' WHERE `users`.`id` = '$id';");

	header('Location: users.php');
?>