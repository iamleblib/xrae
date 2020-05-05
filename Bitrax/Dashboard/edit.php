<?php 
require_once  '../Config/db_connect.php'; //call up the db connection
$Usersg = $_GET["GetID"]; //calling us the GetID on the prev page with a variable assigned as the DB
$query = "SELECT * FROM signup, confirmed_deposit WHERE sg='".$Usersg."'"; //using Usersg as the variable to callup the id
$allUser = mysqli_query($conn,$query);


 while ($all = mysqli_fetch_assoc($allUser)) {
  //calling up the original variable in db using all the variables assign to them earlier on cpanel
          $Usersg = $all['sg'];
          $Userfull_name = $all['full_name'];
          $Useremail = $all['clientemail'];
          $Userbonus = $all['bonus'];
          $Userinvested = $all['invested'];
          $Userearning = $all['earning'];
          $Userafter = $all['after'];
          $Userbtc_id = $all['btc_id'];
          $Userwithdrawn = $all['withdrawn'];
          $Userphone = $all['phone'];
          $Userto_exp = $all['to_exp'];
          $Userwhen = $all['when_'];
          $Userdate_time = $all['date_time'];
          $Userpassword = $all['password'];
            $plan = $all['plan'];
            $Usermsg = $all['msg'];
            $Userverify = $all['verified'];
          $Usercurrent_earning_4_withdraw = $all['current_earning_4_withdraw'];
     }
     ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="../../../../btc.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Edit Payment - Cpanel
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
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title"><b>Edit</b>  <label class="text-success"> <?php echo $Userfull_name; ?></label> <b>Profile</b> | <?php echo $Useremail ?><b class="float-right"><?php echo $Userinvested; ?></b></h5>
              </div>
              <div class="card-body alert alert-warning">
                  <div class="float-right">
                    <p>$300 - $9,999 (21days) with 10% 3wkly (30%)<b></b></p>
                    <p>$10,000 - $99,999 (28days) with 20% 4wkly (80%)</p>
                    <p>$100,000 - $999,999 (42days) with 30% 6wkly (180%)</p>
                  </div>
            </div>
            <div class="card-body">
            <!--creating a value to callup on the next page using ID for Usersg variable-->
            <form action="updates.php?ID=<?php echo $Usersg?>" method="POST">
<!-- creating a new form for edit with a different value name assign to them which will be use to diset/overwrite the previous data, also displaying the values in db table by calling up the values using assigned variables-->
 <center> <section id="content-types">
    <div class="col-xl-6 col-md-12">
      <div class="card">
        <div class="card-content">
          <div class="row">
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Bonus</label>
                        <input type="tel"  required name="bon" class="form-control" placeholder="Username" value="<?php echo $Userbonus  ?>">
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Invested (what amount did he/she invest) </label>
                        <input type="text" required name="invst" class="form-control" value="<?php echo $Userinvested ?>" placeholder="Invested">
                      </div>
                    </div>
                  </div>
                </div>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Earnings + Commission </label>
                        <br>
                        <p style="color:grey">To calculate for Earnings+Comms you say; <br>
                        invested amount x the weekly %(10,20,30) /100 = ANS x how many weeks
                        </p><br>
                        <input type="text" required name="earn" class="form-control" placeholder="" value="<?php echo $Userearning ?>">
                        <br>
                        <label>Duration (21/28/42days)</label> <br>
                        <b><?php echo $Userafter; ?></b>
                        <input type="text" class="form-control" required name="dura" value="<?php echo $Userafter ?>" placeholder="...days">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Account Balance </label>
                        <input type="text" required name="with" class="form-control" placeholder="" value="<?php echo $Usercurrent_earning_4_withdraw ?>">
                      </div>
                    </div>
                  </div>
                  <br>
                  <hr>
                  <br>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Next payment date</label>
                        <input type="date" name="wen" class="form-control" placeholder="The day & month" value="<?php echo $Userwhen ?>">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <p class="text-danger">
                      <div class="form-group">
                        <label>To Expire on</label>
                        <input type="date" placeholder="check 3weeks from now" name="exp" class="form-control" placeholder="" value="<?php echo $Userto_exp ?>">
                      </div>
                    </div>
                  </div>
                  


                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Previous/Last Withdrawal</label>
                        <input type="text" required name="last" class="form-control" placeholder="Last weekly or total in all payment" value="<?php echo $Userwithdrawn ?>">
                      </div>
                    </div>
                  </div>

<br>
<br>
<span style="color: tomato; ">for Insufficient fund message:</span>
<input type="" name="" value=" 
Your request was unsuccessful due to insufficient investment fund; you tries to withdraw $500 but you have no investment fund on your wallet, please try and place an investment, else you will be BANNED for spamming when next you tries to withdraw from zero ($0) wallet...
Thank you!" style="border: none !important; width: 100%">
<br>
<span style="color: green;">for Successful withdrawal:</span><input type="" name="" value=" 
Your payment this week was Successful, kindly check your BTC wallet for confirmation, thank you for your investment" style="border: none !important; width: 100%">
            <br>
<span class="text-primary">for Reinvestment:</span><input type="" name="" value="You just reinvest on (date), we appreciate your trust, Thank you for Reinvesting with Bitraxcoin" style="border: none !important; width: 100%">
            <br>
            <br>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Message to them</label>
                        <input type="text" name="mssg" class="form-control" placeholder="" value="<?php echo $Usermsg ?>">
                      </div>
                    </div>
                  </div>
<hr>
            <p class="alert alert-danger">If requested to change his/her contact info</p>
              <div class="container alert alert-dark">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Change The Verification</label>
                        <input type="text" name="very" class="form-control bg-info" placeholder="" value="<?php echo $Userverify ?>">
                      </div>
                    </div>
                  </div>
                  
                  
                  
                  
                  
                  
                  
                  
<h6 class="text-danger">PLEASE DON'T CHANGE ANY CLIENT DETAILS HERE UNLESS HE REQUESTED TO, CALL THE WEB DEVELOPER IF YOU WANT THE CLIENT NOT TO HAVE ACCESS TO HIS/HER ACCT <a href="tel:08103250891"><label class="btn btn-primary">Call Now!</label></a></h6>
              <div class="container alert alert-dark">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Change his/her Details here</label>
                        <input style="color: transparent; background: transparent;" type="text" name="psw" class="form-control" placeholder="" value="<?php echo $Userpassword ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Change His/Her Name</label>
                        <input type="text" name="nem" class="form-control" placeholder="" value="<?php echo $Userfull_name ?>">
                      </div>
                    </div>
                  </div>
                  
                  
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Change His/Her Email</label>
                        <input type="text" name="emails" class="form-control" placeholder="" value="<?php echo $Useremail ?>">
                      </div>
                    </div>
                  </div>

                  
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Change His/her Phone Num</label>
                        <input type="text" name="phn" class="form-control" placeholder="" value="<?php echo $Userphone ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Change His/her BTC</label>
                        <input type="text" name="btc_wall" class="form-control" placeholder="" value="<?php echo $Userbtc_id ?>">
                      </div>
                    </div>
                  </div>


    <div class="container">
     <!--change the submit name to update or any name of your choice-->
      <button type="submit" class="btn btn-primary" name="updates" style="cursor: pointer;">Update</button>
 </div>
</form>

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