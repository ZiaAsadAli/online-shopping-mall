<?php 
session_start();

include "config.inc.php";

$Pname=$_POST['pname'];
$bname=$_POST['bname'];
$cname=$_POST['cname'];
$keyword=$_POST['keyword'];
$desc=$_POST['desc'];
$price=$_POST['price'];
$gen=$_POST['gen'];

///DIRECTORY FOR IMAGES


$img1=$_FILES['img1']['name'];
$img2=$_FILES['img2']['name'];
$img3=$_FILES['img3']['name'];

//temp file
$temp_name1=$_FILES['img1']['tmp_name'];
$temp_name2=$_FILES['img2']['tmp_name'];
$temp_name3=$_FILES['img3']['tmp_name'];


//adding in DIRECTORY 
move_uploaded_file($temp_name1,"images/$img1");
move_uploaded_file($temp_name2,"images/$img2");
move_uploaded_file($temp_name3,"images/$img3");

////random Code for Product

/*function genRndString($length = 10, $chars = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ')
{
    if($length > 0)
    {
        $len_chars = (strlen($chars) - 1);
        $the_chars = $chars{rand(0, $len_chars)};
        for ($i = 1; $i < $length; $i = strlen($the_chars))
        {
            $r = $chars{rand(0, $len_chars)};
            if ($r != $the_chars{$i - 1}) $the_chars .=  $r;
        }

        return $the_chars;
    }
}*/




////INSERT QUERY
         $mysqli_conn->query("INSERT INTO products_list(product_name, product_desc, 
					
					product_image, product_image1, product_image2,product_price, category, brands,gender,keyword,code,status)
					
					VALUES ('$Pname','$desc','$img1','$img2','$img3','$price','$cname','$bname','$gen','$keyword','Unautherized','Unautherized')");
					echo '<script type="text/javascript">alert("Product Added Successfully");window.location=\'addproduct.php\';</script>';
					
					
					?>
						