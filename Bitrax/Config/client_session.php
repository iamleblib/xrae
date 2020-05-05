 <?php  
    include 'db_connect.php';
    //Session start here
      session_start();

     if (!isset($_SESSION['email'])) {
  //locating to the home page
       header("location: ../../../login.php");
     } else {
       $email = $_SESSION['email']; //Session for email
       $getTheUser = mysqli_query($conn, "SELECT * FROM signup WHERE email = '$email'"); //calling up users email from db_table
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
         $current_earning_4_withdraw = $user['current_earning_4_withdraw'];

     }
     ?>
<?php
//creating a logout button  and destroy else no redirection if user clear
    if (isset($_GET['client_logout'])) {
//if user logout it will disconnect every interaction
      session_destroy();

      header("location: /bitrax/bitrax/index.php");
    }
?>

<?php
//creating a logout button  and destroy else no redirection if user clear
    if (isset($_GET['client_switch'])) {
//if user logout it will disconnect every interaction
      session_destroy();

      header("location: /bitrax/bitrax/login.php");
    }
?>
 
