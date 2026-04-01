<?php

session_start();
include "config.inc.php";
$id=$_SESSION['aid'];



if(isset($_POST['submit']))	{
	

$checkcode=$_POST['code1'];
$stat=$_POST['stat'];
$desc=$_POST['des'];
$apass=$_POST['upass'];
$apass=md5($apass);
$ademil=$_SESSION['adminemail'];
$date1=date('M-d-Y');

////admin password checking////
$chk=$mysqli_conn->query("SELECT password from admin where id='$id'");
$row=$chk->fetch_assoc();
$upass=$row['password'];
$result=$mysqli_conn->query("SELECT * from cart where order_no='$checkcode'");
						$row=$result->fetch_assoc();
						$c=mysqli_num_rows($result);			
						

			if($apass==$upass){
			
				
					
						
						
						foreach($result as $row1) {
						
							$mysqli_conn->query("INSERT INTO `complete`(`Product_name`, `product_qty`, `product_code`, `t_price`, `username`, `useremail`,
								
												`p_date`, `c_date`, `status`, `order_no`, `brand_name`, `shp_address`, `completed_by`,`product_price`,`userphoneno`)
							
							VALUES ('".$row1["product_name"]."','".$row1["product_qty"]."','".$row1["product_code"]."','".$row1["t_price"]."','".$row1["username"]."',
							
							'".$row1['useremail']."','".$row1['date']."','".$date1."','".$stat."','".$row1['order_no']."','".$row1["brand_name"]."','".$desc."',
							
							'".$ademil."','".$row1['product_price']."','".$row1['userphoneno']."')");
							
						
				}
							$mysqli_conn->query("DELETE FROM cart where order_no='".$row1['order_no']."'");
						
						echo '<script type="text/javascript">alert("Order Process Sucessfully ");window.location=\'porder.php\';</script>';
			}	
					
			
		
	
	
					else{
						
						echo '<script type="text/javascript">alert("Enter Correct  Password  Please ");window.location=\'porder.php\';</script>';

					}
		
}
else{
	echo '<script type="text/javascript">;window.location=\'porder.php\';</script>';

	
}	
?>

