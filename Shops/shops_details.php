<!DOCTYPE HTML>
<?php 
session_start();
include"config.inc.php";



// Specify the query to execute
$result = $mysqli_conn->query("select * from shops where brand_name='".$_GET['bname']."' ");

// Loop through each records 
while($row =$result->fetch_assoc())
{


$Name=$row['brand_name'];
$Oname=$row['o_name'];
$Email=$row['email'];
$Addres=$row['address'];
$Cellno=$row['phn_no'];
$addby=$row['add_by'];
$Date=$row['date'];




}
			?>
			
	<table class="Details table-striped table-responsive table-hover table-bordered table-condensed" border="" width="500">
						<tr>
								<td colspan="2"><h2>Shop's Details</h2></td>
						
							</tr>
						<tr>
								<td><span>Brand's Name </span></td>
								<td><?php echo $Name?></td>
						
							</tr>
						<tr>
								<td>Owner Name</td>
								<td><?php echo $Oname?></td> 

							</tr>
						<tr>
								<td>Email</td>
								<td><?php echo $Email?></td> 

							</tr>
						<tr>
						  <td>Contact No</td>
						  <td><?php echo $Cellno?></td>
					  </tr>
					  <tr>
						  <td>Owner Address</td>
						  <td><?php echo $Addres?></td>
					</tr>
						<tr>
						  <td>Registered By</td>
						  <td><?php echo $addby?></td>
						  </tr>
						<tr>
						  <td>Registration Date</td>
						  <td><?php echo $Date?></td>
					 </tr>
						
						
					</table>