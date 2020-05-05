<?php include 'Config/db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    // if (!isset($_GET['user'])) {
    //   header("location: index.php");
    // } else {
    //   $user = $_GET['user'];
    // }
  ?>
    <div class="container-login100" style="background: url('../img/banner-bg-02.jpg') !important">
     
      <div class="wrap-login100" style="background: transparent !important">
  <br>
  <br>
        <form class="validate-form">
        <img src="../btc.png" style="width: 100px !important">
            <?php 
              if (isset($_GET['vkey'])) {
                //  get Vkey
                $vkey = $_GET['vkey'];
                // check for vkey
                $checkVkay = mysqli_query($conn, "SELECT * FROM signup WHERE verified = 0 AND vkey = '$vkey'");
                if (mysqli_num_rows($checkVkay) > 0) {
                  // validate the user
                  $validateUser = mysqli_query($conn, "UPDATE signup SET verified = '1' WHERE vkey = '$vkey'");
                  if ($validateUser) {
                    echo "<h3 style='padding-top:25px; color: white;'>Congratulations, Your Account Has Been Verified, You will be redirected to our login page...  </h3>
                    
                    <meta http-equiv='refresh' content='3;url=login.php' />";
                  } else {
                    return false;
                  }
                } else {
                 echo "<h3 style='padding-top:25px; color: white;'>This account has been verified already... You Will Be Redirected to login!</h3>
                    
                    <meta http-equiv='refresh' content='3;url=login.php' />";
                }
              }
              ?>
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