<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="../../../../btc.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Transactions
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
</head>

<?php include 'head.php' ?>

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">My Wallet</h5>
                <p style="font-size: 15px" class="category">Your Investement Status </p>
                <h6><sup class="text-primary" style="font-size: 10px">Bonus</sup> <u><?php echo $bonus; ?></u></h6>
              </div>
              <div class="card-body all-icons">
                <div class="row">
                  <div class="font-icon-list col-lg-4 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <h1><?php echo $invested; ?></h1>
                      <p style="font-size: 15px">My Investment</p>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-4 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                     <h1><?php echo $earning; ?></h1>
                      <p style="font-size: 15px">Earnings + Commissions <em style="margin: 5px;" class="text-primary"><?php echo $after ?></em> </p>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-4 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <p style="font-size: 15px; color: green">ACCOUNT BALANCE</p>
                        <h1 class="text-success"><b><?php echo $current_earning_4_withdraw; ?></b></h1>
                      <p style="font-size: 15px; color: green">Next payment <span class="text-success"><?php echo $when_ ?></span> <br>
                        <span class="text-primary">Expires on <?php echo $to_exp ?></span></p>
                    </div>
                  </div>
                </div>
              </div>
                <a href="msg.php">Click to read message from Admin</a>
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