<?php
	include('connect.php');
	$roomid = $_POST['roomid'];
	$type=$_POST['P_Name'];
	$rate=$_POST['P_Price'];
	$description=$_POST['P_Description'];
	mysql_query("UPDATE addproduct SET P_Name='$type', P_Price='$rate', P_Description='$description' WHERE P_Id='$roomid'");
	header("location: products.php");
?>