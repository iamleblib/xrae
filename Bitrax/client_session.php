 <?php
    include 'Config/db_connect.php';
    //Session start here
      session_start();

     if (!isset($_SESSION['clientemail'])) {
  //locating to the home page
       header("location: ../../../login.php");
     } else {
       $clientemail = $_SESSION['clientemail']; //Session for email
       $getTheUser = mysqli_query($conn, "SELECT * FROM signup WHERE clientemail = '$clientemail'"); //calling up users email from db_table
       $user = mysqli_fetch_assoc($getTheUser); //fetching datas from db_table in variable to $getTheUser using var $user
//echo out the username and phone number as session
         $full_name = $user['full_name'];
         $phone = $user['phone'];
         $password = $user['password'];
         $btc_id = $user['btc_id'];
         $invested = $user['invested'];
         $bonus = $user['bonus'];
         $earning = $user['earning'];
         $after = $user['after'];
         $withdrawn = $user['withdrawn'];
         $msg = $user['msg'];
         $when_ = $user['when_'];
         $to_exp = $user['to_exp'];
         $current_earning_4_withdraw = $user['current_earning_4_withdraw'];
         $ref = $user['ref'];

     }
     ?>
<?php
//creating a logout button  and destroy else no redirection if user clear
    if (isset($_GET['client_logout'])) {
//if user logout it will disconnect every interaction
      session_destroy();

      header("location: https://bitraxcoin.biz");
    }
?>

<?php
//creating a logout button  and destroy else no redirection if user clear
    if (isset($_GET['client_switch'])) {
//if user logout it will disconnect every interaction
      session_destroy();

      header("location: ../../../../Bitrax/login.php");
    }
?>
