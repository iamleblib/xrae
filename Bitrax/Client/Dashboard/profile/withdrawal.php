<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="../../../../btc.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    My Profit
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

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Withdrawal Status</h5>
                <p style="font-size: 15px" class="category">Your Current Status </p>
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
                      <p style="font-size: 15px">Earnings + Commissions  </p>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-4 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <p style="font-size: 15px; color: green">ACCOUNT BALANCE</p>
                        <h1 class="text-success"><b><?php echo $current_earning_4_withdraw; ?></b></h1>
                      <p style="font-size: 15px; color: green">Next Payment on <span class="text-success"><?php echo $when_ ?></span> <br>
                        <span class="text-primary">Expires on <?php echo $to_exp ?></span></p>
                    </div>
                  </div>
                  
                </div>
              </div>

      
<div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
 <div class="shop-area">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-sm-6 col-12">
                            <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwice" data-parent="#accordion" data-toggle="collapse" href="#collapseTwice">
                                        <span class="accor-open"><button class="btn btn-primary">Withdraw <i class="now-ui-icons arrows-1_refresh-69" style="font-size: 10px"></i>
                                         </button> </span>
                                        <span class="accor-close"><i class="" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                                <div id="collapseTwice" class="accordion-content collapse">
                                  <em class="text-primary">Bitraxcoin placement for withdrawal starts 5days after initial deposit. <br>Bitraxcoin permit Zero (0) account policy; meaning that you can withdraw down to your last fund!</em> <br> <br>


                                       <form action="proceed.php" method="POST">
                                        <label>Deposit</label>
                                        
                                        <input maxlength="10" required="" type="tel" style="width: 100% !important" id="usdInput" name="to_withdraw" placeholder="00.0" value="<?php echo $current_earning_4_withdraw?>">

                                        <input type="hidden" name="last" value="<?php echo $invested?>">
                                       <input type="hidden" name="intel" value="<?php echo $after ?>" >
                                       <input type="hidden" name="xpried" value="<?php echo $withdrawn ?>">

                                        <label>To</label>
                                        <input disabled="" style="width: 250px !important" type="text" value="<?php echo $btc_id ?>" class="btn btn-outline-light text-dark" >
                                        <style type="text/css">
                                          input{
                                            padding: 3px
                                          }
                                        </style>
<!-- The button used to copy the text -->
                                       <input type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#Modal-key-back-demo" value="Next">
 
 
 
                                          <!-- Custom Modal -->
                                           
                                          <div class="modal fade" id="Modal-key-back-demo" tabindex="-1" data-keyboard="false" data-backdrop="false" role="dialog" aria-labelledby="Modal-key-back-demo-label" aria-hidden="true">
                                           
                                            <div class="modal-dialog" role="document">
                                           
                                              <div class="modal-content">
                                           
                                                <div class="modal-header bg-primary text-light">
                                           
                                                  <h5 class="modal-title" id="Modal-key-back-demo-label">Withdrawal in Process <i class="now-ui-icons arrows-1_refresh-69" style="font-size: 15px"></i> </h5>
                                           
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           
                                                    <span aria-hidden="true">&times;</span>
                                           
                                                  </button>
                                           
                                                </div>

                                            <div class="modal-body">Hello <b style="color: gold"><?php echo $full_name; ?></b> You are about to make a transaction. <br> Proceed to continue <br> <br> <br>
                                                      <b class="text-danger">Verify & Edit your Wallet Address here
                                                        <input class="btn btn-outline-primary" style="cursor: text; width: 100%" type="text" name="btc_address" value="<?php echo $btc_id; ?>" required></b>                         
                                             </div>
                                           <input type="hidden" name="name" value="<?php echo $full_name; ?>">
                                                <div class="modal-footer">
                                                  <button type="submit" name="done" class="btn btn-primary">
                                                  Proceed</button>
                                                </div>
                                      </form>

                                           
                                    </div>
                                 
                                  </div>
                                 
                                </div>
                          </div>
                        </div>
                    </div>

              <div class="card-body all-icons">
                <div class="row">
                  <div class="font-icon-list col-lg-4 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <h1 class="text-danger">-<?php echo $withdrawn; ?></h1>
                      <p style="font-size: 15px" class="text-danger">My Last Withdrawal</p>
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