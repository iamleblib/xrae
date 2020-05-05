<?php
// check connection "host, username, pswd and dbname"
$conn = mysqli_connect('localhost', 'u516079930_root', '', 'u516079930_bitraxcoin_b');

if(!$conn){
    echo 'error: ' . mysqli_connect_error();
}


 ?>
