<?php
session_start();

include "config.inc.php";
$cats=$mysqli_conn->query("Select cat_name from category");
$brands=$mysqli_conn->query("Select brand_name from shops where o_name='".$_SESSION['shpname']."'");

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
					<form method="post" action="addproduct_query.php" enctype="multipart/form-data">
						<table class="addproduct table-striped table-responsive table-hover table-bordered table-condensed" border="">
						<tr>
								<td colspan="2"><h2>Insert New Product</h2></td>
						
							</tr>
						<tr>
								<td><span>Product Title </span></td>
								<td><input type="text" name="pname" id="pname" placeholder="Enter Product Title"/>
									<script type="text/javascript">
										var f1 = new LiveValidation('pname');
										f1.add(Validate.Presence,{failureMessage: "Enter Product Title"});
										f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
									</script>
								</td>
						
							</tr>
						<tr>
								<td>Brand Name</td>
								<td>
								<select name="bname" id="bname">
									<option value="">Select Brand</option>
									<?php
									while($row=$brands->fetch_assoc()){
										
										$bname=$row['brand_name'];
											
									echo "<option value='$bname'> $bname </option>";
										
										
									} ?>
									<script type="text/javascript">
										var f1 = new LiveValidation('bname');
										f1.add(Validate.Presence,{failureMessage: "Select Brand"});
									</script>
								</select>
								</td> 
						
							</tr>
							<tr>
								<td>Category</td>
								<td>
									<Select name="gen" id="gen">
									<option value="">Select Category</option>
									<option value="Men">Men </option>
									<option value="Women" >Women </option>
									<script type="text/javascript">
										var f1 = new LiveValidation('gen');
										f1.add(Validate.Presence,{failureMessage: "Select Gender"});
									</script>
									</select>	
									
								</td> 
						
							</tr>
						<tr>
								<td>Sub-Category</td>
								<td>
								<select name="cname" id="cname">
									<option value="">Select Sub-Category</option>
									<?php
									while($rows=$cats->fetch_assoc()){
										
										$cname=$rows['cat_name'];
											
									echo "<option value='$cname'> $cname </option>";
										
										
									} ?>
									<script type="text/javascript">
										var f1 = new LiveValidation('cname');
										f1.add(Validate.Presence,{failureMessage: "Select Category"});
									</script>
								</select>
								</td> 
						
							</tr>
						<tr>
								<td>Ist Image</td>
								<td><input type="file" name="img1" id="img1"/></td> 
								<script type="text/javascript">
										var f1 = new LiveValidation('img1');
										f1.add(Validate.Presence,{failureMessage: "Add Image"});
									</script>
						
							</tr>
						<tr>
								<td>2nd Image</td>
								<td><input type="file" name="img2"id="img2"/></td> 
								<script type="text/javascript">
										var f1 = new LiveValidation('img2');
										f1.add(Validate.Presence,{failureMessage: "Add Image"});
									</script>
						
							</tr>
						<tr>
								<td>3rd Image</td>
								<td><input type="file" name="img3" id="img3" multiple /></td> 
								<script type="text/javascript">
										var f1 = new LiveValidation('img3');
										f1.add(Validate.Presence,{failureMessage: "Add Image"});
									</script>
						
							</tr>
						<tr>
								<td>Product Price</td>
								<td><input type="text" name="price" id="price"placeholder="Enter Product Price"/></td> 
								<script type="text/javascript">
										var f1 = new LiveValidation('price');
										f1.add(Validate.Presence,{failureMessage: "Add Price of Product"});
									</script>
						
							</tr>
						<tr>
								<td>Product Keyword</td>
								<td><input type="text" name="keyword" placeholder="Enter Product Keyword" id="keyword"/></td> 
								<script type="text/javascript">
										var f1 = new LiveValidation('keyword');
										f1.add(Validate.Presence,{failureMessage: "Add Product keyword for search"});
									</script>
						
							</tr>
							
						<tr>
								<td>Description</td>
								<td><textarea id="desc" name="desc" cols="50" rows="10" placeholder="Enter Product Description" ></textarea></td>
									<script type="text/javascript">
										var f1 = new LiveValidation('desc');
										f1.add(Validate.Presence,{failureMessage: "Add description of Product"});
									</script>
						
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

</html>