<?php

session_start(); 
include("config.inc.php"); 


if(!empty($_GET["id"])) {
	$result = $mysqli_conn->query("DELETE FROM user WHERE id=".$_GET["id"]);
	if(!empty($result)){
		echo '<script type="text/javascript">alert("User Deleted Successfully");window.location=\'user_view.php\';</script>';
	}
}

?>