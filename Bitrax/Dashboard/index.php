<!DOCTYPE html>
<html class='loading' lang='en' data-textdirection='ltr'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui'>
    <title>Dashboard - Admin</title>

    <link href='https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700' rel='stylesheet'>
    <link href='https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css' rel='stylesheet'>
    <!-- BEGIN VENDOR CSS-->
    <link rel='stylesheet' type='text/css' href='theme-assets/css/vendors.css'>
    <link rel='stylesheet' type='text/css' href='theme-assets/vendors/css/charts/chartist.css'>
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel='stylesheet' type='text/css' href='theme-assets/css/app-lite.css'>
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel='stylesheet' type='text/css' href='theme-assets/css/core/menu/menu-types/vertical-menu.css'>
    <link rel='stylesheet' type='text/css' href='theme-assets/css/core/colors/palette-gradient.css'>
    <link rel='stylesheet' type='text/css' href='theme-assets/css/pages/dashboard-ecommerce.css'>
    <!-- END Page Level CSS-->
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
  </head>
  <?php include 'head.php' ?>

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class='app-content content'>
      <div class='content-wrapper'>
        <div class='content-wrapper-before'></div>
        <div class='content-header row'>
        </div>
        <div class='content-body'><!-- Chart -->
<div class='row match-height'>
    <div class='col-12'>
        <div class=''>
            <div id='gradient-line-chart1' class='height-250 GradientlineShadow1'></div>
        </div>
    </div>
</div>
<!-- Chart -->
<!-- eCommerce statistic -->
<div class='row'>
    <div class='col-xl-4 col-lg-6 col-md-12'>
        <div class='card pull-up ecom-card-1 bg-white'>
            <div class='card-content ecom-card2 height-180'>
                <h5 class='text-muted danger position-absolute p-1'>Progress Stats</h5>
                <div>
                    <i class='ft-pie-chart danger font-large-1 float-right p-1'></i>
                </div>
                <div class='progress-stats-container ct-golden-section height-75 position-relative pt-3  '>
                    <div id='progress-stats-bar-chart'></div>
                    <div id='progress-stats-line-chart' class='progress-stats-shadow'></div>
                </div>
            </div>
        </div>
    </div>
    <div class='col-xl-4 col-lg-6 col-md-12'>
        <div class='card pull-up ecom-card-1 bg-white'>
            <div class='card-content ecom-card2 height-180'>
                <h5 class='text-muted info position-absolute p-1'>Activity Stats</h5>
                <div>
                    <i class='ft-activity info font-large-1 float-right p-1'></i>
                </div>
                <div class='progress-stats-container ct-golden-section height-75 position-relative pt-3'>
                    <div id='progress-stats-bar-chart1'></div>
                    <div id='progress-stats-line-chart1' class='progress-stats-shadow'></div>
                </div>
            </div>
        </div>
    </div>
    <div class='col-xl-4 col-lg-12'>
        <div class='card pull-up ecom-card-1 bg-white'>
            <div class='card-content ecom-card2 height-180'>
                <h5 class='text-muted warning position-absolute p-1'>Sales Stats</h5>
                <div>
                    <i class='ft-shopping-cart warning font-large-1 float-right p-1'></i>
                </div>
                <div class='progress-stats-container ct-golden-section height-75 position-relative pt-3'>
                    <div id='progress-stats-bar-chart2'></div>
                    <div id='progress-stats-line-chart2' class='progress-stats-shadow'></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ eCommerce statistic -->

