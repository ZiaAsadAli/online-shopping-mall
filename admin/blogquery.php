<?php

session_start();
include "config.inc.php";

$id=$_SESSION['aid'];
$addby=$_SESSION['adminname'];

//if(isset($_POST['submit'])){

$img1=$_FILES['img1']['name'];
$temp_name1=$_FILES['img1']['tmp_name'];
move_uploaded_file($temp_name1,"../blog/$img1");



$name=$_POST['name'];
$desc=$_POST['desc'];
$date=date('M-d-Y');
$pass=$_POST['upass'];
$apass=md5($pass);

////admin password checking////
$chk=$mysqli_conn->query("SELECT password from admin where id='$id'");
$row=$chk->fetch_assoc();
$upass=$row['password'];

if($upass==$apass){


////INSERT QUERY
         $mysqli_conn->query("INSERT INTO blog(addby,title,date,description,pic)
					
					VALUES ('$addby','$name','$date','$desc','$img1')");
					echo '<script type="text/javascript">alert("Post Added Successfully");window.location=\'addblog.php\';</script>';

}
else{
	
	
	
	echo '<script type="text/javascript">alert("Enter Correct  Password  Please ");window.location=\'addblog.php\';</script>';
}

?>