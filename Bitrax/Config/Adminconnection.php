<?php
include 'db_connect.php';

$full_name = $email = $phone = $password = $password_again ='';
$errors = array ('full_name'=>'', 'email'=>'', 'phone'=>'', 'password'=>'', 'password_again'=>'');



// IF STATEMENT FOR ../registeration

    function register() {
        //GLOBAL CONNECTION TO Any file with $conn
        GLOBAL $conn;
        if (isset($_POST['register'])) {
            $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $password_again = mysqli_real_escape_string($conn, $_POST['password_again']);

            // validations

            if (empty($full_name) || empty($email) || empty($phone) || empty($password) || empty($password_again)) {
                header("location: ../AdminReg.php?empty");
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("location: ../AdminReg.php?email_error");
            } else {
// checking if email exist on the database
                $checkExist = mysqli_query($conn, "SELECT * FROM administration WHERE email = '$email'");

                if (mysqli_num_rows($checkExist) > 0) {
                    header("location: AdminReg.php?exist");
                } else {
                    // checking if phone exist on the database
                $check = mysqli_query($conn, "SELECT * FROM administration WHERE phone = '$phone'");

                if (mysqli_num_rows($check) > 0) {
                    header("location: ../AdminReg.php?existNO");
                } else {

/* Prematching the password*/ if ($password !== $password_again) {
                        header("location: AdminReg.php?missmatch");
/* psw less than 5*/  } else if (strlen($password) < 5) {
                        header("location: ../AdminReg.php?short");
                    } else {
/* display psw in harsh format*/ $password = password_hash($password, PASSWORD_DEFAULT);
                       
                        // date/ time date("D:M:Y");
                        $date_ = date("H:i:s");
                        $createUser = mysqli_query($conn, "INSERT INTO administration (full_name,  email, phone, password, date_) VALUES('$full_name', '$email', '$phone', '$password', '$date_')");
                        if ($createUser) {
                            header("location: ../Bitrax/bitraxcoin.php?success");
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
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (empty($email) || empty($password)) {
                header("location: ../bitraxcoin.php?emptyLog");
            } else {
                $checkUser = mysqli_query($conn, "SELECT * FROM administration WHERE email = '$email'");
                //echo mysqli_num_rows($checkUser);
                
                //if the user login
                if (mysqli_num_rows($checkUser) > 0) {
                
                //go fetch the db and check if email and psw are correct    
                    $row = mysqli_fetch_assoc($checkUser);
                    
                    //check the Email and Pass
                    $dbEmail = $row['email'];
                    $dbPassword = $row['password'];

                //if email and psw is correct direct them ahead
                    if ($dbEmail == $email && password_verify($password, $dbPassword)) {
                        
                        session_start();

                        $_SESSION['email'] = $email;
                        header("location: ../Dashboard");
//if not correct redirect
                    } else {
                        header("location: ../bitraxcoin.php?failedLog");
                    }

                } else {
                    header("location: ../bitraxcoin.php?failedLog");
                }
                
            }
        }
    }
    login();