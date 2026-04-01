<?php

session_start();
include "config.inc.php";
$id=$_SESSION['aid'];
$addby=$_SESSION['adminname'];
$dat=date('M-d-Y');


if(isset($_POST['submit']))	{
	
$bname=$_POST['bname'];
$oname=$_POST['oname'];
$mail=$_POST['mail'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$p_no=$_POST['no'];
$adrs=$_POST['address'];
$apass=$_POST['upass'];
$apass=md5($apass);


//
			$sql=$mysqli_conn->query("select * from user where email='$mail'");
			$sql1=$mysqli_conn->query("select * from admin where email='$mail'");
			$sql2=$mysqli_conn->query("select * from shops where email='$mail'");
			$a=mysqli_num_rows($sql1);
			$b=mysqli_num_rows($sql2);
			$c=mysqli_num_rows($sql);
			
			if($a==1 or $b==1 or $c==1){
				echo '<script type="text/javascript">alert("User Already register with this email ID Try other one");window.location=\'add_shop.php\';</script>';
			}
			else{

						////admin password checking////
						$chk=$mysqli_conn->query("SELECT password from admin where id='$id'");
						$row=$chk->fetch_assoc();
						$upass=$row['password'];

						if($pass==$cpass AND $apass==$upass){
							
							$mysqli_conn->query("INSERT INTO shops (`brand_name`, `o_name`, `password`, `email`, `address`, `phn_no`, `add_by`, `date`)
								
								VALUES('$bname','$oname','".md5($pass)."','$mail','$adrs','$p_no','$addby','$dat')");
							
							echo '<script type="text/javascript">alert("Shop Added Sucessfully ");window.location=\'add_shop.php\';</script>';
							
						}
							
							
						else{
							
							echo '<script type="text/javascript">alert("Enter Correct  Password  Please ");window.location=\'add_shop.php\';</script>';

						}
			}
}			
						else{
							echo '<script type="text/javascript">;window.location=\'add_shop.php\';</script>';

							
						}
					
				
?>

