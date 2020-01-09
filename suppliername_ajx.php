<?php
//mysql_connect("localhost","root","");
//mysql_select_db("project");
include ("connect.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

	<?php
	if(isset($_REQUEST['copp']))
	{
		?>
		<option>Supplier Name</option>
		<?php
		$cp=$_REQUEST['copp'];
		$ss="select * from addproduct join supplier on addproduct.S_Id=supplier.S_ID where P_Id='$cp'";
		$qq=mysql_query($ss);
		
		while($ff=mysql_fetch_array($qq))
		{
		?>
		<option value="<?php echo $ff['S_Id']; ?>">
		<?php echo $ff['S_UserName']; ?>
		</option>
		
		<?php
		}
		}
		?>
	
</body>
</html>
