<?php

session_start();
include "config.inc.php";
$id=$_SESSION['aid'];



if(isset($_POST['submit']))	{
	echo "this is 1";
	//die();

$checkcode=$_POST['code1'];
$adrs=$_POST['address'];
$apass=$_POST['upass'];
$apass=md5($apass);

////admin password checking////
$chk=$mysqli_conn->query("SELECT password from admin where id='$id'");
$row=$chk->fetch_assoc();
$upass=$row['password'];

		while($apass==$upass){
			
					if($apass==$upass){
						
							$mysqli_conn->query("update cart set `shp_address`='$adrs' , status='Processed' where order_no='$checkcode'" );
						
						echo '<script type="text/javascript">alert("Order Process Sucessfully ");window.location=\'new_order.php\';</script>';
						
					}
		
	
	
					else{
						
						echo '<script type="text/javascript">alert("Enter Correct  Password  Please ");window.location=\'new_order.php\';</script>';

					}
		}
}
else{
	echo '<script type="text/javascript">;window.location=\'new_order.php\';</script>';

	
}	
?>

