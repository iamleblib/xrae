<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="../../../../btc.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Message Alert
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
    <script src="../../../assets/js/converter.js"></script>


</head>

<?php include 'head.php' ?>

      <div class="panel-header panel-header-sm" style="background: #00000f">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card" style="background: black">
              <div class="card-header">
                <h5 class="title text-light">From Admin</h5>
                <p style="font-size: 15px" class="category">Support@bitraxcoin.biz </p>

              </div>
              <div class="card-body all-icons"  style="background: white">
                <div class="row">
                  <div class="font-icon-list col-lg-8 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="">
                      <p style="font-size: 15px; color: darkgrey" class="float-left">hello  <b style="color: green"><?php echo $full_name ?></b>; <br> <em><?php echo $msg ?></em></p>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-4 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                        
                      <p style="font-size: 15px" class="text-success">Invested</p>
                      <h1 class="text-success"><?php echo $invested; ?></h1> <br>
                      <hr>
                      <p style="font-size: 15px" class="text-danger">My Last Withdrawal</p>
                      <h1 class="text-danger">-<?php echo $withdrawn; ?></h1>
                    </div>
                    <em class="float-right">Please share your experience on our social media 
                      <br>
                      <br>
                          <ul style="list-style: square;">
                            <li>Facebook<a href="https://www.facebook.com/Bitraxcoin-107448864240448/" target="_blank">
                              <img src="fbyellow.png" width="50px"></a></li>
                          <li>Telegram <a href="https://t.me/StevenHenderson" target="_blank"><img src="telegram.png" width="30px"></a></a></li>
                          </ul>
                    </em>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
<?php include 'footer.php' ?>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  
</body>

</html>