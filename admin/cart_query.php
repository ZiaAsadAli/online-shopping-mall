<?php 
session_start();
$uname=$_SESSION['aname'];
include "config.inc.php";


//ip address of user///
$ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
////add cart query///
if(isset($_GET['add_cart'])){
	$Id=$_GET['add_cart'];
	$data=$mysqli_conn->query("SELECT * from products_list where id='$Id'");
	while($row=$data->fetch_assoc()){
	$price=$row['product_price'];
	$qty=$row['quantity'];
	$product_id=$row['id'];
	
	}
	
	
	
	
	
	
	$check=$mysqli_conn->query("Select * from cart where user_name='$uname' AND product_id='$Id'");
	if(mysqli_num_rows($check)>0){
		
		echo '<script type="text/javascript">alert("Item already added");window.location=\'men.php\';</script>';
	}
	else{
		
		$mysqli_conn->query("INSERT into cart (user_name,price,qty,ip_add,product_id) VALUES('$uname','$price','$qty','$ip','$product_id')");
		
		echo '<script type="text/javascript">alert("Product added");window.location=\'men.php\';</script>';
	}
	
	

	
	
	
}
?>