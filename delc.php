<?php
include('connect.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "DELETE from category WHERE Cat_Id='$id'";
 header("location: category.php");
 mysql_query( $sql);
}

?>

 
