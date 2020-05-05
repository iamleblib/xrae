<?php include 'includes/header.php'; ?>

<div id="wrapper">

	<!-- Navigation -->
	<?php include 'includes/navigation.php'; ?>


	<div id="page-wrapper">

		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="row">

					<h1 class="page-header">
						Welcome to the Administration Panel
					</h1>

				</div>

				<?php 
						if (isset($_GET['source'])) {
							$source = $_GET['source'];

							switch ($source) {
								case 'view':
									include 'view_clients_logo.php';
									break; 
								case 'add':
										include 'add_clients_logo.php';
										break;
								default:
									include 'view_clients_logo.php';
									break;
							}
						}
					?>

			</div>

			<!-- /.row -->

		</div>
		<!-- /.container-fluid -->

	</div>
	<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="bootstrap/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
