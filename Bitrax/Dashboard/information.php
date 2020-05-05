<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui'>
    <title>Payment Details</title>
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
            <h3 class="content-header-title">Client Datas</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../../">Visit Site</a>
                  </li>
                  <li class="breadcrumb-item active">Information
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
        <h4 class="card-title">Payment and Duration</h4>
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
          <p class="card-text">Client Information and their payment method carried out from <code class="highlighter-rouge">Bitraxcoin LTD</code> Check whose next</p>
        </div>
        <div class="table-responsive">
                                          <?php 

                                            require '../Config/db_connect.php';
                                            $query = "SELECT * FROM signup, confirmed_deposit GROUP BY invested";
                                            $allUser = mysqli_query($conn,$query);

                                            ?>
          <table class="table table-striped">
            <thead>
                                                <tr>
                                                <th>#</th>
                                                <th scope="col">Full Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Wallet Address</th>
                                                <th scope="col">Bonus</th>
                                                <th scope="col">Invested</th>
                                                <th scope="col">Date Invested</th>
                                                <th scope="col">Duration</th>
                                                <th scope="col">To Exp on</th>
                                                <th scope="col">Next pay on</th>
                                                <th scope="col">Total to pay weekly</th>
                                                <th scope="col">Total Profit</th>
                                                <th scope="col" class="text-danger">Last Withdraw</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                             <?php 
                                                                  //while loop 
                                                                  //fetching all details from database using Global variables i.e assign variables then calling up with the original variable in DB  
                                                                     while ($all = mysqli_fetch_assoc($allUser)) {
                                                                        $Usersg = $all['sg'];
                                                                        $Userfull_name = $all['full_name'];
                                                                        $Useremail = $all['clientemail'];
                                                                        $Userbtc_id = $all['btc_id'];
                                                                        $Userbonus = $all['bonus'];
                                                                        $Userinvested = $all['invested'];
                                                                        $Userearning = $all['earning'];
                                                                        $Userto_exp = $all['to_exp'];
                                                                        $Userafter = $all['after'];
                                                                        $Userwhen = $all['when_'];
                                                                        $Usercurrent_earning_4_withdraw = $all['current_earning_4_withdraw'];
                                                                        $Userdate_ = $all['date_time'];
                                                                        $Userdwithdrawn = $all['withdrawn'];
                                                             ?>
                                                                        <tr>
                                                                            <!--callup using the asign variable-->
                                                                                <td scope='row'><?php echo $Usersg?></td>

                                                                                <td><?php echo $Userfull_name?></td>

                                                                                <td><b style='color: darkred'><?php echo $Useremail ?></b></td>

                                                                                <td><input style="border: none" type="text" value="<?php echo $Userbtc_id ?>"></td>

                                                                                <td><?php echo $Userbonus ?></td>
                                                                                <!--invested how much-->
                                                                                <td class="text-success"><?php echo $Userinvested ?></td>
                                                                                <!--Date Invested-->
                                                                                <td><?php echo $Userdate_ ?></td>
                                                                                <!--duration-->
                                                                                <td class="text-info"><?php echo $Userafter ?></td>
                                                                                <td class="text-danger"><?php echo $Userto_exp ?></td>
                                                                                <!--next to pay-->
                                                                                <td class="text-success"><?php echo $Userwhen ?></td>
                                                                                <!--total to pay weekly-->
                                                                                <td><b><?php echo $Usercurrent_earning_4_withdraw ?></b></td>
                                                                                <!--Total Profit-->
                                                                                <td class="bg-success"><b style="color: white; font-size: 18px"><?php echo $Userearning ?></b></td>
                                                                                <!--last withdrawal-->
                                                                                <td><?php echo $Userdwithdrawn ?></td>
                                                                              </tr>
                                                                              <?php
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