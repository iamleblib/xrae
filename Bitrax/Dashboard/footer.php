<footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2019 &copy; Copyright <a class="text-bold-800 grey darken-2" target="_blank">Bitraxcoin Trading Company Ltd</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
        </ul>
      </div>
    </footer>
    
      <?php
                //creating a logout button  and destroy else no redirection if user clear
                    if (isset($_GET['logout'])) {
                //if user logout it will disconnect every interaction
                      session_destroy();

                      header("location: ../Admin.php");
                    }
                ?>