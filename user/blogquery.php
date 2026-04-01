<?php

include "config.inc.php";




$img1=$_FILES['img1']['name'];
$temp_name1=$_FILES['img1']['tmp_name'];
move_uploaded_file($temp_name1,"images/$img1");



$name=$_POST['name'];
$desc=$_POST['desc'];
$date=date('M-d-Y');

////INSERT QUERY
         $mysqli_conn->query("INSERT INTO blog(addby,title,date,description,pic)
					
					VALUES ('Admin','$name','$date','$desc','$img1')");
					echo '<script type="text/javascript">alert("Post Added Successfully");window.location=\'addblog.php\';</script>';



?>