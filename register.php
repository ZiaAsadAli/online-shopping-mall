<!DOCTYPE HTML>
<html>
<head>
<?php include("config.inc.php");?>
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
//include 'top_header.php';  
include 'header.php';
?>
<div class="men">
	<div class="container">
	    <div class="col-md-12 register">
		  	  <form action="register_query.php" method="POST"> 
				 <div class="register-top-grid">
					<h3>PERSONAL INFORMATION</h3>
							 <div>
								<span>Full Name<label>*</label></span>
								<input id="name" name="name" type="text" placeholder="Your Name"> 
								<script type="text/javascript">
								var f1 = new LiveValidation('name');
								f1.add(Validate.Presence,{failureMessage: "Enter Your Name"});
								f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
						 </script>
							 </div>
							 <div>
								<span>Gender<label>*</label></span>
								<select id="gen" name="gen">
                                <option value="">-----Select Gender------</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option> 
                                </select>
								<script type="text/javascript">
								var f1 = new LiveValidation('gen');
								f1.add(Validate.Presence,{failureMessage: "Select Your Gender "});
						 </script>
							 </div>
							 <div>
								 <span>Email Address<label>*</label></span>
								 <input id="email" name="email" type="email" placeholder="Enter Your Email ID"> 
								 <script type="text/javascript">
								var f1 = new LiveValidation('email');
								f1.add(Validate.Presence,{failureMessage: "Enter Your Email Id"});
						 </script>
							 </div>
							<div>
								<span>Password<label>*</label></span>
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
							 <div>
								<span>Phone No<label>*</label></span>
								<input id="no" name="no" type="text" placeholder="Enter Your Phone No" maxlength="14">
								<script type="text/javascript">
								var f1 = new LiveValidation('no');
								f1.add(Validate.Presence,{failureMessage: "Enter Your Phone No"});
								f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: " It allows only numbers"});
								f1.add( Validate.Length, { minimum: 11, maximum: 14 } );
						 </script>
							 </div>
							 <div>
								<span>Address<label>*</label></span>
								<textarea rows="3"  id="address" name="address"placeholder="Enter Your Home Address" ></textarea>
								<script type="text/javascript">
								var f1 = new LiveValidation('address');
								f1.add(Validate.Presence,{failureMessage: "Enter Your Home Address"});
						 </script>
							 </div>
							 <div>
								<span>Shipping Address<label>*</label></span>
								<textarea rows="3"  id="saddress" name="saddress" placeholder="Enter Your Shipping Address"></textarea>
								<script type="text/javascript">
								var f1 = new LiveValidation('saddress');
								f1.add(Validate.Presence,{failureMessage: "Enter Your Shipping Address"});
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