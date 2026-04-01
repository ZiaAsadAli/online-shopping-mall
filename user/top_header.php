<?Php 
@session_start();
include "config.inc.php";
$name=$_SESSION['usaname'];
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
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
   </div>
</div>
</div>
