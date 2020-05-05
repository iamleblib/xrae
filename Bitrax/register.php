<?php include ('functions.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SignUp | BTXC</title>
    <link rel="icon" type="image/png" href="../btc.png"/>
<!--===============================================================================================-->
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../sign/css/eutil.css">
  <link rel="stylesheet" type="text/css" href="../sign/css/emain.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- responsive css -->

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

    <script type="text/javascript">
    function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


  <div class="col-4">
        </div>
<!-- Modal

LOGIN-->

<!-- Modal start -->

<div class="modal fade col-12" id="Modal-vert-center-demo" tabindex="-1" role="dialog" aria-labelledby="Modal-vert-center-demo-label" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">

      <div class="modal-header bg-success">

        <h5 class="modal-title text-light" id="Modal-vert-center-demo-label">Login <i class="fa fa-sign-in"> </i></h5>


          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

<center> <form action="functions.php" method="POST" autocomplete="on" class="">
            <center>
          <a href="index.php?#PMAURL-0:index.php?db=&table=&server=1&target=&token=592804bd3e81549e4cd3f5a7fd3b0ee1" title="Home"><img src="../btc.png" width="100px" style="border-radius: 100pc" class="text-align-center">   <p>Login to your to Bitraxcoin Accounsst</p></a>
        </center>

          <div class="wrap-input100" data-validate = "Valid email e.g: name@info.ex">
            <?php echo '<input class="input100 text-dark" required="" type="email" name="clientemail">' ?>
            <span class="focus-input100" data-placeholder="Email"></span>
          </div>

          <div class="wrap-input100" data-validate="Enter password">
            <span class="btn-show-pass">
              <i class="fa fa-eye"></i>
            </span>
            <?php echo '<input class="input100 text-dark" required="" type="password" name="password">' ?>

            <span class="focus-input100" data-placeholder="Password"></span>
          </div>


          <button name="login" class="btn btn-success btn-sm" style="float: left; width: 32%; font-size: 15px">
                      LOGIN
                    </button>
                    <br>
                    <a class="txt2" data-dismiss="modal">
                      <span class="btn btn-outline-info btn-sm float-right">
                      Register <i class="fa fa-sign-in"></i>
                    </span>
                  </a>
                </form>
                </center>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>



      </div>

    </div>

  </div>

</div>




                          <?php
                            if (isset($_GET['success'])) {

                                  }
                                  else if (isset($_GET['failed'])) {
                                    echo "<script type='text/javascript'>alert ('Incorrect Login Details')</script>";

                                  } ?>
		<div class="wrapper" style="background-image: url('images/bg-registration-form-2.jpg');">
			<div class="inner">
        <label style="cursor: pointer; box-shadow: white 0px 2px 6px 0px; padding: 10px" data-toggle="modal" data-target="#Modal-vert-center-demo" class="float-right btn-sm btn-success">Login <i class="fa fa-sign-in"></i></label>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off" class="validate-form">
          <a href="index.php?#PMAURL-0:index.php?db=&table=&server=1&target=&token=592804bd3e81549e4cd3f5a7fd3b0ee1" title="Back to Home"><img src="../btc.png" width="100px"></a>
					<h3>Register</h3>
            <div class="form-wrapper wrap-input100 validate-input">
              <input class="input100" type="text" name="full_name" value="<?php echo htmlspecialchars($full_name); ?>">
                <span class="focus-input100" data-placeholder="Full name | Username"></span>
            </div>

            <div class="form-wrapper wrap-input100 validate-input" data-validate = "Valid email e.g: name@info.ex">
              <input class="input100" type="email" name="clientemail" value="<?php echo htmlspecialchars($clientemail); ?>">
                    <span class="focus-input100" data-placeholder="Email"></span>
            </div>
            <?php
                      if (isset($_GET['empty'])) {
                      }  else if (isset($_GET['exist'])) {
                        echo "<div class='alert alert-warning'>

            <label type='button' class='close' data-dismiss='alert' aria-label='Close'>

                <span aria-hidden='true'>&times;</span>

              </label>

                <p class='text-danger'><i class='fa fa-bookmark' aria-hidden='true'></i> Email Already taken</p>

            </div>";
                      }
                ?>
            <div class="form-wrapper wrap-input100 validate-input" data-validate = "InValid wallet ID">
              <input class="input100" type="text" minlength="15" name="btc_id" value="<?php echo htmlspecialchars($btc_id); ?>">
                    <span class="focus-input100" data-placeholder="Your BTC wallet address"></span>
            </div>

            <div class="form-wrapper wrap-input100 validate-input" data-validate = "InValid Phone Number">
              <input class="input100" type="tel" maxlength="14" minlength="10" name="phone" value="<?php echo ($phone); ?>">
                    <span class="focus-input100" data-placeholder="Phone Number"></span>
            </div>

              <div class="wrap-input100 validate-input" data-validate="password">
                          <span class="btn-show-pass">
                            <i class="fa fa-eye"></i>
                          </span>
                <input class="input100" type="password" name="password" value="<?php echo ($password); ?>">
                <span class="focus-input100" data-placeholder="Enter Password"></span>
            </div>



  <?php
                      if (isset($_GET['empty'])) {
                      }  else if (isset($_GET['short'])) {
                        echo "<div class='alert alert-warning'>

            <label type='button' class='close' data-dismiss='alert' aria-label='Close'>

                <span aria-hidden='true'>&times;</span>

              </label>

                <p class='text-danger'><i class='fa fa-bookmark' aria-hidden='true'></i>Password Too short</p>
                </div>";
                      } else if (isset($_GET['missmatch'])) {
                        echo "<div class='alert alert-warning'>

            <label type='button' class='close' data-dismiss='alert' aria-label='Close'>

                <span aria-hidden='true'>&times;</span>

              </label>

                <p class='text-danger'><i class='fa fa-bookmark' aria-hidden='true'></i> Password not match! </p>

            </div>
                ";
                      }
                ?>


                      <div class="wrap-input100 validate-input" data-validate="Confirm password">
                        <input type="password" class="input100" name="password_again" value="<?php echo ($password_again); ?>">
                        <span class="focus-input100" data-placeholder="Confirm Password"></span>
                    </div>
													<?php
														if (isset($_GET['userEmail'])) {
															$email = $_GET['userEmail'];
														}
														echo"<input type='hidden'  name='ref' value='$email'>";
													 ?>
                          <?php  echo'<input type="hidden"  name="earning" value="$0.00">' ?>
                          <?php   echo'<input type="hidden"  name="bonus" value="$1.00">' ?>
                          <?php   echo'<input type="hidden"  name="when_" value="0-0-2020">' ?>
                          <?php   echo'<input type="hidden"  name="to_exp" value="0-0-2020">' ?>
                          <?php   echo'<input type="hidden"  name="invested" value="$0.00">' ?>
                          <?php  echo'<input type="hidden"  name="msg" value="Hello! Welcome to Bitraxcoin, you currently have $1 in your wallet account, please start your first investment and earn your weekly interest.">' ?>
                          <?php   echo'<input type="hidden"  name="current_earning_4_withdraw" value="$1.00">' ?>

					<button name="register" class="bg-success">Register Now <i class="fa fa-arrow-right" style="margin: 5px"></i></button>
          <br>
				</form>
          <label class="col-md-12 float-left"><p>Already registered<a href="login.php?#PMAURL-0:index.php?db=&table=&server=1&target=&token=592804bd3e81549e4cd3f5a7fd3b0ee1" class="text-success"> Login</a></p></label>

			</div>
		</div>
  </body>
		<?php include 'widget.php' ?>
    <script src="../js/ejquery-3.2.1.min.js"></script>
    <script src="../js/ebootstrap.min.js"></script>
    <script src="../js/emain.js"></script>
    <!-- All Plugins ../sign/js -->
    <!-- Active ../sign/js --><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
