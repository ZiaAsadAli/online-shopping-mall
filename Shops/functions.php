<?php 
include 'config.inc.php';




function cart(){
	
	if(isset($_GET['add_cart'])){
		
		$pr=$_SESSION['price'];
		$nm=$_SESSION['name'];
		$cd=$_SESSION['code'];
		echo "$cd";
		die();
		$run_query=$mysqli_con->query("insert into cart(user_name,price,qty)values('$nm','$pr','cd')");
		
	}
	

}
function you() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}






?>