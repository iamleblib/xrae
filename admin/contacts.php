<?php include 'includes/header.php';?>

    <div id="wrapper">

        <!-- Navigation -->
       <?php include 'includes/navigation.php'; ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Welcome to the Administration Panel
                        </h1>
					<div class="col-sm-6">
                    <div class="container">
                        <div class="table-responsive">
                            <table class="table table-hover">
                            <thead>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php echo getComments(); ?>
                            </tbody>
                            <tfoot>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tfoot>
                            </table>
                        </div>
                        </div>
					</div>
                <!-- /.row -->
            </div>
        </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
