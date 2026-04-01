<!DOCTYPE HTML>
<?php
session_start(); 
include("config.inc.php"); 
require_once("dbcontroller.php");



if (isset($_GET['ct'])){
	$_SESSION['CT']=$_GET['ct'];
	$_SESSION['sbc']=$_GET['ct'];
   }
   else{
  $_SESSION['CT']=$_SESSION['sbc'];
   }

$results = $mysqli_conn->query("SELECT COUNT(*) FROM products_list");
$get_total_rows = mysqli_fetch_array($results); //total records

//break total records into pages
$pages = ceil($get_total_rows[0]/$item_per_page);


//cart function//
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["p-qty"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM products_list WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["product_name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["p-qty"], 'price'=>$productByCode[0]["product_price"]));
			
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

<script type="text/javascript" src="js/jquery.bootpag.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#results").load("manufacture_pages.php");  //initial page number to load
	$(".pagination").bootpag({
	   total: <?php echo $pages; ?>,
	   page: 1,
	   maxVisible: 5 
	}).on("page", function(e, num){
		e.preventDefault();
		$("#results").prepend('<div class="loading-indication"><img src="ajax-loader.gif" /> Loading...</div>');
		$("#results").load("manufacture_pages.php", {'page':num});
	});

});
</script>


  

</head>
<body>
<?php
include 'top_header.php';  
include 'header.php';
?>
<div class="men">
	<div class="container">
	  <div class="col-md-3 sidebar">
	  	<div class="block block-layered-nav">
		    <div class="block-title">
		        <strong><span>Shop By</span></strong>
		    </div>
    <div class="block-content">
                                    
            <dl id="narrow-by-list">
                                                                                                    
                                                                    <dt class="even">Manufacturer</dt>
     
					<dd class="even">
<ol>
    
	               <?php 
						$brands=$mysqli_conn->query("Select * From shops");
						while($row1 = $brands->fetch_assoc()){
						$brand=$row1['brand_name'];?>
	<li>
                <a href="manufacture.php?ct=<?php echo "$brand";?>"><?php echo "$brand";?></a>
    </li>
					<?php }?>
</ol>
</dd>
                                                                    
                                            </dl>
           
            </div>
</div>

</div>
<div class="col-md-9">
		
          
               	
					<ul class="nav nav-tabs">
							<li><a href="#home"><strong>Products</strong></a></li>
							<li><a href="#Cart"><strong>Cart</strong></a></li>
					</ul>
		            
		        
    		
     	    <div class="clearfix"></div>
	     
		 
					<div class="tab-content">
							 <div id="home" class="tab-pane fade in active">
									 <div id="results"></div>
									 
									 <div class="clearfix"></div>
									<div class="pagination"></div>
							</div>
							
							<div id="Cart" class="tab-pane fade">
							<div id="shopping-cart">
							<div class="txt-heading">Shopping Cart <a id="btnEmpty" href="manufacture.php?action=empty">Empty Cart</a> </div>
					<?php
							if(isset($_SESSION["cart_item"])){
								$item_total = 0;
					?>	
							<table cellpadding="10" cellspacing="1" class="carttable table table-responsive table-hover table-bordered">
								<tbody>
											<tr>
											<th><strong>Name</strong></th>
											<th><strong>Quantity</strong></th>
											<th><strong>Price</strong></th>
											<th><strong>Sub-Total</strong></th>
											<th><strong>Action</strong></th>
											</tr>	
											<?php		
												foreach ($_SESSION["cart_item"] as $item){
													?>
															<tr>
															<td><strong><?php echo $item["name"]; ?></strong></td>
															<td><?php echo $item["quantity"]; ?></td>
															<td><?php echo $item["price"]; ?></td>
															<td><?php echo $item["price"]*$item["quantity"] ; ?></td>
															<td><a href="manufacture.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">Remove Item</a></td>
															
															</tr>
															
															<?php
													$item_total += ($item["price"]*$item["quantity"]);
													
													}
													?>

											<tr>
											<td colspan="4" align=right><strong>Total:</strong> <?php echo "$".$item_total; ?></td>
											<td> <a class="chkAction" href="wishlist.php">Check Out</a></td>
											</tr>
								</tbody>
							</table>
				<?php }?>
							</div>
					
							</div>
<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>
							
							
									  <div class="clearfix"></div>
						  
				 </div>
	</div> 
 </div>
</div>
</div>
<div class="footer">
	<div class="container">
		<?php include 'footer.php';?>
		
	</div>
</div>
</body>
</html>	
