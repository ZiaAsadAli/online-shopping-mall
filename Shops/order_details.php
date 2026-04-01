<!DOCTYPE HTML>
<?php 
session_start(); 
include("config.inc.php"); 
		
		
	$code=$_GET['ordercode'];
	$result=$mysqli_conn->query("SELECT * FROM cart WHERE order_no='$code'");
	$item_total=0;
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
		
			   <div id="shopping-cart" >
			   <div class="txt-heading">Order Details  </div>
				   <table cellpadding="10" cellspacing="1" class="carttable table table-responsive table-hover table-bordered" width="1px">
								<tbody>
											<tr>
											<th><strong>Name</strong></th>
											<th><strong>Quantity</strong></th>
											<th><strong>Price</strong></th>
											<th><strong>Brand</strong></th>
											<th><strong>Order Date</strong></th>
											<th><strong>Buyer Cell No</strong></th>
											<th><strong>Sub-Total</strong></th>
											
											</tr>
				<?php		foreach ($result as $item){
				?>
						<tr>
								<td><strong><?php echo $item["product_name"]; ?></strong></td>
								<td><?php echo $item["product_qty"]; ?></td>
								<td><?php echo $item["product_price"]; ?></td>
								<td><?php echo $item["brand_name"]; ?></td>
								<td><?php echo $item["date"]; ?></td>
								<td><?php echo $item["userphoneno"]; ?></td>
								<td><?php echo $item["product_qty"]*$item["product_price"] ; ?></td>
																							
						</tr>
															
					<?php
								
								$item_total += ($item["product_price"]*$item["product_qty"]);
													
							}
							?>
							<tr>
								<td colspan="7" align=right><strong>Total:</strong> <?php echo $item_total; ?></td>
								
							</tr>
								</tbody>
							</table>
					</div>
			 		
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