<?php 

INCLUDE ('db_connect.php');


//Publication

//call up the variables
$list = $dated ='';
$errors = array ('list'=>'');

//IF else
if(isset($_POST['Publish'])) {
    //check for full_name name
   
    //CHECKING comment
        if(empty($_POST['list'])){
    /* Echo empty field*/   $errors ['list'] = 'Empty';
    }

//IF SUBMITTED ECHO ERROR
if(array_filter($errors)) {
    echo '<script type="text/javascript">Error to upload, please fill the box</script>';
/* TO ESCAPE ANY SUSPICIOUS CODE*/}else{
    $list = mysqli_real_escape_string($conn, $_POST['list']);
    $dated = mysqli_real_escape_string($conn, $_POST['dated']);

//INSERT DATAS TO DATABASE
    $sql = "INSERT INTO payout(list, dated) VALUES ('$list', '$dated')";

        //IF SUCCESSFUL REDIRECT TO
        if(mysqli_query ($conn, $sql)){
            header('location: ../Dashboard/Update.php');
        }else{
//ELSE ECHO ERROR BUT ECHO SHOULD BE BY DEFAULT (E.G IN LINE..)
            echo 'query error: ' .mysqli_error($conn);
        }



    }
}
?>