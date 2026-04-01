<?php 
session_start();
include 'config.inc.php';
$per_page =4; 
$men = $mysqli_conn->query("SELECT * FROM products_list where gender='Men' order by rand() LIMIT {$per_page} ");
$women = $mysqli_conn->query("SELECT * FROM products_list where gender='Women' order by rand() LIMIT {$per_page} ");

?>
<!DOCTYPE HTML>
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
<link rel="stylesheet" href="css/jquery.countdown.css" />
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
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: false,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>
</head>
<body>
<?php
include 'top_header.php'; 
include 'header.php';
?>
<h2><?php// echo $ip=you(); //funtion for getting ip address?></h2>
<div class="index_slider">
	<div class="container">
	  <div class="callbacks_container">
	      <ul class="rslides" id="slider">
	        <li><img src="images/slider1.jpg" class="img-responsive" alt=""/></li>
	        <li><img src="images/2.jpg" class="img-responsive" alt=""/></li>
	        <li><img src="images/3.jpg" class="img-responsive" alt=""/></li>
	      </ul>
	  </div>
	</div> 
</div>
<div class="content_top">
	<div class="container">
		<div class="grid_1">
			<div class="col-md-3">
			 <div class="box2">
			 	<ul class="list1">
			 		<i class="lock"> </i>
			 		<li class="list1_right"><p>Upto 5% Reward on your shipping</p></li>
			 		<div class="clearfix"> </div>
			 	</ul>
			 </div>
			</div>
			<div class="col-md-3">
			 <div class="box3">
			 	<ul class="list1">
			 		<i class="clock1"> </i>
			 		<li class="list1_right"><p>Easy Extended Returned</p></li>
			 		<div class="clearfix"> </div>
			 	</ul>
			 </div>
			</div>
			<div class="col-md-3">
			 <div class="box4">
			 	<ul class="list1">
			 		<i class="vehicle"> </i>
			 		<li class="list1_right"><p>Free Shipping on order over 99 $</p></li>
			 		<div class="clearfix"> </div>
			 	</ul>
			 </div>
			</div>
			<div class="col-md-3">
			 <div class="box5">
			 	<ul class="list1">
			 		<i class="dollar"> </i>
			 		<li class="list1_right"><p>Delivery Schedule Spread Cheer Time</p></li>
			 		<div class="clearfix"> </div>
			 	</ul>
			 </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="sellers_grid">
			<ul class="sellers">
				<i class="star"> </i>
				<li class="sellers_desc"><h2>Men Collection</h2></li>
			</ul>
		</div>
		
		<div class="grid_2">
		<?php 
			
			while($row=$men->fetch_assoc())
			{
				$id=$row['product_id'];
				$img=$row['product_image'];
				$p_name=$row['product_name'];
				$price=$row['product_price'];
					
		?>

			<div class="col-md-3 span_6">
			  <div class="box_inner">
				<img src="<?php echo "images/$img";?>" class="img-responsive1" width="240px" height="200px"	alt=""/>
				<div class="desc">
				 	<h3><?php echo "$p_name";?></h3>
				 	<h4><?php echo "$price";?></h4>
				 	<ul class="list2">
				 	  <li class="list2_left"><span class="m_1"><a href="#" class="link">Add to Cart</a></span></li>
				 	  <li class="list2_right"><span class="m_2"><a href="single.php?UserId=<?php echo $id; ?>" class="link1">See More</a></span></li>
				 	  <div class="clearfix"> </div>
				 	</ul>
				 	
				 </div>
			   </div>
			</div><?php } ?>
			
			</div>
		<div class="clearfix"> </div>
	
	<div class="sellers_grid1">
			<ul class="sellers">
				<i class="star"> </i>
				<li class="sellers_desc"><h2>Women Collection</h2></li>
			</ul>
		</div>
		<div class="grid_3">
		<?php 
			
			while($row=$women->fetch_assoc())
			{
				$id=$row['product_id'];
				$img=$row['product_image'];
				$p_name=$row['product_name'];
				$price=$row['product_price'];
					
		?>
		
		
		
			<div class="col-md-3 span_6">
			  <div class="box_inner">
				<img src="<?php echo "images/$img";?>" class="img-responsive1" width="240px" height="200px"	alt=""/>
				<div class="desc">
				 	<h3><?php echo "$p_name";?></h3>
				 	<h4><?php echo "$price";?></h4>
				 	<ul class="list2">
				 	  <li class="list2_left"><span class="m_1"><a href="#" class="link">Add to Cart</a></span></li>
				 	  <li class="list2_right"><span class="m_2"><a href="single.php?UserId=<?php echo $id; ?>" class="link1">See More</a></span></li>
				 	  <div class="clearfix"> </div>
				 	</ul>
				 	
				 </div>
			   </div>
			</div><?php } ?>
			
			</div>



	
			   </div>
			   
			</div>
			
		</div>
	</div>
