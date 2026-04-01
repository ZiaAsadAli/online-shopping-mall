<!DOCTYPE HTML>
<?php
session_start(); 
include("config.inc.php"); 
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
               <class="odd">--------------------</span>
                        
            </li>
    <li>
                <class="odd">--------------------</span>
                        
            </li>
    <li>
                <class="odd">--------------------</span>
                        
            </li>
    <li>
                <class="odd">--------------------</span>
                        
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
		            <label>Select Category</label>
		            
		        </div>
    		</div>
     	    <div class="clearfix"></div>
	     </div>
         
        
         	<div class="col_1_of_single1"> 
			
				 <p> <a href="user_view.php"><button type="button" class="btn btn-default">Users</button></a> 
					  <a href="shops_view.php"><button type="button" class="btn btn-default">Shops</button></a>
					  <a href="new_products.php"><button type="button" class="btn btn-default">New Products</button></a>
					  <a href="All_products.php"><button type="button" class="btn btn-default">All Products</button></a>
					  <a href="new_order.php"><button type="button" class="btn btn-default">New Orders</button></a>
				 </p>
			<p>
					  
					  <a href="porder.php"><button type="button" class="btn btn-default">Pending Orders</button></a>
					  <a href="corder.php"><button type="button" class="btn btn-default">Completed Orders</button></a>
					  <a href="xorder.php"><button type="button" class="btn btn-default">Cancel Orders</button></a>
					  <a href="rorder.php"><button type="button" class="btn btn-default">Returned Orders</button></a>
				</p>
			
			</table>
		
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
