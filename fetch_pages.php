<?php
session_start();
include("config.inc.php"); //include config file
?>
<!DOCTYPE HTML>
<html>

<?php


//sanitize post value
if(isset($_POST["page"])){
	$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
	if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
}else{
	$page_number = 1;
}

//get current starting point of records
$position = (($page_number-1) * $item_per_page);

//Limit our results within a specified range. 
$results = $mysqli_conn->query("SELECT * FROM products_list where gender='Men' ORDER BY product_id ASC LIMIT $position, $item_per_page");

//output results from database
 
while($row = $results->fetch_assoc()) {

$Id=$row["product_id"];
$image=$row["product_image"];
$name=$row["product_name"];
$price=$row["product_price"];
$brand1=$row["brands"];
$code=$row["code"];
?>
        
         	<div class="col_1_of_single1 span_1_of_single1"> 
			<form method="POST" action="men.php?action=add&code=<?php echo $code;?>">
	          	    <a href="single.php?UserId=<?php echo $Id; ?>">
				     <img src="<?php echo "images/$image";?>" width="150px" height="175px" alt="" />
				     <h3><?php echo "$name";?></h3>
				   	 <p><?php echo "$brand1";?></p>
				   	 <h4><?php echo "$price";?></h4></a>
					 
					 Qty :
						<select name="p-qty" class="p-qty">;
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>
					 <input type="submit" value="Add to cart" class="btnAddAction">
			</form>
				   </div> 
				   
				  <?php } 

?>

</html>