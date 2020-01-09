
<?php
session_start();
include('includes/config.php');
$oid=intval($_GET['oid']);
if(isset($_SESSION['username']))
{
	$sesss_u=$_SESSION['username'];
?>
<?php
	
	$xxee11=mysqli_query($con,"select * from customer where C_UserName='$sesss_u' ");// for customer id
	$res_ses = mysqli_fetch_array($xxee11);
	$res_fid=$res_ses['C_Id'];
	
	/*if (isset($oid=intval($_GET['oid']))
	
	$bill_sel=mysqli_query($con,"select * from order_detail_user where id='$oid'");
	$bill_fetch=mysqli_fetch_array($bill_sel);*/
	if(isset($_SESSION['oid']))
	{
		$fe_oid=$_SESSION['oid'];
	}

	$bill_sel=mysqli_query($con,"select * from order_detail_user where id='$oid'");
	$bill_fetch=mysqli_fetch_array($bill_sel);

?>


<html>
<head>
<script type="text/javascript">

	function bill_g()
		{
			//confirm("Do You Want To Print Invoice??");
			window.print();
		}
</script>



	<title>E-Shop</title>
	<style>
		th
		{			
			background-color:#999999;
			
		}
		
		
	</style>
</head>
<body onLoad="bill_g()">
<table width="1016" height="500"  cellspacing="0" border="2" align="center" bordercolordark="#000000">
  <tr>
  	<td height="110" colspan="6"><b><font size="26"><center><img src="../oms/includes/logo.PNG"></center></b> </td>
  </tr>
  <tr>
    <th width="170" height="43">Date</th>
    <td colspan="3"><?php  echo $bill_fetch['O_Date'];?></td>
	<th width="157" height="43">Payment Method</th>
    <td ><?php  echo $bill_fetch['paymentMethod'];?></td>
  </tr>
  <tr>
   <th width="170" height="43">Order-Id</th>
    <td colspan="3"><?php  echo $bill_fetch['O_Id'];?></td>
	<th width="157" height="43">Customer_Id</th>
    <td ><?php  echo $bill_fetch['C_Id'];?></td>
  </tr>
  <tr>
    <th width="170" height="43" >Name</th>
    <td colspan="5"><?php  echo $bill_fetch['C_Name'];?></td>
  </tr>
  <tr>
  	<th height="43" colspan="3" width="50">Product Name</th>
    <th width="157">Quantity</th>
    <th width="157">Unit Price</th>
    <th width="157">Amount</th>
  </tr>
  
   <?php
   $bill_sel=mysqli_query($con,"select * from order_detail_user where id='$oid'");
   $totl = 0;
   while($bill_fetch=mysqli_fetch_array($bill_sel))
   {
  // print_r($bill_fetch);
   ?>
   	 <tr>
    <td height="50" width="50" colspan="3" ><?php  echo $bill_fetch['P_Name'];?></td>
    <td><?php  echo $bill_fetch['P_Quantity'];?></td>
    <td><?php  echo $bill_fetch['P_Price'];?></td>
    <td><?php  echo $bill_fetch['T_Amount'];?></td>
	<?php
	$totl = $totl+$bill_fetch['T_Amount'];
	}
	?>
  </tr>
 
  <tr>
    <th height="43" colspan="5">Grand Total</th>
    <td><?php echo $totl;?></td>
  </tr>
  <tr>
      <td height="86" colspan="6" align="right" ><b><i>proprietary</i></b></td>
  </tr>
</table>
</body>
</html>
<?php 
	}
	else
	{
		header('location:index.php');
	}
?>