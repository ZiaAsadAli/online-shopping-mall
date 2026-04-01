<?php
session_start();

include("config.inc.php"); 
//user date
$Id=$_GET['id'];
$results = $mysqli_conn->query("SELECT * FROM shops where id='$Id'");
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
	  <div class="single_top">
	       <div class="col-md-9 single_right">
	   	       <h2>Edit your Profile</h2>
<?php 
$row = $results->fetch_assoc(); 
	$name=$row["o_name"];
	$bname=$row["brand_name"];
	$email=$row["email"];
	$phone=$row["phn_no"];
	$address=$row["address"];
	$aid=$row['id'];
	
	?>

						 <div class="clearfix"></div>		
		     </div> 
		     <div class="desc1 span_3_of_2">  
				<form action="edit_profile_query.php?id=<?php echo "$aid";?>" enctype="multipart/form-data" method="post" name="form1" id="form1">
						<table align="center"  class=" edit table table-striped table-responsive table-hover table-bordered table-condensed" >
							   <tr>
								 <th width="155" scope="row">Name:</th>
								 <td width="322"><input name="nam" type="text" id="nam" value="<?php echo "$name";?>" size="25"/>
									 <script type="text/javascript">
											var f1 = new LiveValidation('nam');
											f1.add(Validate.Presence,{failureMessage: "Enter Name"});
											f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
											f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
												   " Invalid Name"});
										  </script>
								 </td>
						  </tr>
							   <tr>
								 <th scope="row">Brand Name:</th>
								 <td><?php echo "$bname";?></td>
						  </tr>
							   <tr>
								 <th scope="row">Email:</th>
								 <td><?php echo "$email";?></td>
						  </tr>
							   <tr>
								 <th scope="row">Phone no:</th>
								 <td><input name="phn" type="text" id="phn" value="<?php echo "$phone";?>" size="25" maxlength="15"/>
									 <script type="text/javascript">
											var f1 = new LiveValidation('phn');
											f1.add(Validate.Presence,{failureMessage: "Enter Phone no"});
											f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: " It allows only numbers"});
										  </script>
								 </td>
						  </tr>
							   <tr>
								 <th scope="row">Address:</th>
								 <td><textarea cols="25" rows="2" name="addrs" id="addrs" type="textarea"/> <?php echo "$address";?></textarea>
									<script type="text/javascript">
										var f1 = new LiveValidation('addrs');
										f1.add(Validate.Presence,{failureMessage: "Enter your home address"});
									  </script>
								 </td>
						  </tr>
						  <tr>
								 <th scope="row">Enter Your Password:</th>
								 <td><input name="pass" type="password" id="pass" size="25"/>
									<script type="text/javascript">
										var f1 = new LiveValidation('pass');
										f1.add(Validate.Presence,{failureMessage: "Enter your password"});
										
									  </script>
								 </td>
						  </tr>
						  <tr>
								 <th scope="row">&nbsp;</th>
								 <td><input type="submit" value="Submit"></td>
						  </tr>
					   </table>
				</form>	   
			    <p class="m_text2"></p>
		     </div>
				  <div class="clearfix"></div>	
       </div>
      </div>
	  <div class="clearfix"></div>
      </div>
  </div>
</div>
<div class="footer">

	<div class="container">
		<?php include('footer.php');?>
     
	</div>
</div>