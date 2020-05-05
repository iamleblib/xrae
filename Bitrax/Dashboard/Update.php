<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui'>
    <title>Post | Front</title>
    <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.ico">
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
  
  <!-- Header footer section End -->                                                                                                      
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
<!-- Header footer section End -->


<!-- Content types section end -->

<div class="timeline-date limiter" >  

 <br>
 <br>
 <br>
<center>
  <?php  
                        $allUser = mysqli_query($conn, "SELECT * FROM payout");
                    ?>
          <table class="table table-striped">
            <thead>
              <tr>
                            <th>#</th>
                            <th scope="col" >Action</th>
                            <th scope="col">List</th>
                            <th scope="col">Date</th>
              </tr>
            </thead>
            <tbody>
                                         <?php 
                                              //while loop 
                                              //fetching all details from database 
                                                 while ($all = mysqli_fetch_assoc($allUser)) {
                                                    $id = $all['id'];
                                                    $list = $all['list'];
                                                    $dated = $all['dated'];
                               echo "
                                                         <td scope='row'>$id</td>
                                                            <td><a href='?id=$id' class='btn-sm btn btn-danger' >Delete</a></td>
                                                            <td>$list</td>
                                                            <td><b style='color: darkred'>$dated</b></td>
                                                          </tr>
                                                        ";
                                                 }if (isset($_GET['id'])) {
                                                    $deleteId = $_GET['id'];

                                                    $deleteGrap = mysqli_query($conn, "DELETE FROM payout WHERE id = '$deleteId'");
                                                    if ($deleteGrap) {
                                                      echo "<span class='btn btn-danger btn-sm'>Deleted </span> <meta http-equiv='refresh' content='10url=Dashboard.php'>";
                                                    }
                                                 }
                                              ?>
            </tbody>
          </table>
<section id="content-types">
    <div class="col-xl-6 col-md-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body bg-dark">
            <h4 class="card-title">BTC</h4>
            <h6 class="card-subtitle text-muted" style="color: white">BTC Update</h6>
          </div>
          <a href="https://www.google.com/search?q=btc+to+usd&oq=btc+to+usd&aqs=chrome..69i57j69i61l2j0l3.6162j1j9&sourceid=chrome&ie=UTF-8">Publish the Payout List here</a>
          <div class="card-body">
            
            <form action="../Config/Recommendation.php" method="POST" autocomplete="on" class="form" enctype="multipart/form-data">
                <div class="form-group">
                   <textarea type="text" class="form-control ckeditor" rows="6" placeholder="The payout List" name="list"></textarea>
                </div>

                <div class="form-group">
                  <input type="text" id="donationinput7" rows="5" class="form-control square" name="dated" placeholder="Date"></input>
                </div>
                
                <hr>

              </div>
              <div class="form-actions center">
                <button type="submit" class="btn btn-outline-dark" name="Publish" class="btn musica-btn btn-2 m-2" value="Boom"> Publish</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
                    
</section>
<!-- CKEditor -->
              <div class="col-lg-9">
                <section class="panel">
                  <header class="panel-heading">
                    
                  </header>
                  <div class="panel-body">
                    <div class="form">
                      <form action="#" class="form-horizontal">
                        <div class="form-group">
                          <label class="control-label col-sm-2"></label>
                          <div class="col-sm-10">
                           
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
        <!-- page end-->
      </section>


      <center>
