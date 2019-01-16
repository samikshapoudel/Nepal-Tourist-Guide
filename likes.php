<?php
	
	include ('db.php');
	if(isset($_POST['placeid']) || isset($_POST['userid']))
	{
		$placeid = $_POST['placeid'];
		$userid = $_POST['userid'];
		$query = "SELECT * FROM `likes` WHERE `placeid` = '$placeid' AND `userid` = '$userid'";
		$result = mysqli_query($conn, $query);
		$data_likes = mysqli_fetch_assoc($result);
		$num_rows = mysqli_num_rows($result);		
		if($num_rows == 0)
		{
			$nolike_query = "INSERT INTO `likes` (`likeid`, `userid`, `placeid`, `value`) VALUES (NULL, '$userid', '$placeid', '1')";
			mysqli_query($conn, $nolike_query);
		}
		else
		{
			$like_val = $data_likes['value'];
			$like_id = $data_likes['likeid'];
			if($like_val == '0')
			{
				$query_update = "UPDATE `likes` SET `value` = '1' WHERE `likes`.`likeid` = '$like_id'";			
			}
			else{
				$query_update = "UPDATE `likes` SET `value` = '0' WHERE `likes`.`likeid` = '$like_id'";
			}
			mysqli_query($conn, $query_update);
		}
		header('Location: detail.php?id='.$placeid);
	}
?>
