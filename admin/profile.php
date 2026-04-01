<?php
session_start();
$id=$_SESSION['aid'];
include("config.inc.php");
//user  from database
$results = $mysqli_conn->query("SELECT * FROM admin where id='$id'");
$row = $results->fetch_assoc();
	
	$aname=$row["name"];
	$email=$row["email"];
	$phone=$row["phn_no"];
	$address=$row["address"];
	
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
	    <div class="profile">
		<div class="desc1 span_3_of_2 hero-unit-3">
		  	  <table class=" edit table table-striped table-responsive table-hover table-bordered table-condensed" id="example" >
				  <tr>
					     <th width="155" scope="row">Name:</th>
					     <td width="322"><?php echo "$aname";?></td>
			      </tr>
					   <tr>
					     <th scope="row">Email:</th>
					     <td><?php echo "$email";?></td>
			      </tr>
					   <tr>
					     <th scope="row">Phone no:</th>
					     <td><?php echo "$phone";?></td>
			      </tr>
					   <tr>
					     <th scope="row">Address:</th>
					     <td><?php echo "$address";?></td>
			      </tr>
					   
                      
					   <tr>
					     <th scope="row"></th>
					     <td><a href="edit_profile.php?id=<?php echo $id;?>"> 
						 <input type="submit" name="edit" value="Edit"></a> </td>
			      </tr>
			   </table>
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