<!-- Statistics -->
<div class='row match-height'>
    <div class='col-xl-4 col-lg-12'>
            <div class='card'>
                <div class='card-header'>
                    <h4 class='card-title' id='heading-multiple-thumbnails'>Front End</h4>
                    <a class='heading-elements-toggle'>
                        <i class='la la-ellipsis-v font-medium-3'></i>
                    </a>
                    <div class='heading-elements'>
                    </div>
                </div>
            </div>
        </div>
    <div class='col-xl-4 col-lg-12'>
        <div class='card'>
            <div class='card-content'>
                <div class='card-body'>
                    <h4 class='card-title'>Recent Update on Bitrax Coin</h4>
                    <h6 class='card-subtitle text-muted'>Carousel Card With Header & Footer</h6>
                </div>
                <div id='carousel-area' class='carousel slide' data-ride='carousel'>
                    <ol class='carousel-indicators'>
                        <li data-target='#carousel-area' data-slide-to='0' class='active'></li>
                        <li data-target='#carousel-area' data-slide-to='1'></li>
                        <li data-target='#carousel-area' data-slide-to='2'></li>
                    </ol>
                    <div class='carousel-inner' role='listbox'>
                        <div class='carousel-item active'>
                            <img src='theme-assets/images/carousel/btc11.png' width="10px" class='d-block w-100' alt='First slide'>
                        </div>
                        <div class='carousel-item'>
                            <img src='theme-assets/images/carousel/1.png' class='d-block w-100' alt='Third slide'>
                        </div>
                        <div class='carousel-item'>
                            <img src='theme-assets/images/carousel/13.jpg' class='d-block w-100' alt='fourth slide'>
                        </div>
                    </div>
                    <a class='carousel-control-prev' href='#carousel-area' role='button' data-slide='prev'>
                            <span class='la la-angle-left' aria-hidden='true'></span>
                            <span class='sr-only'>Previous</span>
                        </a>
                    <a class='carousel-control-next' href='#carousel-area' role='button' data-slide='next'>
                            <span class='la la-angle-right icon-next' aria-hidden='true'></span>
                            <span class='sr-only'>Next</span>
                        </a>
                </div>
                <div class='card-body'>
                    <a href='#' class='card-link'>Check Dashboard</a>
                    <a href='../../' class='card-link'>View Site</a>
                </div>
            </div>
            <div class='card-footer border-top-blue-grey border-top-lighten-5 text-muted'>
                <span class='float-left'>2 days ago</span>
                <span class='tags float-right'>
                    <span class='badge badge-pill badge-primary'>Bitcoin</span>
                    <span class='badge badge-pill badge-danger'>BitraxCoin</span>
                </span>
            </div>
        </div>
    </div>

                        <?php
                         include '../Config/db_connect.php';
                              $allUser = mysqli_query($conn, "SELECT * FROM  confirmed_deposit ORDER BY date_time ");
                          ?>
                                              <?php
                                              //while loop
                                              //fetching all details from database
                                                 while ($all = mysqli_fetch_assoc($allUser)) {
                                                    $plan = $all['plan'];
                                                    $date_time = $all['date_time'];
                                                    $name = $all['name'];

                                   }
                                   ?>

    <div class='col-xl-4 col-lg-12'>
        <div class='card'>
            <div class='card-header'>
                <h4 class='card-title'>Last Payment</h4>
                <a class='heading-elements-toggle'>
                    <i class='fa fa-ellipsis-v font-medium-3'></i>
                </a>
                <div class='heading-elements'>
                    <ul class='list-inline mb-0'>
                        <li>
                            <a data-action='reload'>
                                <i class='ft-rotate-cw'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class='card-content'>
                <div id='recent-buyers' class='media-list'>
                    <a href='#' class='media border-0'>
                        <div class='media-left pr-1'>
                            <span class='avatar avatar-md avatar-online'>
                                <img class='media-object rounded-circle' src='../../btc.png' alt='Generic placeholder image'>
                                <i></i>
                            </span>
                        </div>

                        <div class='media-body w-100'>
                            <span class='list-group-item-heading' ><b style="color: darkgreen"><?php   echo "$name";  ?> <br> Invested ( <?php   echo "$plan";  ?> )</b>
                            <br>

                            </span>
                            <br>
                            <?php   echo "<sub style='float: right'>$date_time</sub>";  ?>
                        </div>
                    </a>
                <a href="Payment.php "><button class="btn btn-outline-danger float-right btn-sm"> More Details  </button></a>

                </div>
            </div>
        </div>
    </div>
</div>

                <?php
                         include '../Config/db_connect.php';
                              $allUser = mysqli_query($conn, "SELECT * FROM  withdraw ");
                          ?>
                                              <?php
                                              //while loop
                                              //fetching all details from database
                                                 while ($all = mysqli_fetch_assoc($allUser)) {
                                                    $btc_address = $all['btc_address'];
                                                    $to_withdraw = $all['to_withdraw'];
                                                    $name = $all['name'];
                                                    $dated = $all['dated'];

                                   }
                                   ?>



