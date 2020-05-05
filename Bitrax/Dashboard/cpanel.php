
<!DOCTYPE html>
<html class='loading' lang='en' data-textdirection='ltr'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui'>

    <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.ico">

    <title>Admin panel</title>

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
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
  </head>
  <div class='app-content content'>
      <div class='content-wrapper'>
        <div class='content-wrapper-before'></div>
        <div class='content-header row'>
        </div>
        <div class='content-body'><!-- Chart -->

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
                        include '../Config/adminsession.php';

                                                $allUser = mysqli_query($conn, "SELECT * FROM confirmed_deposit");
                                            ?>
                                  <table class="table table-striped">
                                    <thead>
                                      <tr>
                                                    <th>#</th>
                                                    <th scope="col">Ivestors Name</th>
                                                    <th scope="col">Plan</th>
                                                    <th scope="col">Date</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                                                 <?php 
                                                                      //while loop 
                                                                      //fetching all details from database 
                                                                         while ($all = mysqli_fetch_assoc($allUser)) {
                                                                            $plan = $all['plan'];
                                                                            $date_time = $all['date_time'];
                                                                            $name = $all['name'];
                                                                            $btc1 = $all['btc1'];
                                                       echo "
                                                                                 <td scope='row'>$btc1</td>
                                                                                    <td>$name</td>

                                                                                    <td>$plan</td>

                                                                                    <td>$date_time</td>

                                                                                  </tr>
                                                                                ";
                                                                         }
                                                                      ?>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Profile</h4>
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
                                                  <?php 

                                            require '../Config/db_connect.php';
                                            $query = "SELECT * FROM signup ORDER BY full_name";
                                            $allUser = mysqli_query($conn,$query);

                                            ?>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p class="card-text">Signup Users and Details where you see their update on wallet, bonus</p>
                                    </div>
                                    <div class="table-responsive">

                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                <th>#</th>
                                                <th scope="col">Full Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Bonus</th>
                                                <th scope="col">Invested</th>
                                                <th scope="col">To Earn (-bonus)</th>
                                                <th scope="col">Duration</th>
                                                <th scope="col">Next Payment</th>
                                                <th scope="col">Total plus % this week</th>
                                                <th scope="col" class="active">Edit</th>
                                                <th scope="col" class="active">Danger</th>
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
                                                                        $Userphone = $all['phone'];
                                                                        $Userbonus = $all['bonus'];
                                                                        $Userinvested = $all['invested'];
                                                                        $Userearning = $all['earning'];
                                                                        $Userafter = $all['after'];
                                                                        $Userwhen = $all['when_'];
                                                                        $Usercurrent_earning_4_withdraw = $all['current_earning_4_withdraw'];
                                                             ?>
                                                                        <tr>
                                                                            <!--callup using the asign variable-->
                                                                                <td scope='row'><?php echo $Usersg?></td>
                                                                                <td><?php echo $Userfull_name?></td>
                                                                                <td><b style='color: darkred'><?php echo $Useremail ?></b></td>
                                                                                <td><?php echo $Userphone ?></td>
                                                                                <td><?php echo $Userbonus ?></td>
                                                                                <td><?php echo $Userinvested ?></td>
                                                                                <td><?php echo $Userearning ?></td>
                                                                                <td><?php echo $Userafter ?></td>
                                                                                <td><?php echo $Userwhen ?></td>
                                                                                <td><?php echo $Usercurrent_earning_4_withdraw ?></td>
                                                                        <!--when i click on edit it will redirect me to edit file to make changes therefore calling out the value to be GetID-->
                                                                                <td><a href="edit.php?GetID=<?php echo $Usersg ?>">Edit</a></td>
                                                                                <td><label class='btn btn-danger btn-sm'>Delete</label></td> 
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

<a href="index.php">Home</a>

<!-- Bordered table end -->
        </div>
      </div>
    </div>
