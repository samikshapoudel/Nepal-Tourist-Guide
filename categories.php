<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

	
	
	
	<link rel="stylesheet" href="css/layout.css"/>
	<link rel="stylesheet" type="text/css" href="search.css">

	
</head>
<body style="background-color:#B0E0E6;">
		<?php 
			include('db.php');
			include('includes/menu.php');
			$catid = $_GET['categories'];


			if (isset($_GET['categories'])) 
			{
				$sql = "SELECT * FROM `featured_place` where `catid1` = '$catid' OR `catid2` = '$catid' OR `catid3` = '$catid'";

				$result = mysqli_query($conn, $sql);
			?>


			<div id="projects-grid">
				<br>
				<br>
				<br>
				<br>
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
					
						
				<?php }

			} ?>
			</div>

		<!-- JAVASCRIPT -->
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
    
    loading               :    true,
    loadingParentElement  :   'body', 
    loadingClass          :   'animsition-loading',
    unSupportCss          : [ 'animation-duration',
      '-webkit-animation-duration',
      '-o-animation-duration'
      ],

    
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
				
</body>
</html>