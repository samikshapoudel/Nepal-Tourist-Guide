<?php 
    session_start();
    if(isset($_SESSION['id']))
    {
        header('Location: index.php');
    }
    $server = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'nepal_tourist';

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(isset($_GET['status']))
    {
        $status = $_GET['status'];
    }

    if(isset($_POST['login']))
    {
            $sql = "SELECT * FROM `users` where `email` = '".$_POST['email']."' and `password` = '".$_POST['password']."' ";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_assoc($result);

           
    }
    

    

?>


<!DOCTYPE html>
 <html>
 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <title>Login form</title>
 </head>
 <body background="images/post-image.jpg" style="height: 100%; width: 100%; background-repeat: no-repeat; background-position: center; background-size: cover;">
    <div class="container">  
        <div class="row">
            <?php
                if(isset($status))
                        if($status == '1')
                        {
                            ?>
                                    <div class="alert alert-danger" role="alert">
                                      The email id already exists!! Please try new one!!
                                    </div>
                            <?php
                        }
                        else if($status == '2')
                        {
                            ?>
                                        <div class="alert alert-success" role="alert">
                                      Congratulations, your account has been created!!!
                                    </div>
                            <?php
                        }

                        

                        else if ($status == '4')
                         {
                            ?>

                            <div class="alert alert-danger" role="alert">
                                      Sorry, this account doesnt exist. Recheck your email or password please!!!
                                    </div>

                            <?php 

                        }
                        else if ($status == '5')
                         {
                            ?>

                            <div class="alert alert-danger" role="alert">
                                      Sorry, this account has been blocked!!!
                                    </div>

                            <?php 

                        }

            ?>
        <div id="loginbox" style="margin-top:120px; margin-right: 180px;" class="col-sm-5">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        
                            
                        <form id="loginform" class="form-horizontal" role="form" method="post" action="validation.php">
                            <input type="hidden" name="visible" value="0">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="email" value="" class="input-field"" placeholder="email" required="required">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password" required="required" minlength="8" value="" class="input-field"">
                                    </div>
                                    

                                
                           


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button id="btn-login" class="btn btn-success" type="submit" name="login" >Login  </button>
                                     
                                    </div>
                                </div>


                            </form>     



                        </div>                     
                    </div>  
        </div>

       <div style="border-left:1px solid white;
                    height: 400px;
                    position: absolute;
                    left: 50%;
                    margin-left: -3px;
                    margin-top: 60px;">
           
       </div>
         

        <div id="signupbox" style=" margin-top:100px" class="col-sm-5">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            
                        </div>  
                        <div class="panel-body" style="">
                            <form id="signupform" class="form-horizontal" role="form" method="post" action="signup.php">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label " style="margin-left: -35px;">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address" style="margin-left: 35px;">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label" >First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="fname" placeholder="First Name" required="required"  maxlength="20">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lname" placeholder="Last Name" required="required"  maxlength="20">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label" style="margin-left: -5px;">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required="required"  maxlength="20" minlength="8" style="margin-left: 5px;">
                                    </div>
                                </div>
                                    
                               

                                
                                        <button id="btn-signup" type="submit" class="btn btn-info" style="margin-left: 10px;"> Sign Up</button>
                        
                            </form>
                         </div>
                    </div>
      
         </div> 
     </div>
    </div>

 </body>
 </html>


 