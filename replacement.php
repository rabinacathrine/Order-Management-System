<?php
session_start();
error_reporting(0);
include('includes/config.php');
// Code user Registration
if(isset($_POST['submit']))
{
$name=$_POST['cname'];
$pid=$_POST['productid'];
$pname=$_POST['pname'];
$pqty=$_POST['quantity'];
$oid=$_POST['orderid'];
$rdesc=$_POST['description'];
$query=mysqli_query($con,"insert into replacement(C_Name,P_Id,O_Id,P_Name,P_Quantity,R_Description) values('$name','$pid','$oid','$pname','$pqty','$rdesc')");
if($query)
{
	echo "<script>alert('query submitted successfully');</script>";
}
else{
echo "<script>alert('Not submitted something went worng');</script>";
}
}
// Code for User login
/*if(isset($_POST['login']))
{
   $email=$_POST['email'];
   $password=md5($_POST['password']);
$query=mysqli_query($con,"SELECT * FROM customer WHERE C_Email='$email' and C_PassWord='$password'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="my-cart.php";
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['C_Id'];
$_SESSION['username']=$num['C_UserName'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($con,"insert into userlog(userEmail,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$extra="login.php";
$email=$_POST['email'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
$log=mysqli_query($con,"insert into userlog(userEmail,userip,status) values('$email','$uip','$status')");
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
$_SESSION['errmsg']="Invalid email id or Password";
exit();
}
}
*/

?>
<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Replacement</title>
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="assets/css/config.css">
		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="assets/images/favicon.ico">
	</head>
    <body class="cnt-home">
	
<header class="header-style-1">

	<!-- ============================================== TOP MENU ============================================== -->
<?php include('includes/top-header.php');?>
<!-- ============================================== TOP MENU : END ============================================== -->
<?php include('includes/main-header.php');?>
	<!-- ============================================== NAVBAR ============================================== -->
<?php include('includes/menu-bar.php');?>
<!-- ============================================== NAVBAR : END ============================================== -->

</header>
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Replacement</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
	<div class="container">
		<div class="track-order-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12">
	<h2>Replacement</h2>
	<span class="title-tag inner-top-vs">Please enter your Order ID in the box below and press Enter. This was given to you on your receipt and in the confirmation email you should have received. </span>
	
	<form class="register-form outer-top-xs" role="form" method="post" name="submit" onSubmit="return valid();">
	<?php
	$sql=mysqli_query("select* from customer,order_detail_user where C_Id=$sess_u");
	$row=mysqli_fetch_array($con,$sql);
	
		
	?>
<div class="form-group">
	    	<label class="info-title" for="cname">Name <span>*</span></label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="cname" name="cname" value="<?php echo $row['C_UserName'];?>">
	  	</div>


		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">product Id <span>*</span></label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="pid" name="piroductd" required >
	    	       <span id="user-availability-status1" style="font-size:12px;"></span>
	  	</div>

<div class="form-group">
	    	<label class="info-title" for="product name">Product Name <span>*</span></label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="pname" name="pname" maxlength="10" required >
	  	</div>

<div class="form-group">
	    	<label class="info-title" for="product quantity">Product qty <span>*</span></label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="quantity" name="quantity"  required >
	  	</div>

<div class="form-group">
	    	<label class="info-title" for="orderid">Order Id. <span>*</span></label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="orderid" name="orderid" required >
	  	</div>
	  		<div class="form-group">
		    <label class="info-title" for="exampleOrderId1">Description</label>
		    <input type="text" class="form-control unicase-form-control text-input" name="description" id="description" >
		</div>
	  	<button type="submit" name="submit" class="btn-upper btn btn-primary checkout-page-button">Submit</button>
	</form>	
</div>			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div 

<?php echo include('includes/brands-slider.php');?>
</div>
</div>
<?php include('includes/footer.php');?>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
</html>

