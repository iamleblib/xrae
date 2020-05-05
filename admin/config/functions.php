<?php 
include 'dbh.php';
function addPortfolio() {
  global $conn;
  if (isset($_POST['addPortfolio'])) {
     $title = mysqli_real_escape_string($conn, $_POST['title']);
     $description = mysqli_real_escape_string($conn, $_POST['description']);
     $file = $_FILES['file'];

     if (empty($title) || empty($description) || empty($file)) {
      header("location: portfolio.php?source=add&empty");
     } else {
        // Upload Images
          // get information about file 
          $file = $_FILES['file'];
          // print_r($file);
          $fileName = $_FILES['file']['name'];
          $fileTmpName = $_FILES['file']['tmp_name'];
          $fileSize = $_FILES['file']['size'];
          $fileError = $_FILES['file']['error'];
          $fileType = $_FILES['file']['type'];
        
          // files to allow to be uploaded
          $fileExt = explode('.', $fileName);
          $fileActualExt = strtolower(end($fileExt));
          // Files to allow
          $allowed = ['jpg', 'jpeg', 'png', 'pdf'];
          // check if files has proper extentions
          if (in_array($fileActualExt, $allowed)) {
            // check if there was any kind of errors when uploading 
            if ($fileError === 0) {
              if ($fileSize < 100000000) {
                // give file proper unique name 
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                // create a function that upload the file
               $uploadImage =  move_uploaded_file($fileTmpName, $fileDestination);
                if ($uploadImage) {
                   
                    // Insert to database 
                    $createPortfolio = mysqli_query($conn, "INSERT INTO portfolio (title, image, description) VALUES ('$title', '$fileNameNew', '$description') ");
                    if ($createPortfolio) {
                      header("location: portfolio.php?source=view&postAdded");
                    } else {
                      return false;
                    }
                }
              } else {
                echo "File too Large";
              }
            } else {
              echo "There was an error uploading your file";
            }
          } else {
            echo "You Cannot Upload Files Of This Type";
          }
        
        // end Upload images
       
     }
  }
}
addPortfolio();
// Adding portfolio ended

// view Portfolio 

function viewPortfolio() {
  global $conn; 
  $getPortfolio = mysqli_query($conn, "SELECT * FROM portfolio");
  while ($row = mysqli_fetch_assoc($getPortfolio)) {
    $id = $row['id'];
    $title = $row['title'];
    $description = $row['description'];
    $image = $row['image'];
    ?>
      <tr>
        <td><span class='label label-info'><?php echo $title; ?></span></td>
        <td><?php echo $description; ?></td>
        <td><img width='50' src='uploads/<?php echo $image; ?>'/></td>
        <td><a href="?source=view&del=<?php echo $id; ?>" class="btn btn-danger btn-sm">Delete</a></td>
      </tr>
    <?php
  }
}

// Show to user 
function showPortfolio() {
  global $conn; 
  $getPortfolio = mysqli_query($conn, "SELECT * FROM portfolio");
  while ($row = mysqli_fetch_assoc($getPortfolio)) {
    $id = $row['id'];
    $title = $row['title'];
    $description = $row['description'];
    $image = $row['image'];
    ?>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item pro_cat_3 all">
        <div class="portfolio-img">
          <img width="50px" src="admin/uploads/<?php echo $image; ?>" class="img-responsive" alt="<?php echo $title; ?>">
        </div>
        <div class="portfolio-data">
          <h4><a href=""><?php echo $title; ?></a></h4>
          <p class="meta"><?php echo $description; ?></p>
          
          <!-- <div class="portfolio-attr">
              <a href="http://Leblib.com.ng/project/8-manider-online-store"><i class="lnr lnr-link"></i></a>
              <a href="http://Leblib.com.ng//harriyour/projects/Screenshot_2020-02-24_Manider(1).png" data-rel="lightcase:gal" title="Manider Online Store"><i class="lnr lnr-move"></i></a>
          </div> -->
        </div>
    </div>
    <?php
  }
}

// Contact 

