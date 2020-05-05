<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact BTX</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- bootstrap v3.3.7 css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- swiper.min.css -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <!-- font-awesome v4.6.3 css -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- flaticon.css -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- magnific-popup.css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- metisMenu.min.css -->
    <link rel="stylesheet" href="assets/css/metisMenu.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
    <!-- header-area start -->
<?php include 'head.php' ?>
    <!-- header-area end -->
    <br>

    <!-- breadcumb-area start -->
    <div class="breadcumb-area flex-style  black-opacity" style="background: url('assets/images/bg/2.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Contact</h2>
                    <ul class="d-flex">
                        <li><a href="index.php?#PMAURL-0:index.php?db=&table=&server=1&target=&token=592804bd3e81549e4cd3f5a7fd3b0ee1">Home</a></li>
                        <li><i class="fa fa-angle-double-right"></i></li>
                        <li><span>Contact</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- breadcumb-area end -->

    <div class="contact-page-area" style="background: black">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form bg-dark text-light" >
                        <style type="text/css">
                            .contact-form:hover{
                                box-shadow: white 1px 1px 21px 1px
                            }.contact-page-info:hover{
                                box-shadow: white 1px 1px 7px 3px
                            }
                        </style>

<?php include 'Config/contacts.php' ?>
<form method="POST" action="?">
                        <h3 class="text-light"><span>Get in </span> touch with us! </h3>
                        <p>Kindly fill in the details to contact the Admin
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name" name="name" value="<?php echo htmlspecialchars($name) ?>">
                                    <ab style="color: red" class="red-text"><?php echo $errors['name']; ?></ab>
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" placeholder="Email" name="email" value="<?php echo htmlspecialchars($email) ?>">
                                    <div style="color: red" class="red-text"><?php echo $errors['email']; ?></div> <br>
                                </div>
                                <div class="col-12">
                                    <input type="text" placeholder="subject" name="subject" value="<?php echo htmlspecialchars($subject) ?>">
                                    <div style="color: red" class="red-text"><?php echo $errors['subject']; ?></div>
                                </div>
                                <div class="col-12">
                                    <input type="hidden"  placeholder="subject" name="phone" value="<?php echo htmlspecialchars($phone) ?>">
                                </div>
                                <br>
                                <div class="col-12">
                                    <textarea name="comment" value="<?php echo htmlspecialchars($comment) ?>" cols="30" rows="10" placeholder="Your Message"></textarea>
                                    <div style="color: red" class="red-text"><?php echo $errors['comment']; ?></div>
                                </div>
                                <div class="col-12">
                                    <button name="contact">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-page-info bg-dark text-light">
                        <h3 class="text-primary">Head Office</h3>
                        <ul class="border-bottom">
                            <li><i class="fa fa-home"></i> Sörnäiste Rantatie 13c, 00530 Helsinki, Finland</li>
                            <li><i class="fa fa-envelope"></i> Support@bitraxcoin.biz </li>
                            <li><i class="fa fa-phone"></i> (+1)313-293-7408, (+1) 409 519 3083</li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>

    
    <?php include 'widget.php' ?>
    <!-- footer-area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js "></script>
    <!-- popper.min.js -->
    <script src="assets/js/vendor/popper.min.js "></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js "></script>
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <script src="assets/js/owl.carousel.min.js "></script>
    <!-- swiper.min.js -->
    <script src="assets/js/swiper.min.js "></script>
    <!-- mailchimp.js -->
    <script src="assets/js/mailchimp.js"></script>
    <!-- metisMenu.min.js -->
    <script src="assets/js/metisMenu.min.js"></script>
    <!-- plugins js -->
    <script src="assets/js/plugins.js "></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbeBYsZSDkbIyfUkoIw1Rt38eRQOQQU0o"></script>
   
    <!-- main js -->
    <script src="assets/js/scripts.js "></script>
</body>

</html>