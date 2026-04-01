
<?php
session_start();
include "config.inc.php";

$mail=$_POST['mail'];
$Password=$_POST['pass'];
$Pass=md5($Password);
//die($Pass);
$sql = $mysqli_conn->query("select * from admin where email='$mail' and password='$Pass'");
$row = $sql->fetch_assoc();
$a=mysqli_num_rows($sql);

if ($a==0)
{

echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
} 

  else{
echo '<script type="text/javascript">alert("UserName or Password");window.location=\'login.php\';</script>';
		
		
		$_SESSION['adminname']=$row['name'];
		$_SESSION['aid']=$row['id'];
		$_SESSION['adminno']=$row['phn_no'];
		$_SESSION['adminemail']=$row['email'];
		
	header("location:admin\index.php");
  }
$sql = $mysqli_conn->query("select * from shops where email='$mail' and password='$Pass'");
$row = $sql->fetch_assoc();
$a=mysqli_num_rows($sql);
if ($a==0)
{

echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
} 

  else{
echo '<script type="text/javascript">alert("UserName or Password");window.location=\'login.php\';</script>';
		
		
		$_SESSION['shpname']=$row['o_name'];
		$_SESSION['bdname']=$row['brand_name'];
		$_SESSION['sid']=$row['id'];
		$_SESSION['shpno']=$row['phn_no'];
		$_SESSION['shpemail']=$row['email'];
	header("location:shops\index.php");
  }
$sql = $mysqli_conn->query("select * from user where email='$mail' and password='$Pass'");
$row = $sql->fetch_assoc();
$a=mysqli_num_rows($sql);
if ($a==0)
{

echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
} 

  else{
echo '<script type="text/javascript">alert("UserName or Password");window.location=\'login.php\';</script>';
		
		
		$_SESSION['usaname']=$row['name'];
		$_SESSION['uid']=$row['id'];
		$_SESSION['usano']=$row['phone_no'];
		$_SESSION['usaemail']=$row['email'];
	header("location:user\index.php");
  }
?>