function contact() {
  global $conn; 
  if (isset($_POST['send'])) {
     $name = mysqli_real_escape_string($conn, $_POST['name']);
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $message = mysqli_real_escape_string($conn, $_POST['message']);
     if (empty($name) || empty($email) || empty($message)) {
       header("location: ./?empty&#contact");
     } else if (is_numeric($name)) {
        header("location: ./?num&#contact");
     } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location: ./?invalidEmail&#contact");
      } else {
        $update = mysqli_query($conn, "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')");
        if ($update) {
      
          $to = "info@leblib.com, caleb@leblib.com";
          $subject = "Leblib Contact";

          $message = "
          <!DOCTYPE html>
    <html>
    <head>
        <link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    </head>
    <style type='text/css'>
    body{background-color: #eee;margin: 0px;}
    </style>
    <body> <br> <br>
        <table border='0' width='50%' style='margin:auto;padding:30px;background-color: #F3F3F3;border:1px solid #FF7A5A;'>
            <tr>
                <td>
                    <table border='0' width='100%'>
                        <tr>
                            <td>
                                <h1 style='text-align: center;'>Leblib Contact Page</h1>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table border='0' cellpadding='0' cellspacing='0' style='text-align:center;width:100%;background-color: #fff;'>
                        <tr>
                            <td style='background-color:#FF7A5A;height:100px;font-size:50px;color:#fff;'><i class='fa fa-envelope-o' aria-hidden='true'></i></td>
                        </tr>
                        <tr>
                            <td>
                                <h1 style='padding-top:25px;'>$name</h1>
                                <h4 style='padding-top:25px;'>$email</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style='padding:0px 100px;'>
                                $message
                                </p>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                    </table>
                </td>
            </tr>
            
        </table>
    </body>
    </html>
          ";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From: <$email>" . "\r\n";

$sendMail = mail($to,$subject,$message,$headers);
if ($sendMail) {
    header("location: ./?success&#contact");
}

        }
      }   
  }
}
contact();

// Get Comments 

function getComments() {
  global $conn;
  $getAllComments = mysqli_query($conn, "SELECT * FROM contact");
  while ($row = mysqli_fetch_assoc($getAllComments)) {
    $name = $row['name'];
    $email = $row['email'];
    $message = $row['message'];
    ?>
      <tr>
        <td><?php echo $name; ?> </td>
        <td><?php echo $email; ?> </td>
        <td><?php echo $message; ?> </td>
      </tr>
    <?php
  }
}

// login 

function loginAdmin() {
  global $conn;
  if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($email) || empty($password)) {
      header("location: ./#home");
    } else {
      $getUser = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
        $row = mysqli_fetch_assoc($getUser);

      $dbEmail = $row['email'];
      $dbPass = $row['password'];

      if ($dbEmail == $email && password_verify($password, $dbPass)) {
        session_start();
        $_SESSION['email'] = $email;
        header("location: admin/");
      } else {
        header("location: ./?");
      }
    }
  }
}
loginAdmin();

// Clients logo 
 function addClientsLogo() {
   global $conn; 
   if (isset($_POST['addClientsLogo'])) {
     $title = $_POST['title'];
     $url = $_POST['url'];
     $file = $_FILES['file'];
    if (empty($title) || empty($file)) {
      header("location: clients.php?source=add&empty");
    } else {
        // Upload Images
          // get information about file 
          $file = $_FILES['file'];
          // print_r($file);
          $fileName = $_FILES['file']['name'];
          $fileTmpName = $_FILES['file']['tmp_name'];
          $fileSize = $_FILES['file']['size'];
          $fileError = $_FILES['file']['error'];
          $fileType = $_FILES['file']['type'];
        
          // files to allow to be uploaded
          $fileExt = explode('.', $fileName);
          $fileActualExt = strtolower(end($fileExt));
          // Files to allow
          $allowed = ['jpg', 'jpeg', 'png', 'pdf'];
          // check if files has proper extentions
          if (in_array($fileActualExt, $allowed)) {
            // check if there was any kind of errors when uploading 
            if ($fileError === 0) {
              if ($fileSize < 100000000) {
                // give file proper unique name 
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/clients/'.$fileNameNew;
                // create a function that upload the file
              $uploadImage =  move_uploaded_file($fileTmpName, $fileDestination);
                if ($uploadImage) {
                  
                    // Insert to database 
                    $create_clients_logo = mysqli_query($conn, "INSERT INTO clients_logo (title, logo, url) VALUES ('$title','$fileNameNew', '$url') ");
                    if ($create_clients_logo) {
                      header("location: clients.php?source=view&postAdded");
                    } else {
                      return false;
                    }
                }
              } else {
                echo "File too Large";
              }
            } else {
              echo "There was an error uploading your file";
            }
          } else {
            echo "You Cannot Upload Files Of This Type";
          }
        
        // end Upload images
      
    }
  }
}
addClientsLogo();

// View All Clients Logo 

function viewClientsLogo() {
  global $conn; 

  $getClientsLogo = mysqli_query($conn, "SELECT * FROM clients_logo");
  while ($row = mysqli_fetch_assoc($getClientsLogo)) {
    $logo = $row['logo'];
    ?>

    <tr>
      <img width="50" src='uploads/clients/<?php echo $logo; ?>'>
    </tr>

    <?php
  }
}


// Display to user clients logo 
function displayClientsLogo() {
  global $conn; 

  $getClientsLogo = mysqli_query($conn, "SELECT * FROM clients_logo");
  while ($row = mysqli_fetch_assoc($getClientsLogo)) {
    $logo = $row['logo'];
    $title = $row['title'];
    $url = $row['url'];
    ?>

    <div class="client-block">
       <a href="<?php echo $url; ?>" target="_blank" title="<?php echo $title; ?>">
       <img src="admin/uploads/clients/<?php echo $logo; ?>" alt="<?php echo $title; ?>">
       </a>
    </div>

    <?php
  }
}
