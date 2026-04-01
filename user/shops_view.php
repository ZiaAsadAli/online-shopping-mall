<!DOCTYPE HTML>
<?php
session_start(); 
include("config.inc.php"); 
require_once("perpage.php");
	$sname = "";
	$email = "";
	
	$queryCondition = "";
	if(!empty($_POST["search"])) {
		foreach($_POST["search"] as $k=>$v){
			if(!empty($v)) {

				$queryCases = array("name","email");
				if(in_array($k,$queryCases)) {
					if(!empty($queryCondition)) {
						$queryCondition .= " AND ";
					} else {
						$queryCondition .= " WHERE ";
					}
				}
				switch($k) {
					case "name":
						$sname = $v;
						$queryCondition .= "o_name LIKE '%" . $v . "%'";
						break;
					case "email":
						$eamil = $v;
						$queryCondition .= "email LIKE '%" . $v . "%'";
						break;
				}
			}
		}
	}
	$orderby = " ORDER BY id desc"; 
	$sql = "SELECT * FROM shops " . $queryCondition;
	$href = 'index.php';					
		
	$perPage = 2; 
	$page = 1;
	if(isset($_POST['page'])){
		$page = $_POST['page'];
	}
	$start = ($page-1)*$perPage;
	if($start < 0) $start = 0;
		
	$query =  $sql . $orderby .  " limit " . $start . "," . $perPage; 
	$result = runQuery($query);
	
	if(!empty($result)) {
		$result["perpage"] = showperpage($sql, $perPage, $href);
	}
	else{
		
		echo '<script type="text/javascript">alert("No Shops Found");window.location=\'record_view.php\';</script>';
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

<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />

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
                                    
            <dl id="narrow-by-list">
                                                                                                    
                    <dd class="odd">
<ol>
    <li>
                <a href="user_view.php"><class="odd">All Users</span></a>
                        
            </li>
    <li>
                <a href="shops_view.php"><span class="odd">All Shops</span></a>
                        
            </li>
    <li>
                <a href="new_order.php"><span class="odd">All New Orders</span></a>
                        
            </li>
	<li>
                <a href="porder.php"><span class="odd">All Pending Orders</span></a>
                        
            </li>
    <li>
                
				<a href="corder.php"><span class="odd">All Completed Transactions</span></a>
                        
            </li>
    
</ol>
</dd>

                                                                    
                                            </dl>
           
            </div>
</div>

</div>
<div class="col-md-9">
	<div class="mens-toolbar">
          <div class="sort">
               	<div class="sort-by">
		            <label>All Shops</label>
		            
		        </div>
    		</div>
     	    <div class="clearfix"></div>
	     </div>
         
        
         	<div class="col_1_of_single1"> 
			
	        
			<form name="frmSearch" method="post" action="shops_view.php">
			<table class=" table pagi table-striped table-responsive table-hover table-bordered ">
			<div class="search-box">
			<p>
				<tr>
				<th colspan=6>
				<input type="text" placeholder="Enter Brand Name" name="search[name]" class="demoInputBox" value="<?php echo $sname; ?>"/>
				<input type="text" placeholder="Enter Email" name="search[email]" class="demoInputBox" value="<?php echo $email; ?>"	/>
				<input type="submit" name="go" class="btnSearch" value="Search">
				</th>
				</tr>
			</p>
			</div>
			
			
        
					<tr>
					<th><strong>Brand Name</strong></th>
					<th><strong>Owner Name</strong></th>          
					<th><strong>Email</strong></th>
					<th><strong>Phone No</strong></th>
					<th><strong>SignUp Date</strong></th>
					
					
					</tr>
				<?php
						foreach($result as $k=>$v) {
						if(is_numeric($k)) {
					?>
          <tr>
					<td><a rel="facebox" title="Click To View Detail" href="shops_details.php?bname=<?php echo $result[$k]["brand_name"]; ?>"><?php echo $result[$k]["brand_name"]; ?></td></a>
					<td><?php echo $result[$k]["o_name"]; ?></td>
					<td><?php echo $result[$k]["email"]; ?></td>
					<td><?php echo $result[$k]["phn_no"]; ?></td>
					<td><?php echo $result[$k]["date"]; ?></td> 
					
					
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
