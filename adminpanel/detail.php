<?php
	include ('db.php');
	$result = mysqli_query($conn, "SELECT * FROM featured_place WHERE `id` = '$id' ");
?>


<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<title>NEPAL TOURIST GUIDE</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
	
	<link rel="stylesheet" href="css/layout.css"/>
	<link rel="stylesheet" type="text/css" href="search.css">
	
</head>
<body>	

	<?php 
            include('includes/menu.php');
    ?>
		

	
	<footer class="footer">
		<?php 
			$data = mysqli_fetch_assoc($result);
		?>
			<div class="detailplace" style="margin-top: 60px;">
				<img class="centerimg" src="img/<?php echo $id.".jpg";?>">
				<h2 style="color: green; margin-left: 20px; margin-right: 35px; text-align: center;" ><?php echo $data['name']; ?></h2>
				<?php 
					if (isset($_SESSION['id'])) {
					?>

						<form action="likes.php" method="post">
							<input type="hidden" name="userid" value="<?php echo $userid; ?>">
							<input type="hidden" name="placeid" value="<?php echo $id; ?>">
							<?php 
								$userid = $_SESSION['id'];
								$placeid = $_GET['id'];
								$query = "SELECT * FROM `likes` WHERE `placeid` = '$placeid' AND `userid` = '$userid'";
								$result = mysqli_query($conn, $query);
								$data_likes = mysqli_fetch_assoc($result);
								$num_rows = mysqli_num_rows($result);		
								if($num_rows == 0)
								{
								?>
								<button class="btn-default" style="width: 64px; height: 64px; color: transparent; background-color: transparent; border-color: transparent; margin-right: 550px;  margin-left: 620px;" type="submit" name="like" value="" ><img src="images/likebtn.jpg" style="width: 42px; height: 42px;  "> </button> 
								<?php	
								}
								else{
									$like_val = $data_likes['value'];
									if($like_val == '0')
									{?>
										<button class="btn-default" style="width: 64px; height: 64px; color: transparent; background-color: transparent; border-color: transparent;  margin-left: 620px;" type="submit" name="like" value="" ><img src="images/likebtn.jpg" style="width: 42px; height: 42px; padding-right: -50px;"> </button> 
										<?php		
									}
									else{ ?>
										<button class="btn success" style="width: 64px; height: 64px; color: transparent; background-color:transparent; border-color: transparent;  margin-left: 630px;" type="submit" name="like" value="" ><img style="width:50px; height:50px;" src="images/dislike.jpg"> </button> 
									<?php }
								}
							?>
							<br>
							<strong style="margin-left: 650px;">
							<?php 
								$query_likes = "SELECT * FROM `likes` WHERE `placeid` = '$placeid' AND `value` = '1'";
								$result_total = mysqli_query($conn, $query_likes);
								$result_num_rows = mysqli_num_rows($result_total);
								$data_likes_total = mysqli_fetch_assoc($result_total);
								if($result_num_rows == 0)
								{
									echo "0 like";
								}
								else if($result_num_rows == 1)
								{
									echo "1 like";
								}
								else{
									echo $result_num_rows." likes";
								}
							?>
							</strong>
						</form>


						<form method="post" action="rating.php">
							<div style="margin-left: 450px; margin-top: 50px;">
											<input type="hidden" name="userid" value="<?php echo $userid; ?>">
											<input type="hidden" name="placeid" value="<?php echo $id;?>">
								<?php 
									$userid = $_SESSION['id'];
									$placeid = $_GET['id'];

									$star_result = mysqli_query($conn, "SELECT * FROM `rating` WHERE `placeid` = '$placeid' AND `userid` = '$userid'");
									$data_star = mysqli_fetch_assoc($star_result);
									$value = $data_star['star'];
									$star_rows = mysqli_num_rows($star_result);
									if($star_rows == 0)
									{ 
								?>

											<input type="submit" name="star" value="1"  style="height: 80px; width: 80px; background-image: url('images/star.png'); background-size: 100%; background-repeat: none; border: none; background-color: transparent; ">
											<input type="submit" name="star" value="2" style="height: 80px; width: 80px; background-image: url('images/star.png'); background-size: 100%; background-repeat: none; border: 0; background-color: transparent;">
											<input type="submit" name="star" value="3" style="height: 80px; width: 80px; background-image: url('images/star.png'); background-size: 100%; background-repeat: none; border: none;background-color: transparent;">
											<input type="submit" name="star" value="4" style="height: 80px; width: 80px; background-image: url('images/star.png'); background-size: 100%; background-repeat: none; border: none;background-color: transparent; ">
											<input type="submit" name="star" value="5" style="height: 80px; width: 80px; background-image: url('images/star.png'); background-size: 100%; background-repeat: none; border: none; background-color: transparent; ">

										<?php
									}
									else
									{
										if($value == 1)
										{?>
											<input type="submit" name="star" value="1"  style="height: 80px; width: 80px; background-image: url('images/yelstar.png'); background-size: 100%; background-repeat: none; border: none; background-color: transparent; ">
											<input type="submit" name="star" value="2" style="height: 80px; width: 80px; background-image: url('images/star.png'); background-size: 100%; background-repeat: none; border: 0; background-color: transparent;">
											<input type="submit" name="star" value="3" style="height: 80px; width: 80px; background-image: url('images/star.png'); background-size: 100%; background-repeat: none; border: none;background-color: transparent;">
											<input type="submit" name="star" value="4" style="height: 80px; width: 80px; background-image: url('images/star.png'); background-size: 100%; background-repeat: none; border: none;background-color: transparent; ">
											<input type="submit" name="star" value="5" style="height: 80px; width: 80px; background-image: url('images/star.png'); background-size: 100%; background-repeat: none; border: none; background-color: transparent; ">
										<?php
										}
										if($value == 2)
										{?>
												<input type="submit" name="star" value="1"  style="height: 80px; width: 80px; background-image: url('images/yelstar.png'); background-size: 100%; background-repeat: none; border: none; background-color: transparent; ">
												<input type="submit" name="star" value="2"  style="height: 80px; width: 80px; background-image: url('images/yelstar.png'); background-size: 100%; background-repeat: none; border: none; background-color: transparent; ">
												<input type="submit" name="star" value="3" style="height: 80px; width: 80px; background-image: url('images/star.png'); background-size: 100%; background-repeat: none; border: none;background-color: transparent;">
												<input type="submit" name="star" value="4" style="height: 80px; width: 80px; background-image: url('images/star.png'); background-size: 100%; background-repeat: none; border: none;background-color: transparent; ">
												<input type="submit" name="star" value="5" style="height: 80px; width: 80px; background-image: url('images/star.png'); background-size: 100%; background-repeat: none; border: none; background-color: transparent; ">
										
											<?php
											 }
			
											if($value == 3)
											{?>

												<input type="submit" name="star" value="1"  style="height: 80px; width: 80px; background-image: url('images/yelstar.png'); background-size: 100%; background-repeat: none; border: none; background-color: transparent; ">
												<input type="submit" name="star" value="2"  style="height: 80px; width: 80px; background-image: url('images/yelstar.png'); background-size: 100%; background-repeat: none; border: none; background-color: transparent; ">
												<input type="submit" name="star" value="3"  style="height: 80px; width: 80px; background-image: url('images/yelstar.png'); background-size: 100%; background-repeat: none; border: none; background-color: transparent; ">
												<input type="submit" name="star" value="4" style="height: 80px; width: 80px; background-image: url('images/star.png'); background-size: 100%; background-repeat: none; border: none;background-color: transparent; ">
												<input type="submit" name="star" value="5" style="height: 80px; width: 80px; background-image: url('images/star.png'); background-size: 100%; background-repeat: none; border: none; background-color: transparent; ">
											<?php
											}
										
											if($value == 4)
											{?>

												<input type="submit" name="star" value="1"  style="height: 80px; width: 80px; background-image: url('images/yelstar.png'); background-size: 100%; background-repeat: none; border: none; background-color: transparent; ">
												<input type="submit" name="star" value="2"  style="height: 80px; width: 80px; background-image: url('images/yelstar.png'); background-size: 100%; background-repeat: none; border: none; background-color: transparent; ">
												<input type="submit" name="star" value="3"  style="height: 80px; width: 80px; background-image: url('images/yelstar.png'); background-size: 100%; background-repeat: none; border: none; background-color: transparent; ">
												<input type="submit" name="star" value="4"  style="height: 80px; width: 80px; background-image: url('images/yelstar.png'); background-size: 100%; background-repeat: none; border: none; background-color: transparent; ">
												<input type="submit" name="star" value="5" style="height: 80px; width: 80px; background-image: url('images/star.png'); background-size: 100%; background-repeat: none; border: none; background-color: transparent; ">

											<?php }

											if($value == 5)
											{?>
												<input type="submit" name="star" value="1"  style="height: 80px; width: 80px; background-image: url('images/yelstar.png'); background-size: 100%; background-repeat: none; border: none; background-color: transparent; ">
												<input type="submit" name="star" value="2"  style="height: 80px; width: 80px; background-image: url('images/yelstar.png'); background-size: 100%; background-repeat: none; border: none; background-color: transparent; ">
												<input type="submit" name="star" value="3"  style="height: 80px; width: 80px; background-image: url('images/yelstar.png'); background-size: 100%; background-repeat: none; border: none; background-color: transparent; ">
												<input type="submit" name="star" value="4"  style="height: 80px; width: 80px; background-image: url('images/yelstar.png'); background-size: 100%; background-repeat: none; border: none; background-color: transparent; ">
												<input type="submit" name="star" value="5"  style="height: 80px; width: 80px; background-image: url('images/yelstar.png'); background-size: 100%; background-repeat: none; border: none; background-color: transparent; ">

											<?php } }   ?>

									</div>

						</form>


						<?php 
						$num_star = mysqli_query($conn, "SELECT sum(`star`) AS `sumstar` FROM `rating` WHERE `placeid` = '$placeid'");
						$data_sum = mysqli_fetch_assoc($num_star);
						$sum = $data_sum['sumstar'];
						$result_star = mysqli_query($conn, "SELECT  DISTINCT * FROM `rating` ");
						$rows_star = mysqli_num_rows($result_star);

						$avg = round(($sum / $rows_star),2) ;
						$result_avgrating = mysqli_query($conn, "SELECT * FROM `avgrating` WHERE `placeid` = '$placeid'");
						$rows_avgrating = mysqli_num_rows($result_avgrating);
						$data_avgrating = mysqli_fetch_assoc($result_avgrating);
						$idr = $data_avgrating['id']; 

						 if($rows_avgrating == 0)
						 {
						 	mysqli_query($conn, "INSERT INTO `avgrating` (`id`, `placeid`, `average`) values (NULL, '$placeid', '$avg')");

						 }
						 else
						 {
							
						 	mysqli_query($conn, "UPDATE `avgrating` SET `average` = '$avg' WHERE `avgrating`.`id` = '$idr'");
						 }



						
						 $num_likes = mysqli_query($conn, "SELECT sum(`value`) AS `sumlikes` FROM `likes` WHERE `placeid` = '$placeid'");
						  $data_sum_likes = mysqli_fetch_assoc($num_likes);
						  $sum_likes = $data_sum_likes['sumlikes'];
						  $result_likes = mysqli_query($conn, "SELECT  DISTINCT * FROM `likes` ");
						  $rows_likes = mysqli_num_rows($result_likes);

						 $result_countlikes = mysqli_query($conn, "SELECT * FROM `countlikes` WHERE `placeid` = '$placeid'");
						 $rows_count_likes = mysqli_num_rows($result_countlikes);
						 $data_countlikes = mysqli_fetch_assoc($result_countlikes);
						 $idn = $data_countlikes['id']; 
						
						 if($rows_count_likes == 0)
						 {
						 	mysqli_query($conn, "INSERT INTO `countlikes` (`id`, `placeid`, `sum`) values (NULL, '$placeid', '$sum_likes')");

						 }
						 else
						 {
							
						 	mysqli_query($conn, "UPDATE `countlikes` SET `sum` = '$sum_likes' WHERE `countlikes`.`id` = '$idn'");
						 }

						 


						} ?>
		




				<?php if($data['description'] != "") { ?>
				
				<hr style="color: red;">
				<h3 style="color: blue; margin-left: 20px; margin-right: 35px;">Details:</h3>
				<p class="desc" style="margin-left: 20px">
					<?php } echo $data['description'];?>
				</p>


				<?php if($data['ATTRACTIONS'] != "") { ?>
				<h3 style="color: blue; margin-left: 20px; margin-right: 35px;">ATTRACTIONS:</h3>
				<p class="desc" style="margin-left: 20px">
					<?php } echo $data['ATTRACTIONS'];?>
				</p>


				<?php if($data['CLIMATE'] != "") { ?>
				<h3 style="color: blue; margin-left: 20px; margin-right: 35px;">CLIMATE:</h3>
				<p class="desc" style="margin-left: 20px">
					<?php } echo $data['CLIMATE'];?>
				</p>

				<?php if($data['ROUTE'] != "") { ?>
				<h3 style="color: blue; margin-left: 20px; margin-right: 35px;">ROUTE:</h3>
				<p class="desc" style="margin-left: 20px">
					<?php } echo $data['ROUTE'];?>
				</p>

				<?php if($data['hotels'] != "") { ?>
				<h3 style="color: blue; margin-left: 20px; margin-right: 35px;">HOTELS:</h3>
				<p class="desc" style="margin-left: 20px">
					<?php } echo $data['hotels'];?>
				</p>
				<?php if($data['best_time_to_visit'] != "") { ?>
				<h3 style="color: blue; margin-left: 20px; margin-right: 35px;">BEST TIME TO VISIT:</h3>
				<p class="desc" style="margin-left: 20px">
					<?php } echo $data['best_time_to_visit'];?>
				</p>
				<?php if($data['historical_significance'] != "") { ?>
				<h3 style="color: blue; margin-left: 20px; margin-right: 35px;">HISTORICAL SIGNIFICANCE:</h3>
				<p class="desc" style="margin-left: 20px">
					<?php } echo $data['historical_significance'];?>
				</p>

				<?php 
					if(isset($_SESSION['id']))
					{
				?>

					<div class="panel panel-success" style="background-color : lightblue; margin-top: 40px; padding-bottom:  -20px;" >  
					<h2 style="margin-left: 400px; padding: 0; ">Feel free to share your experiences!!</h2>
				</div>
				
				

				
				<form method="post" action="comment.php" >
					<input type="hidden" name="userid" value="<?php echo $userid; ?>">
					<input type="hidden" name="placeid" value="<?php echo $id;?>">

					<textarea rows="10" cols="100" class="comment" name="comment" placeholder="Share your experiences here!" style="margin-left: 50px;"></textarea>

					<br>

					<button class="btn-primary" type="submit" style="width: 80px; margin-top: 10px; margin-left: 50px; font-weight: 400; margin-bottom: 50px; padding-left: -25px;" >Post</button>

				</form>
				

				<?php
					$query_comments = "SELECT * FROM `comments` WHERE `placeid` = '$id'";
					$result_comments = mysqli_query($conn, $query_comments);
	                 while($data_comments = mysqli_fetch_assoc($result_comments))
	                 {
	                 
				?>

				<div style="margin-left: 20px; margin-bottom: 20px">

						
							<?php 
							$useridn = $data_comments['userid'];
								$query_name = "SELECT `fname`,`lname` FROM `users` WHERE `id` = '$useridn'";
								$result_name = mysqli_query($conn, $query_name);
								$data_name = mysqli_fetch_assoc($result_name);
								?>
								<span style="background-color: lightgrey; border-radius: 20px; display: block; border: 1px solid black; height: auto; width: auto; overflow: auto; line-height: 30px; max-width: 500px; padding: 8px 10px; margin-top: -25px; margin-left: 22px;"> <strong> <?php echo ucwords($data_name['fname'] )  ?> <?php echo ucwords($data_name['lname']) ?> : </strong> <?php  echo $data_comments['comment'] ?> <br> <?php echo $data_comments['date'];?></span>
								<br>
								<br>
				</div>

				<?php
					}
				


				} ?>

				<?php
					$lat = floatval($data['latitude']);
					$lon = floatval($data['longitude']);

				?>
				<div id="map" class="centerimg" style="width: 90%; height: 250px; margin-left:20px; margin-right: 20px;"></div>
				    <script>
				      function initMap() {
				        var uluru = {lat: <?php echo $lat; ?>, lng: <?php echo $lon; ?>};
				        var map = new google.maps.Map(document.getElementById('map'), {
				          zoom: 13,
				          center: uluru
				        });
				        var marker = new google.maps.Marker({
				          position: uluru,
				          map: map
				        });
				      }

				     
				    </script>
				    <script async defer
				    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHtlPqJ3T1CW7Ny9VIgVdd20EGmPkChi0&callback=initMap">
				    </script>
				
			</div>
		<div class="container">
			<div class="sixteen columns">
				<div class="footer-copy-text">
					<p> NEPAL</p>
					<p>Made by Samiksha Poudel</p>
				</div>

			</div>
		</div>
	</footer> 	
		
	</div>	
	
		
	<!-- JAVASCRIPT
 <!--  ================================================== -->
