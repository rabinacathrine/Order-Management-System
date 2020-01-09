<?php
	include("connect.php");
	session_start();
	if($_SESSION['usr'])
	{
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
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

	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
	<link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
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
                                <span class="badge badge-important">5</span>
                            </a>
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

			<div class="sidebar-toggler hidden-phone"></div>	

			<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
			<div class="navbar-inverse">
				<form class="navbar-search visible-phone">
					<input type="text" class="search-query" placeholder="Search" />
				</form>
			</div>
			<!-- END RESPONSIVE QUICK SEARCH FORM -->
			<!-- BEGIN SIDEBAR MENU -->
            <ul class="sidebar-menu">
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"> <i class="icon-dashboard"></i></span> Dashboard
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="index_2.php">Home</a></li>
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
						<li><a class="" href="customer_detail.php">Customer Detail</a></li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
					    <span class="icon-box"> <i class="icon-book"></i></span>Suppiler
					    <span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="supplier-reg.php">Add Supplier</a></li>
						<li><a class="" href="supplier_detail.php">Supplier Detail</a></li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
					    <span class="icon-box"> <i class="icon-book"></i></span>Order
					    <span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="admin_order.php">Place Order</a></li>
						<li><a class="" href="Ao_detail.php">Order</a></li>
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
                <li class="has-sub active">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-file-alt"></i></span> Sample Pages
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="sidebar_closed.php">Sidebar Closed Page</a></li>
                        <li><a class="" href="coming_soon.php">Coming Soon</a></li>
                        <li><a class="" href="about_us.php">About Us</a></li>
                        <li class="active"><a class="" href="contact_us.php">Contact Us</a></li>
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
							Contact Us
							<small>contact us sample page</small>
						</h3>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                            </li>
                            <li>
                                <a href="#">Sample Pages</a> <span class="divider">&nbsp;</span>
                            </li>
                            <li><a href="#">Contact Us</a><span class="divider-last">&nbsp;</span></li>
                        </ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div id="page">
					<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN BASIC PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Contact Us</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
								</div>
								<div class="widget-body">
									<div id="gmap_basic" class="gmaps"></div>
                                    <div class="space20"></div>
                                    <!--BEGIN CONTACT US-->
                                    <div class="contact-us">
                                        <h3>Our Contacts</h3>
                                        <div class="row-fluid">
                                            <div class="span4">
                                                <h4>Location</h4>
                                                <p>Jonathon Smith <br>
                                                    House 16, Road 12, Sector 4<br>
                                                    Uttara Model Town, Dhaka 1230<br>
                                                    Phone: +966 1 000000<br>
                                                    Fax : 1234 5678 909</p>
                                            </div>
                                            <div class="span4">
                                                <h4>Online</h4>
                                                <p> <strong>Email :</strong> info@vectorlab.com <br>
                                                    <strong>Support :</strong> support@vectorlab.com<br>
                                                    <strong>Live Chat :</strong> live@vectorlab.com<br>
                                                    <strong>Skype :</strong> skype@vectorlab.com<br>
                                                    <strong>Fax :</strong> 1234 5678 909</p>
                                            </div>
                                            <div class="span4">
                                                <h4>Social Network</h4>
                                                <p>
                                                    <strong>Facebook :</strong> www.facebook.com/vectorlab1<br>
                                                    <strong>Twitter :</strong> www.twitter.com/vectorlab1<br>
                                                    <strong>Google + :</strong> www.googleplux.com/vectorlab1<br>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="space20"></div>
                                        <div class="row-fluid">
                                            <div class="feedback">
                                                <h3>Feedback</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                                                <div class="space20"></div>

                                                <form class="form-inline ">
                                                    <div class="control-group">
                                                        <input type="text" class="span12" placeholder="Name">
                                                    </div>
                                                    <div class="control-group ">
                                                        <input type="text" class="span6 one-half" placeholder="Email">
                                                        <input type="text" class="span6" placeholder="Phone">
                                                    </div>
                                                    <div class="control-group">
                                                        <textarea rows="5" class="span12" placeholder="Message"></textarea>
                                                    </div>
                                                    <div class="text-center">
                                                    <button type="submit" class="btn btn-info ">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--END CONTACT US-->
								</div>
							</div>
							<!-- END BASIC PORTLET-->
						</div>

					</div>

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
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/jquery.blockui.js"></script>
	<!-- ie8 fixes -->
	<!--[if lt IE 9]>
	<script src="js/excanvas.js"></script>
	<script src="js/respond.js"></script>
	<![endif]-->
	<script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
	<script src="assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
	<script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/scripts.js"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/demo.gmaps.js"></script>
	<script>
		jQuery(document).ready(function() {			
			// initiate layout and plugins
			App.init();
			DemoGMaps.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>