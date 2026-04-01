<?php 
session_start();
include("config.inc.php");

$id = $_SESSION['sid'];
//$_SESSION['aname']=$_POST['nam'];
$name=$_POST['nam'];
$phone=$_POST['phn'];

$adres=$_POST['addrs'];
$passwrd=$_POST['pass'];
$pass=md5($passwrd);


	/////////////To Check Password//////
$res=$mysqli_conn->query("SELECT * FROM shops where id='$id'");
$rows = $res->fetch_assoc(); 
$ck=$rows['password'];
//echo $ck;
if ($pass!=$ck)
{


echo '<script type="text/javascript">alert("Current Password is wrong Try again");window.location=\'profile.php\';</script>';

}

else{ 
	
	$mysqli_conn->query("update shops set o_name='$name', address='$adres', phn_no='$phone' where id='$id' ");
	//excute querry 
	//mysql_query($sql) or die(mysql_error());
	
	echo '<script type="text/javascript">alert("Profile Updated Successfully ");window.location=\'profile.php\';</script>';

}
?>