<?php
  //connect to php 
  include('db.php');
  session_start();

?>

<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <title>NEPAL TOURIST GUIDE</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

  <link rel="stylesheet" href="css/layout.css"/>

  <link rel="stylesheet" type="text/css" href="search.css">

</head>
<body>  
    <!--include menu here-->
    <?php 
            include('includes/menu.php');
    ?>

       <section class="cd-section">
          <div class="cd-block">
             <div class="home-top-video"> 
                <div class="moving-home"></div>
                <div class="big-text-top">
                   <div class="flippy"  style="margin-top: -75px;">
                      <span class="rotate">Experience the beauty of Nepal, Heaven is a MYTH but Nepal is REAL, My Country Nepal: MY Pride </span>
                  </div>
              </div>
              <div class="visit" style="margin-top: -40px;"> - come visit us - </div>
              <div class="social-top">
               <ul class="list-social">
                <?php 
                     if(!isset($_SESSION['id']))
                     {
                ?>
                  <form method="post" action="form.php">
                     <center><button class="reg" style="width:auto; ">Register</button></center>
                 </form>
                 <form method="post" action="form.php">
                     <button class="log" style="width:auto; ">Login</button>
                 </form>
                <?php
                 } 

                else{
                    $id = $_SESSION['id'];
                    $query = "SELECT `fname` from users WHERE `id` = '$id'";
                    $result = mysqli_query($conn, $query);
                    $data = mysqli_fetch_assoc($result);
                    ?>
                    <div style="border-radius: 25px; border: 1px solid grey; width: auto; height: auto; background-color: #F0FFFF; max-width: 500px; margin-left: 370px; margin-top: -30px;">
                     <h2 style="color: #ffffff; text-transform: uppercase; font-family: 'Galano-Bold'; color: #00FFFF; margin-top: px; "> Hey, 
                    <?php
                    echo $data['fname']."<br>Welcome Back!</h2>";

                    ?>   

                    </div>
                    <?php
                    
                }
                ?>
                
             </section>
             <a href="#projects-grid" class="scroll scroll-down" style="float: center;"></a>
             <footer class="footer">
              <form style="float: right; color: #2F4F4F; margin-top: -30px; font-size: 15px; font-family: Galano-Bold; margin-right: 20px;" action="index.php" method="GET" >
                Sort By
                <select name="sortingType">
                  <option value="0" >Ratings</option>
                  <option value="1">Likes</option>
                  <input type="submit" style="background-color: blue; color: white; height: 20px;">
                </select>
              </form>
              <div id="projects-grid">
                 <?php 
                 if((!isset($_GET['sortingType'])) || (isset($_GET['sortingType']) && $_GET['sortingType'] == '0'))
                 {
                      $result_place = mysqli_query($conn, "SELECT *, AVG(`star`) AS AVG, COUNT(`placeid`) FROM `rating` WHERE `star` > '0' GROUP BY `placeid` ORDER BY AVG(`star`) DESC, COUNT(`placeid`) DESC limit 6");
                 }
                 else if(isset($_GET['sortingType']) && $_GET['sortingType'] == '1')
                 {
                    $result_place = mysqli_query($conn, "SELECT * FROM `likes` WHERE `value` > '0' GROUP BY `placeid` ORDER BY COUNT(`value`) DESC limit 6");
                 }            
                 while($data = mysqli_fetch_assoc($result_place))
                 {
                    $sortedPlaceId = $data['placeid'];
                    $sortedplaceQuery = mysqli_query($conn, "SELECT * FROM `featured_place` WHERE `id` = $sortedPlaceId");
                    $sortedData = mysqli_fetch_assoc($sortedplaceQuery);
                    $pId = $sortedData['id'];
                     ?>
                     <a href="detail.php?id=<?php echo $sortedData['id'];?>" class="animaition-link">
                       <div class="portfolio-box-1 branding">
                          <div class="mask-1"></div>
                          <div>
                              <img class="ilam" src="img/<?php echo $sortedData['id'].".jpg";?> " alt="">
                             
                             <h6 class="smalltitle" style="color: white;">
                                <?php echo $sortedData['name']; ?>
                              <div >
                            <p style="margin-left: -50px; color: white;"> AverageRating:<?php 
                            if(!isset($_GET['sortingType']) || (isset($_GET['sortingType']) && $_GET['sortingType'] == '0'))
                            {
                                echo round($data['AVG'],2); 
                            
                            }
                            else
                            {
                              $avgRating = mysqli_query($conn, "SELECT *, AVG(`star`) AS AVG FROM `rating` WHERE `star` > 0  AND `placeid` = '$pId' GROUP BY `placeid` ORDER BY AVG(`star`) DESC");
                              $mData = mysqli_fetch_assoc($avgRating);
                              echo round($mData['AVG'],2);
                            }
                            ?> </p>
                          </div>
                              </h6>
                          <div class="line-mask"></div>
                          <?php 
                            $likeQuery = mysqli_query($conn, "SELECT *, COUNT(`placeid`) AS COUNT FROM `likes` WHERE `placeid` =  $pId AND `value` = '1'");
                            $likeAssoc = mysqli_fetch_assoc($likeQuery);
                          ?>
                          <p style="color: white;">Total likes: <?php echo $likeAssoc['COUNT']; ?> </p>
                          

                          </div>
                         
                          
                      </div>

                  </a>
                  <?php } ?>
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
<!-- End Document
    ================================================== -->
</body>
</html>