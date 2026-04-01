<!DOCTYPE HTML>
<?php 
session_start(); 
include("config.inc.php"); 
require_once("dbcontroller.php");




/*function ordercode($length = 10, $chars = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ')
{
    if($length > 0)
    {
        $len_chars = (strlen($chars) - 1);
        $the_chars = $chars{rand(0, $len_chars)};
        for ($i = 1; $i < $length; $i = strlen($the_chars))
        {
            $r = $chars{rand(0, $len_chars)};
            if ($r != $the_chars{$i - 1}) $the_chars .=  $r;
        }

        return $the_chars;
    }
}*/
$date1=date('M-d-Y');
$adname=$_SESSION['usaname'];
$ademil=$_SESSION['usaemail'];
$adno=$_SESSION['usano'];
//$a=ordercode(); above function to get random for order code`

foreach ($_SESSION["cart_item"] as $addi){
	
	$mysqli_conn->query("INSERT INTO `cart`(`product_name`, `product_qty`, `product_price`, `product_code`, 
										
										`t_price`, `username`,`useremail`, `date`, `status`, `order_no`,`brand_name`,`userphoneno`) VALUES 
									
									('".$addi["name"]."','".$addi["quantity"]."','".$addi["price"]."','".$addi["code"]."','".$addi["quantity"]*$addi['price']."',
									
									'".$adname."','".$ademil."','".$date1."','In Process','Testorder','".$addi["brand"]."','$adno')");
									
									
									
										}
	unset($_SESSION["cart_item"]);
	echo '<script type="text/javascript">alert("Order Placed Successfully");window.location=\'index.php\';</script>';
?>