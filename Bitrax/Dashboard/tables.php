<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr" style="background: black">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <meta http-equiv='refresh' content='15url=Dashboard.php'>
    <title>Call | Report | Subscribers</title>
    <link rel='apple-touch-icon' href='../img/core-img/logo.png'>
    <link rel='shortcut icon' type='image/x-icon' href='../img/core-img/logo.png'>

    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
  </head>
 <?php include 'head.php' ?>

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Call | Update | Subcribers</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../../">Visit Site</a>
                  </li>
                  <li class="breadcrumb-item active">Tables
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
       
<!-- Basic Tables end -->

<!-- Striped rows start -->
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Call Request</h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
					<ul class="list-inline mb-0">
						<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
						<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
						<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
						<li><a data-action="close"><i class="ft-x"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="card-content collapse show">
				<div class="card-body">
					<p class="card-text">Call Request from client</p>
				</div>
				<div class="table-responsive">
					<?php  
                        $allUser = mysqli_query($conn, "SELECT * FROM contact_us");
                    ?>
					<table class="table table-striped">
						<thead>
							<tr>
								            <th>#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Remark</th>
                            <th scope="col">Date</th>
                            <th scope="col" class="active">Action</th>
							</tr>
						</thead>
						<tbody>
                                         <?php 
                                              //while loop 
                                              //fetching all details from database 
                                                 while ($all = mysqli_fetch_assoc($allUser)) {
                                                    $co = $all['co'];
                                                    $name = $all['name'];
                                                    $email = $all['email'];
                                                    $phone = $all['phone'];
                                                    $subject = $all['subject'];
                                                    $comment = $all['comment'];
                                                    $created = $all['created'];
                               echo "
															                           <td scope='row'>$co</td>
                                                            <td>$name</td>

                                                            <td><b style='color: darkred'>$email</b></td>

                                                            <td><b style='color: grey'>$phone</b></td>
                                                            <td>$subject</td>
                                                            <td>$comment</td>

                                                            <td><button class='btn btn-info'>$created</button></td>

                                                            <td><a href='?co=$co' class='btn btn-danger btn-sm'>Delete</a></td>
                                                          </tr>
                                                        ";
                                                 }if (isset($_GET['co'])) {
                                                    $deleteId = $_GET['co'];

                                                    $deleteGrap = mysqli_query($conn, "DELETE FROM contact_us WHERE co = '$deleteId'");
                                                    if ($deleteGrap) {
                                                      echo "<span class='btn btn-danger btn-sm'>$name contact was Deleted </span> <meta http-equiv='refresh' content='10url=Dashboard.php'>";
                                                    }
                                                 }
                                              ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Striped rows end -->

<!-- Striped rows start -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Report | Feedback | Complain</h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
          <ul class="list-inline mb-0">
            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
            <li><a data-action="close"><i class="ft-x"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="card-content collapse show">
        <div class="card-body">
          <p class="card-text">Report | Feedback | Complain made from our client</p>
        </div>
        <div class="table-responsive">
          <?php  
                        $allUser = mysqli_query($conn, "SELECT * FROM feedback_request ORDER BY email");
                    ?>
          <table class="table table-striped">
            <thead>
              <tr>
                              <th>S/N</th>
                              <th scope="col">Email</th>
                              <th scope="col">Report</th>
                              <th scope="col">Request</th>
                              <th scope="col">Message</th>
                              <th scope="col">Date</th>
                              <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                                         <?php 
                                              //while loop 
                                              //fetching all details from database 
                                                 while ($all = mysqli_fetch_assoc($allUser)) {
                                                    $fd = $all['fd'];
                                                    $email = $all['email'];
                                                    $report = $all['report'];
                                                    $request = $all['request'];
                                                    $msg = $all['msg'];
                                                    $date_ = $all['date_'];

                                                    echo "
                                                          <tr>
                                                            <td scope='row'>$fd</td>
                                                            <td><b style='color: darkred'>$email</b></td>
                                                            <td>$report</td>
                                                            <td>$request</td>
                                                            <td>$msg</td>
                                                            <td>$date_</td>
                                                            <td><a href='?fd=$fd' class='btn btn-danger btn-sm'>Remove</a></td>
                                                          </tr>
                                                        ";
                                                 }
                                                 if (isset($_GET['fd'])) {
                                                    $deleteId = $_GET['fd'];

                                                    $deleteWeb = mysqli_query($conn, "DELETE FROM feedback_request WHERE fd = '$deleteId'");
                                                    if ($deleteWeb) {
                                                      echo "<span class='btn btn-danger btn-sm'>$email Message was Deleted </span> <meta http-equiv='refresh' content='10url=Dashboard.php'>";
                                                    }
                                                 }
                                              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Striped rows end -->




<!-- Table head options end -->
<!-- Table head options start -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Subscribers</h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
          <ul class="list-inline mb-0">
            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
            <li><a data-action="close"><i class="ft-x"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="card-content collapse show">
        <div class="card-body">
          <p>Subscribers</p>
        </div>
        <div class="table-responsive">
                  <?php  
                        $allUser = mysqli_query($conn, "SELECT * FROM subscribers");
                    ?>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php 
                                              //while loop 
                                              //fetching all details from database 
                                                 while ($all = mysqli_fetch_assoc($allUser)) {
                                                    $sb = $all['sb'];
                                                    $email = $all['email'];

                                                    echo "
                                                          <tr>
                                                            <td>$sb</td>
                                                            <td>$email</td>
                                                            <td><a href='?sb=$sb' class='btn btn-danger btn-sm'>Delete</a></td>
                                                          </tr>
                                                        ";
                                                 }

                                                 if (isset($_GET['sb'])) {
                                                    $deleteCon = $_GET['sb'];

                                                    $deleteContact = mysqli_query($conn, "DELETE FROM subscribers WHERE sb = '$deleteCon'");
                                                    if ($deleteContact) {
                                                      echo "<span class='btn btn-danger btn-sm'>$email subscription was Removed </span> <meta http-equiv='refresh' content='10url=Dashboard.php'> ";
                                                    }
                                                 }
                                              ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Table head options end -->



<!-- Bordered table end -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

<?php   include 'footer.php' ?>

<style type="text/css">
	button{
		box-shadow: black 1px 2px 2px 1px !important
	}
</style>
    <!-- BEGIN VENDOR JS-->
    <script src="theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>