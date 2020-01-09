<?php
include('connect.php');
if($_GET['Id'])
{
$Id=$_GET['Id'];
 $sql = "DELETE from order_detail_user WHERE Id='$Id'";
 header("location: display_orderlist.php");
 mysql_query( $sql);
}

?>

 
