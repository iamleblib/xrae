<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../../../btc.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Investors
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
    <link rel="stylesheet" href="../../../assets/css/font-awesome.min.css">
</head>

<?php include 'head.php' ?>
      <!-- End Navbar -->
       <div class="panel-header panel-header-sm">
      </div>
      
          <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Last 100 Investors 
                      <i class="now-ui-icons business_briefcase-24" ></i>
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Investors
                      </th>
                      <th>
                        Invested
                      </th>
                      <th>
                        Security
                      </th>
                    </thead>

                    <tbody>
                      
                              <?php 
                              $allUser = mysqli_query($conn, "SELECT * FROM  confirmed_deposit GROUP BY name ");
                                      while ($all = mysqli_fetch_assoc($allUser)) {
                                                    $plan = $all['plan'];
                                                    $btc1 = $all['btc1'];
                                                    $name = $all['name'];
                                                 echo "
                      <tr>
                        <td>
                          <li>$name</li>
                        </td>
                        <td>
                          $plan
                        </td>
                        <td>
                          <button class='btn btn-success btn-sm' disabled ><i class='fa fa-lock'> </i> Secured</button>
                        </td>
                      </tr>";
                    }
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="content">
        <div class="row">
          <div class="col-md-16">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Last 100 Withdrawals <i class="now-ui-icons files_paper"></i></h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Investors
                      </th>
                      <th>
                        Amount
                      </th>
                      <th>
                        BTC Wallet Address
                      </th>
                      <th>
                        Security
                      </th>
                    </thead>

                    <tbody style="border: ridge 2px">
                      
                               <?php 
                              $allUser = mysqli_query($conn, "SELECT * FROM  withdraw GROUP BY name");
                                      while ($all = mysqli_fetch_assoc($allUser)) {
                                                    $name = $all['name'];
                                                    $to_withdraw = $all['to_withdraw'];
                                                    $btc_address = $all['btc_address'];
                                                 echo "
                      <tr>
                        <td>
                          $name
                        </td>
                        <td>
                          $to_withdraw
                        </td>
                        <td class='width'>
                          $btc_address
                        </td>
                        <td>
                          <button class='btn btn-danger btn-sm' disabled ><i class='now-ui-icons ui-1_lock-circle-open'></i> Unsecured</button>
                        </td>
                      </tr>";
                    }
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
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
  <style type="text/css">
    td{
      border: ridge 1px;
    }
    .width{
      width: 300px;
    }
  </style>
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