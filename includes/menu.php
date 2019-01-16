<?php
  include('db.php');
   

  session_start(); ?>
<div class="animation">




		<div id="menu-wrap" class="menu-back cbp-af-header">
			<div class="container">
				<div class="sixteen columns">
					<div  style="margin-left: -100px;"><img class="nepal" src="img/nepal.jpg" align="left"></div>

                <form method="post" action="search.php" >

                 <input type="hidden" name="status" value="1">

                 <input type="submit" class = "searchBtn" value="Go!" style="height: 45px; float: right; margin-top: -2px; margin-right: -20px; margin-right: 15px;">
                 <input type="text" name ="q" class ="" placeholder="Search.."  maxlength="100" autocomplete="on" style="width:20%;height: 40px; float: right; background: #F0F3F4; color: black; font-weight: bold; padding-left: 10px; font-size: 15px;" required />

             </form>


             <ul class="slimmenu">
              <li>
                 <a class="active-menu" href="index.php">homepage</a>

             </li>
             <li>
                 <a href="#projects-grid"> Featured Places</a>

             </li>

             <li>

                 <a href="#" class="animsition-link">Categories</a>
                 <ul class="submenu-back">
                    <li> 

                    

                       <a href="categories.php?categories=1" class="animsition-link">Temples</a>
                   </li>
                   <li>
                       <a href="categories.php?categories=2" class="animsition-link">Religious and Spiritual Places</a>
                   </li>
                   <li>
                       <a href="categories.php?categories=3" class="animsition-link">Parks and Gardens</a>
                   </li>
                   <li>
                       <a href="categories.php?categories=4" class="animsition-link">National Parks</a>
                   </li>
                   <li>
                       <a href="categories.php?categories=5" class="animsition-link">Durbar Squares</a>
                   </li>
                   <li>
                       <a href="categories.php?categories=6" class="animsition-link">Historical Places</a>
                   </li>
                   <li>
                       <a href="categories.php?categories=7" class="animsition-link">Nature Specific</a>
                   </li>
                   <li>
                       <a href="categories.php?categories=8" class="animsition-link">Lakes and Rivers</a>
                   </li>
                   <li>
                       <a href="categories.php?categories=9" class="animsition-link">Fun and Entertainment</a>
                   </li>
                   <li>
                       <a href="categories.php?categories=10" class="animsition-link">Trekking and Hiking</a>
                   </li>
                   <li>
                       <a href="categories.php?categories=11" class="animsition-link">Museums</a>
                   </li>
                   <li>
                       <a href="categories.php?categories=12" class="animsition-link">Snowfall</a>
                   </li>
            
               </ul>
           </li>
           <li>
          <?php 
             if (isset($_SESSION['id'])) {
                   ?>
                 <a href="#" class="animsition-link"> My Profile</a>
                 <ul class="submenu-back">
                    <li> 
                      <?php 
                              include('db.php');
                              $userid = $_SESSION['id'];
                              $query = "SELECT `fname` from users WHERE `id` = $userid";
                              $resultname = mysqli_query($conn, $query);
                              $data = mysqli_fetch_assoc($resultname);
                      ?>
                       
                   </li>
                   
                   <li>
                       <a class="" href="logout.php">Logout</a>
                   </li>


               </ul>
           </li>
           <li>
                   
                   <?php
                 } else {
                  ?>
                   <a class="" href="form.php">Signin</a>
                   <?php
                 }
              ?>
           </li>


       </li>
   </ul>

        </div>
</div>
</div>	