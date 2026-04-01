<?php 
session_start();

include "config.inc.php";
$id=$_SESSION['sid'];

$opass=$_POST['opass'];
$opass1=md5($opass);
$pass=$_POST['pass'];
$pass1=md5($pass);
$cpass=$_POST['cpass'];
$cpass1=md5($cpass);


$chk=$mysqli_conn->query("Select password From shops where id='$id'");
		while($row=$chk->fetch_assoc()){
		$spass=$row['password'];
		//$spass1=md5($spass);
		
		}
	if($opass1==$spass And $cpass1==$pass1){
		$mysqli_conn->query("update shops set password='$pass1' where id='$id'");
		
		echo '<script type="text/javascript">alert("Password Change Successfully");window.location=\'Change_password.php\';</script>';
		
		
	}
	else{
		
		echo '<script type="text/javascript">alert("Password Not Match PLease Try Again");window.location=\'Change_password.php\';</script>';
		
	}




?>