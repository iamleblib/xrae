
<?php 
   include 'admin/config/dbh.php';
   include 'admin/config/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <meta name="author" content="Leblib <info@Leblib.com.ng>" />
      <meta name="description" content="Welcome to the Leblib Top Web Development Company, We offer Enterprise Web Development, Online Training and Business Intelligence Solutions.">
      <meta name="Keywords" content="">
      <link rel="shortcut icon" href="assets/images/logo/leblib.png" type="image/x-icon" />
      <meta name="og:image" content="assets/images/logo/leblib.png">
      <link id="favicon" rel="shortcut icon" href="assets/images/logo/leblib.png" type="image/png">
      <link rel="apple-touch-icon" sizes="194x194" href="assets/images/logo/leblib.png" type="image/png">
      <title>Leblib | Design, Build and Achieve</title>
      <!-- Bootstrap -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
      <!-- Animation -->
      <link rel="stylesheet" href="assets/css/animate.min.css" type="text/css">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
      <!-- Light Case -->
      <link rel="stylesheet" href="assets/css/lightcase.min.css" type="text/css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Template style -->
      <link rel="stylesheet" href="assets/css/styles.css" type="text/css">
      <link rel="stylesheet" href="assets/css/blue.css" type="text/css">
      <script src='https://www.google.com/recaptcha/api.js'></script>
      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
   </head>
   <body>
      <!-- preloader -->
      <div id="preloader">
         <div id="preloader-circle">
            <span></span>
            <span></span>
         </div>
      </div>
      <!-- /preloader -->
      <div class="wrapper-page">
         <!-- Header -->
         <header class="header">
            <div class="header-content">
               <div class="profile-picture-block">
                  <div class="my-photo">
                     <img src="assets/images/logo/leblib.png" class="img-fluid" alt="Leblib">
                  </div>
               </div>
               <!-- Header Head -->
               <div class="site-title-block">
                  <div class="site-title">Leblib</div>
                  <div class="type-wrap">
                     <div class="cd-headline clip">
                        <span class="cd-words-wrapper">
                        <b>Leblib</b>
                        <b>Web Developers</b>
                        <b>Online Tutors</b>
                        <b>UI/UX Designers</b>
                        </span>
                     </div>
                  </div>
               </div>
               <!-- /Header Head -->
               <!-- Navigation -->
               <div class="site-nav">
                  <!-- Main menu -->
                  <ul class="header-main-menu" id="header-main-menu">
                     <li><a   class="active" href="#home"><i class="fa fa-home"></i> Home</a></li>
                     <li><a href="#about-us"><i class="fa fa-info-circle"></i></i> About Us</a></li>
                     <li><a href="#portfolio"><i class="fa fa-envelope-open"></i> Portfolio</a></li>
                     <li><a href="#contact"><i class="fa fa-paper-plane"></i> Contact Us</a></li>
                     <?php 
                     session_start();
                        if (isset($_SESSION['email'])) {
                           echo '<li><a href="admin/"><i class="fa fa-lock"></i> Admin Panel</a></li>';
                        }
                     ?>
                  </ul>
                  <!-- /Main menu -->
               </div>
               <!-- /Navigation -->
            </div>
         </header>
         <!-- /Header -->
         <!-- Mobile Header -->
         <div class="responsive-header">
            <div class="responsive-header-name">
               <img class="responsive-logo" src="assets/images/logo/leblib.png" alt="Leblib" /> Leblib Solutions
            </div>
            <span class="responsive-icon"><i class="fa fa-bars"></i></span>
         </div>
         <!-- /Mobile Header -->
         <!-- Main Content Pages -->
         <div class="content-pages">
            <!-- Subpages -->
            <div class="sub-home-pages">
               <!-- Start Page home -->
               <section id="home" class="sub-page start-page">
                  <div class="sub-page-inner" style="background: url('assets/images/bg.jpg');">
                     <div class="mask"></div>
                     <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                           <div class="title-block">
                              <h2>Hello We're Leblib</h2>
                              <div class="type-wrap">
                                 <div class="cd-headline clip">
                                    <span class="blc">We're </span>
                                    <span class="cd-words-wrapper">
                                    <b>Leblib</b>
                                    <b>Web Developers</b>
                                    <b>Online Tutors </b>
                                    <b>UI/UX Designers</b>
                                    </span>
                                 </div>
                              </div>
                              <div class="home-buttons">
                                 <a href="#portfolio" class="bt-submit"><i class="lnr lnr-envelope"></i> View our works</a>
                                 <a href="#contact" class="bt-submit"><i class="lnr lnr-briefcase"></i> Hire Us</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- /Start Page home -->
               <!-- About Me Subpage -->
               <section id="about-us" class="sub-page">
                  <div class="sub-page-inner">
                     <div class="section-title">
                        <div class="main-title">
                           <div class="title-main-page">
                              <h4>About Us</h4>
                              <p></p>
                           </div>
                        </div>
                     </div>
                     <div class="section-content">
                        <!-- about me -->
                        <div class="row pb-30">
                           <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                              <h3>Leblib</h3>
                              <span class="about-location"><i class="lnr lnr-map-marker"></i>Nigeria</span>
                              <p class="about-content">Top Web Development Company, We offer Enterprise Web Development, Online Training and Business Intelligence Solutions
                              </p>
                              <p class="about-content">We follow Agile Project Management and Continious Delivery model for faster deliveries and deployment while ensuring high quality and lowest costs.
                              </p>
                              <p class="about-content">We can help you build your App idea, create wireframes, design mock-ups and deliver the Most Viable Product (MVP) that establishes your Proof of Concept.
                              </p>
                              <p class="about-content">This delivery model works for everyone including Start-ups, Medium Enterprises and Large Businesses.
                              </p>
                              <p class="about-content">We can delivery your project in the fastest time possible, lets discuss the opportunity today!</p>
                              <ul class="bout-list-summry row">
                                 <li class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="icon-info">
                                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                                    </div>
                                    <div class="details-info">
                                       <h6>9+ Years Job</h6>
                                       <p>Experience</p>
                                    </div>
                                 </li>
                                 <li class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="icon-info">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                    <div class="details-info">
                                       <h6>42+ Projects</h6>
                                       <p>Completed</p>
                                    </div>
                                 </li>
                                 <li class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="icon-info">
                                       <i class="fa fa-coffee"></i>
                                    </div>
                                    <div class="details-info">
                                       <h6>16+ Meetings</h6>
                                       <p>Successful</p>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                           <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6">
                              <div class="box-img">
                                 <img src="assets/images/bg.jpg" class="img-fluid" alt="image">
                              </div>
                           </div>
                        </div>
                        <!-- /about me -->
                        <!-- services -->
                        <div class="special-block-bg">
                           <div class="section-head">
                              <h4>
                                 <span>What We Do</span>
                                 Our Services                                
                              </h4>
                           </div>
                           <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                 <div class="services-list">
                                    <div class="service-block">
                                       <div class="service-icon">
                                          <i><img src="assets/images/services/1.png"/></i>
                                       </div>
                                       <div class="service-text">
                                          <h4>Website Design and Development Services</h4>
                                          <p>
                                             You have the vision, we have the tools and the right technology. From custom informational websites to data-rich applications, our team of developers, deliver you custom web design and development&#8230;
                                          </p>
                                       </div>
                                    </div>
                                    <div class="service-block">
                                       <div class="service-icon">
                                          <i><img src="assets/images/services/2.png"/></i>
                                       </div>
                                       <div class="service-text">
                                          <h4>Branding</h4>
                                          <p>
                                             Build Your Brand with Website Development Company in Nigeria We are one of the best web development companies that could provide you effective web development services and web design services&#8230;
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                 <div class="services-list">
                                    <div class="service-block">
                                       <div class="service-icon">
                                          <i><img src="assets/images/services/3.png"/></i>
                                       </div>
                                       <div class="service-text">
                                          <h4>Software Development</h4>
                                          <p>
                                             Think, Create and Build with the right software development Company. We provide you with effective and exceptional web design and development services appropriate budget and on-time delivery. Choosing the right&#8230;
                                          </p>
                                       </div>
                                    </div>
                                    <div class="service-block">
                                       <div class="service-icon">
                                          <i><img src="assets/images/services/4.png"/></i>
                                       </div>
                                       <div class="service-text">
                                          <h4>Digital Marketing</h4>
                                          <p>
                                             Result Oriented Digital Marketing Services We are a Digital Marketing Company, focusing on increasing the revenue of business through their website. We will help your business get the success it&#8230;
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                 <div class="services-list">
                                    <div class="service-block">
                                       <div class="service-icon">
                                          <i><img src="assets/images/services/laptop.png"/></i>
                                       </div>
                                       <div class="service-text">
                                          <h4>E-Commerce Development</h4>
                                          <p>
                                             An eCommerce Development Company lays the foundation of your online store. At Leblib we recognise the importance of usability and eye-catching design interface. We offer robust and fully functional eCommerce&#8230;
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- /services -->
                        <!-- Video section -->
                        <div class="video-section" style="background: url('assets/images/city.jpeg');">
                           <div class="overlay pb-40 pt-40">
                              <div class="container">
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                                       <div class="sub-title">
                                          <h6> Why You should hire us?</h6>
                                          <h2> We Are The Best Developers in the marketplace</h2>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                       <div class="pulse-icon">
                                          <div class="icon-wrap">
                                             <a href="#">
                                             <i class="fa fa-play"></i>
                                             </a>
                                          </div>
                                          <div class="elements">
                                             <div class="circle circle-outer"></div>
                                             <div class="circle circle-inner"></div>
                                             <div class="pulse pulse-1"></div>
                                             <div class="pulse pulse-2"></div>
                                             <div class="pulse pulse-3"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- /Video section -->
                        <!-- Fun Facts -->
                        <div class="row pb-30 pt-30">
                           <div class="section-head col-sm-12">
                              <h4>
                                 <span>Fun</span>
                                 Facts                            
                              </h4>
                           </div>
                           <!-- Item 1 -->
                           <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                              <div class="pb-30">
                                 <div class="counter-block">
                                    <i class="pe-7s-smile"></i>
                                    <h4>Happy Clients</h4>
                                    <span class="counter-block-value" data-count="26">0</span>
                                 </div>
                              </div>
                           </div>
                           <!-- /Item 1-->
                           <!-- Item 2 -->
                           <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                              <div class="pb-30">
                                 <div class="counter-block">
                                    <i class="pe-7s-light"></i>
                                    <h4>Experience Years</h4>
                                    <span class="counter-block-value" data-count="9">0</span>
                                 </div>
                              </div>
                           </div>
                           <!-- /Item 2 -->
                           <!-- Item 3-->
                           <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                              <div class="pb-30">
                                 <div class="counter-block">
                                    <i class="pe-7s-cup"></i>
                                    <h4>Awards Won</h4>
                                    <span class="counter-block-value" data-count="6">0</span>
                                 </div>
                              </div>
                           </div>
                           <!-- /Item 3 -->
                           <!-- Item 4-->
                           <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                              <div class="pb-30">
                                 <div class="counter-block">
                                    <i class="pe-7s-coffee"></i>
                                    <h4>Meetings</h4>
                                    <span class="counter-block-value" data-count="16">0</span>
                                 </div>
                              </div>
                           </div>
                           <!-- /Item 4-->
                        </div>
                        <!-- /Fun Facts -->
                        <!-- List Of Testimonials -->
                        <div class="special-block-bg">
                           <div class="section-head">
                              <h4>
                                 <span>What Our</span>
                                 Client Say                                
                              </h4>
                           </div>
                           <div class="testimonials owl-carousel">
                              <!-- Testimonial item 1 -->
                              <div class="testimonial-item">
                                 <div class="testimonial-content">
                                    <div class="testimonial-review">
                                       <p>
                                          Wow what a great job! You actually surprised everybody by developing what we asked for.
                                       </p>
                                    </div>
                                 </div>
                                 <div class="testimonial-footer">
                                    <!-- <div class="testimonial-avatar">
                                       <img src="assets/images/testimonials/Logo1.png" alt="Writeo" />
                                    </div> -->
                                    <div class="testimonial-owner-content">
                                       <p class="testimonial-owner">Justin Wilson</p>
                                       <p class="testimonial-position">PRO</p>
                                       <ul class="testimonial-rating rating">
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <!-- /Testimonial item 1 -->
                              <!-- Testimonial item 1 -->
                              <div class="testimonial-item">
                                 <div class="testimonial-content">
                                    <div class="testimonial-review">
                                       <p>
                                          Thank you so much. You work is perfect and fast!
                                       </p>
                                    </div>
                                 </div>
                                 <div class="testimonial-footer">
                                    <!-- <div class="testimonial-avatar">
                                       <!-- <img src="assets/images/testimonials/manider.PNG" alt="Manider" /> 
                                    </div> -->
                                    <div class="testimonial-owner-content">
                                       <p class="testimonial-owner">Jamabel Tv</p>
                                       <p class="testimonial-position">CEO</p>
                                       <ul class="testimonial-rating rating">
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star half-star"></i></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <!-- /Testimonial item 1 -->
                              <!-- Testimonial item 1 -->
                              <div class="testimonial-item">
                                 <div class="testimonial-content">
                                    <div class="testimonial-review">
                                       <p>
                                          You guys should keep the good work moving. If you continue this way, i bet you, you will be known world wide. Thanks for my website
                                       </p>
                                    </div>
                                 </div>
                                 <div class="testimonial-footer">
                                    <!-- <div class="testimonial-avatar">
                                       <img src="assets/images/testimonials/logo1.png" alt="Bendigos Store" />
                                    </div> -->
                                    <div class="testimonial-owner-content">
                                       <p class="testimonial-owner">Josuka Village</p>
                                       <p class="testimonial-position">Manager</p>
                                       <ul class="testimonial-rating rating">
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <!-- /Testimonial item 1 -->
                           </div>
                        </div>
                        <!-- /List Of Testimonials -->
                        <!-- Clients -->
                        <div class="row pt-50">
                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <div class="section-head">
                                 <h4>
                                    <span>Our</span>
                                    Clients                                    
                                 </h4>
                              </div>
                              <!-- List Of Clients -->
                              <div class="clients owl-carousel">
                                 <?php echo displayClientsLogo(); ?>
                              </div>
                              <!-- /List Of Clients -->
                           </div>
                        </div>
                        <!-- /Clients Block -->
                     </div>
                  </div>
               </section>
               <!-- About Me Subpage -->
               <!-- Resume Subpage -->
               <!-- End of Resume Subpage -->
               <!-- Portfolio Subpage -->
               <section id="portfolio" class="sub-page">
                  <div class="sub-page-inner">
                     <div class="section-title">
                        <div class="main-title">
                           <div class="title-main-page">
                              <h4>Portfolio</h4>
                              <p></p>
                           </div>
                        </div>
                     </div>
                     <div class="section-content">
                        <!-- <div class="filter-tabs">
                           <button class="fil-cat" data-rel="all"><span>0</span> All</button>
                           <button class="fil-cat" data-rel="pro_cat_3"><span>(3)</span> E-Commerce Development</button>
                           <button class="fil-cat" data-rel="pro_cat_1"><span>(3)</span> Website Design and Development Services</button>
                        </div> -->
                        <div class="portfolio-grid portfolio-trigger" id="portfolio-page">
                           <div class="label-portfolio"><span class="rotated-sub">Project</span><span class="project-count">8</span></div>
                           <div class="row">
                              <?php echo showPortfolio();  ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- /Portfolio Subpage -->
               <!-- Blog Subpage -->
               <section id="leblib" class="sub-page">
                  <div class="sub-page-inner">
                     <div class="section-title">
                        <div class="main-title">
                           <div class="title-main-page">
                              <h4>Admin Login</h4>
                              <p>Hey Caleb Joseph Please Login</p>
                           </div>
                        </div>
                     </div>
                     <div class="section-content">
                        <div class="row blog-grid-flex">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <form action="" method="post">
                                    <label for="email">E-mail</label>
                                    <input name="email" placeholder="Enter Email" type="email" class="form-control">

                                    <label for="password">Password</label>
                                    <input name="password" placeholder="Enter Password" type="password" class="form-control">

                                    <input name="login" value="Access Admin Panel" type="submit" class="btn btn-primary btn-block">
                                 </form>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </section>
               <!-- /Blog Subpage -->
               <!-- Contact Subpage -->
               <section id="contact" class="sub-page">
                  <div class="sub-page-inner">
                     <div class="section-title">
                        <div class="main-title">
                           <div class="title-main-page">
                              <h4>Contact</h4>
                              <p>Need Some Help?</p>
                           </div>
                        </div>
                     </div>
                     <!-- Contact Form -->
                     <div class="row contact-form pb-30">

                        <div class="col-sm-12 col-md-5 col-lg-5 left-background">
                           <img src="assets/images/settings/call-center_23-2148177342.jpg" alt="" />
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-7">
                           <div class="form-contact-me">
                              <div id="show_contact_msg" class="row">
                              </div>
                              <?php 
                                 if (isset($_GET['empty'])) {
                                    echo "<span class='alert alert-danger'>All Fields Are Required</span> <meta http-equiv='refresh' content='2;url=./#contact' />";
                                 } else if (isset($_GET['num'])) {
                                    echo "<span class='alert alert-danger'>Name Can't Be a Number</span>  <meta http-equiv='refresh' content='2;url=./#contact' />";
                                 } else if (isset($_GET['invalidEmail'])) {
                                    echo "<span class='alert alert-danger'>Invalid Email!!</span>  <meta http-equiv='refresh' content='2;url=./#contact' />";
                                 } else if (isset($_GET['success'])) {
                                    echo "<span class='alert alert-success'>Mail Sent!</span>  <meta http-equiv='refresh' content='2;url=./' />";
                                 }
                              ?>
                              <form method="post" id="contact-form">
                                 <input name="name" type="text" placeholder="Name:"  autocomplete="off">
                                 <input name="email" type="email" placeholder="Email:"  autocomplete="off">
                                 <textarea name="message" placeholder="Message:"  rows="6"></textarea>
                                 <div class="g-recaptcha" data-sitekey=""></div>
                                 <input class="bt-submit" name="send" type="submit" value="Send Message">
                              </form>
                           </div>
                        </div>
                     </div>
                     <!-- /Contact Form -->
                     <!-- Contact Details -->
                     <div class="pt-50 pb-30">
                        <div class="section-head">
                           <h4>
                              <span>Contact Information</span>
                              Find us here                        
                           </h4>
                        </div>
                        <!-- Contact Info -->
                        <div class="sidebar-textbox row pb-50">
                           <div class="contact-info d-flex col-md-4">
                              <div class="w-25">
                                 <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                 </div>
                              </div>
                              <div class="contact-text w-75">
                                 <h2>Phone</h2>
                                 <p>(+234) 813 256 5989
                                 </p>
                                 <p>(+234) 807 237 8199</p>
                              </div>
                           </div>
                           <div class="contact-info d-flex col-md-4">
                              <div class="w-25">
                                 <div class="contact-icon">
                                    <i class="far fa-envelope-open"></i>
                                 </div>
                              </div>
                              <div class="contact-text w-75">
                                 <h2>Email</h2>
                                 <p>info@Leblib.com</p>
                                 <p>caleb@Leblib.com</p>
                              </div>
                           </div>
                           <div class="contact-info d-flex col-md-4">
                              <div class="w-25">
                                 <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                 </div>
                              </div>
                              <div class="contact-text w-75">
                                 <h2>Address</h2>
                                 <p>
                                    PLOT 7, Aleto, PH, Rivers State
                                    <br>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <!-- /Contact info -->
                        <!-- /Map Container -->
                        <!-- Social Media -->
                        <div class="pt-50">
                           <div class="social-media-block">
                              <h4>Follow Us: </h4>
                              <ul class="social-media-links">
                                 <li><a href="https://www.fb.com/Leblibsolutions"><i class="fab fa-facebook-f"></i></a></li>
                                 <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                                 <li><a href="https://wa.me/2348132565989?text=Hey Leblib, I am contacting you from leblib.com..."><i class="fab fa-whatsapp"></i></a></li>
                              </ul>
                           </div>
                        </div>
                        <!-- /Social Media -->
                     </div>
                     <!-- /Contact Details -->
                  </div>
               </section>
               <!-- End Contact Subpage -->
            </div>
            <!-- /Page changer wrapper -->
         </div>
         <!-- /Main Content -->
      </div>
      <!--JS Files-->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!--Owl Coursel-->
      <script src="assets/js/owl.carousel.min.js"></script>
      <!-- Typing Text -->
      <script src="assets/js/typed.min.js"></script>
      <!--Images LightCase-->
      <script src="assets/js/lightcase.min.js"></script>
      <!-- Portfolio filter -->
      <script src="assets/js/jquery.isotope.min.js"></script>
      <!-- Wow Animation -->
      <script src="assets/js/wow.min.js"></script>
      <!-- Map -->
      <!-- Main Script -->
      <script src="assets/js/script.js"></script>
      <script>
         if ($('#google-map').length > 0) {
             //set your google maps parameters
             var latitude = 5.5253253,
                 longitude = 7.46581,
                 map_zoom = 14;
         
             //google map custom marker icon 
             var marker_url = 'assets/images/map-marker.png';
         
             //we define here the style of the map
             var style = [{
                 "featureType": "landscape",
                 "stylers": [{
                     "saturation": -100
                 }, {
                     "lightness": 65
                 }, {
                     "visibility": "on"
                 }]
             }, {
                 "featureType": "poi",
                 "stylers": [{
                     "saturation": -100
                 }, {
                     "lightness": 51
                 }, {
                     "visibility": "simplified"
                 }]
             }, {
                 "featureType": "road.highway",
                 "stylers": [{
                     "saturation": -100
                 }, {
                     "visibility": "simplified"
                 }]
             }, {
                 "featureType": "road.arterial",
                 "stylers": [{
                     "saturation": -100
                 }, {
                     "lightness": 30
                 }, {
                     "visibility": "on"
                 }]
             }, {
                 "featureType": "road.local",
                 "stylers": [{
                     "saturation": -100
                 }, {
                     "lightness": 40
                 }, {
                     "visibility": "on"
                 }]
             }, {
                 "featureType": "transit",
                 "stylers": [{
                     "saturation": -100
                 }, {
                     "visibility": "simplified"
                 }]
             }, {
                 "featureType": "administrative.province",
                 "stylers": [{
                     "visibility": "off"
                 }]
             }, {
                 "featureType": "water",
                 "elementType": "labels",
                 "stylers": [{
                     "visibility": "on"
                 }, {
                     "lightness": -25
                 }, {
                     "saturation": -100
                 }]
             }, {
                 "featureType": "water",
                 "elementType": "geometry",
                 "stylers": [{
                     "hue": "#ffff00"
                 }, {
                     "lightness": -25
                 }, {
                     "saturation": -97
                 }]
             }];
         
             //set google map options
             var map_options = {
                     center: new google.maps.LatLng(latitude, longitude),
                     zoom: map_zoom,
                     panControl: true,
                     zoomControl: true,
                     mapTypeControl: true,
                     streetViewControl: true,
                     mapTypeId: google.maps.MapTypeId.ROADMAP,
                     scrollwheel: false,
                     styles: style,
                 }
                 //inizialize the map
             var map = new google.maps.Map(document.getElementById('google-map'), map_options);
             //add a custom marker to the map				
             var marker = new google.maps.Marker({
                 position: new google.maps.LatLng(latitude, longitude),
                 map: map,
                 visible: true,
                 icon: marker_url,
             });
         }
         (function(i, s, o, g, r, a, m) {
             i['GoogleAnalyticsObject'] = r;
             i[r] = i[r] || function() {
                 (i[r].q = i[r].q || []).push(arguments)
             }, i[r].l = 1 * new Date();
             a = s.createElement(o),
                 m = s.getElementsByTagName(o)[0];
             a.async = 1;
             a.src = g;
             m.parentNode.insertBefore(a, m)
         })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
         
         ga('create', 'UA-158947313-1', 'auto');
         ga('send', 'pageview');
      </script>
   </body>
</html>