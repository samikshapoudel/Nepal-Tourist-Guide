<?php

	include('db.php');
	 
	$name = $_POST['name'];
	$latitude = $_POST['lat'];
	$longitude = $_POST['long'];
	$description = $_POST['desc'];
	$attractions = $_POST['attractions'];
	$climate = $_POST['climate'];
	$route = $_POST['route'];
	$hotels = $_POST['hotels'];
	$significance = $_POST['significance'];
	$tags = $_POST['tag'];
	$time  = $_POST['time'];

	$sql = "INSERT INTO `featured_place` (`id`, `name`, `latitude`, `longitude`, `description`, `ATTRACTIONS`, `CLIMATE`, `ROUTE`, `hotels`, `best_time_to_visit`, `historical_significance`, `tag`, `catid1`, `catid2`, `catid3`) VALUES (NULL, '$name', '$latitude', '$longitude', '$description', '$attractions', '$climate', '$route', '$hotels', '$time', '$significance', '$tags', '1', '3', '2')";
	$result = mysqli_query($conn, $sql);
	header('location:addplaces.php');


	

?>
