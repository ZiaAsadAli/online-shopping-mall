<?php
session_start();
include "config.inc.php";

$results = $mysqli_conn->query("Select * FROM blog");
?>
<!DOCTYPE HTML>
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
</head>
<body>
<?php
include 'top_header.php';
include 'header.php';
?>
<div class="men">
	<div class="container">
	       <div class="blog-top">
		   <?php 
		   
				while($row=$results->fetch_assoc()){
					
					$title=$row['title'];
					$it=$row['id'];
					$addby=$row['addby'];
					$date=$row['date'];
					$image=$row['pic'];
					$desc=$row['description'];
					
   
		   
		   
		   ?>
			  <div class="col-md-6 grid_3">
					<h3><a href="blog_single.php?bid=<?php echo "$it";?>"><?php echo "$title";?></a></h3>
					<a href="blog_single.php?bid=<?php echo "$it";?>"><img src="<?php echo "images/$image";?>" class="img-responsive" alt=""/></a>
					
					<div class="blog-poast-info">
						<ul>
							<li><i class="admin"> </i><a class="admin" href="#"><span> </span> <?php echo "$addby";?> </a></li>
							<li><i class="date"> </i><span> </span><?php echo "$date"; ?></li>
						</ul>
				    </div>
					<p><?php echo "$desc"; ?></p>
					<div class="button"><a href="blog_single.php?bid=<?php echo "$it";?>">Read More</a></div>
				</div><?php }?>
				
				<div class="clearfix"></div>
			  </div>
      </div>
</div>
<div class="footer">
	<div class="container">
		<?php include('footer.php');?>
</div>
</body>
</html>		