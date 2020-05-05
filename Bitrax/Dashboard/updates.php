<?php 
require_once  '../Config/db_connect.php';

if(isset($_POST['updates']))
{

//calling up the prev values used for the original variable in db table, with the overright assigned values/variable
$Usersg = $_GET['ID'];//using the callup variable ID
$Userbonus = $_POST['bon']; 
$Userearning = $_POST['earn'];
$Userinvested = $_POST['invst'];
$Userafter = $_POST['dura'];
$Useremail = $_POST['emails'];
$Userphone = $_POST['phn'];
$Userwhen = $_POST['wen'];
$Userfull_name = $_POST['nem'];
$Userverify = $_POST['very'];
$Userto_exp = $_POST['exp'];
$Userbtc_id = $_POST['btc_wall'];
$Userpassword = $_POST['psw'];
$Userwithdrawn = $_POST['last'];
$Usermsg = $_POST['mssg'];
$Usercurrent_earning_4_withdraw = $_POST['with'];

//to insert you say SET orignal variable ='.$variable of the orignal value to be used for replacement."', do the same for all WHERE db_table ID='".$the above variable used to callup the ID which the ID is representing the db_int'
$query = "UPDATE signup, confirmed_deposit SET
bonus ='".$Userbonus."',
invested ='".$Userinvested."',
full_name ='".$Userfull_name."',
earning ='".$Userearning."', 
phone ='".$Userphone."', 
when_ ='".$Userwhen."', 
verified ='".$Userverify."', 
to_exp ='".$Userto_exp."', 
btc_id ='".$Userbtc_id."', 
msg ='".$Usermsg."', 
clientemail ='".$Useremail."', 
current_earning_4_withdraw ='".$Usercurrent_earning_4_withdraw."', 
after ='".$Userafter."',
withdrawn ='".$Userwithdrawn."',
password ='".$Userpassword."'
WHERE sg='".$Usersg."'";

	$allUser = mysqli_query($conn,$query);

	if($allUser)
	{
		header('location: cpanel.php');
	}

	else
	{
		echo "rubbish";
	}
}
else{

	header('location:index.php');
}


 ?>