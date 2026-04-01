<!DOCTYPE HTML>
<?php 
session_start();
include"config.inc.php";



// Specify the query to execute
$result = $mysqli_conn->query("select * from user where name='".$_GET['name']."' ");

// Loop through each records 
while($row =$result->fetch_assoc())
{


$Name=$row['name'];
$Email=$row['email'];
$gen=$row['gender'];
$Addres=$row['address'];
$Cellno=$row['phone_no'];
$Saddres=$row['shp_address'];
$Date=$row['date'];




}
			?>
			
	<table class="Details table-striped table-responsive table-hover table-bordered table-condensed" border="" width="500">
						<tr>
								<td colspan="2"><h2>User's Details</h2></td>
						
							</tr>
						<tr>
								<td><span> Name </span></td>
								<td><?php echo $Name?></td>
						
							</tr>
						<tr>
								<td>Email</td>
								<td><?php echo $Email?></td> 

							</tr>
						<tr>
								<td>Gender</td>
								<td><?php echo $gen?></td> 

							</tr>
						<tr>
						  <td>Contact No</td>
						  <td><?php echo $Cellno?></td>
					  </tr>
					  <tr>
						  <td>Address</td>
						  <td><?php echo $Addres?></td>
					</tr>
					<tr>
						  <td>Shipping Address</td>
						  <td><?php echo $Saddres?></td>
					</tr>
						<tr>
						  <td>Registration Date</td>
						  <td><?php echo $Date?></td>
					 </tr>
						
						
					</table>