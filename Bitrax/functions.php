<?php
//DB CONNECTION
require "Config/db_connect.php";

$full_name = $clientemail = $earning = $msg = $bonus = $invested = $current_earning_4_withdraw = $btc_id = $phone = $to_exp = $when_ = $password = $password_again ='';
$errors = array ();

// IF STATEMENT FOR SIGNUP

    function register() {
        //GLOBAL CONNECTION TO Any file with $conn
        GLOBAL $conn;
        if (isset($_POST['register'])) {
            $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
            $earning = mysqli_real_escape_string($conn, $_POST['earning']);
            $bonus = mysqli_real_escape_string($conn, $_POST['bonus']);
            $invested = mysqli_real_escape_string($conn, $_POST['invested']);
            $current_earning_4_withdraw = mysqli_real_escape_string($conn, $_POST['current_earning_4_withdraw']);
            $clientemail = mysqli_real_escape_string($conn, $_POST['clientemail']);
            $btc_id = mysqli_real_escape_string($conn, $_POST['btc_id']);
            $msg = mysqli_real_escape_string($conn, $_POST['msg']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $when_ = mysqli_real_escape_string($conn, $_POST['when_']);
            $to_exp = mysqli_real_escape_string($conn, $_POST['to_exp']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $password_again = mysqli_real_escape_string($conn, $_POST['password_again']);
            $ref = mysqli_real_escape_string($conn, $_POST['ref']);

            // validations

            if (empty($full_name) || empty($btc_id) || empty($earning) ||  empty($msg) ||  empty($current_earning_4_withdraw) || empty($invested) || empty($bonus) || empty($clientemail) || empty($phone) || empty($to_exp) || empty($when_) || empty($password) || empty($password_again)) {
                header("location: register.php?empty");
            } else if (!filter_var($clientemail, FILTER_VALIDATE_EMAIL)) {
                header("location: register.php?email_error");
            } else {
// checking if clientemail exist on the database
                $checkExist = mysqli_query($conn, "SELECT * FROM signup WHERE clientemail = '$clientemail'");

                if (mysqli_num_rows($checkExist) > 0) {
                    header("location: register.php?exist");
                } else {

/* Prematching the password*/ if ($password !== $password_again) {
                        header("location: register.php?missmatch");
/* psw less than 5*/  } else if (strlen($password) < 5) {
                        header("location: register.php?short");
                    } else {
/* display psw in harsh format*/ $password = password_hash($password, PASSWORD_DEFAULT);

    // date/ time date("D:M:Y");
        $date_ = date("H:i:s");

        // Create Verification Key
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $length = 20.;
                $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $vkey = $randomString.$clientemail;
// end vkey

                        $createUser = mysqli_query($conn, "INSERT INTO signup (full_name,
                            clientemail,
                            invested,
                            bonus,
                            earning,
                            current_earning_4_withdraw,
                            btc_id,
                            msg,
                            to_exp,
                            when_,
                            phone,
                            password,
                            vkey,
                            ref) VALUES('$full_name',
                            '$clientemail',
                            '$invested',
                            '$bonus',
                            '$earning',
                            '$current_earning_4_withdraw',
                            '$btc_id',
                            '$msg',
                            '$to_exp',
                            '$when_',
                            '$phone',
                            '$password',
                            '$vkey',
                            '$ref')");
if ($createUser) {
    // Send Mail
    $to = $clientemail;
    $subject = " Bitraxcoin Verification Message";

    $message = "
    <!DOCTYPE html>
    <html>
    <head>
        <link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    </head>
    <style type='text/css'>
    body{background-color: #eee;margin: 0px;}
    </style>
    <body>
        <div border='0' width='50%' style='margin:auto;padding:30px;background-color: #F3F3F3;border:1px solid #FF7A5A;'>

                                <h1 style='background-color: #eee; color: black; padding: 10px;'>Welcome to Bitraxcoin Pioneer Trading Company</h1>

                        <br>
                            <div class='row'>
                                <h4 style='padding-top:25px;'>Email Verification</h4>
                            </div>
            </div>

            <hr style='background-color: orange; padding: 5px;'>
                       <br>
                       <br>
                        <h6 border='0' width='50%' style='margin:auto;padding:30px;background-color: #F3F3F3;border:1px solid #FF7A5A;'>
                                Hello $clientemail This is a Verification email sent from Bitraxcoin, Click On Verify Me Link Below To Activate Your Account
                        </h6>
                </div>
                    <br>
                     <br>
                  <center><a href='https://bitraxcoin.biz/bitraxcoin/Bitrax/verified.php?vkey=$vkey' style='text-decoration: none; margin:10px 0px 30px 0px;border-radius:4px;padding:10px 20px;border: 0;color:white;background-color:orange;'>Verify Me!</a></center>


                                <div style='margin-top: 20px;'>
                                    <span style='font-size:12px;'>Bitraxcoin</span><br>
                                    <span style='font-size:12px;'>Copyright &copy; 2020 Bitrax</span>
                                </div>

                </div>
        </div>
    </body>
    </html>
    ";

    // set content-type
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: support@bitraxcoin.biz' . "\r\n";
// Send The Mail
   $sendMailNow =  mail($to,$subject,$message,$headers);

   if ($sendMailNow) {
    header("location: thanks.php?user=$clientemail");
   } else {
       return false;
   }


}
                    }
                }
                }
            }
    }
    register();


    function login() {
        GLOBAL $conn;

        if (isset($_POST['login'])) {
            $clientemail = $_POST['clientemail'];
            $password = $_POST['password'];

            if (empty($clientemail) || empty($password)) {
                header("location: login.php/?empty");
            } else {
                $checkUser = mysqli_query($conn, "SELECT * FROM signup WHERE clientemail = '$clientemail'");
                //echo mysqli_num_rows($checkUserclientemail
                //if the user login
                if (mysqli_num_rows($checkUser) > 0) {

                //go fetch the db and check if email and psw are correct
                    $row = mysqli_fetch_assoc($checkUser);

                    //check the Email and Pass
                    $dbEmail = $row['clientemail'];
                    $dbPassword = $row['password'];
                    $verified = $row['verified'];

                //if email and psw is correct direct them ahead
                    if ($dbEmail == $clientemail && password_verify($password, $dbPassword)) {

                        if ($verified == 1) {
                           session_start();

                        $_SESSION['clientemail'] = $clientemail;
                        header("location: ../Bitrax/Client/Dashboard/profile");
                        } else {
                            header("location: login.php?notVerified");
                        }

//if not correct redirect
                    } else {
                        header("location: login.php?failed");
                    }

                } else {
                    header("location: login.php?failed");
                }

            }
        }
    }
    login();


//DB CONNECTION
