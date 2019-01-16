<?php 

	if(isset($_GET['status']))
	{
		$status = $_GET['status'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body  background="http://backgroundcheckall.com/wp-content/uploads/2017/12/laptop-background-images-10.jpg" style="
    background-repeat: no-repeat; background-size: cover; height: 100%;" class="container">
	<div  class="row" >
			
			

			<div class="row">
				<?php
				if(isset($status))
						if($status == '1')
						{
							?>
									<div class="alert alert-danger" role="alert">
									  The account with this email is already exists!!
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
				?>
				<div class="col-sm-5">
					<div class="form-box">
						<div class="form-top">
							<div class="form-top-left">
								<h3>Login to our site</h3>
								<p>Enter valid account</p>
							</div>
							<div class="form-top-right">
								<i class="fa-fa-lock"></i>  
							 </div>
						</div>
						<div class="form-bottom">
							<form action="validation.php" method="post" class="login-form">
								<div class="form-group">
									<label class="sr-only">Email</label>
									<input type="email" name="email" placeholder="example@gmail.com" class="form-username form-control" autocomplete="off" autofocus="false" autofill = "false" required="required" maxlength="50" minlength="8" style="font-weight: bold; font-size: 15px;" >
								</div>
								
								<div class="form-group">
									<label class="sr-only">Password</label>
									<input type="password" name="password" placeholder="Password" class="form-password form-control" autocomplete="off" autofocus="false" autofill="false" required="required"  maxlength="20" minlength="8" style="font-weight: bold; font-size: 15px;" >
								</div>
							
								 <button type="submit" class="btn" style="font-weight: bold;" >Sign in!</button>
							</form>
						
							<br>

							<br>
							<br>

						</div>
						
					</div>
					

				</div>

				<div class="col-sm-1 middle-border"></div>
                  <div class="col-sm-1"></div>
				

					<div class="col-sm-5">
						<div class="form-box" style="float: right; width: 500px; ">
							<div class="form-top">
								<div class="form-top-left">
									<h3>Sign up now</h3>
	                            	<p>Provide your details:</p>
								</div>

								<div class="form-top-right">
	                        		<i class="fa fa-pencil"></i>
	                        	</div>
							</div>

							<div class="form-bottom">
								<form action="signup.php" method="post" class="registration-form">
									<div class="form-group">
										<label class="sr-only">Firstname</label>
										<input type="text" name="fname" placeholder="Firstname" class="form-first-name form-control" autocomplete="off" autofocus="false"  required="required"  maxlength="20" style="font-weight: bold; font-size: 15px;" >
									</div>

									<div class="form-group">
										<label class="sr-only">Lastname</label>
										<input type="text" name="lname" placeholder="Lastname" class="form-first-name form-control" autocomplete="off" autofocus="false"  required="required"  maxlength="20" style="font-weight: bold; font-size: 15px;" >
									</div>

									<div class="form-group">
										<label class="sr-only">Email</label>
										<input type="email" name="email" placeholder="example@gmail.com" class="form-first-name form-control" autocomplete="off" autofocus="false"  required="required"  maxlength="50" minlength="8" style="font-weight: bold; font-size: 15px;" >
									</div>




									 <div class="form-group">
				                        <label class="sr-only">Password</label>
				                        <input type="password" name="password" placeholder="Password" autocomplete="off" class="form-last-name form-control" autofocus="true" required="required"  maxlength="20" minlength="8" style="font-weight: bold; font-size: 15px;"  >
				                      </div>


				                      
				                        <button type="submit" class="btn" style="font-weight: bold;" >Sign me up!</button>
									</form>
								</form>
							</div>
							
						</div>
						
					</div>
				
			</div>


	</div>
</body>
</html>
