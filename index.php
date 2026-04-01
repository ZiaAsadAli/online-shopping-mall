<?php 
include 'config.inc.php';
$per_page =4; 
$men = $mysqli_conn->query("SELECT * FROM products_list where gender='Men' order by rand() LIMIT {$per_page} ");
$women = $mysqli_conn->query("SELECT * FROM products_list where gender='Women' order by rand() LIMIT {$per_page} ");

?>
<!DOCTYPE HTML>
<html>
<head>
<title>BIG SHOPE</title>

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

include 'header.php';
?>
<h2><?php// echo $ip=you(); //funtion for getting ip address?></h2>
<div class="index_slider">
	<div class="container">
	  <div class="callbacks_container">
	      <ul class="rslides" id="slider">
	        <li><img src="images/slider1.jpg" class="img-responsive" alt=""/></li>
	        <li><img src="images/slider2.jpg" class="img-responsive" alt=""/></li>
	        <li><img src="images/slider4.jpg" class="img-responsive" alt=""/></li>
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
			 		<li class="list1_right"><p>Upto 5% Cheaper From Market</p></li>
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
			 		<li class="list1_right"><p>Free Shipping All Over Pakistan</p></li>
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
				$brand1=$row['brands'];
					
		?>

			<div class="col-md-3 span_6">
			  <div class="box_inner">
				<img src="<?php echo "images/$img";?>" class="img-responsive1" width="240px" height="275px"	alt=""/>
				<div class="desc">
				 	<strong><p><?php echo "$p_name"; ?> &nbsp&nbsp; Rs <?php  echo "$price";?></p>
					<p><?php echo "$brand1";?></p></strong>
				 	<ul class="list2">
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
				$brand=$row['brands'];	
		?>
		
		
		
			<div class="col-md-3 span_6">
			  <div class="box_inner">
				<img src="<?php echo "images/$img";?>" class="img-responsive1" width="240px" height="275px"	alt=""/>
				<div class="desc">
				 	<strong><p><?php echo "$p_name"; ?> &nbsp&nbsp; <?php  echo "Rs"."$price";?></p>
				
					<p><?php echo "$brand";?></p></strong>
					
				 	<ul class="list2">
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

<div class="footer">
	<div class="container">
	  <ul class="footer_nav">
	    <?php include('footer.php');?>
	</div>
</div>
</body>
</html>		