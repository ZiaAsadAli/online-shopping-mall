<!DOCTYPE HTML>
<?php
session_start();

include("config.inc.php");
require_once("dbcontroller.php");




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

if (isset($_GET['UserId'])){
$_SESSION['uaua']=$_GET['UserId'];
$_SESSION['tata']=$_GET['UserId'];

}
else{
	$_SESSION['uaua']=$_SESSION['tata'];
}
$product_id=$_SESSION['uaua'];

$results = $mysqli_conn->query("SELECT * FROM products_list where product_id='".$product_id."'");
$row = $results->fetch_assoc();
extract($row);
$Id=$row["product_id"];
$image=$row["product_image"];
$image1=$row["product_image1"];
$image2=$row["product_image2"];
$nam=$row["product_name"];
$price=$row["product_price"];
$desc=$row["product_desc"];
$code=$row["code"];
$brd=$row['brands'];
$cat=$row['category'];

?>
<html>
<head>
<title>BIG SHOPE</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
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
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
</head>
<body>
<?php
//include 'top_header.php'; 
include 'header.php';
?>
<div class="men">
	<div class="container">
	  <div class="single_top">
	       <div class="col-md-9 single_right">
	   	       <div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="<?php echo "images/$image";?>" class="img-responsive" />
									<img class="etalage_source_image" src="<?php echo "images/$image";?>" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="<?php echo "images/$image1";?>" class="img-responsive" />
								<img class="etalage_source_image" src="<?php echo "images/$image1";?>" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="<?php echo "images/$image2";?>" class="img-responsive"  />
								<img class="etalage_source_image" src="<?php echo "images/$image2";?>"class="img-responsive"  />
							</li>
						 </ul>
						 <div class="clearfix"></div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
				    <h1><?php echo "$nam";?></h1>
				    <p class="m_5">Rs &nbsp<?php echo "$price";?> </p>
					
				    <div class="btn_form">
						<form method="POST" action="single.php?action=add&code=<?php echo $code;?>">
						Qty :
						<select name="p-qty" class="p-qty">;
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>
							<input type="hidden" value="<?php echo "$product_id";?>" name="UserId">
							<input type="submit" value="Add to cart" class="btnAddAction">
						</form>
					 </div>
					
					 
</div>
				  <div class="clearfix"></div>	
       </div>
       <div class="col-md-3">
      	
<!-- FlexSlider -->
      </div>
      <div class="clearfix"> </div>
     </div>
       <div class="toogle">
     	<h2>Product Details</h2>
     	<p class="m_text2"><?php echo "$desc";?></div>
     <div class="toogle">
     	<h2>More Information</h2>
     	<p class="m_text2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
     </div>
     <h4 class="head_single">Related Products</h4>
     <div class="span_3">
	          	 <div class="col-sm-3 grid_1">
	          	    <a href="single.html">
				     <img src="images/pic9.jpg" class="img-responsive" alt=""/>
				     <h3>parum clari</h3>
				   	 <p>Duis autem vel eum iriure</p>
				   	 <h4>Rs.399</h4>
			         </a>  
				  </div> 
				<div class="col-sm-3 grid_1">
	          	    <a href="single.html">
				     <img src="images/pic8.jpg" class="img-responsive" alt=""/>
				     <h3>parum clari</h3>
				   	 <p>Duis autem vel eum iriure</p>
				   	 <h4>Rs.399</h4>
			         </a>  
				  </div> 
				 <div class="col-sm-3 grid_1">
	          	    <a href="single.html">
				     <img src="images/pic1.jpg" class="img-responsive" alt=""/>
				     <h3>parum clari</h3>
				   	 <p>Duis autem vel eum iriure</p>
				   	 <h4>Rs.399</h4>
			         </a>  
				  </div> 
				  <div class="col-sm-3 grid_1">
	          	    <a href="single.html">
				     <img src="images/pic3.jpg" class="img-responsive" alt=""/>
				     <h3>parum clari</h3>
				   	 <p>Duis autem vel eum iriure</p>
				   	 <h4>Rs.399</h4>
			         </a>  
				  </div> 
				  <div class="clearfix"></div>
	     </div>
      </div>
</div>
<div class="footer">
	<div class="container">
		<?php include('footer.php');?>
	</div>
</div>
</html>		