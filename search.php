<?php 
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "nepal_tourist";

	$conn =  mysqli_connect($servername, $username, $password, $dbname);

	if(!isset($_POST['status']) || $_POST['status'] == '0')
	{
		$result = mysqli_query($conn, "SELECT * FROM featured_place ");
	}
	else if(isset($_POST['status']) && $_POST['status'] == '1')
	{
		$q =$_POST['q'];
			
		
			$result = mysqli_query($conn, "SELECT * FROM featured_place where name LIKE '%$q%' or description like '%$q%' or ATTRACTIONS like '%$q%' or ROUTE like '%$q%' or tag like '%$q%'"); 

		
		
	
	
	} 
	else
	{
		$result = mysqli_query($conn, "SELECT * FROM featured_place ");	
	}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>search</title>
	<link rel="stylesheet" type="text/css" href="search.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	
	
	
	<link rel="stylesheet" href="css/layout.css"/>
	
	<link rel="stylesheet" type="text/css" href="search.css">

	<script type="text/javascript">
		
	</script>
	
</head>
<body style="background-color: 	#E0FFFF;">

	
			

<?php
		if($_POST['status'] == '1')
		{?>
			<button class="btn-success" style="width: 20%; margin-right: auto; margin-left: 550px; color: red; margin-top: 120px;"> <h4 style="text-align: center; "><a href="index.php?status=0" style="margin-left: 20px;">Clear Search (X)</a></h4> </button>
	<?php
		}

	?>

	<hr>

	<?php
	include('includes/menu.php');
	$num_rows = mysqli_num_rows($result);
	if($num_rows == 0)
	{
		?>

		<h4 style="text-align: center;">
		<?php echo  " <b> <?php ".$q." ?> </b> Not found, please enter next place. <?php " ?> ; 
		</h4>
		<?php
	} 

	?>


		<div id="projects-grid">
			<?php 
				while($data = mysqli_fetch_assoc($result))
				{
			?>
				<a href="detail.php?id=<?php echo $data['id'];?>" >
					
						
						<div class="portfolio-box-1 branding">
                          <div class="mask-1"></div>
                          <div>
                             <img class="ilam" src="img/<?php echo $data['id'].".jpg";?> " alt="">
                             <h6 class="smalltitle"><?php echo $data['name'];
                             $placeid = $data['id'];
                             $query_totlike = "SELECT * FROM `likes` WHERE `placeid` = '$placeid' AND `value` = '1'";
                             $result_totlike = mysqli_query($conn, $query_totlike);
                             $num_rows = mysqli_num_rows($result_totlike);
                              ?></h6>
                          <div class="line-mask"></div>
                          <p>Total likes: <?php echo $num_rows; ?> </p>

                          </div>
                         
                          
                      </div>

				</a>
					
						
				<?php } ?>
			</div>

			<?php $resultPlace = mysqli_query($conn, "SELECT * FROM featured_place ");
	$searchData = mysqli_fetch_assoc($resultPlace);
	$dataId = $searchData['id'];
	echo $dataId; ?>

	
</body>
</html>