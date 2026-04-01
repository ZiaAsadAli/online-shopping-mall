<?php 
session_start();
include"connect.php";
include"session.php";

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Police Management System</title>
 <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="screen">
  
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        
      
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
		<script src="js/jquery.js" type="text/javascript"></script>
    

    <script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
  
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



<link href="css/slider.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<link rel="stylesheet" type="text/css" href="css/styles.css" />

<script type="text/javascript" src="javascript/validation.js"></script>

<!--StyleSheet included-->
<link rel="stylesheet" type="text/css" href="css/message.css" media="all">
<!--Stylesheet ends here-->
 <link href="CalendarControl.css" rel="stylesheet" type="text/css">

<script src="CalendarControl.js" language="javascript"></script>


<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />


<style type="text/css">
<!--
.style27 {color: #1b8fb2}
-->
</style>
</head>
<?php 
@$p=$_POST['cmbStation'];
$_SESSION['iid']=$p;

@$chk=$_GET['id'];
$_SESSION['iiid']=$chk;

@$t=$_POST['typ'];
$_SESSION['tt']=$t;

@$cc=$_GET['cd'];
$_SESSION['ttt']=$cc;

?>
<body>

<div id="main_wrapper">

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div class="cleaner"></div>

<div id="main">
  <div id="content">
    
    
    <div class="section_w800">
           <h2 class="style27">View  FIR of 
           <?php echo $_SESSION['iid'];  echo "&nbsp"; echo  'Status: &nbsp'; echo $_SESSION['tt'];


 ?>
           </h2>
           
        <div class="hero-unit-3">
                   <table width="102%" border="0" cellpadding="0" cellspacing="0" class="table table-striped table-bordered" id="example">
                     <thead>
                       <tr>
                         <th width="12%" height="37"><div align="center"> FIR No </div></th>
                         <th width="16%"><div align="center">Name</div></th>
                         <th width="8%"><div align="center">Contact</div></th>
                         <th width="7%"><div align="center">Crime</div></th>
                         <th width="16%"><div align="center">Police Station</div></th>
                         <th width="16%"><div align="center">Progress</div></th>
                         <th width="16%"><div align="center">Status</div></th>
<th width="9%"><div align="center">Edit</div></th>
</tr>
</thead>
<tbody>					 
<?php 
				  
if ($p=='All'){
// query for all stations
$sql = "select * from fir_details where status='$t' order by F_id ASC";
}
else{
// Specify the query to execute
$sql = "select * from fir_details where status='$t'  and Station_Name='$p'  order by F_id ASC";
 }

// Execute query
$result = mysql_query($sql) or die(mysql_error());
// Loop through each records 
while(@$row = mysql_fetch_array($result))
{
extract($row);
$Id=$row['F_id'];
$Name=$row['name'];
$Gender =$row['gender'];
$Contact =$row['contact_no'];
$Address  =$row['address'];
$station  =$row['Station_Name'];
$crime=$row['crime_type'];
$status =$row['status'];
$date =$row['date'];
$desc =$row['discription'];
$loc =$row['crimelocation'];
$status =$row['status'];
?>
                      
                       <tr>
                         <td><div align="center"><a rel="facebox" title="Click To View Detail" href="fir_detail.php?UserId=<?php echo $F_id; ?>"><?php echo $F_id;?></a> </div></td>
                         <td><div align="center"><?php echo $Name;?></div></td>
                         <td><div align="center"><?php echo $suspect_name ;?></div></td>
                         <td><div align="center"><?php echo $crime;?></div></td>
                         <td><div align="center"><?php echo $station;?></div></td>
                         <td><div align="center"><a  rel="facebox" title="Click To View Detail" href="update_progress.php?UserId=<?php echo $F_id; ?>">View Progress </a></div></td>
                         <td><div align="center"><?php echo $status;?></div></td>
                         <td><div align="center"><strong><a  href="edit_fir.php?id=<?php echo $F_id;?>"><img src="edit.png" /></a></strong></div></td>
                       <!--  <td><div align="center"><strong><a  href="delete_fir.php?id=<?php echo $F_id;?>"><img src="delete.png" /></a></strong></div></td> -->
                       </tr>
                       <?php } ?>
                     </tbody>
                   </table>
                   <!-- end slider -->
                 </div>

	
	
</div>

	
	
	</div>
    <!-- END of content -->
        
		
		
		
		
		
		<div class="cleaner"></div>

  </div> <!-- END of main -->
   <img src="images/bottom.png" /> 

</div>

</body>
</html>