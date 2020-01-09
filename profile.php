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
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style_responsive.css" rel="stylesheet" />
   <link href="css/style_default.css" rel="stylesheet" id="style_color" />

   <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
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
                               <li><a href="profile.php"><i class="icon-user"></i> My Profile</a></li>
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
              <li class="has-sub active">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-glass"></i></span> Extra
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="lock.php">Lock Screen</a></li>
                      <li class="active"><a class="" href="profile.php">Profile</a></li>
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
                       Profile
                     <small>simple profile page</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="pro.php">edit pro</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Profile</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-user"></i>Profile</h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>                    
                        </div>
                        <div class="widget-body">
                            <div class="span3">
                                <div class="text-center profile-pic">
                                    <img src="img/profile-pic.jpg" alt="">
                                </div>
                                <ul class="nav nav-tabs nav-stacked">
                                    <li><a href="javascript:void(0)"><i class="icon-coffee"></i> Portfolio</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-paper-clip"></i> Projects</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-picture"></i> Gallery</a></li>
                                </ul>
                                <ul class="nav nav-tabs nav-stacked">
                                    <li><a href="javascript:void(0)"><i class="icon-facebook"></i> Facebook</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-twitter"></i> Twitter</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-linkedin"></i> LinkedIn</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-pinterest"></i> Pinterest</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-github"></i> Github</a></li>
                                </ul>
                            </div>
                            <div class="span6">
                                <h4>aaa <br/><small>Front end Developer</small></h4>
                                <table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <td class="span2">First Name :</td>
                                        <td>
                                            aaa
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2">Last Name :</td>
                                        <td>
                                            bbb
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2">Country :</td>
                                        <td>
                                            Bangladesh
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2">Birthday :</td>
                                        <td>
                                            9 Aug 1999
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2">Occupation :</td>
                                        <td>
                                            Web Developer
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2"> Email :</td>
                                        <td>
                                            abc@abc.com
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2"> Mobile :</td>
                                        <td>
                                            12345677
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h4>About</h4>

                                <p class="push">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
                                <h4>Skills</h4>

                                <table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <td class="span1"><span class="label label-inverse">HTML</span></td>
                                        <td>
                                            <div class="progress progress-success progress-striped">
                                                <div style="width: 90%" class="bar"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span1"><span class="label label-inverse">CSS</span></td>
                                        <td>
                                            <div class="progress progress-warning progress-striped">
                                                <div style="width: 85%" class="bar"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span1"><span class="label label-inverse">Javascript</span></td>
                                        <td>
                                            <div class="progress progress-success progress-striped">
                                                <div style="width: 60%" class="bar"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span1"><span class="label label-inverse">PHP</span></td>
                                        <td>
                                            <div class="progress progress-success progress-striped">
                                                <div style="width: 40%" class="bar"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span1"><span class="label label-inverse">Photoshop</span></td>
                                        <td>
                                            <div class="progress progress-warning progress-striped">
                                                <div style="width: 80%" class="bar"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span1"><span class="label label-inverse">Node.js</span></td>
                                        <td>
                                            <div class="progress progress-danger progress-striped">
                                                <div style="width: 45%" class="bar"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span1"><span class="label label-inverse">Java</span></td>
                                        <td>
                                            <div class="progress progress-danger progress-striped">
                                                <div style="width: 10%" class="bar"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h4>Address</h4>
                                <div class="well">
                                    <address>
                                        <strong>Vector Lab, Inc.</strong><br>
                                        Dreamland Ave, Suite 73<br>
                                        Bangladesh, PC 1361<br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7891
                                    </address>
                                    <address>
                                        <strong>Full Name</strong><br>
                                        <a href="mailto:#">first.last@gmail.com</a>
                                    </address>
                                </div>
                            </div>
                            <div class="span3">
                                <h4>Experience</h4>
                                <ul class="icons push">
                                    <li><i class="icon-hand-right"></i> <strong>ABC Company</strong><br/><em>Duration: 4 years</em><br/><em>Description of the company..</em><br><a href="javascript:void(0)">abc-company.com</a></li>
                                    <li><i class="icon-hand-right"></i> <strong>DEF Company</strong><br/><em>Duration: 3 years</em><br/><em>Description of the company..</em><br><a href="javascript:void(0)">def-company.com</a></li>
                                    <li><i class="icon-hand-right"></i> <strong>GHI Company</strong><br/><em>Duration: 1.7 years</em><br/><em>Description of the company..</em><br><a href="javascript:void(0)">ghi-company.com</a></li>
                                </ul>
                                <h4>Current Status</h4>
                                <div class="alert alert-success"><i class="icon-ok-sign"></i> Working in ABC Company</div>
                                <h4>Some Projects</h4>
                                <ul class="unstyled">
                                    <li> <strong>Project 1</strong>: <a href="javascript:void(0)">exampleproject1.com</a></li>
                                    <li> <strong>Project 2</strong>: <a href="javascript:void(0)">exampleproject2.com</a></li>
                                    <li> <strong>Project 3</strong>: <a href="javascript:void(0)">exampleproject3.com</a></li>
                                    <li> <strong>Project 4</strong>: <a href="javascript:void(0)">exampleproject4.com</a></li>
                                    <li> <strong>Project 5</strong>: <a href="javascript:void(0)">exampleproject5.com</a></li>
                                    <li> <strong>Project 6</strong>: <a href="javascript:void(0)">exampleproject6.com</a></li>
                                    <li> <strong>Project 7</strong>: <a href="javascript:void(0)">exampleproject7.com</a></li>
                                    <li> <strong>Project 8</strong>: <a href="javascript:void(0)">exampleproject8.com</a></li>
                                    <li> <strong>Project 9</strong>: <a href="javascript:void(0)">exampleproject9.com</a></li>
                                    <li> <strong>Project 10</strong>: <a href="javascript:void(0)">exampleproject10.com</a></li>
                                </ul>
                            </div>
                            <div class="space5"></div>
                        </div>
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
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script src="js/scripts.js"></script>
   <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
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