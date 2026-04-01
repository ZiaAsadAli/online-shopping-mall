<!DOCTYPE HTML>
<?php
session_start(); 
include("config.inc.php"); 

//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

//List products from database
$per_page = 10; 
$results = $mysqli_conn->query("SELECT * FROM products_list where gender='men' LIMIT {$per_page}");


//View Cart Box Start -->
if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
{
	echo '<div class="cart-view-table-front" id="view-cart">';
	echo '<h3>Your Shopping Cart</h3>';
	echo '<form method="post" action="cart_update.php">';
	echo '<table width="100%"  cellpadding="6" cellspacing="0">';
	echo '<tbody>';

	$total =0;
	$b = 0;
	foreach ($_SESSION["cart_products"] as $cart_itm)
	{
		$product_name = $cart_itm["product_name"];
		$product_qty = $cart_itm["product_qty"];
		$product_price = $cart_itm["product_price"];
		$product_code = $cart_itm["product_code"];
		$bg_color = ($b++%2==1) ? 'odd' : 'even'; //zebra stripe
		echo '<tr class="'.$bg_color.'">';
		echo '<td>Qty <input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
		echo '<td>'.$product_name.'</td>';
		echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /> Remove</td>';
		echo '</tr>';
		$subtotal = ($product_price * $product_qty);
		$total = ($total + $subtotal);
	}
	echo '<td colspan="4">';
	echo '<button type="submit">Update</button><a href="view_cart.php" class="button">Checkout</a>';
	echo '</td>';
	echo '</tbody>';
	echo '</table>';

	$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
	echo '</form>';
	echo '</div>';

}
?>
<!-- View Cart Box End -->
<html>
<head>
<title>BIG SHOPE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gifty Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
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
                                                                                                    <dt class="odd">processus</dt>
                    <dd class="odd">
<ol>
    <li>
                <a href="#"><span class="price1">US$&nbsp;0,00</span> - <span class="price1">US$&nbsp;99,99</span></a>
                        (4)
            </li>
    <li>
                <a href="#"><span class="price1">US$&nbsp;100,00</span> - <span class="price1">US$&nbsp;199,99</span></a>
                        (4)
            </li>
    <li>
                <a href="#"><span class="price1">US$&nbsp;200,00</span> - <span class="price1">US$&nbsp;299,99</span></a>
                        (1)
            </li>
    <li>
                <a href="#"><span class="price1">US$&nbsp;400,00</span> - <span class="price1">US$&nbsp;499,99</span></a>
                        (1)
            </li>
    <li>
                <a href="#"><span class="price1">US$&nbsp;800,00</span> and above</a>
                        (1)
            </li>
</ol>
</dd>
                                                                    <dt class="even">Manufacturer</dt>
     
					<dd class="even">
<ol>
    
	               <?php 
						$brands=$mysqli_conn->query("Select * From shops");
						while($row1 = $brands->fetch_assoc()){
						$brand=$row1['brand_name'];?>
	<li>
                <a href="#"><?php echo "$brand";?></a>
    </li>
					<?php }?>
</ol>
</dd>
                                                                    
                                            </dl>
           
            </div>
</div>

</div>
<div class="col-md-9">
	<div class="mens-toolbar">
          <div class="sort">
               	<div class="sort-by">
		            <label>Sort By</label>
		            <select>
		                            <option value="">
		                    Popularity               </option>
		                            <option value="">
		                    Price : High to Low               </option>
		                            <option value="">
		                    Price : Low to High               </option>
		            </select>
		        </div>
    		</div>
	        <div class="pager">   
	           <div class="limiter visible-desktop">
	            <label>Show</label>
	            <select>
	                            <option value="" selected="selected">
	                    9                </option>
	                            <option value="">
	                    15                </option>
	                            <option value="">
	                    30                </option>
	                        </select> per page        
	             </div>
	       		<ul class="dc_pagination dc_paginationA dc_paginationA06">
				    <li><a href="#" class="previous">Pages</a></li>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
			  	</ul>
		   		<div class="clearfix"></div>
	    	</div>
     	    <div class="clearfix"></div>
	     </div>
<?php
if($results){
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<HTML

	<form method="post" action="cart_update.php">
	<div class="product-content"><h3>{$obj->product_name}</h3>
	<div class="product-thumb"><img src="images/{$obj->product_img_name}"></div>
	<div class="product-desc">{$obj->product_desc}</div>
	<div class="product-info">
	Price {$currency}{$obj->price}

	<fieldset>

	

	<label>
		<span>Quantity</span>
		<select name="product_qty">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		</select>
	</label>

	</fieldset>
	
	<input type="hidden" name="return_url" value="{$current_url}" />
	<div align="center"><button type="submit" >Add</button></div>
	</div></div>
	</form>
	</li>
HTML;
}
$products_item .= '</ul>';
echo $products_item;
}
?>         
<?php  
if($results){
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object()){
$products_item .= <<<HTML
	<form method="post" action="cart_update.php">
			<div class="col_1_of_single1 span_1_of_single1">
				     <img src="images/{$obj->product_image}">
				     <h3>{$obj->product_name}</h3>
				   	 <h4>Price {$currency}{$obj->product_price}</h4>
					 <input type="hidden" name="return_url" value="{$current_url}" />
					 <button type="submit" >Add</button>
				  </div> 
				   </form>
HTML;				   
}				 
$products_item .= '</ul>';
echo $products_item;
}
?>				 
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
