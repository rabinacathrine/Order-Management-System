<?php
include('connect.php');
	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"supplier/img/" . $_FILES["image"]["name"]);
			
			$location=$_FILES["image"]["name"];
			$roomid=$_POST['roomid'];
			
			if(!$update=mysql_query("UPDATE addproduct SET P_Image = '$location' WHERE P_Id='$roomid'")) {
			
				echo mysql_error();
				
				//echo ('cannot be update');
			}
			else{
			
			header("location: products.php");
			exit();
			}
			}
	}


?>