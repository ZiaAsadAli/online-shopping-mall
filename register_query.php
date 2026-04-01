<?php
include"config.inc.php"; 
//$con=db();


	date_default_timezone_set('Asia/Karachi');
	$Name=$_POST['name'];
	$Gender=$_POST['gen'];
	$Email=$_POST['email'];
	$Password=$_POST['pass'];
	$cPass=$_POST['cpass'];
	$No=$_POST['no'];
	$Address=$_POST['address'];
	$Sddress=$_POST['saddress'];
	$Date=date('M-d-Y');

	///// to check password
	if($Password==$cPass){
		
			$sql=$mysqli_conn->query("select * from user where email='$Email'");
			$sql1=$mysqli_conn->query("select * from admin where email='$Email'");
			$sql2=$mysqli_conn->query("select * from shops where email='$Email'");
			$a=mysqli_num_rows($sql1);
			$b=mysqli_num_rows($sql2);
			//$res=mysql_query($sql)or die (mysql_error());
			
			$row=$sql->fetch_assoc();
			$mail=$row['email'];
				
				if($mail==$Email or $a==1 or $b==1){
					
					echo '<script type="text/javascript">alert("User Already register with this email ID Try other one");window.location=\'Register.php\';</script>';
					
					
				}
				else{
					$mysqli_conn->query("insert into user(id,name,email,password,gender,phone_no,address,shp_address,date) 
								
								VALUES(NULL,'".$Name."','".$Email."','".MD5($Password)."','".$Gender."','".$No."','".$Address."','".$Sddress."','".$Date."')");
								
					//$run=$mysql_conn_query($db_name,$insert);
					echo '<script type="text/javascript">alert("You have Successfully Registered Enjoy Shopping please login In ");window.location=\'login.php\';</script>';
				}
	
	}

	else{
		echo '<script type="text/javascript">alert("Your Password Does not Match Try Again");window.location=\'register.php\';</script>';
	}
	





  ?>