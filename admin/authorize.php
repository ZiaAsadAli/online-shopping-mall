<?php

session_start(); 
include("config.inc.php"); 


if(!empty($_GET["id"])) {
	$abc=$_GET['id'];
	$result = $mysqli_conn->query("UPDATE products_list set status='Autherized' WHERE product_id='$abc'");
	if(!empty($result)){
		echo '<script type="text/javascript">alert("Product Autherized Successfully");window.location=\'new_products.php\';</script>';
	}
}

?>