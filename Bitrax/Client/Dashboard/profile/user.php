<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="../../../../btc.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    My Profile
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
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">My Data</h5>
              </div>
              <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Names | Username</label>
                        <input type="text" class="form-control" value="<?php echo $full_name ?>." disabled>
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text"  disabled=""  class="form-control" placeholder="Username" value="<?php echo $phone  ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" placeholder="Email" value="<?php echo $clientemail  ?>" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>My BTC Wallet Address</label>
                        <input type="text" class="form-control" disabled placeholder=""value="<?php echo $btc_id ?>">
                      </div>
                    </div>
                    <?php
                      if (empty($ref)) {
                        ?>
                          <div class="col-md-6 pr-1">
                            <div class="form-group">
                              <label></label>
                              <input type="text" class="form-control" disabled placeholder=""value="SELT ENROLMENT">
                            </div>
                          </div>
                        <?php
                      } else {
                        ?>
                          <div class="col-md-6 pr-1">
                            <div class="form-group">
                              <label>Refferal</label>
                              <input type="text" class="form-control" disabled placeholder=""value="<?php echo $ref; ?>">
                            </div>
                          </div>
                        <?php
                      }
                    ?>
                  </div>
    <div class="container">

<!-- Button trigger modal -->

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal-key-back-demo">

  Edit

</button>
 <br>
 <b>Your Refferal: (Click To Copy)</b></b> <input type="text" class="form-control" id="myInput" onclick="myFunction()" value="https://bitraxcoin.biz/bitraxcoin/Bitrax/register.php?userEmail=<?php echo $clientemail; ?>">
<?php include 'message.php' ?>

              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/default-avatar.png" alt="...">
                    <h5 class="title"><?php echo $full_name; ?></h5>
                  </a>
                  <p class="description">
                    BTX Investor
                  </p>
                </div>
                <p class="description text-center">
                  <?php echo $phone; ?> <br>
                  <?php echo $clientemail; ?>"
                </p>
              </div>
              <hr>
              <div class="button-container">
                <button class="btn btn-neutral btn-icon btn-round btn-lg">
                  <a href=""><i class="fab fa-facebook-f"></i></a>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <a href="https://t.me/StevenHenderson" target="_blank"><i class="fab fa-telegram"></i></a>
                </button>
                <button href="mailto:support@bitraxcoin.biz" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <a href="mailto:support@bitraxcoin.biz"><i class="fab fa-google-plus-g"></i></a>
                </button>
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
  <script>
    function myFunction() {
      /* Get the text field */
      var copyText = document.getElementById("myInput");

      /* Select the text field */
      copyText.select();
      copyText.setSelectionRange(0, 99999); /*For mobile devices*/

      /* Copy the text inside the text field */
      document.execCommand("copy");
      alert("Refferal Link Copied");
    }
  </script>
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
