<?php 

require ('../../../Config/db_connect.php');

//call up the variables
$plan = $alert = $name ='';
$errors = array ('plan'=>'');

//IF else
if(isset($_POST['Inv1000'])) {
    //check for full_name name
   
    //CHECKING comment
        if(empty($_POST['plan'])){
    /* Echo empty field*/   $errors ['plan'] = 'Empty';
    }

//IF SUBMITTED ECHO ERROR
if(array_filter($errors)) {
    echo '<script type="text/javascript">Error to upload, please check requirement and correct them</script>';
/* TO ESCAPE ANY SUSPICIOUS CODE*/}else{
    $plan = mysqli_real_escape_string($conn, $_POST['plan']);
    $alert = mysqli_real_escape_string($conn, $_POST['alert']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);

//INSERT DATAS TO DATABASE
    $sql = "INSERT INTO confirmed_deposit(plan, alert, name) VALUES ('$plan', '$alert', '$name')";

        //IF SUCCESSFUL REDIRECT TO
        if(mysqli_query ($conn, $sql)){
            header('location: process.php');
        }else{
//ELSE ECHO ERROR BUT ECHO SHOULD BE BY DEFAULT (E.G IN LINE..)
            echo 'query error: ' .mysqli_error($conn);
        }



    }
}



//WITHDRAWAL REQUEST
$to_withdraw = $name = $last = $intel = $xpried = $btc_address ='';
$errors = array ('btc_address'=>'');

//IF else
if(isset($_POST['done'])) {
    //check for full_name name
   
    //CHECKING comment
        if(empty($_POST['btc_address'])){
    /* Echo empty field*/   $errors ['btc_address'] = 'Empty';
    }

//IF SUBMITTED ECHO ERROR
if(array_filter($errors)) {
    echo '<script type="text/javascript">Error to Withdraw, please check requirement and try again</script>';
/* TO ESCAPE ANY SUSPICIOUS CODE*/}else{
    $btc_address = mysqli_real_escape_string($conn, $_POST['btc_address']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $intel = mysqli_real_escape_string($conn, $_POST['intel']);
    $xpried = mysqli_real_escape_string($conn, $_POST['xpried']);
    $to_withdraw = mysqli_real_escape_string($conn, $_POST['to_withdraw']);

//INSERT DATAS TO DATABASE
    $sql = "INSERT INTO withdraw(name, last, btc_address, to_withdraw, xpried, intel) VALUES ('$name', '$last', '$btc_address', '$to_withdraw', '$xpried', '$intel')";

        //IF SUCCESSFUL REDIRECT TO
        if(mysqli_query ($conn, $sql)){
            header('location: process.php?=%60-97665%^%$#@$3%4^%FGHG');
        }else{
//ELSE ECHO ERROR BUT ECHO SHOULD BE BY DEFAULT (E.G IN LINE..)
            echo 'query error: ' .mysqli_error($conn);
        }



    }
}



//FEEDBACK REPORT OR REQUEST
$msg = $request = $report = $email ='';
$errors = array ('msg'=>'');

//IF else
if(isset($_POST['send'])) {
    //check for full_name name
   
    //CHECKING comment
        if(empty($_POST['msg'])){
    /* Echo empty field*/   $errors ['msg'] = 'Empty';
    }

//IF SUBMITTED ECHO ERROR
if(array_filter($errors)) {
    echo "<script type='text/javascript'> alert ('Please fill approprately')</script>";
/* TO ESCAPE ANY SUSPICIOUS CODE*/}else{
    $msg = mysqli_real_escape_string($conn, $_POST['msg']);
    $report = mysqli_real_escape_string($conn, $_POST['report']);
    $request = mysqli_real_escape_string($conn, $_POST['request']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

//INSERT DATAS TO DATABASE
    $sql = "INSERT INTO feedback_request(msg, report, request, email) VALUES ('$msg', '$report', '$request', '$email')";

        //IF SUCCESSFUL REDIRECT TO
    echo "<script type='text/javascript'> alert ('Your  was sent SUCCESSFUL')</script>";

        if(mysqli_query ($conn, $sql)){
            header('location: index.php?=%60-97665%^%$#@$3%4^%FGHG');
        }else{
//ELSE ECHO ERROR BUT ECHO SHOULD BE BY DEFAULT (E.G IN LINE..)
            echo 'query error: ' .mysqli_error($conn);
        }



    }
}

