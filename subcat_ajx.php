<?php
mysql_connect("localhost","root","");
mysql_select_db("project");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Subcat</title>
</head>

<body>

	<?php
	if(isset($_REQUEST['cop']))
	{
		?>
		<option>--SELECT SUB-CATEGORY--</option>
		<?php
		$c=$_REQUEST['cop'];
		$ss="select * from subcategory where Cat_Id='$c'";
		$qq=mysql_query($ss);
		while($ff=mysql_fetch_array($qq))
		{
		?>
		<option value="<?php echo $ff['Scat_Id']; ?>">
		<?php echo $ff['Scat_Name']; ?>
		</option>
		
		<?php
		}
		}
		?>
	
</body>
</html>
