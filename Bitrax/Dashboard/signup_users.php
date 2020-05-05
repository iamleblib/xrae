<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr" style="background: black">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui'>
    <title>Signup</title>
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
            <h3 class="content-header-title">Registers</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../../">Visit Site</a>
                  </li>
                  <li class="breadcrumb-item active">Registeration
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
				<h4 class="card-title">SignUp Users</h4>
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
					<p class="card-text">Signup Users and Details where you see their update on wallet, bonus</p>
				</div>
				<div class="table-responsive">
					<?php  
                        $allUser = mysqli_query($conn, "SELECT * FROM signup");
                    ?>
					<table class="table table-striped">
						<thead>
							<tr>
								            <th>#</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Invested</th>
                            <th scope="col" class="active">Signup-Date</th>
                            <th scope="col" class="active"><span class="text-success">Verified(1)</span> / <span class="text-danger">Not verified(0)</span></th>
                            <th scope="col" class="text-light" style="color: white !important">Action</th>
							</tr>
						</thead>
						<tbody>
                                         <?php 
                                              //while loop 
                                              //fetching all details from database 
                                                 while ($all = mysqli_fetch_assoc($allUser)) {
                                                    $sg = $all['sg'];
                                                    $full_name = $all['full_name'];
                                                    $clientemail = $all['clientemail'];
                                                    $phone = $all['phone'];
                                                    $invested = $all['invested'];
                                                    $earning = $all['earning'];
                                                    $date_ = $all['date_'];
                                                    $verified = $all['verified'];
                               echo "
															                           <td scope='row'>$sg</td>
                                                            <td>$full_name</td>

                                                            <td><b style='color: darkred'>$clientemail</b></td>
                                                            <td>$phone</td>
                                                            <td>$invested</td>
                                                            <td>$date_</td>
                                                            <td>$verified</td>
                                                            <td class='text-light'><a href='?sg=$sg' class='btn-sm' style='color: white !important'>Delete</a></td>
                                                          </tr>
                                                        ";
                                                 }if (isset($_GET['sg'])) {
                                                    $deleteId = $_GET['sg'];

                                                    $deleteGrap = mysqli_query($conn, "DELETE FROM signup WHERE sg = '$deleteId'");
                                                    if ($deleteGrap) {
                                                      echo "<span class='btn btn-danger btn-sm'>Deleted </span> <meta http-equiv='refresh' content='10url=Dashboard.php'>";
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