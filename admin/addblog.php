<?php
session_start();

include "config.inc.php";


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
<!--text area script-->
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({selector:'#desc'});</script>
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
					<form method="post" action="blogquery.php" enctype="multipart/form-data">
						<table class="addproduct table-striped table-responsive table-hover table-bordered table-condensed" border="">
						<tr>
								<td colspan="2"><h2>Add Blog Post</h2></td>
						
							</tr>
						<tr>
								<td><span>Blog Title </span></td>
								<td><input type="text" name="name" id="name" placeholder="Enter Blog Title"/>
									<script type="text/javascript">
										var f1 = new LiveValidation('name');
										f1.add(Validate.Presence,{failureMessage: "Enter Blog Title"});
										f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
									</script>
								</td>
						
							</tr>						
						<tr>
								<td>Banner</td>
								<td><input type="file" name="img1" id="img1"/></td> 
								<script type="text/javascript">
										var f1 = new LiveValidation('img1');
										f1.add(Validate.Presence,{failureMessage: "Add Image"});
									</script>
						
							</tr>
						<tr>
								<td>Description</td>
								<td><textarea id="desc" name="desc" cols="50" rows="10" placeholder="Enter Product Description" ></textarea></td>
									
						
							</tr>
						<tr>
								<td><span>Your Password </span></td>
								<td><input type="password" name="upass" id="upass" placeholder="Enter Your Password"/>
									<script type="text/javascript">
										var f1 = new LiveValidation('upass');
										f1.add(Validate.Presence,{failureMessage: "Enter Your Password Please"});
									</script>
								</td>
						
							</tr>
						
						<tr>
								<td colspan="2"><input type="Submit" value="Submit"/></td> 
						
							</tr>
					</table>
				</form>  
		     
				  <div class="clearfix"></div>	
				<div class="clearfix"></div>
      </div>
  </div>
</div>
<div class="footer">

	<div class="container">
		<?php include('footer.php');?>
     
	</div>
</div></div>
</div>