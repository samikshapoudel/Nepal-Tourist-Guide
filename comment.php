<?php 
			include('db.php');
			date_default_timezone_set('Asia/Kathmandu');
			$date = date('m/d/Y h:i:s a', time());
		
			if(isset($_POST['comment']))
 			{
 				$userid = $_POST['userid'];
 				$placeid = $_POST['placeid'];
 				$comment = $_POST['comment'];
 				$hidden = 0;
 			
 				$sql = "INSERT INTO `comments` (`commentid`, `userid`, `placeid`, `comment`, `date`,`hidden`) VALUES (NULL, '$userid', '$placeid', '$comment', '$date','$hidden')";
 			
 				$result = mysqli_query($conn, $sql);
 				if($result > 0)
 				{
 					header("Location: detail.php?id=$placeid");
 				}
 			}
 
 		
 	?>
 		
