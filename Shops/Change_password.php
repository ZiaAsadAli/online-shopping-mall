<!DOCTYPE HTML>
<html>
<head>
<?php 
session_start();

include("config.inc.php");?>
<title>BIG SHOPE</title>
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
		  	  <form action="changepassword_query.php" method="POST"> 
				 <div class="register-top-grid">
					<h3>Change Password</h3>							 
							<div>
								<span>Old Password<label>*</label></span>
								<input id="opass" name="opass" type="password" maxlength="15" placeholder="Old Password">
								<script type="text/javascript">
								var f1 = new LiveValidation('opass');
								f1.add(Validate.Presence,{failureMessage: "Enter Your Password"});
								f1.add( Validate.Length, { minimum: 8, maximum: 15 } );
						 </script>
							 </div>
							<div>
								<span>New Password<label>*</label></span>
								<input id="pass" name="pass" type="password" maxlength="15" placeholder="Your Password">
								<script type="text/javascript">
								var f1 = new LiveValidation('pass');
								f1.add(Validate.Presence,{failureMessage: "Enter Your Password"});
								f1.add( Validate.Length, { minimum: 8, maximum: 15 } );
						 </script>
							 </div>
							 <div>
								<span>Confirm Password<label>*</label></span>
								<input id="cpass" name="cpass" type="password" maxlength="15" placeholder="Confirm Password">
								<script type="text/javascript">
								var f1 = new LiveValidation('cpass');
								f1.add(Validate.Presence,{failureMessage: "Please Confirm Your Password"});
								f1.add( Validate.Length, { minimum: 8, maximum: 15 } );
						 </script>
							 </div>							
							 <div class="clearfix"> </div>
							 <div class="clearfix"> </div>

					   <input type="submit" value="submit">
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