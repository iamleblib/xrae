<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="15;url=login.php" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Login | Bitrax</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="../btc.png">

    <link rel="stylesheet" href="../sign/css/bootstrapp.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- Favicon -->

    <!-- Core Stylesheet -->
  <link rel="stylesheet" type="text/css" href="../sign/css/eutil.css">
  <link rel="stylesheet" type="text/css" href="../sign/css/emain.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
    <!-- header-area end -->
<!--===============================================================================================-->
</head>
<body >
<?php 
    if (!isset($_GET['user'])) {
      header("location: index.php");
    } else {
      $user = $_GET['user'];
    }
  ?>
    <div class="container-login100" style="background: url('../img/banner-bg-02.jpg') !important">
     
      <div class="wrap-login100" style="background: transparent !important">
  <br>
  <br>
        <form class="validate-form">
        <img src="../btc.png" style="width: 100px !important">

            <h5 style="padding-top:25px; color: white">Hello <h4 style="color: green"> <?php echo $user; ?></h4></h5>
                        <hr style="background: orange; padding: 1px; border-radius: 100px">
                        <p style="font-size: 15px; color: grey">
                        Your Registration to Bitraxcoin Account was Successfull, Please Check Your email <i style="color: gold"><?php echo $user; ?></i> to Verify Your Account! <br>
                        <i style="color:tomato"> Also Remember to check your spam box!</i>
                        </p></b></p>
        </form>

<br>
<br>
<br>
<div class="container">
 
<!-- Button trigger modal -->
 
 
</div>
</div>
</div>
</div>
</div>



     <!-- show pasword-->
    <script type="text/javascript">
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


</script>
    </script>
<!--===============================================================================================-->
<!--===============================================================================================-->
  
<!--===============================================================================================-->
  <script src="../js/ejquery-3.2.1.min.js"></script>
    <script src="../js/ebootstrap.min.js"></script>
    <script src="../js/emain.js"></script>

</body>
</html>