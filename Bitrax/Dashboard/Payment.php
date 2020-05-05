<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui'>
    <title>Payment</title>
    <link rel="shortcut icon" type="image/x-icon" href="../img/core-img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
  </head>

<?php include ('head.php') ?>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Transaction to confirm</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../../">Visit Site</a>
                  </li>
                  <li class="breadcrumb-item active">Payment
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
       
<!-- Basic Tables end -->

<!-- Striped rows start -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Payment to Confirm</h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
          <ul class="list-inline mb-0">
            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
            <li><a data-action="close"><i class="ft-x"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="card-content collapse show">
        <div class="card-body">
          <p class="card-text">Payment or Investors who invested recently at <code class="highlighter-rouge">Bitraxcoin LTD</code></p>
        </div>
        <div class="table-responsive">
          <?php  
                        $allUser = mysqli_query($conn, "SELECT * FROM confirmed_deposit ORDER BY alert");
                    ?>
          <table class="table table-striped">
            <thead>
              <tr>
                            <th>#</th>
                            <th scope="col">Ivestors Name</th>
                            <th scope="col">Plan</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Date</th>
                            <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                                         <?php 
                                              //while loop 
                                              //fetching all details from database 
                                                 while ($all = mysqli_fetch_assoc($allUser)) {
                                                    $btc1 = $all['btc1'];
                                                    $plan = $all['plan'];
                                                    $date_time = $all['date_time'];
                                                    $alert = $all['alert'];
                                                    $name = $all['name'];
                               echo "
                                                         <td scope='row'>$btc1</td>
                                                            <td>$name</td>
                                                            <td>$plan</td>
                                                            <td>$alert</td>
                                                            <td>$date_time</td>
                                                            <td><a href='?btc1=$btc1' class='btn btn-danger btn-sm'>Delete</a></td>
                                                          </tr>
                                                        ";
                                                 }if (isset($_GET['btc1'])) {
                                                    $deleteId = $_GET['btc1'];

                                                    $deleteGrap = mysqli_query($conn, "DELETE FROM confirmed_deposit WHERE btc1 = '$deleteId'");
                                                    if ($deleteGrap) {
                                                      echo "<span class='btn btn-danger btn-sm'>investor was Deleted </span> <meta http-equiv='refresh' content='10url=Dashboard.php'>";
                                                    }
                                                 }
                                              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Striped rows end -->

    <!-- ////////////////////////////////////////////////////////////////////////////-->
   

    <!-- BEGIN VENDOR JS-->
    <script src="theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>