<!-- Statistics -->
<div class='row match-height'>
    <div class='col-xl-4 col-lg-12'>
        <div class='card'>
            <div class='card-content'>
                <div class='card-body'>
                    <h4 class='card-title'>Last Withdrawal Request</h4>
                </div>
            </div>
            <div class='card-content'>
                <div id='recent-buyers' class='media-list'>
                    <div class='media border-0'>

                        <div class='media-body w-100'>
                            <span class='list-group-item-heading' ><b style="color: darkgreen"><?php   echo "$name";  ?></b> <br> Requested to withdraw: <code><?php   echo "$to_withdraw";  ?>BTC</code>
                            <br> to the BTC Address: <br>
                            <input type="text" value="<?php   echo "$btc_address";  ?>"></b>
                            <br>On <?php   echo "$dated";  ?>

                            </span>
                            <ul class='list-unstyled users-list m-0 float-right'>
                                <li data-toggle='tooltip' data-popup='tooltip-custom' data-original-title='Product 2' class='avatar avatar-sm pull-up'>
                                    <img class='media-object rounded-circle no-border-top-radius no-border-bottom-radius' src='theme-assets/images/portfolio/portfolio-2.jpg'
                                        alt='Avatar'>
                                </li>

                            </ul>
                        </div>
                    </div>
                <a href="Withdrawal.php "><button class="btn btn-outline-warning float-right btn-sm"> More Details  </button></a>

                </div>
            </div>
        </div>
        </div>




                    <?php
                         include '../Config/db_connect.php';

                          $allUser = mysqli_query($conn, "SELECT * FROM signup");
                          ?>
                                              <?php
                                              //while loop
                                              //fetching all details from database
                                                 while ($all = mysqli_fetch_assoc($allUser)) {
                                                    $sg = $all['sg'];
                                                    $full_name = $all['full_name'];
                                                    $clientemail = $all['clientemail'];
                                                    $phone = $all['phone'];
                                                    $date_ = $all['date_'];

                                   }
                                   ?>




    <div class='col-xl-4 col-lg-12'>
        <div class='card'>
            <div class='card-header'>
                <h4 class='card-title'>Last Signup</h4>
                <a class='heading-elements-toggle'>
                    <i class='fa fa-ellipsis-v font-medium-3'></i>
                </a>
                <div class='heading-elements'>
                    <ul class='list-inline mb-0'>
                        <li>
                            <a data-action='reload'>
                                <i class='ft-rotate-cw'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class='card-content'>
                <div id='recent-buyers' class='media-list'>
                    <a href='#' class='media border-0'>
                        <div class='media-left pr-1'>
                            <span class='avatar avatar-md avatar-online'>
                                <img class='media-object rounded-circle' src='../../btc.png' alt='Generic placeholder image'>
                                <i></i>
                            </span>
                        </div>

                        <div class='media-body w-100'>
                            <span class='list-group-item-heading' ><b style="color: darkgreen"><?php   echo "$full_name";  ?></b>
                            <br>
                            <?php   echo $phone;  ?>. | <?php   echo $clientemail;  ?>. <br>
                             <br>

                            </span>
                            <?php   echo "<sub style='float: right'>$date_</sub>";  ?>
                        </div>
                    </a>
                <a href="tables.php "><button class="btn btn-outline-success float-right btn-sm"> More Details  </button></a>

                </div>
            </div>
        </div>
    </div>
<!--/ Statistics -->
        </div>
      </div>
    </div>
</span>
</p>
</div>
</a>
</div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

<?php   include 'footer.php' ?>

    <script src='theme-assets/vendors/js/vendors.min.js' type='text/javascript'></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src='theme-assets/vendors/js/charts/chartist.min.js' type='text/javascript'></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src='theme-assets/js/core/app-menu-lite.js' type='text/javascript'></script>
    <script src='theme-assets/js/core/app-lite.js' type='text/javascript'></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src='theme-assets/js/scripts/pages/dashboard-lite.js' type='text/javascript'></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
