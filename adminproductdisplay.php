<?php
	include("connect.php");
	
?>
<?php
	if(isset($_REQUEST['osave']))
	{
		
		$aoq=$_REQUEST['aoq'];
		$aoa=$aoq*$aop;
		$ao=mysql_query("insert into adminorder ()");
	}
?>
<!DOCTYPE html>
<!--
Template Name: Admin Lab Dashboard build with Bootstrap v2.3.1
Template Version: 1.2
Author: Mosaddek Hossain
Website: http://thevectorlab.net/
-->

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<!-----sub category------->
<script type="text/javascript">
function cht(a)
{
	alert(a);
	var x;
	if(window.XMLHttpRequest)
	{
		x=new XMLHttpRequest();
	}
	else if(window.ActiveXObject)
	{
		x=new ActiveXObject("Microsoft.XMLHTTP");
	}
	x.open("GET","subcat_ajx.php?cop="+a,true);
	x.send(null);
	
	x.onreadystatechange=function()
	{
		if(x.readyState==4)
		{
			document.getElementById('st1').innerHTML=x.responseText;
		}
	}
}


</script><!-----sub category end------->

<!-----product Name------->
<script type="text/javascript">
function chpp(a)
{
	alert(a);
	var x;
	if(window.XMLHttpRequest)
	{
		x=new XMLHttpRequest();
	}
	else if(window.ActiveXObject)
	{
		x=new ActiveXObject("Microsoft.XMLHTTP");
	}
	x.open("GET","pro_ajx.php?copp="+a,true);
	x.send(null);
	
	x.onreadystatechange=function()
	{
		if(x.readyState==4)
		{
			document.getElementById('pro').innerHTML=x.responseText;
		}
	}
}


</script><!-----product name end------->

<!-----suppile Name------->

<script type="text/javascript">
function chptt(a)
{
	alert(a);
	var x;
	if(window.XMLHttpRequest)
	{
		x=new XMLHttpRequest();
	}
	else if(window.ActiveXObject)
	{
		x=new ActiveXObject("Microsoft.XMLHTTP");
	}
	x.open("GET","suppliername_ajx.php?copp="+a,true);
	x.send(null);
	
	x.onreadystatechange=function()
	{
		if(x.readyState==4)
		{
			document.getElementById('sna').innerHTML=x.responseText;
		}
	}
}


</script><!-----suppier name end------->

<!-----product price------->
<script type="text/javascript">
function pp(a)
{
	alert(a);
	var x;
	if(window.XMLHttpRequest)
	{
		x=new XMLHttpRequest();
	}
	else if(window.ActiveXObject)
	{
		x=new ActiveXObject("Microsoft.XMLHTTP");
	}
	x.open("GET","productprice_ajx.php?pp="+a,true);
	x.send(null);
	
	x.onreadystatechange=function()
	{
		if(x.readyState==4)
		{
			document.getElementById('p_p').innerHTML=x.responseText;
		}
	}
}
</script>

