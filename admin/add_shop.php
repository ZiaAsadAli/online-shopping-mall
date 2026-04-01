<?php
session_start();

include "config.inc.php";
$cats=$mysqli_conn->query("Select cat_name from category");
$brands=$mysqli_conn->query("Select brand_name from shops");

?>
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
					<form method="post" action="addshop_query.php" enctype="multipart/form-data">
						<table class="addshop table-striped table-responsive table-hover table-bordered table-condensed" border="">
						<tr>
								<td colspan="2"><h2>Add New Shop</h2></td>
						
							</tr>
						<tr>
								<td><span>Brand Name </span></td>
								<td><input type="text" name="bname" id="bname" placeholder="Enter Brand Name"/>
									<script type="text/javascript">
										var f1 = new LiveValidation('bname');
										f1.add(Validate.Presence,{failureMessage: "Enter Brand Name"});
										f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
									</script>
								</td>
						
							</tr>
						<tr>
								<td>Owner Name</td>
								<td><input type="text" name="oname" id="oname"placeholder="Enter Owner Name"/></td> 
								<script type="text/javascript">
										var f1 = new LiveValidation('oname');
										f1.add(Validate.Presence,{failureMessage: "Enter Owner Name"});
										f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
									</script>
						
							</tr>
						<tr>
								<td>Email</td>
								<td><input type="email" name="mail" placeholder="Enter Email of Owner" id="mail"/></td> 
								<script type="text/javascript">
										var f1 = new LiveValidation('mail');
										f1.add(Validate.Presence,{failureMessage: "Enter Email"});
									</script>
						
							</tr>
						<tr>
						  <td>Password</td>
						  <td><input type="password" name="pass" placeholder="Enter Password" id="pass" /></td>
						  <script type="text/javascript">
										var f1 = new LiveValidation('pass');
										f1.add(Validate.Presence,{failureMessage: "Enter Password"});
									</script>
						  </tr>
						<tr>
						  <td>Confrim Password</td>
						  <td><input type="password" name="cpass" placeholder="Re-Enter Password" id="cpass"  /></td>
						  <script type="text/javascript">
										var f1 = new LiveValidation('cpass');
										f1.add(Validate.Presence,{failureMessage: "Please Re-Enter Password"});
									</script>
						  </tr>
						<tr>
						  <td>Phone No</td>
						  <td><input type="text" name="no" placeholder="Owner Phone No" id="no"  /></td>
						  <script type="text/javascript">
										var f1 = new LiveValidation('no');
										f1.add(Validate.Presence,{failureMessage: "Enter Phone No"});
										f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: " It allows only numbers"});
										f1.add( Validate.Length, { minimum: 10, maximum: 14 } );
									</script>
						  </tr>
						  <tr>
						  <td>Owner Address</td>
						  <td><TEXTAREA  name="address" placeholder="Enter Owner Address" id="address" cols="25" rows="3"  /></TEXTAREA></td>
						  <script type="text/javascript">
										var f1 = new LiveValidation('address');
										f1.add(Validate.Presence,{failureMessage: "Enter Address of Owner"});
									</script>
						  </tr>
						<tr>
								<td>Your Password</td>
								<td><input type="password" name="upass" placeholder="Enter Your Password" id="upass" /></td> 
								<script type="text/javascript">
										var f1 = new LiveValidation('upass');
										f1.add(Validate.Presence,{failureMessage: "Enter Your Password"});
									</script>
						
						  </tr>							
						
						<tr>
								<td colspan="2"><input type="Submit" name="submit" value="Submit"/></td> 
						
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

</html>