<script type="text/javascript" src="js/jquery.js"></script>	
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/jquery.animsition.min.js"></script>
<script type="text/javascript">
(function($) { "use strict";
	$(document).ready(function() {
	  
	  $(".animsition").animsition({
	  
		inClass               :   'zoom-in-sm',
		outClass              :   'zoom-out-sm',
		inDuration            :    800,
		outDuration           :    800,
		linkElement           :   '.animsition-link', 
		// e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
		loading               :    true,
		loadingParentElement  :   'body', //animsition wrapper element
		loadingClass          :   'animsition-loading',
		unSupportCss          : [ 'animation-duration',
								  '-webkit-animation-duration',
								  '-o-animation-duration'
								],
		//"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser. 
		//The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
		
		overlay               :   false,
		
		overlayClass          :   'animsition-overlay-slide',
		overlayParentElement  :   'body'
	  });
	});  
})(jQuery);

</script>
<script type="text/javascript" src="js/jquery.easing.js"></script>
<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/cbpAnimatedHeader.min.js"></script>
<script type="text/javascript" src="js/menu.js"></script> 	
<script type="text/javascript" src="js/scroll.js"></script>	
<script type="text/javascript" src="js/animated-headline.js"></script>	
<script type="text/javascript" src="js/jquery.fs.tipper.min.js"></script>	
<script type="text/javascript" src="js/jquery.simple-text-rotator.js"></script>	
<script type="text/javascript">
    $(function(){
        var x = 0;
        setInterval(function(){
            x-=1;
            $('.moving-home').css('background-position', x + 'px 0');
        }, 10);
    })
</script>
<script type="text/javascript" src="js/custom-home6.js"></script>  
<!-- End Document
================================================== -->
</body>
</html>