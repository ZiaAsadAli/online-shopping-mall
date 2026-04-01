<?php 

$db_username        = 'root'; //MySql database username
$db_password        = ''; //MySql dataabse password
$db_name            = 'test'; //MySql database name
$db_host            = 'localhost'; //MySql hostname or IP

$item_per_page = 18;
$mysqli_conn = new mysqli($db_host, $db_username, $db_password,$db_name); //connect to MySql
if ($mysqli_conn->connect_error) {//Output any connection error
    die('Error : ('. $mysqli_conn->connect_errno .') '. $mysqli_conn->connect_error);
}
/*/// mysql connection
$con=mysql_connect('localhost','root','');
if (!$con){
	echo "its not ok";}
	$db=mysql_select_db('test',$con);
	if (!$db){
		echo "no database";}
		
		//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['aid']) || (trim($_SESSION['aid']) == '')) {
    header("location: ../index.php");
    exit();
}
$session_id=$_SESSION['aid'];
*/
		
		
?>