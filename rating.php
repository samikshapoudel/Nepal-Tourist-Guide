<?php
	include('db.php'); 
	if(isset($_POST['userid']) || isset($_POST['placeid']))
	{
		$userid = $_POST['userid'];
		$placeid = $_POST['placeid'];
		$star = $_POST['star'];
		$query = "SELECT * FROM `rating` WHERE `placeid` = '$placeid' AND `userid` = '$userid'";
		$result = mysqli_query($conn, $query);
		$star_data = mysqli_fetch_assoc($result);
		$star_num_rows = mysqli_num_rows($result);
		if($star_num_rows == 0)
		{
			$star_rating = "INSERT INTO `rating` (`starid`, `userid`, `placeid`, `star`) VALUES (NULL, '$userid', '$placeid', '$star') ";
			mysqli_query($conn, $star_rating);
			
		}

		else
		{
			$star_value = $_POST['star'];
			$star_id = $star_data['starid'];
			$query_update = mysqli_query($conn, "UPDATE `rating` SET `star` = '$star_value' WHERE `rating`.`starid` = '$star_id'");
		}
		header('location:detail.php? id=' .$placeid);



		

	}

 ?>