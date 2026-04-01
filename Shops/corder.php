<!DOCTYPE HTML>
<?php
session_start(); 
include("config.inc.php"); 
require_once("perpage.php");
$bdn=$_SESSION['bdname'];
	$sname = "";
	
	
	$queryCondition = "";
	if(!empty($_POST["search"])) {
		
		foreach($_POST["search"] as $k=>$v){
			if(!empty($v)) {
				
				$queryCases = array("name");
				if(in_array($k,$queryCases)) {
					
						$queryCondition .= " Where  ";
					}
				switch($k) {
					case "name":
						$sname = $v;
						$queryCondition .= "brand_name='$bdn' and status='Completed' and date LIKE '%" . $v . "%'";
						break;
					}
			}
		}
	}
	$orderby = "  ORDER BY id desc"; 
	$sql = "SELECT  * FROM complete " . $queryCondition;
	$sql1 = "SELECT * FROM complete where status='Completed' and brand_name='$bdn'" ;
	$href = 'corder.php';					
		
	$perPage = 10; 
	$page =1 ;
	if(isset($_POST['page'])){
		$page = $_POST['page'];
	}
	
	$start = ($page-1)*$perPage;
	if($start < 0) $start = 0;
	
	if(!empty($v)) {		
	$query =  $sql . $orderby .  " limit " . $start . "," . $perPage;
	$result = runQuery($query);
	}
		else{
	$query =  $sql1 . $orderby .  " limit " . $start . "," . $perPage; 
	$result = runQuery($query);
	}
	
	if(!empty($result)) {
		if(!empty($v)) {
		$result["perpage"] = showperpage($sql, $perPage, $href);
		}
		else {
		$result["perpage"] = showperpage($sql1, $perPage, $href);
		}
		
	}
	else{
		
		echo '<script type="text/javascript">alert("No Product Found");window.location=\'record_view.php\';</script>';
	}
?>
<html>
<head>
<title>BIG SHOPE</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/pagination.css" rel='stylesheet' type='text/css' />
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

<script src="src/facebox.js" type="text/javascript"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />

<script src="src/facebox.js" type="text/javascript"></script>
   <script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
  
 
function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}
var first = getUrlVars()["id"];
var second = getUrlVars()["data"];
 
//alert(first);
//alert(second);
</script>
</head>
<body>
<?php
include 'top_header.php';  
include 'header.php';
?>
<div class="men">
	<div class="container">
	  <div class="col-md-3 sidebar">
	  	<div class="block block-layered-nav">
		    <div class="block-title">
		        <strong><span>View Records</span></strong>
		    </div>
    <div class="block-content">
                                    
            <?php include "menu.php";?>
           
            </div>
</div>

</div>
<div class="col-md-9">
	<div class="mens-toolbar">
          <div class="sort">
               	<div class="sort-by">
		            <label>Completed Order</label>
		            
		        </div>
    		</div>
     	    <div class="clearfix"></div>
	     </div>
         
        
         	<div class="col_1_of_single1"> 
			
	        
			<form name="frmSearch" method="post" action="corder.php">
			<table class=" table pagi table-striped table-responsive table-hover table-bordered " width="500px">
			<div class="search-box">
			<p>
				<tr>
				<th colspan=6>
				<input type="text" placeholder="Enter Order Date" name="search[name]" class="demoInputBox" value="<?php echo $sname; ?>"/>
				
				<input type="submit" name="go" class="btnSearch" value="Search">
				</th>
				</tr>
			</p>
			</div>
			
			
        
					<tr>
					<th><strong>Order No</strong></th>
					<th><strong>Date</strong></th>          
					<th><strong>Buyer Name</strong></th>
					<th><strong>Buyer Email</strong></th>
					<th><strong>Status</strong></th>
					
					
					</tr>
				<?php
						foreach($result as $k=>$v) {
						if(is_numeric($k)) {
					?>
          <tr>
					<td><a title="Click To View Detail" href="order_details2.php?ordercode=<?php echo $result[$k]["order_no"]; ?>"><?php echo $result[$k]["order_no"]; ?></a></td>
					<td><?php echo $result[$k]["c_date"]; ?></td>
					<td><?php echo $result[$k]["username"]; ?></td>
					<td><?php echo $result[$k]["useremail"]; ?></td>
					<td><?php echo $result[$k]["status"]; ?></td> 
					
					</tr>
					<?php
						}
					}
					if(isset($result["perpage"])) {
					?>
					<tr>
					<td colspan="6" align=right> <?php echo $result["perpage"]; ?></td>
					</tr>
					<?php } ?>
				<tbody>
			</table>
			</form>	
		
	 </div> 
				   
				  
				 
			  
            </div>
      </div>
</div>
<div class="footer">
	<div class="container">
		<?php include 'footer.php';?>
		
	</div>
</div>
</body>
</html>	
