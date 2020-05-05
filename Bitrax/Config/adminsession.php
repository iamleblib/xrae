 <?php include 'db_connect.php';//Session start here
      session_start();

     if (!isset($_SESSION['email'])) {
  //locating to the home page
       header("location: ../bitraxcoin.php");
     } else {
       $email = $_SESSION['email']; //Session for email
       $getTheUser = mysqli_query($conn, "SELECT * FROM administration WHERE email = '$email'"); //calling up users email from db_table
       $user = mysqli_fetch_assoc($getTheUser); //fetching datas from db_table in variable to $getTheUser using var $user
//echo out the username and phone number as session
         $full_name = $user['full_name'];
         $phone = $user['phone'];

     }
//creating a logout button  and destroy else no redirection if user clear
    if (isset($_GET['logout'])) {
//if user logout it will disconnect every interaction
      session_destroy();

      header("location: ../");
    }


?>