
<?php
include("config.inc.php");
session_start();

if(isset($_POST['submit'])){
	$cate=$_POST['cat'];
	///check category
	$chk=$mysqli_conn->query("Select cat_name FROM category");
	while($row=$chk->fetch_assoc()){
		$cat=$row['cat_name'];
	}

	if($cate!=$cat){
	
	$mysqli_conn->query("INSERT INTO category (cat_name)VALUES ('$cate')");
	echo '<script type="text/javascript">alert("Category Added Successfully");window.location=\'add_cat.php\';</script>';
	}
	else{
		echo '<script type="text/javascript">alert("Category already Added Try A New One");window.location=\'add_cat.php\';</script>';
	}
}
	
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
<!-- Custom Theme files -->
<!--webfont-->
<link href='css/fonts.css' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!--validition-->
<script type="text/javascript" src="js/validation.js"></script>
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
	    <div class="col-md-12 register">
		  	  <form action="" method="POST"> 
				 <div class="register-top-grid">
					<h3>Add Category</h3>							 
							<div>
								<span>Enter Category Name<label>*</label></span>
								<input id="cat" name="cat" type="text" maxlength="15" placeholder="Enter Category Name">
								<script type="text/javascript">
								var f1 = new LiveValidation('cat');
								f1.add(Validate.Presence,{failureMessage: "Enter Category Name"});
								f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
						 </script>
							 </div>
													
							 <div class="clearfix"> </div>
							 <div class="clearfix"> </div>

					   <input type="submit" name="submit"value="submit">
					   <div class="clearfix"> </div>
				   </form>
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