</div>
<div class="content_middle">
	<div class="container">
		<ul class="promote">
			<i class="promote_icon"> </i>
			<li class="promote_head"><h3>Promotion</h3></li>
		</ul>
		 <ul id="flexiselDemo3">
						<li><img src="images/n1.jpg"  class="img-responsive" /><div class="grid-flex"><h4>Contrary to popular </h4><p>589,90 $</p>
							<div class="m_3"><a href="#" class="link2">Add to Cart</a></div>
							<div class="ticket"> </div>
						</div></li>
						<li><img src="images/n2.jpg"  class="img-responsive" /><div class="grid-flex"><h4>Contrary to popular </h4><p>589,90 $</p>
							<div class="m_3"><a href="#" class="link2">Add to Cart</a></div>
							<div class="ticket"> </div>
						</div></li>
						<li><img src="images/n3.jpg"  class="img-responsive" /><div class="grid-flex"><h4>Contrary to popular </h4><p>589,90 $</p>
							<div class="m_3"><a href="#" class="link2">Add to Cart</a></div>
							<div class="ticket"> </div>
						</div></li>
						<li><img src="images/n4.jpg"  class="img-responsive" /><div class="grid-flex"><h4>Contrary to popular </h4><p>589,90 $</p>
							<div class="m_3"><a href="#" class="link2">Add to Cart</a></div>
							<div class="ticket"> </div>
						</div></li>
						<li><img src="images/n5.jpg"  class="img-responsive" /><div class="grid-flex"><h4>Contrary to popular </h4><p>589,90 $</p>
							<div class="m_3"><a href="#" class="link2">Add to Cart</a></div>
							<div class="ticket"> </div>
						</div></li>
				     </ul>
				    <script type="text/javascript">
					 $(window).load(function() {
						$("#flexiselDemo3").flexisel({
							visibleItems: 6,
							animationSpeed: 1000,
							autoPlay:true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
					    	responsiveBreakpoints: { 
					    		portrait: { 
					    			changePoint:480,
					    			visibleItems: 1
					    		}, 
					    		landscape: { 
					    			changePoint:640,
					    			visibleItems: 2
					    		},
					    		tablet: { 
					    			changePoint:768,
					    			visibleItems: 3
					    		}
					    	}
					    });
					    
					});
				   </script>
				   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
	</div>
</div>
<div class="container">
   <div class="content_middle_bottom">
	  <div class="col-md-4">
		  <ul class="spinner">
			<i class="spinner_icon"> </i>
			<li class="spinner_head"><h3>But I must explain</h3></li>
			<div class="clearfix"> </div>
		  </ul>
		  <div class="timer_box">
			<div class="thumb"> </div>
			<div class="timer_grid">
 			<ul id="countdown">
			</ul>
				<ul class="navigation">
					<li>
						<p class="timeRefDays">DAYS</p>
					</li>
					<li>
						<p class="timeRefHours">HOURS</p>
					</li>
					<li>
						<p class="timeRefMinutes">MINUTES</p>
					</li>
					<li>
						<p class="timeRefSeconds">SECONDS</p>
					</li>
				</ul>
          </div>
          <div class="thumb_desc">
          	<h3> totam rem aperiam</h3>
          	<div class="price">
			   <span class="reducedfrom">$140.00</span>
			   <span class="actual">$120.00</span>
			</div>
		 </div>
		 <a href="#"><div class="m_3 deal"><div class="link3">Buy this deal</div></div></a>
		</div>
		</div>
	  <div class="clearfix"></div>
	</div>
</div>
<div class="footer">
	<div class="container">
	  <ul class="footer_nav">
	    <?php include('footer.php');?>
	</div>
</div>
</body>
</html>		