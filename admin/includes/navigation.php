

 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Leblib</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                  <li><a href="../">Visit Site</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Howdy <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="index.php?logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
             <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-send"></i> Portfolio  <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="portfolio.php?source=view">View Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio.php?source=add">Add New Portfolio</a>
                            </li>

                        </ul>
                    </li>

                    <li> 
                        <a href="javascript:;" data-toggle="collapse" data-target="#clients"><i class="fa fa-fw fa-users"></i> Clients Upload  <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="clients" class="collapse">
                            <li>
                                <a href="clients.php?source=view">View Clients Logo</a> 
                            </li>
                            <li>
                                <a href="clients.php?source=add">Add Clients Logo</a>
                            </li>
                        </ul>
                    </li>

                       <li>
                        <a href="contacts.php"><i class="fa fa-fw fa-suitcase"></i> Contacts</a>
                    </li>
                    <!-- <li>
                        <a href="comment.php"><i class="fa fa-fw fa-comment"></i>    Comments 
                        </a>
                        </li>
                       <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-users"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="users" class="collapse">
                            <li>
                                <a href="users.php">View All Users</a>
                            </li>
                            <li>
                                <a href="users.php?source=add_user">Add New Users</a>
                            </li> 
                        </ul>
                    </li>
                    <li>
                        <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
       <script src="bootstrap/js/jquery.js"></script>