<section id="content-types">
    <div class="col-xl-6 col-md-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <h4 class="card-title">Know all</h4>
            <h6 class="card-subtitle text-muted">PLANS HERE</h6>
          </div>

          <div class="card-body">
                <div class="form-group">
                   <select class="btn btn-success" style="width: 200px" name="plan">
                                                <option></option>
                                                <option>$300 to earn $390</option>
                                                <option>$400 to earn $520</option>
                                                <option>$500 to earn $650</option>
                                                <option>$600 to earn $780</option>
                                                <option>$700 to earn $910</option>
                                                <option>$800 to earn $1,040</option>
                                                <option>$900 to earn $1,170</option>
                                                <option>$1,000 to earn $1,300</option>
                                                <option>$2,000 to earn $2,600</option>
                                                <option>$3,000 to earn $3,900</option>
                                                <option>$4,000 to earn $5,200</option>
                                                <option>$5,000 to earn $6,500</option>
                                                <option>$6,000 to earn $7,800</option>
                                                <option>$7,000 to earn $9,100</option>
                                                <option>$8,000 to earn $10,400</option>
                                                <option>$9,999 to earn $12,998.7</option>
                                                <option>$10,000 to earn $18,000</option>
                                                <option>$11,000 to earn $19,800</option>
                                                <option>$12,000 to earn $21,600</option>
                                                <option>$13,000 to earn $23,400</option>
                                                <option>$14,000 to earn $25,200</option>
                                                <option>$15,000 to earn $27,000</option>
                                                <option>$16,000 to earn $28,800</option>
                                                <option>$17,000 to earn $30,600</option>
                                                <option>$18,000 to earn $32,400</option>
                                                <option>$19,000 to earn $34,200</option>
                                                <option>$20,000 to earn $36,000</option>
                                                <option>$21,000 to earn $37,800</option>
                                                <option>$22,000 to earn $39,600</option>
                                                <option>$23,000 to earn $41,400</option>
                                                <option>$24,000 to earn $43,200</option>
                                                <option>$25,000 to earn $45,000</option>
                                                <option>$26,000 to earn $46,800</option>
                                                <option>$27,000 to earn $48,600</option>
                                                <option>$28,000 to earn $50,400</option>
                                                <option>$29,000 to earn $52,200</option>
                                                <option>$30,000 to earn $54,000</option>
                                                <option>$31,000 to earn $55,800</option>
                                                <option>$32,000 to earn $57,600</option>
                                                <option>$33,000 to earn $59,400</option>
                                                <option>$34,000 to earn $61,200</option>
                                                <option>$35,000 to earn $63,000</option>
                                                <option>$36,000 to earn $64,800</option>
                                                <option>$37,000 to earn $66,600</option>
                                                <option>$38,000 to earn $68,400</option>
                                                <option>$39,000 to earn $70,200</option>
                                                <option>$40,000 to earn $72,000</option>
                                                <option>$41,000 to earn $73,800</option>
                                                <option>$42,000 to earn $75,600</option>
                                                <option>$43,000 to earn $77,400</option>
                                                <option>$44,000 to earn $79,200</option>
                                                <option>$45,000 to earn $81,000</option>
                                                <option>$46,000 to earn $82,800</option>
                                                <option>$47,000 to earn $84,600</option>
                                                <option>$48,000 to earn $86,400</option>
                                                <option>$49,999 to earn $89,998.2</option>
                                                <option>$50,000 to earn $140,000</option>
                                                <option>$55,000 to earn $154,000</option>
                                                <option>$60,000 to earn $168,000</option>
                                                <option>$65,000 to earn $182,000</option>
                                                <option>$70,000 to earn $196,000</option>
                                                <option>$75,000 to earn $210,000</option>
                                                <option>$80,000 to earn $224,000</option>
                                                <option>$85,000 to earn $238,000</option>
                                                <option>$90,000 to earn $252,000</option>
                                                <option>$95,000 to earn $266,000</option>
                                                <option>$100,000 to earn $280,000</option>
                                                <option>$150,000 to earn $420,000</option>
                                                <option>$200,000 to earn $560,000</option>
                                              </select>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<br>
<br>
<br>

<!-- Content types section end -->
</div>

      </div>
    </div>
    <center><div class="col-md-6 col-sm-12">
      <div class="card text-center">
</div>
</div></center>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <?php include 'footer.php' ?>

    <!-- BEGIN VENDOR JS-->
    <script src="theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="theme-assets/js/core/app-lite.js" type="text/javascript"></script>

  <script type="text/javascript" src="theme-assets/vendors/js/editors/ckeditor/ckeditor.js"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>