<?php    include '../../../client_session.php'; ?>


<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
         <img src="btc.png">
        </a>
        <a href="#" class="simple-text logo-normal">
        <?php echo $full_name ?>
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="">
            <a href="index.php?5e7fb5b135bcbb0c9aab6e5b=!567$%^((=0">
              <i class="now-ui-icons users_circle-08"></i>
              <p>My Dashboard</p>
            </a>
          </li>
          <li>
            <a href="plans.php?&*fb5b135bcbb0c9aab6e5b=!567$%^((=0">
              <i class="now-ui-icons education_atom"></i>
              <p>Investment Plan</p>
            </a>
          </li>
          <li>
            <a href="depo.php?5e7fb5b135bcbb0c9aab6e5b=!567$%^((=0">
              <i class="now-ui-icons business_money-coins"></i>
              <p>MY WALLET</p>
            </a>
          </li>
          <li>
            <a href="withdrawal.php?5e7fb5b135b&*aab6e5b=!567$%^((=0">
              <i class="now-ui-icons files_paper"></i>
              <p>Withdrawal Balance</p>
            </a>
          </li>
          <li>
            <a href="user.php?5e7fb5b135bcb&*b6e5b=!567$%^((=0">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="exp.php?5e7f&*bcbb0c9aab6e5b=!567$%^((=0">
              <i class="now-ui-icons travel_info"></i>
              <p>Give a Report</p>
            </a>
          </li>



          
          <li class="active-pro">
            <a name="client_switch" href="?client_switch">
              <i class="now-ui-icons arrows-1_refresh-69"></i>
              <p>Switch Account</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="index.php?5e7fb5b135bcbb0c9aab6e5b=!567$%^((=0">Home</a>
            <a class="text-info" href="?client_logout" name="client_logout">View site</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <!--<form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>-->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p style="cursor: pointer;">
                    <span style="cursor: pointer;" class="d-lg-none d-md-block"></span>
                  </p>
                </a>
                <div  class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="exp.php?5e7f&*bcbb0c9aab6e5b=!567$%^((=0">Give a report</a>
                  <a class="dropdown-item" href="index.php?5e7fb5b135bcbb0c9aab6e5b=!567$%^((=0">Home</a>
                  <a class="dropdown-item" href="msg.php?5e7fb5b135bcbb0c9aab6e5b=!567$%^((=0">Message from Bitrax</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_circle-08"></i>
                  <p style="cursor: pointer;">
                    <img src="btc.png" width="30px"><span class="d-lg-none d-md-block"></span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="./">Dashboard</a>
                  <a class="dropdown-item" href="user.php?5e7fb5b135bcbb0c9aab6e5b=!567$%^((=0"><i class="now-ui-icons users_circle-08"></i> My Profile</a>
                  <a class="dropdown-item" href="plans.php?5e7fb5b135bcbb0c9aab6e5b=!567$%^((=0"><i class="now-ui-icons business_money-coins"></i>Make Investment</a>
                  <a class="dropdown-item" href="./withdrawal.php?5e7fb5b135bcbb0c9aab6e5b=!567$%^((=0"><i class="now-ui-icons files_paper"></i> Withdrawal Balance</a>
                  <a href="msg.php" class="dropdown-item btn-block" onclick="nowuiDashboard.showNotification('top','center')"><i class="now-ui-icons ui-1_bell-53"></i>Notification</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="?client_logout" name="client_logout" class=" btn-sm btn-min-width mr-1 mb-1" style="color: darkred"><i class="now-ui-icons media-1_button-power"></i> Logout</a>
                </div>
              </li>

           <div id="google_translate_element"></div>
            <script type="text/javascript">
            function googleTranslateElementInit() {
              new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
            }
            </script>

            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            </ul>
          </div>
        </div>
      </nav>
