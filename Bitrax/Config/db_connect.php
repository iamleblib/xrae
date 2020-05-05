<?php
// check connection "host, username, pswd and dbname"
$conn = mysqli_connect('localhost', 'root', '', 'bitraxcoin_b');

if(!$conn){
    echo 'error: ' . mysqli_connect_error();
}


 ?>
