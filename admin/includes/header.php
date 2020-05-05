<?php ob_start(); ?>
<?php 
    session_start();
    if (!isset($_SESSION['email'])) {
        header("location: ../");
    } else {
       $email =  $_SESSION['email'];
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        header("location: ../");
    }

    include 'config/dbh.php';
    include 'config/functions.php';

    if (isset($_GET['del'])) {
        $delId = $_GET['del'];
        $delPortfolio = mysqli_query($conn, "DELETE FROM portfolio WHERE id = '$delId'");
        if ($delPortfolio) {
            header("location: ./portfolio.php?source=view&deleted");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Leblib Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

<body>
