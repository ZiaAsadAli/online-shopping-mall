<?Php 
@session_start();
include "config.inc.php";
$name=$_SESSION['adminname'];
?>
<div class="header_top">
  <div class="container">
     <div class="header-top-left">
   				    <div class="clearfix"></div>
   			 </div>
			 <div class="cssmenu">
				<ul>
					<li><a href="profile.php"><?php echo "$name"?></a></li>
					<li><a href="Change_password.php">Change Password</a></li>
					<li ><a href="addproduct.php">Add Product</a></li> 
					<li><a href="add_shop.php">Add Shop</a></li>
                    <li><a href="add_cat.php">Add Category</a></li>
                    <li><a href="addblog.php">Add Blog</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
   </div>
</div>
</div>
