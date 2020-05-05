<?php 
include ('Config/db_connect.php');
        
$name = $email = $phone = $subject = $comment = '';
$errors = array ('name'=>'', 'email'=>'', 'phone'=>'', 'subject'=>'', 'comment'=>'');

 

    // IF STATEMENT FOR SIGNUP

    if (isset($_POST['contact'])) {
       

// check first name
    if(empty($_POST['name'])){
        $errors ['name'] = '*Name is empty <br />';
    }
         else{
            $name = $_POST['name'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
$errors['name']= "*Name must be in letters without space only!";
            }
        }

    // check subject
    if(empty($_POST['subject'])){
        $errors ['subject'] = '*Subject is empty <br />';
    }
         else{
            $subject = $_POST['subject'];
            if(!preg_match('/^[a-zA-Z0-9]+$/', $subject)){
$errors['subject']= "<label class='btn btn-danger btn-sm'>spacing not allowed</label>";
            }
        }

    // check comment
    if(empty($_POST['comment'])){
        $errors ['comment'] = '*Message is empty <br />';
    }


// check email
    if(empty($_POST['email'])){
        $errors ['email'] = '*email is empty <br />';
    }
    else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email']= "<label class='btn btn-danger btn-sm'>Email Must be a valid email!</label>";
    }
}
if (array_filter($errors)) {
    echo "<script> alert ('Contact unsuccessful, Please fill the empty field...')</script>";
}else{
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);


echo "<script> alert('your contact was sent successful...')</script>";
    // create sql
    $sql = "INSERT INTO contact_us(name,phone,email,subject,comment)
            VALUES('$name','$phone','$email','$subject','$comment')";
  
if(mysqli_query ($conn, $sql)){
    //successful connection
   //header('location: ../');
   
   }
}
}


 ?>