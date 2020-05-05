<?php include 'Config/contacts.php' ?>
 <!-- nvestments-area start -->
        <div class="team-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>Our Experts <span style="color: orange">Team</span></h2>
                    </div>
                </div>
            </div>
            <p style="font-size: 15px"> Bitraxcoin's team has a prerogative constant on the business strategies and decision-making modest, a passion for coding creation and building of an open accessible and safe financial future. We constantly and building of an open investors go through with the aim to provide innovative, revolutionary  solutions beneficial to both traders and investors </p>
<br>    
<br>    
<br>    
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="shop-wrap">
                        <div class="">
                            <div class="text-warning" style="background: white; padding: 20px; position: relative; top: -30px">
                                <img src="assets/images/line1.png">
                            </div>

                           <div class="flip-box">
                                <div class="flip-box-front">
                                    <center><img src="assets/images/team/CEO.png" alt="CEO" class="text-center" width="300px"></center>
                                    </div>
                                </div>
                        </div>
                        <div class="shop-content">
                            <ul>
                                <li class="pull-left">CEO &amp; Founder</li>
                                <li class="pull-right">
                                    <span class="text-success"></span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>    
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="shop-wrap">
                        <div class="">
                            <div class="text-warning" style="background: white; padding: 20px; position: relative; top: -30px">
                                <img src="assets/images/line1.png">
                            </div>

                           <div class="flip-box">
                                <div class="flip-box-front">
                                    <center><img src="assets/images/team/Charles_howard.png" alt="" class="text-center" width="300px"></center>
                                    </div>
                                </div>
                        </div>
                        <div class="shop-content">
                            <h3 class="text-center"><b>ORTIZ KELVIN</b></h3>
                            <ul>
                                <li class="pull-left">Manager</li>
                                <li class="pull-right">
                                    <span class="text-success">Active</span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>    
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="shop-wrap">
                        <div class="">
                            <div class="text-warning" style="background: white; padding: 20px; position: relative; top: -30px">
                                <img src="assets/images/line1.png">
                            </div>

                           <div class="flip-box">
                                <div class="flip-box-front">
                                    <center><img src="assets/images/team/harryson.jpg" alt="" class="text-center" width="300px"></center>
                                    </div>
                                </div>
                        </div>
                        <div class="shop-content">
                            <h3 class="text-center"><b>HARRYSON MESCHANDEZ</b></h3>
                            <ul>
                                <li class="pull-left">Marketing</li>
                                <li class="pull-right">
                                    <span class="text-success">Active</span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </li>
                            </ul>        
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <div class="nvestments-area position-relative nvestments-area2" style="background: url('assets/images/bg/11.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="nvestments-img">
                        <img src="assets/images/bg/1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="contact-wrap  flex-style">
                        <h2 class="text-dark"><b> Request A Call Back</b></h2>
                        <form action="#" method="POST" >
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <input required type="text" placeholder="Name" name="name" value="<?php echo htmlspecialchars($name) ?>">
                                    <div style="color: red" class="red-text"><?php echo $errors['name']; ?></div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input required type="email" placeholder="Email" name="email" value="<?php echo htmlspecialchars($email) ?>">
                                    <div style="color: red" class="red-text"><?php echo $errors['email']; ?></div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input required type="text" placeholder="Phone" name="phone" value="<?php echo htmlspecialchars($phone) ?>">
                                    <div style="color: red" class="red-text"></div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input required type="text" placeholder="Subject" name="subject" value="<?php echo htmlspecialchars($subject) ?>"><?php echo $errors['subject']; ?>
                                </div>
                                <div class="col-12">
                                    <textarea required cols="30" rows="10" placeholder="Message" name="comment" value="<?php echo htmlspecialchars($comment) ?>"></textarea>
                                    <?php echo $errors['comment']; ?>
                                </div>
                                <div class="col-12">
                                    <button name="contact">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>