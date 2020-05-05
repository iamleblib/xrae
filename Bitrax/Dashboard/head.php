
    
    <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.ico">
<?php 
include '../Config/adminsession.php';
?>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-block d-md-none">
                <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <li class="nav-item d-none d-md-block">
                <a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                <ul class="dropdown-menu">
                  <li class="arrow_box">
                    <form>
                      <div class="input-group search-box">
                        <div class="position-relative has-icon-right full-width">
                          <input class="form-control" id="search" type="text" placeholder="Search here...">
                          <div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">         
              <li class="dropdown dropdown-language nav-item">
                <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                  <div class="arrow_box">
                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a>
                  </div>
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right">
                    <a class="dropdown-item" target="_blank" href="https://bitraxcoin.biz/webmail"><i class="ft-check-square"></i> Compose mail</a></div>
                </div>
              </li>
              <li class="dropdown dropdown-user nav-item">
                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="avatar avatar-online">
                <img src="../../btc.png" width="50px" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">

                  <div class="arrow_box_right">
                    <a class="dropdown-item" href="#"><span class="avatar avatar-online">
                    <img src="CEO.png" alt="avatar"><span class="user-name text-bold-700 ml-1"><?php  echo $full_name; ?></span></span><br><span style="font-size: 10px"><?php echo $phone ?></span></a>
                    <span class=""><br /> <span class="btn btn-success btn-sm"><i class="la la-user-secret"></i> <?php echo $email; ?></span>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../index.php" target="_blank"><i class="la la-paperclip"></i> Visit Site</a>
                    <a class="dropdown-item" href="tables.php"><i class="la la-question-circle"></i> Feedback or Complaint</a>
                    <a class="dropdown-item" href="signup_users.php"><i class="la la-users"></i> Signup Users</a>
                    <a class="dropdown-item" href="information.php"><i class="ft-credit-card"></i>Payout & Info</a>
                    <a class="dropdown-item" href="Payment.php"><i class="la la-gg"></i>Confirm Payment</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="?logout" name="logout" class=" btn-sm btn-min-width mr-1 mb-1" style="color: darkred"><i class="ft-power"></i> Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="index.php"><img class="brand-logo" alt="Xraecity computer Ltd" src="line1.png" width="5000px" style="width: 300px"></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="nav-item"><a href="index.php"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
          </li>
          <li class="nav-item"><a href="Update.php"><i class="la la-stack-overflow"></i></i><span class="menu-title" data-i18n="">Payout</span></a>
          </li>
          <li class="nav-item"><a href="Payment.php"><i class="la la-gg"></i><span class="menu-title" data-i18n="">Payment</span></a>
          </li>
          <li class="nav-item"><a href="request.php"><i class="la la-stack-overflow"></i></i><span class="menu-title" data-i18n="">Withdrawal Request</span></a>
          </li>
          <li class="nav-item"><a href="information.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Client & Info</span></a>
          </li>
          <li class="nav-item"><a href="tables.php"><i class="la la-question-circle"></i><span class="menu-title" data-i18n="">Call | Report | Subscribers</span></a>
          </li>
          <li class=" nav-item"><a href="signup_users.php"><i class="la la-paperclip"></i><span class="menu-title" data-i18n="">Signup users</span></a>
          </li>
          <li class=" nav-item"><a href="cpanel.php" target="_blank"><i class="la la-hand-lizard-o"></i><span class="menu-title" data-i18n="" class="text-danger" style="color: red">Admin Panel</span></a>
          </li>
        </ul>
      </div><a class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1" href="?logout" name="logout">Sign Out!</a>
      <div class="navigation-background"></div>
    </div>