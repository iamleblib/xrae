<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Login </title>
<!--===============================================================================================-->	
	  <link rel="icon" type="image/png" href="../btc.png"/>
<!--===============================================================================================-->
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../sign/css/eutil.css">
  <link rel="stylesheet" type="text/css" href="../sign/css/emain.css">
  <link rel="stylesheet" href="../bitrax/assets/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="../bitrax/assets/css/animate.css">
    <link rel="stylesheet" href="../bitrax/assets/css/font-awesome.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="../bitrax/assets/css/styles.css">
    <!-- responsive css -->

<!--===============================================================================================-->
</head>
<body style="background: silver">
	<div class="limiter">
		<div class="container-login100" style="background: url('img/bg-img/login.jpg') !important">
			<div class="wrap-login100">
					<div>
					</div>
					<?php  
			            if (isset($_GET['success'])) {
			              echo "<span class='alert alert-success'>Registration Successful!</span>";
			            }

			            else if (isset($_GET['emptyLog'])) {
			              echo "<span class='label label-danger'>All fields are required</span>";
			            
			            }
			          
			          ?>

				<form action="<?php echo 'Config/Adminconnection.php' ?>" method="POST" autocomplete="off" class="login100-form validate-form">
					
					<h1 class="">
						<center><img src="../btc.png" width="100px"  style="background: transparent;"></center>
					</h1>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email e.g: name@info.ex">
						<input class="input100" type="email" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="fa fa-eye" style="color: black"></i>
						</span>
						<input class="input100" type="password" name="password">
						
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					<?php 
						if (isset($_GET['success'])) {
			              
			            } 
			            else if (isset($_GET['failedLog'])) {
			              echo "<script type='text/javascript'>alert ('Incorrect Password')</script>";
			            
			            } ?>

            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn" name="login">
								Login
							</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
	
    </script>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	
<!--===============================================================================================-->
<script src="../js/ejquery-3.2.1.min.js"></script>
    <script src="../js/ebootstrap.min.js"></script>
    <script src="../js/emain.js"></script>

</body>
</html>