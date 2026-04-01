<!DOCTYPE HTML>
<?php 
session_start(); 
include("config.inc.php"); 
require_once("dbcontroller.php");

//cart function//
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["p-qty"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM products_list WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["product_name"], 'code'=>$productByCode[0]["code"], 'brand'=>$productByCode[0]["brands"], 'quantity'=>$_POST["p-qty"], 'price'=>$productByCode[0]["product_price"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],$_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k)
								$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<html>
<head>
<title>BIG SHOPE</title>

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='css/fonts.css' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'top_header.php';
include 'header.php';
?>
<div class="men">
	<div class="container">
	    <div class="wishlist">
		
			  <?php				  
			  if(!empty($_SESSION["cart_item"])){ 
			  $item_total = 0;
			  ?>
			  <div id="shopping-cart" >
				  <div class="txt-heading">Shopping Cart <a id="btnEmpty" href="wishlist.php?action=empty">Empty Cart</a> </div>
				  <table cellpadding="10" cellspacing="1" class="carttable table table-responsive table-hover table-bordered" width="1px">
								<tbody>
											<tr>
											<th><strong>Name</strong></th>
											<th><strong>Quantity</strong></th>
											<th><strong>Price</strong></th>
											<th><strong>Brand</strong></th>
											<th><strong>Sub-Total</strong></th>
											<th><strong>Action</strong></th>
											</tr>
				<?php		foreach ($_SESSION["cart_item"] as $item){
				?>
						<tr>
								<td><strong><?php echo $item["name"]; ?></strong></td>
								<td><?php echo $item["quantity"]; ?></td>
								<td><?php echo $item["price"]; ?></td>
								<td><?php echo $item["brand"]; ?></td>
								<td><?php echo $item["price"]*$item["quantity"] ; ?></td>
								<td><a href="wishlist.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">Remove Item</a></td>
															
						</tr>
															
					<?php
								$item_total += ($item["price"]*$item["quantity"]);
													
							}
							?>
							<tr>
								<td colspan="5" align=right><strong>Total:</strong> <?php echo "$".$item_total; ?></td>
								<td> <a class="chkAction" href="complete.php">Place Order</a></td>
							</tr>
								</tbody>
							</table>
					</div>
			 <?php  }			
				elseif(empty($_SESSION["cart_item"])) {
					?>
		  	  <h4 class="title">Shopping cart is empty</h4>
		  	  <p class="cart">You have no items in your shopping cart.<br>Click<a href="index.php"> here</a> to continue shopping</p>				
				<?php } ?>				
		 </div>
	 </div>
</div>
<div class="footer">
	<div class="container">
		<?php include('footer.php');?>
	</div>
</div>
</body>
</html>		