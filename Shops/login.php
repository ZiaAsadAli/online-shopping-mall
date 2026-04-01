<!DOCTYPE HTML>
<html>
<head>
<title>BIG SHOPE</title>
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
<!--validition-->
<script type="text/javascript" src="js/validation.js"></script>
<link rel="stylesheet" type="text/css" href="css/message.css" media="all">
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
	    <div class="register">
			   <div class="col-md-6 login-left">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="register.php">Create an Account</a>
			   </div>
			   <div class="col-md-6 login-right">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
				<form action="login_query.php" method="POST">
				  <div>
					<span>Email Address<label>*</label></span>
					<input name="mail" id="mail" type="Email"> 
						<script type="text/javascript">
								var f1 = new LiveValidation('mail');
								f1.add(Validate.Presence,{failureMessage: "Enter Your Email Id"});
						 </script>
				  </div>
				  <div>
					<span>Password<label>*</label></span>
					<input type="password" name="pass" id="pass"> 
						<script type="text/javascript">
								var f1 = new LiveValidation('pass');
								f1.add(Validate.Presence,{failureMessage: "Enter Your Password"});
						 </script>
				  </div>
				  <a class="forgot" href="#">Forgot Your Password?</a></br>
				  <input type="submit" value="Login">
			    </form>
			   </div>	
			   <div class="clearfix"> </div>
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