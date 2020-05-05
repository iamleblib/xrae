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

    <div class="container-login100" style="background: url('../img/banner-bg-02.jpg') !important">
     
      <div class="wrap-login100" style="background: transparent !important">
        <?php  
              if (isset($_GET['failed'])) {
               echo "
               <div class='alert alert-danger'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span></button>

                    <i class='fa fa-bell text-danger' aria-hidden='true'></i>
                    <strong class='text-danger'>Incorrect Email and Password</strong>
               </div>
                ";
                 } else if (isset($_GET['notVerified'])) {
                  echo "
                  <div class='alert alert-danger'>
                         <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                           <span aria-hidden='true'>&times;</span></button>
   
                       <i class='fa fa-ban text-danger' aria-hidden='true'></i>
                       <strong class='text-danger'>Account Not Verified!</strong>
                  </div>
                   ";
                 }
               ?>
               <center> <?php  
                  if (isset($_GET['success'])) {
                    echo "<span class='btn btn-success btn-sm'> <i class='fa fa-check'></i> Registration Successful!</span>";
                  }

                  else if (isset($_GET['empty'])) {
                    echo "<span class='alert alert-danger'>All fields are required</span>";
                  
                  }
                
                ?></center>
                <br>
                <br>
        <form action="functions.php" method="POST" autocomplete="on" class="validate-form">
            <center><a href="index.php?#PMAURL-0:index.php?db=&table=&server=1&target=&token=592804bd3e81549e4cd3f5a7fd3b0ee1" title="Home"><img src="../btc.png" width="100px" style="border-radius: 100pc" class="text-align-center"></a></center>
          <h1 class="">
          </h1>

          <div class="wrap-input100 validate-input" data-validate = "Valid email e.g: name@info.ex">
            <input class="input100 text-light" type="email" name="clientemail">
            <span class="focus-input100" data-placeholder="Email"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <span class="btn-show-pass text-light">
              <i class="fa fa-eye text-light" style="color: lightgrey !important"></i>
            </span>
            <input class="input100" type="password" name="password" style="color: lightgrey">
            
            <span class="focus-input100" data-placeholder="Password"></span>
          </div>
          <?php 
            if (isset($_GET['success'])) {
                    
                  } 
                  else if (isset($_GET['failed'])) {
                    echo "<script type='text/javascript'>alert ('Incorrect Login Details')</script>";
                  
                  } ?>

            <a class="txt2" href="register.php??af_siteid=FX-LPL01-02-04en&affiliate_id=498764&lref=&lrefch=affiliate&pixel=1&subid1=&subid2=">
              <span class="btn btn-outline-info btn-md float-right" style="float: right;">
              Register <i class="fa fa-sign-in"></i>
            </span>
          </a>
              <button name="login" class="btn btn-success btn-sm" style="float: left; width: 32%; font-size: 15px">
              <i class="fa fa-chevron-circle-right fa-spin"></i>
            </button>
        </form>

<br>
<br>
<br>
<div class="container">
 
<!-- Button trigger modal -->
 
 <em class="text-warning"  data-toggle="modal" data-target="#Modal-simple-demo" style="cursor: pointer; font-size: 10px">Forgot Password ?</em>
 
 
 
<!-- Modal -->
 
<div class="modal fade" id="Modal-simple-demo" tabindex="-1" role="dialog" aria-labelledby="Modal-simple-demo-label" aria-hidden="true">
 
  <div class="modal-dialog" role="document">
 
    <div class="modal-content">
 
      <div class="modal-header">
 
        <h5 class="modal-title" id="Modal-simple-demo-label">Forgot Password</h5>
        <p>This will take few minutes to recover</p>
 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 
          <span aria-hidden="true">&times;</span>
 
        </button>
 
      </div>
 
      <div class="modal-body">
 
       <form class="form-input" action="tt" method="POST">
         <div class="wrap-input100" data-validate = "Valid email e.g: name@info.ex">
            <input class="input100" type="email" name="clientemail" required="">
            <span class="focus-input100" data-placeholder="Email"></span>
          </div>
         <button type="button" class="btn btn-info" >Submit</button>
       </form>
 
      </div>
 
      <div class="modal-footer">
 
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-remove"></i>Close</button>
 
            <a class="txt2" href="register.php?af_siteid=FX-LPL01-02-04en&affiliate_id=498764&lref=&lrefch=affiliate&pixel=1&subid1=&subid2=">
              <span class="btn btn-primary btn-sm float-right" style="float: right;">
              New to Register <i class="fa fa-sign-in"></i>
            </span>
          </a>
 

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