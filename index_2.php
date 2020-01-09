<?php
include("connect.php");
session_start();
if($_SESSION['usr'])
{
?>

	<?php
	
		$sel_new_usr=mysql_query("select count(C_Id) as cou_usr from customer ");
		$fet_new_usr=mysql_fetch_array($sel_new_usr);	//count new user	
		
	?>
	
	<?php
		$yt=date('Y');
		$mt=date('m');
		
		$sdate = $yt."-".$mt."-".'01';
		$edate = $yt."-".$mt."-".'31';
		$sel_sales=mysql_query("select sum(T_Amount) as tot_sales from order_detail_user  where O_Date BETWEEN '$sdate' and '$edate'");
		$fet_sals=mysql_fetch_array($sel_sales);//total amount of sales
	
	?>
	
	<?php 
		$sel_ordlist=mysql_query("select count(Id) as new_ord from order_detail_user  ");
		$fet_ordlist=mysql_fetch_array($sel_ordlist);
		
		if(isset($_REQUEST['o_sts']))
		{
			$or_st=$_REQUEST['o_sts'];
			$sel_st=mysql_query("select * from order_detail_user where Id=$or_st ");
			$fetch_st1=mysql_fetch_array($sel_st);
			echo $fetch_st1['Order_Status'];
			if($fetch_st1['Order_Status']=='pending')
			{
				$up_uq=mysql_query("update order_detail_user set Order_Status='conform' where Id=$or_st");
				header("location:index_2.php");
			}
			else
			{
				$up_uq=mysql_query("update order_detail_user set Order_Status='pending' where Id=$or_st");
				header("location:index_2.php");
			}
		}
		
		if(isset($_REQUEST['sts']))
		{
			$pn_st=$_REQUEST['sts'];
			$sels_st=mysql_query("select * from order_detail_user where Id=$pn_st ");
			$fetch_st2=mysql_fetch_array($sels_st);
			if($fetch_st2['Pay_Status']=='not paid')
			{
				$up_uq=mysql_query("update order_detail_user set Pay_Status='paid' where Id=$pn_st");
				header("location:index_2.php");
			}
			else
			{
				$up_uq=mysql_query("update order_detail_user set Pay_Status='not paid' where Id=$pn_st");
				header("location:index_2.php");
			}
		}
	?>
	
	<?php
		$sel_rq=mysql_query("select * from  replacement where R_status='pending' ");
		
		if(isset($_REQUEST['r_sts']))
		{
			$rq_st=$_REQUEST['r_sts'];
			$sel_rq=mysql_query("select * from replacement where R_Id=$rq_st ");
			$fetch_rq1=mysql_fetch_array($sel_rq);
			echo $fetch_rq1['R_status'];
			if($fetch_rq1['R_status']=='pending')
			{
				$up_uq=mysql_query("update replacement set R_status='conform' where R_Id=$rq_st");
				header("location:index_2.php");
			}
			else
			{
				$up_uq=mysql_query("update repalcement set R_status='pending' where R_Id=$rq_st");
				header("location:index_2.php");
			}
		}		
		
		
	?>
	
	
	<?php
	
		/*$s_date=date_create(date('Y-m-d'));
		
			
		$sels_st1=mysql_query("select * from order_detail_user");
		while($fetch_st3=mysql_fetch_array($sels_st1))
		{
			$id = $fetch_st3['Id'];
			$due = $fetch_st3['Due_Date'];
			$date=date_create($due);
			$diff=date_diff($s_date,$date);
			echo $difc = $diff->format("%R%a");
			if($difc<0)
				{
					date_add($date,date_interval_create_from_date_string("10 days"));
					$due_mm=date_format($date,"Y-m-d");
					$nt_amnt=($fetch_st3['T_Amount']*0.10)+$fetch_st3['T_Amount'];
					echo $up_ord="update order_detail_user set Due_Date='$due_mm',T_amount='$nt_amnt',Last_Due_Date='$due' where Id = '$id'";
					mysql_query($up_ord);
				}
		}	*/	
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
                        <li class="active"><a class="" href="index_2.php">Home</a></li>
                    </ul>
				</li>
				<li class="has-sub ">
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
					    <span class="icon-box"> <i class="icon-book"></i></span>Supplier
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
						<li><a class="" href="Ao_detail.php">Order Detail</a></li>
					
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
				<!--<li class="has-sub">
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
				</li>-->
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
							Dashboard
							<small> General Information </small>
						</h3>
						<ul class="breadcrumb">
							<li>
                                <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
							</li>
                            <li>
                                <a href="#">Admin Lab</a> <span class="divider">&nbsp;</span>
                            </li>
							<li><a href="#">Dashboard</a><span class="divider-last">&nbsp;</span></li>
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
				<div id="page" class="dashboard">
                    <!-- BEGIN OVERVIEW STATISTIC BLOCKS-->
                    <div class="row-fluid circle-state-overview">
                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-user turquoise-color"></i>
                                    </div>
                                   <!-- <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="<?php echo $fet_new_usr['cou_usr']*0.1 ?>" data-fgColor="#4CC5CD" data-bgColor="#ddd">-->
                                </div>
                                <div class="details">
                                    <div class="number">
									<?php echo $fet_new_usr['cou_usr']; ?>
									</div>
                                    <div class="title"><br><br>New Users</div>
                                </div>

                            </div>
                        </div>
                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-tags red-color"></i>
                                    </div>
                                    <!--<input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="<?php echo $fet_sals['tot_sales']*0.00001?>" data-fgColor="#e17f90" data-bgColor="#ddd"/>-->
                                </div>
                                <div class="details">
                                    <div class="number"><?php echo $fet_sals['tot_sales'];?></div>
                                    <div class="title"><br><br>Sales</div>
                                </div>

                            </div>
                        </div>


                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-shopping-cart green-color"></i>
                                    </div>
                                   <!-- <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="<?php echo $fet_ordlist['new_ord']*0.001 ?>" data-fgColor="#a8c77b" data-bgColor="#ddd"/>-->
                                </div>
                                <div class="details">
                                    <div class="number">
									<?php echo $fet_ordlist['new_ord'];  ?>
									</div>
                                    <div class="title"><br><br>New Orders</div>
                                </div>

                            </div>
                        </div>

                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-comments-alt gray-color"></i>
                                    </div>
                                   <!-- <input class="knob"  data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="15"  data-fgColor="#b9baba" data-bgColor="#ddd"/>-->
                                </div>
                                <div class="details">
                                    <div class="number">387</div>
                                    <div class="title"><br><br>Replacement</div>
                                </div>

                            </div>
                        </div>

                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-eye-open purple-color"></i>
                                    </div>
                                   <!-- <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="45" data-fgColor="#c8abdb" data-bgColor="#ddd"/>-->
                                </div>
                                <div class="details">
                                    <div class="number" >+987</div>
                                    <div class="title"><br><br>Unique Visitor</div>
                                </div>

                            </div>
                        </div>


                        
                    </div>
                    <!-- END OVERVIEW STATISTIC BLOCKS-->

					<div class="row-fluid">
						<div class="span8">
							<!-- BEGIN SITE VISITS PORTLET-->
							<!--<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-bar-chart"></i> Line Chart</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
								</div>
								<div class="widget-body">
									<div id="site_statistics_loading">
										<img src="img/loading.gif" alt="loading" />
									</div>
									<div id="site_statistics_content" class="hide">
										<div id="site_statistics" class="chart"></div>
									</div>
								</div>
							</div>
							<!-- END SITE VISITS PORTLET-->
						</div>
                        <div class="span4">
                            <!-- BEGIN SERVER LOAD PORTLET-->
                           <!-- <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-umbrella"></i> Live Chart</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <div id="load_statistics_loading">
                                        <img src="img/loading.gif" alt="loading" />
                                    </div>
                                    <div id="load_statistics_content" class="hide" style="margin: 0px 0 20px 0">
                                        <div id="load_statistics" class="chart" style="height: 280px"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- END SERVER LOAD PORTLET-->
                        </div>

					</div>
					<!-- BEGIN SQUARE STATISTIC BLOCKS-->
                    <div class="square-state">
                        <div class="row-fluid">
                            <a class="icon-btn span2" href="customer _detail.php">
                                <i class="icon-group"></i>
                                <div>Users</div>
                                <span class="badge badge-important">2</span>
                            </a>
                            <a class="icon-btn span2" href="products.php">
                                <i class="icon-barcode"></i>
                                <div>Products</div>
                                <span class="badge badge-success"><?php 
								$query=mysql_query("select P_Id as totp from addproduct");
								$result=mysql_fetch_array($query);
								echo $result['totp'];?>
								</span>
                            </a>
                            <a class="icon-btn span2" href="#">
                                <i class="icon-bar-chart"></i>
                                <div>Reports</div>
                            </a>
                            <!--<a class="icon-btn span2" href="#">
                                <i class="icon-calendar"></i>
                                <div>Calendar</div>
                            </a>-->
                            <a class="icon-btn span2" href="category.php">
                                <i class="icon-sitemap"></i>
                                <div>Categories</div>
								<span class="badge badge-important"><?php
								
								$query=mysql_query("select Cat_Id as totc from category");
								$result=mysql_fetch_array($query);
								echo $result['totc'];
								//echo count('totc');
								//echo count_total_category($connect);?></span>
                            </a>
                           <!-- <a class="icon-btn span2" href="#">
                                <i class="icon-tasks"></i>
                                <div>Task</div>
                                <span class="badge badge-important">3</span>
                            </a>-->
                       <!-- </div>-->
                        <!--<div class="row-fluid">-->
                            <a class="icon-btn span2" href="#">
                                <i class="icon-envelope"></i>
                                <div>Inbox</div>
                                <span class="badge badge-info">12</span>
                            </a>
                            <a class="icon-btn span2" href="#">
                                <i class="icon-bullhorn"></i>
                                <div>Notification</div>
                                <span class="badge badge-warning">3</span>
                            </a>
                            <!--<a class="icon-btn span2" href="#">
                                <i class="icon-plane"></i>
                                <div>Projects</div>
                                <span class="badge badge-info">21</span>
                            </a>-->
                           <!-- <a class="icon-btn span2" href="#">
                                <i class="icon-money"></i>
                                <div>Finance</div>
                            </a>
                            <a class="icon-btn span2" href="#">
                                <i class="icon-thumbs-up"></i>
                                <div>Feedback</div>
                                <span class="badge badge-info">2</span>
                            </a>
                            <a class="icon-btn span2" href="#">
                                <i class="icon-wrench"></i>
                                <div>Settings</div>
                            </a>
                        </div>-->
                    </div>
                    <!-- END SQUARE STATISTIC BLOCKS-->
					<div class="row-fluid">
                        <div class="span12">
                            <!-- BEGIN RECENT ORDERS PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-tags"></i> Recent Order List</h4>
                                        <span class="tools">
                                        <a href="javascript:;" class="icon-chevron-down"></a>
                                        <a href="javascript:;" class="icon-remove"></a>
                                        </span>
                                </div>
                                <div class="widget-body">
                                    <table class="table table-striped table-bordered table-advance table-hover" border="1" >
                                        
                                        <tr>
											<th><i class="icon-leaf"></i> <span class="hidden-phone">Oreder Id.</span></th>
                                            <th> <span class="hidden-phone">From</span></th>
											<th><span  class="hidden-phone">product</span></th>
											<th><span  class="hidden-phone">Quantity</span></th>
                                            <th><i class="icon-user"></i> <span class="hidden-phone ">Name</span></th>
                                            <th><i class="icon-tags"> </i><span class="hidden-phone">Amount</span></th>
											<th>Order_Status</th>
                                            
                                        </tr>
										
                                        <tbody>
										<?php 
											error_reporting(0);
										    $sel_ord=mysql_query("select * from order_detail_user where Pay_Status='not paid' or Order_Status='pending'  ");
											while($exe_ord=mysql_fetch_array($sel_ord))
											{
										?>
                                        <tr>
											<td><?php echo $exe_ord['Id'];?></td>
                                            <td ><?php echo $exe_ord['C_city']; ?></td>
											<td><?php echo $exe_ord['P_Name'];?></td>
											<td><?php echo $exe_ord['P_Quantity']; ?></td>
                                            <td><?php echo $exe_ord['C_Name']; ?></td>											
                                            <td><?php echo $exe_ord['T_Amount']; ?>
                                                <span class="label label-success label-mini"><a style="text-decoration:none;" href="index_2.php?sts=<?php echo $exe_ord['Id']; ?>"><?php echo $exe_ord['Pay_Status']; ?> </a></span>
                                                
                                            </td>
                                            <td>
											<span class="label label-success label-mini"><a style="text-decoration:none;" href="index_2.php?o_sts=<?php echo $exe_ord['Id'];?>"><?php echo $exe_ord['Order_Status']; ?></a></span>
											</td>
                                        </tr>
										<?php  } ?>
                                        
                                        </tbody>
                                    </table>
                                    <div class="space7"></div>
                                    <div class="clearfix">
                                        <a href="display_orderlist.php" class="btn btn-mini pull-right">All Orders</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END RECENT ORDERS PORTLET-->
                        </div>
						<div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-tags"></i> Replacement List</h4>
                                        <span class="tools">
                                        <a href="javascript:;" class="icon-chevron-down"></a>
                                        <a href="javascript:;" class="icon-remove"></a>
                                        </span>
                                </div>
                                <div class="widget-body">
                                    <table class="table table-striped table-bordered table-advance table-hover" border="1" >
                                        
                                        <tr>
											<th><i class="icon-leaf"></i> <span class="hidden-phone">R_Id.</span></th>
                                            <th> <span class="hidden-phone">Customer_Name</span></th>
											<th><span  class="hidden-phone">Order_Id</span></th>
											<th><span  class="hidden-phone">Product_Id</span></th>
											<th><span  class="hidden-phone">Product_Name</span></th>
											<th><span  class="hidden-phone">Product_Quantity</span></th>
											<th><span  class="hidden-phone">Product_description</span></th>
                                            <!--<th><i class="icon-user"></i> <span class="hidden-phone ">Q_Msg</span></th>-->
                                            <th><i class="icon-tags"> </i><span class="hidden-phone">R_Status</span></th>
											
                                            
                                        </tr>
										
                                        <tbody>
										<?php 
											error_reporting(0);
											while($fetch_rq=mysql_fetch_array($sel_rq))
											{
										?>
                                        <tr>
											<td><?php echo $fetch_rq['R_Id'];?></td>
                                            <td ><?php echo $fetch_rq['C_Name']; ?></td>
											<td><?php echo $fetch_rq['O_Id'];?></td>
											<td><?php echo $fetch_rq['P_Id']; ?></td>
                                            <td><?php echo $fetch_rq['P_Name']; ?></td>	
											<td><?php echo $fetch_rq['P_Quantity']; ?></td>
											<td><?php echo $fetch_rq['R_Description']; ?></td>
                                            <td>
                                            <span class="label label-success label-mini"><a style="text-decoration:none;" href="index_2.php?q_sts=<?php echo $fetch_rq['R_Id'];?>"><?php echo $fetch_rq['R_status']; ?></a></span>
											</td>
                                        </tr>
										<?php
										  } 
										?>
                                        
                                        </tbody>
                                    </table>
                                    <div class="space7"></div>
                                    <div class="clearfix">
                                        <a href="display_orderlist.php" class="btn btn-mini pull-right">All Orders</a>
                                    </div>
                                </div>
                            </div>

					</div>
					
					 <div class="widget-body">
					 <div class="widget-title">
                                    <h4><i class="icon-tags"></i> Over Due-Date Order List</h4>
                                        <span class="tools">
                                        <a href="javascript:;" class="icon-chevron-down"></a>
                                        <a href="javascript:;" class="icon-remove"></a>
                                        </span>
                                </div>
                                    <table class="table table-striped table-bordered table-advance table-hover" border="1" >
                                        
                                        <tr>
											<th><i class="icon-leaf"></i> <span class="hidden-phone">Oreder Id.</span></th>
                                            <th> <span class="hidden-phone">From</span></th>
											<th><span  class="hidden-phone">product</span></th>
											<th><span  class="hidden-phone">Quantity</span></th>
                                            <th><i class="icon-user"></i> <span class="hidden-phone ">Contact</span></th>
                                            <th><i class="icon-tags"> </i><span class="hidden-phone">Amount</span></th>
											<th>Order_Status</th>
                                            
                                        </tr>
										
                                        <tbody>
										<?php										
											/*$o_mm=date('y-m-d');											
										    $sel_ord=mysql_query("select * from order_detail_user where  ");
											while($exe_ord=mysql_fetch_array($sel_ord))
											{
										?>
                                        <tr>
											<td><?php echo $exe_ord['Id'];?></td>
                                            <td ><?php echo $exe_ord['C_city']; ?></td>
											<td><?php echo $exe_ord['P_Name'];?></td>
											<td><?php echo $exe_ord['P_Quantity']; ?></td>
                                            <td><?php echo $exe_ord['C_Name']; ?></td>											
                                            <td><?php echo $exe_ord['T_Amount']; ?>
                                                <span class="label label-success label-mini"><a style="text-decoration:none;" href="index_2.php?sts=<?php echo $exe_ord['Id']; ?>"><?php echo $exe_ord['Pay_Status']; ?> </a></span>
                                                
                                            </td>
                                            <td>
											<span class="label label-success label-mini"><a style="text-decoration:none;" href="index_2.php?o_sts=<?php echo $exe_ord['Id'];?>"><?php echo $exe_ord['Order_Status']; ?></a></span>
											</td>
                                        </tr>
										<?php  } */?>
                                        
                                        </tbody>
                                    </table>
                                    <div class="space7"></div>
                                    <div class="clearfix">
                                        <a href="display_orderlist.php" class="btn btn-mini pull-right">All Orders</a>
                                    </div>
                                </div>
                            </div>
					<div class="row-fluid">

						<div class="span7">
							<!-- BEGIN CHAT PORTLET-->
							<!--<div class="widget" id="chats">
								<div class="widget-title">
									<h4><i class="icon-comments-alt"></i> Chats</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
								</div>
								<div class="widget-body">
                                    <div class="timeline-messages">
                                            <!-- Comment -->
                                           <!-- <div class="msg-time-chat">
                                                <a class="message-img" href="#"><img alt="" src="img/avatar1.jpg" class="avatar"></a>
                                                <div class="message-body msg-in">
                                                    <div class="text">
                                                        <p class="attribution"><a href="#">Mosaddek Hossain</a> at 1:55pm, 13th April 2013</p>
                                                        <p>Hello, How are you brother?</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /comment -->

                                            <!-- Comment -->
                                           <!-- <div class="msg-time-chat">
                                                <a class="message-img" href="#"><img alt="" src="img/avatar2.jpg" class="avatar"></a>
                                                <div class="message-body msg-out">
                                                    <div class="text">
                                                        <p class="attribution"> <a href="#">Dulal Khan</a> at 2:01pm, 13th April 2013</p>
                                                        <p>I'm Fine, Thank you. What about you? How is going on?</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /comment -->

                                            <!-- Comment -->
                                            <!--<div class="msg-time-chat">
                                                <a class="message-img" href="#"><img alt="" src="img/avatar1.jpg" class="avatar"></a>
                                                <div class="message-body msg-in">
                                                    <div class="text">
                                                        <p class="attribution"><a href="#">Mosaddek Hossain</a> at 2:03pm, 13th April 2013</p>
                                                        <p>Yeah I'm fine too. Everything is going fine here.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /comment -->

                                            <!-- Comment -->
                                          <!--  <div class="msg-time-chat">
                                                <a class="message-img" href="#"><img alt="" src="img/avatar2.jpg" class="avatar"></a>
                                                <div class="message-body msg-out">
                                                    <div class="text">
                                                        <p class="attribution"><a href="#">Dulal Khan</a> at 2:05pm, 13th April 2013</p>
                                                        <p>well good to know that. anyway how much time you need to done your task?</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /comment -->
                                        <!--</div>
									<div class="chat-form">
										<div class="input-cont">
											<input type="text" placeholder="Type a message here..." />
										</div>
										<div class="btn-cont">
											<a href="javascript:;" class="btn btn-primary">Send</a>
										</div>
									</div>
								</div>
							</div>
							<!-- END CHAT PORTLET-->
						<!--</div>-->
                        <div class="span5">
                            <!-- BEGIN NOTIFICATIONS PORTLET-->
                            <!--<div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-bell"></i> Notifications</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <ul class="item-list scroller padding" data-height="365" data-always-visible="1">
                                        <li>
                                            <span class="label label-success"><i class="icon-bell"></i></span>
                                            <span>New user registered.</span>
                                            <span class="small italic">Just now</span>
                                        </li>
                                        <li>
                                            <span class="label label-success"><i class="icon-bell"></i></span>
                                            <span>New order received.</span>
                                            <span class="small italic">15 mins ago</span>
                                        </li>
                                        <li>
                                            <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                                            <span>Alerting a user account balance.</span>
                                            <span class="small italic">2 hrs ago</span>
                                        </li>
                                        <li>
                                            <span class="label label-important"><i class="icon-bolt"></i></span>
                                            <span>Alerting administrators staff.</span>
                                            <span class="small italic">11 hrs ago</span>
                                        </li>
                                        <li>
                                            <span class="label label-important"><i class="icon-bolt"></i></span>
                                            <span>Messages are not sent to users.</span>
                                            <span class="small italic">14 hrs ago</span>
                                        </li>
                                        <li>
                                            <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                                            <span>Web server #12 failed to relosd.</span>
                                            <span class="small italic">2 days ago</span>
                                        </li>
                                        <li>
                                            <span class="label label-success"><i class="icon-bell"></i></span>
                                            <span>New order received.</span>
                                            <span class="small italic">15 mins ago</span>
                                        </li>
                                        <li>
                                            <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                                            <span>Alerting a user account balance.</span>
                                            <span class="small italic">2 hrs ago</span>
                                        </li>
                                        <li>
                                            <span class="label label-important"><i class="icon-bolt"></i></span>
                                            <span>Alerting administrators staff.</span>
                                            <span class="small italic">11 hrs ago</span>
                                        </li>
                                        <li>
                                            <span class="label label-important"><i class="icon-bolt"></i></span>
                                            <span>Messages are not sent to users.</span>
                                            <span class="small italic">14 hrs ago</span>
                                        </li>
                                        <li>
                                            <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                                            <span>Web server #12 failed to relosd.</span>
                                            <span class="small italic">2 days ago</span>
                                        </li>
                                        <li>
                                            <span class="label label-success"><i class="icon-bell"></i></span>
                                            <span>New order received.</span>
                                            <span class="small italic">15 mins ago</span>
                                        </li>
                                        <li>
                                            <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                                            <span>Alerting a user account balance.</span>
                                            <span class="small italic">2 hrs ago</span>
                                        </li>
                                        <li>
                                            <span class="label label-important"><i class="icon-bolt"></i></span>
                                            <span>Alerting administrators support staff.</span>
                                            <span class="small italic">11 hrs ago</span>
                                        </li>
                                        <li>
                                            <span class="label label-important"><i class="icon-bolt"></i></span>
                                            <span>Messages are not sent to users.</span>
                                            <span class="small italic">14 hrs ago</span>
                                        </li>
                                        <li>
                                            <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                                            <span>Web server #12 failed to relosd.</span>
                                            <span class="small italic">2 days ago</span>
                                        </li>
                                    </ul>
                                    <div class="space5"></div>
                                    <a href="#" class="pull-right">View all notifications</a>
                                    <div class="clearfix no-top-space no-bottom-space"></div>
                                </div>
                            </div>
                            <!-- END NOTIFICATIONS PORTLET-->
                        </div>


                    </div>
                    <div class="row-fluid">
                        <div class="span6">
                            <!-- BEGIN PROGRESS BARS PORTLET-->
                           <!-- <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i> Progress Bars</h4>
                                        <span class="tools">
                                        <a href="javascript:;" class="icon-chevron-down"></a>
                                        <a href="javascript:;" class="icon-remove"></a>
                                        </span>
                                </div>
                                <div class="widget-body">
                                    <div class="progress">
                                        <div style="width: 40%;" class="bar"></div>
                                    </div>
                                    <div class="progress progress-success">
                                        <div style="width: 60%;" class="bar"></div>
                                    </div>
                                    <div class="progress progress-warning">
                                        <div style="width: 80%;" class="bar"></div>
                                    </div>
                                    <div class="progress progress-danger">
                                        <div style="width: 45%;" class="bar"></div>
                                    </div>
                                    <div class="progress">
                                        <div style="width: 15%;" class="bar bar-success"></div>
                                        <div style="width: 40%;" class="bar bar-warning"></div>
                                        <div style="width: 27%;" class="bar bar-danger"></div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 25%;" class="bar"></div>
                                    </div>
                                    <div class="progress progress-striped progress-success active">
                                        <div style="width: 40%;" class="bar"></div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 15%;" class="bar bar-success"></div>
                                        <div style="width: 40%;" class="bar bar-warning"></div>
                                        <div style="width: 27%;" class="bar bar-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROGRESS BARS PORTLET-->
                        </div>
                        <div class="span6">
                            <!-- BEGIN ALERTS PORTLET-->
                            <!--<div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-bell-alt"></i> Alerts</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <div class="alert">
                                        <button class="close" data-dismiss="alert">�</button>
                                        <strong>Warning!</strong> Your monthly traffic is reaching limit.
                                    </div>
                                    <div class="alert alert-success">
                                        <button class="close" data-dismiss="alert">�</button>
                                        <strong>Success!</strong> The page has been added.
                                    </div>
                                    <div class="alert alert-info">
                                        <button class="close" data-dismiss="alert">�</button>
                                        <strong>Info!</strong> You have 198 unread messages.
                                    </div>
                                    <div class="alert alert-error">
                                        <button class="close" data-dismiss="alert">�</button>
                                        <strong>Error!</strong> The daily cronjob has failed.
                                    </div>
                                    <span class="space5"></span>
                                </div>
                            </div>
                            <!-- END ALERTS PORTLET-->
                        </div>
                    </div>
					<div class="row-fluid">
						<div class="span8 responsive" data-tablet="span8 fix-margin" data-desktop="span8">
							<!-- BEGIN CALENDAR PORTLET-->
							<!--<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-calendar"></i> Calendar</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
								</div>
								<div class="widget-body">
									<div id="calendar" class="has-toolbar"></div>
								</div>
							</div>
							<!-- END CALENDAR PORTLET-->
						</div>
                        <div class="span4 responsive" data-tablet="span4 fix-margin" data-desktop="span4">
                            <!-- BEGIN TODO_LIST PORTLET-->
                           <!-- <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-check"></i> To Do List</h4>
                                        <span class="tools">
                                        <a href="javascript:;" class="icon-chevron-down"></a>
                                        <a href="javascript:;" class="icon-remove"></a>
                                        </span>
                                </div>
                                <div class="widget-body">
                                    <ul class="todo-list">
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <a href=""> Weekly Meeting.</a>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <span class="label label-success"><i class="icon-bell"></i>Today</span>
                                                    <span class="actions">
                                                        <a href="#" class="icon"><i class="icon-ok"></i></a>
                                                        <a href="#" class="icon"><i class="icon-remove"></i></a>
                                                    </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <a href="">Monthly Status Update.</a>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <span class="label label-default"><i class="icon-bell"></i>12.00PM</span>
                                                    <span class="actions">
                                                        <a href="#" class="icon"><i class="icon-ok"></i></a>
                                                        <a href="#" class="icon"><i class="icon-remove"></i></a>
                                                    </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <a href="">Upgrage server OS.</a>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <span class="label label-success"><i class="icon-bell"></i>4 March</span>
                                                <span class="actions">
                                                    <a href="#" class="icon"><i class="icon-ok"></i></a>
                                                    <a href="#" class="icon"><i class="icon-remove"></i></a>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <a href="">Weekly technical support report.</a>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <span class="label label-success"><i class="icon-bell"></i>2 Jan</span>
                                                    <span class="actions">
                                                        <a href="#" class="icon"><i class="icon-ok"></i></a>
                                                        <a href="#" class="icon"><i class="icon-remove"></i></a>
                                                    </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <a href=""> Project materials.</a>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <span class="label label-warning"><i class="icon-bell"></i>09 Feb</span>
                                                <span class="actions">
                                                    <a href="#" class="icon"><i class="icon-ok"></i></a>
                                                    <a href="#" class="icon"><i class="icon-remove"></i></a>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <a href="">Project Status Update.</a>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <span class="label label-important"><i class="icon-bell"></i>4.30PM</span>
                                                    <span class="actions">
                                                        <a href="#" class="icon"><i class="icon-ok"></i></a>
                                                        <a href="#" class="icon"><i class="icon-remove"></i></a>
                                                    </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <a href=""> Anual Project Meeting.</a>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <span class="label label-important"><i class="icon-bell"></i>Today</span>
                                                    <span class="actions">
                                                        <a href="#" class="icon"><i class="icon-ok"></i></a>
                                                        <a href="#" class="icon"><i class="icon-remove"></i></a>
                                                    </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <a href="">Prepare project materials.</a>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <span class="label label-warning"><i class="icon-bell"></i>3 May</span>
                                                <span class="actions">
                                                    <a href="#" class="icon"><i class="icon-ok"></i></a>
                                                    <a href="#" class="icon"><i class="icon-remove"></i></a>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <a href="">Update salary status.</a>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <span class="label label-reverse"><i class="icon-bell"></i>1 June</span>
                                                    <span class="actions">
                                                        <a href="#" class="icon"><i class="icon-ok"></i></a>
                                                        <a href="#" class="icon"><i class="icon-remove"></i></a>
                                                    </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <a href="">Update Task Status.</a>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <span class="label label-reverse"><i class="icon-bell"></i>3 April</span>
                                                    <span class="actions">
                                                        <a href="#" class="icon"><i class="icon-ok"></i></a>
                                                        <a href="#" class="icon"><i class="icon-remove"></i></a>
                                                    </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <a href="">Project Status Report.</a>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <span class="label label-important"><i class="icon-bell"></i>10.00PM</span>
                                                    <span class="actions">
                                                        <a href="#" class="icon"><i class="icon-ok"></i></a>
                                                        <a href="#" class="icon"><i class="icon-remove"></i></a>
                                                    </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <a href="">Update project rates.</a>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <span class="label label-reverse"><i class="icon-bell"></i>28 April</span>
                                                    <span class="actions">
                                                        <a href="#" class="icon"><i class="icon-ok"></i></a>
                                                        <a href="#" class="icon"><i class="icon-remove"></i></a>
                                                    </span>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#" class="pull-right">View all todo list</a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- END TODO_LIST PORTLET-->
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
		JTECH| Designed By:- Appscomp
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
<?php 
	}
	else
	{
		header('location:index.php');
	}
?>
