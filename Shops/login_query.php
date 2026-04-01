
<?php
session_start();
include "config.inc.php";

$mail=$_POST['mail'];
$Password=$_POST['pass'];
$Pass=md5($Password);
//die($Pass);
$sql = $mysqli_conn->query("select * from admin where email='$mail' and password='$Pass'");
$row = $sql->fetch_assoc();

$a=$row["id"];

if ($a==0)
{

echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
} 

  else{
echo '<script type="text/javascript">alert("UserName or Password");window.location=\'login.php\';</script>';
		
		
		$_SESSION['aname']=$row['name'];
		$_SESSION['aid']=$row['id'];
		$_SESSION['apic']=$row['pic'];
		$_SESSION['aemail']=$row['email'];
		header("location:admin\index.php");
  }
/*
$sql="select * from user_tbl where UserName='".$UserName."' and Password='".$Pass."'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

$count=mysql_num_rows($result);


if($count==1){
	if($row['type']=='SHO'){
	
	$_SESSION['uname']=$row['UserName'];
$_SESSION['sid']=$row['User_Id'];
$_SESSION['name']=$row['Name'];
$_SESSION['Name']=$row['Station_Name'];
  $_SESSION['type']= $row['type'];

header("location:PoliceStation\index.php");
	
	} 
	
	else if($row['type']=='ASI') {
	
$_SESSION['uname']=$row['UserName'];
$_SESSION['subid']=$row['User_Id'];
$_SESSION['name']=$row['Name'];
$_SESSION['Name']=$row['Station_Name'];
  $_SESSION['type']= $row['type'];

header("location:RegUser\index.php");
	}
	
else if($row['type']=='End User') {

$_SESSION['uname']=$row['UserName'];
$_SESSION['eid']=$row['User_Id'];
$_SESSION['name']=$row['Name'];
$_SESSION['Name']=$row['Station_Name'];
  $_SESSION['type']= $row['type'];

header("location:Enduser\index.php"); 
 }
 
 else  {
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
}*/
?>
