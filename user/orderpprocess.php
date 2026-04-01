<?php

session_start(); 
include("config.inc.php"); 

	if (isset($_GET['orid'])){
			if(!empty($_GET["orid"])) {
				$result = $mysqli_conn->query("SELECT * FROM cart where id='".$_GET['orid']."'");
				$row=$result->fetch_assoc();
				$code=$row['order_no'];
							
			}
		}
	else {
		echo '<script>window.location=\'new_order.php\';</script>';
	}
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
					<form method="post" action="compprocess_query.php" enctype="multipart/form-data">
						<table class="addshop table-striped table-responsive table-hover table-bordered table-condensed" border="">
						<tr>
								<th colspan="2"><h2>Cancelation OF Order</h2></th>
						
							</tr>
						<tr>
								 <th scope="row">Order No:</th>
								 <td><input  value="<?php echo "$code";?>" type="text" disabled /></td>
								 <td><input name="code1" id="code1" value="<?php echo "$code";?>" type="hidden"  />
						  </tr>
						<tr>
						  <th>Plese Enter Reason </br> Of Cancelation:</th>
						  <td><TEXTAREA  name="des" placeholder="Enter Owner Address" id="des" cols="25" rows="3"  /></TEXTAREA></td>
						  <script type="text/javascript">
										var f1 = new LiveValidation('des');
										f1.add(Validate.Presence,{failureMessage: "Enter Shipping Address"});
									</script>
						  </tr>
						<tr>
								<th>Your Password:</th>
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