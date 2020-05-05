<?php include 'includes/header.php';?>

    <div id="wrapper">

        <!-- Navigation -->
       <?php include 'includes/navigation.php'; ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
				      	</div>


                        <h1 class="page-header">
                            Welcome to the Administration Panel
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
<div class="container">
    <div class="row">
        <div class="col-lg-5 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-text fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">


                        <div>
                            <h3>
                        <?php  
                            $getAllPortfolio = mysqli_query($conn, "SELECT * FROM portfolio");
                            echo mysqli_num_rows($getAllPortfolio); 
                        ?> Portfolio
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
                <a href="portfolio.php?source=view">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-5 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-fw fa-suitcase fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">

                        <div><h3>
                        <?php  
                            $getAllContacts = mysqli_query($conn, "SELECT * FROM contact");
                            echo mysqli_num_rows($getAllContacts); 
                        ?> Contact
                        </h3></div>
                        </div>
                    </div>
                </div>
                <a href="comment.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


</body>

</html>