<!-----product price   end------->

	<meta charset="utf-8" />
	<title>Stock Tracking &amp; Complience Application</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/style_responsive.css" rel="stylesheet" />
	<link href="css/style_default.css" rel="stylesheet" id="style_color" />

	<link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
	<link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
	<!-- BEGIN HEADER -->
	<div id="header" class="navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="index.php">
				    <img src="img/logo.png" alt="Admin Lab" />
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="arrow"></span>
				</a>
				<!-- END RESPONSIVE MENU TOGGLER -->
				<div id="top_menu" class="nav notify-row">
                    <!-- BEGIN NOTIFICATION -->
					<ul class="nav top-menu">
                        <!-- BEGIN SETTINGS -->
                        <li class="dropdown">
                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Settings">
                                <i class="icon-cog"></i>
                            </a>
                        </li>
                        <!-- END SETTINGS -->
                        <!-- BEGIN INBOX DROPDOWN -->
                        <li class="dropdown" id="header_inbox_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-envelope-alt"></i>
                                <span class="badge badge-important">5</span>                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <li>
                                    <p>You have 5 new messages</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Dulal Khan</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is an example messages please check
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Rafiqul Islam</span>
									<span class="time">10 mins</span>
									</span>
									<span class="message">
									 Hi, Mosaddek Bhai how are you ?
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Sumon Ahmed</span>
									<span class="time">3 hrs</span>
									</span>
									<span class="message">
									    This is awesome dashboard templates
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Dulal Khan</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is an example messages please check
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">See all messages</a>
                                </li>
                            </ul>
                      </li>
                        <!-- END INBOX DROPDOWN -->
						<!-- BEGIN NOTIFICATION DROPDOWN -->
						<li class="dropdown" id="header_notification_bar">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">

							<i class="icon-bell-alt"></i>
							<span class="badge badge-warning">7</span>
							</a>
							<ul class="dropdown-menu extended notification">
								<li>
									<p>You have 7 new notifications</p>
								</li>
								<li>
									<a href="#">
									<span class="label label-important"><i class="icon-bolt"></i></span>
									Server #3 overloaded.
									<span class="small italic">34 mins</span>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="label label-warning"><i class="icon-bell"></i></span>
									Server #10 not respoding.
									<span class="small italic">1 Hours</span>
									</a>
								</li>
                                <li>
                                    <a href="#">
                                        <span class="label label-important"><i class="icon-bolt"></i></span>
                                        Database overloaded 24%.
                                        <span class="small italic">4 hrs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-success"><i class="icon-plus"></i></span>
                                        New user registered.
                                        <span class="small italic">Just now</span>
                                    </a>
                                </li>
								<li>
									<a href="#">
									<span class="label label-info"><i class="icon-bullhorn"></i></span>
									Application error.
									<span class="small italic">10 mins</span>
									</a>
								</li>
								<li>
									<a href="#">See all notifications</a>
								</li>
							</ul>
						</li>
						<!-- END NOTIFICATION DROPDOWN -->

					</ul>
                </div>
                    <!-- END  NOTIFICATION -->
                <div class="top-nav ">
                    <ul class="nav pull-right top-menu" >
                        <!-- BEGIN SUPPORT -->
                        <li class="dropdown mtop5">

                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Chat">
                                <i class="icon-comments-alt"></i>
                            </a>
                        </li>
                        <li class="dropdown mtop5">
                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Help">
                                <i class="icon-headphones"></i>
                            </a>
                        </li>
                        <!-- END SUPPORT -->
						<!-- BEGIN USER LOGIN DROPDOWN -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="img/avatar1_small.jpg" alt="">
                                <span class="username">
								<?php
								if(isset($_SESSION['usr']))
								{
									echo "Welcome ".$_SESSION['usr'];
								}
								?>
								</span>
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-user"></i> My Profile</a></li>
								<li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
								<li><a href="#"><i class="icon-calendar"></i> Calendar</a></li>
								<li class="divider"></li>
								<li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
							</ul>
						</li>
						<!-- END USER LOGIN DROPDOWN -->
					</ul>
					<!-- END TOP NAVIGATION MENU -->
				</div>
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div id="container" class="row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div id="sidebar" class="nav-collapse collapse">
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			<div class="sidebar-toggler hidden-phone"></div>
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

			<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
			<div class="navbar-inverse">
				<form class="navbar-search visible-phone">
					<input type="text" class="search-query" placeholder="Search" />
				</form>
			</div>
			<!-- END RESPONSIVE QUICK SEARCH FORM -->
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="sidebar-menu">
				<li class="has-sub active">
					<a href="javascript:;" class="">
					    <span class="icon-box"> <i class="icon-dashboard"></i></span> Dashboard
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li class="active"><a class="" href="index_2.php">Dashboard 1</a></li>
                    </ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
					    <span class="icon-box"> <i class="icon-book"></i></span>Category
					    <span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="add-category.php">Add Category</a></li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
					    <span class="icon-box"> <i class="icon-book"></i></span>Customer
					    <span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="customer-reg.php">Add Customer</a></li>
						<li><a class="" href="#">Block Customer</a></li>
						<li><a class="" href="#">Verify/Monitor Customer</a></li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
					    <span class="icon-box"> <i class="icon-book"></i></span>Supplier
					    <span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="supplier-reg.php">Add Supplier</a></li>
						<li><a class="" href="#">Block Supplier</a></li>
						<li><a class="" href="#">Verify/Monitor Supplier</a></li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
					    <span class="icon-box"> <i class="icon-book"></i></span>Order
					    <span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="admin_order.php">Place Order</a></li>
						
					</ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
					<span class="icon-box"><i class="icon-cogs"></i></span> Components
					<span class="arrow"></span>
					</a>
					<ul class="sub">
                        <li><a class="" href="calendar.php">Calendar</a></li>
                        <li><a class="" href="messengers.php">Conversations</a></li>
                        <li><a class="" href="gallery.php"> Gallery</a></li>
                    </ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
					<span class="icon-box"><i class="icon-file-alt"></i></span> Sample Pages
					<span class="arrow"></span>
					</a>
                    <ul class="sub">
                        <li><a class="" href="sidebar_closed.php">Sidebar Closed Page</a></li>
                        <li><a class="" href="coming_soon.php">Coming Soon</a></li>
                        <li><a class="" href="about_us.php">About Us</a></li>
                        <li><a class="" href="contact_us.php">Contact Us</a></li>
                    </ul>
				</li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-glass"></i></span> Extra
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="lock.php">Lock Screen</a></li>
                        <li><a class="" href="profile.php">Profile</a></li>
                        <li><a class="" href="invoice.php">Invoice</a></li>
                        <li><a class="" href="pricing_tables.php">Pricing Tables</a></li>
                        <li><a class="" href="faq.php">FAQ</a></li>
                        
                    </ul>
                </li>
				<li><a class="" href="logout.php"><span class="icon-box"><i class="icon-user"></i></span> Login Page</a></li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div id="main-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN THEME CUSTOMIZER-->
						<div id="theme-change" class="hidden-phone">
							<i class="icon-cogs"></i>
							<span class="settings">
                                <span class="text">Theme:</span>
                                <span class="colors">
                                    <span class="color-default" data-style="default"></span>
                                    <span class="color-gray" data-style="gray"></span>
                                    <span class="color-purple" data-style="purple"></span>
                                    <span class="color-navy-blue" data-style="navy-blue"></span>
                                </span>
							</span>
						</div>
						<!-- END THEME CUSTOMIZER-->
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
							ADMIN
							<small> ORDER </small>
						</h3>
						<ul class="breadcrumb">
							<li>
                                <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
							</li>
                            <li>
                                <a href="#">Admin Lab</a> <span class="divider">&nbsp;</span>
                            </li>
							<li><a href="#">Order</a><span class="divider-last">&nbsp;</span></li>
                            <li class="pull-right search-wrap">
                                <form class="hidden-phone">
                                    <div class="search-input-area">
                                        <input id=" " class="search-query" type="text" placeholder="Search">
                                        <i class="icon-search"></i>
                                    </div>
                                </form>
                            </li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid circle-state-overview">
				<form method="post" class="form-horizontal">
								<div class="control-group">
                                    <label class="control-label">Category</label>
                                    <div class="controls">
										<select class="input-xlarge" name="aoc" onChange="return cht(this.value)" >
											<option>Category</option>
										<?php
											$cn=mysql_query("select * from category");
											while($cf=mysql_fetch_array($cn))
											{
										 ?> 
										 	<option value="<?php echo $cf['Cat_Id']; ?>">
												<?php echo $cf['Cat_Name']; ?>
											</option>
										 <?php
										 	}
										 ?>
										 </select>
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label">Sub-Category</label>
                                    <div class="controls">
										<select class="input-xlarge" name="st1" id="st1" onChange="chpp(this.value)">
										<option>--SELECT SUB-CATEGORY--</option>
										 </select>
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label">Product Name</label>
                                    <div class="controls">
										<select class="input-xlarge" name="aopn" id="pro" onChange="return chptt(this.value)">
											<option>--SELECT PRODUCT-NAME--</option>
										
										 </select>
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
								 <div class="control-group">
                                    <label class="control-label">Supplier Name</label>
                                    <div class="controls">
										<select class="input-xlarge" name="aosp" id="sna" onChange="return pp(this.value)" >
											<option>Supplier Name</option>
										
										 </select>
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label">Price</label>
                                    <div class="controls">
										<input type="text" class="input-xlarge" name="aop" id="p_p"  />
										
										</input>
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label">Quantity</label>
                                    <div class="controls">
                                        <input type="text"  class="input-mini" name="aoq" />
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" name="osave" value="SAVE"></input>
                                    <input type="reset" name="ocancle" value="CANCLE"></input>
                                </div>
                            </form>
						
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div id="footer">
		PITNEY SOFTECH| Designed By:- Kashyap Sheladiya & Parth Kakadiya
		<div class="span pull-right">
			<span class="go-top"><i class="icon-arrow-up"></i></span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS -->
	<!-- Load javascripts at bottom, this will reduce page load time -->
	<script src="js/jquery-1.8.3.min.js"></script>
	<script src="assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/jquery.blockui.js"></script>
	<script src="js/jquery.cookie.js"></script>
	<!-- ie8 fixes -->
	<!--[if lt IE 9]>
	<script src="js/excanvas.js"></script>
	<script src="js/respond.js"></script>
	<![endif]-->
	<script src="assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
	<script src="assets/jquery-knob/js/jquery.knob.js"></script>
	<script src="assets/flot/jquery.flot.js"></script>
	<script src="assets/flot/jquery.flot.resize.js"></script>

    <script src="assets/flot/jquery.flot.pie.js"></script>
    <script src="assets/flot/jquery.flot.stack.js"></script>
    <script src="assets/flot/jquery.flot.crosshair.js"></script>

	<script src="js/jquery.peity.min.js"></script>
	<script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
	<script src="js/scripts.js"></script>
	<script>
		jQuery(document).ready(function() {
			// initiate layout and plugins
			App.setMainPage(true);
			App.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>

