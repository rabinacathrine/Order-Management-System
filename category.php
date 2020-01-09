<?php
	//require_once('../auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard | Modern Admin</title>
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />
<link type="text/css" href="css/smoothness/ui.css" rel="stylesheet" />  
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
</head>

<body>
<!-- WRAPPER START -->
<div class="container_16" id="wrapper">	
<!-- HIDDEN COLOR CHANGER -->      
      <div style="position:relative;">
  	<!--LOGO-->
	<div class="grid_8" id="logo">E-Shop Administration</div>
    <div class="grid_8">
<!-- USER TOOLS START -->
      <div id="user_tools"><span><a href="../admin/index.php">Logout</a></span></div>
    </div>
<!-- USER TOOLS END -->    
<div class="grid_16" id="header">
<!-- MENU START -->
<div id="menu">
	<ul class="group" id="menu_group_main">
		<!--<li class="item first" id="one"><a href="index.php" class="main"><span class="outer"><span class="inner dashboard">Dashboard</span></span></a></li>
		<li class="item middle" id="four"><a href="message.php" class="main"><span class="outer"><span class="inner media_library">Messages</span></span></a></li>  -->
		<li class="item last" id="eight"><a href="" class="main current"><span class="outer"><span class="inner settings">category</span></span></a></li>        
    </ul>
</div>
<!-- MENU END -->
</div>


<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="dashboard">category</h1>
    </div>
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">
    
	<!--  SECOND SORTABLE COLUMN END -->
    <div class="clear"></div>
    <!--THIS IS A WIDE PORTLET-->
		<div class="portlet">
			<div class="portlet-header fixed"><img src="images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> 
			<label for="filter">Search</label> <input type="text" name="filter" value="" id="filter" />
			<!--<a rel="facebox" href="addproduct.php">Add Product</a>-->
				<a href="add-category.php">Add Category</a>
			</div>
			<div class="portlet-content nopadding">
			<form action="" method="post">
			
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7"> Category_Id </th>
								<!--<th> Category </th>
								<!--<th> Sub-Category </th>-->
								<th> Category-Name</th>
								<th> Category-Desciption </th>
								<!--<th> Sub-Category name</th>-->
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('connect.php');
							//$connect=mysql_connect('localhost:8080','root','','project');
							//$connect=('localhost','root','project','');
							//$result = mysql_query("SELECT distinct(P_id) AS pid,category.Cat_Id,subcategory.Scat_Id from addproduct,category,subcategory where category.Cat_Id=addproduct.Pid");
							//$result2= mysql_fetch_array($connect,$result);
							//$result=mysql_query("select addproduct.P_Id,addproduct.P_Name,addproduct.P_Image,addproduct.PS_Price,addproduct.P_Description,category.Cat_Name,subcategory.Scat_Name from addproduct,category");
							//$result=mysql_query("SELECT distinct(P_Name)as pname,addproduct.P_Image,addproduct.PS_Price,addproduct.P_Description,addproduct.P_Id,category.Cat_Name from addproduct,category group by category.Cat_Name");
							$result=mysql_query('SELECT * From category');
							while($row =(mysql_fetch_array($result)))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['Cat_Id'].'</td>';
									//echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['Cat_Name'].'</td>';
									//echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['Scat_Name'].'</td>';
									echo '<td><div align="left">'.$row['Cat_Name'].'</div></td>';
									echo '<td><div align="left">'.$row['Cat_Description'].'</div></td>';
									//echo '<td><a rel="facebox" href="editproductimage.php?id='.$row['P_Id'].'"><img src="project/supplier/img/'.$row['P_Image'].'alt='.$row['P_Name'].'" width="80" height="50"></a></td>';
									//echo '<td><div align="left">'.$row['Scat_Name'].'</div></td>';
									echo '<td><div align="center"><a rel="facebox" href="editcategory.php?id='.$row['Cat_Id'].'">edit</a> | <a href="#" id="'.$row['Cat_Id'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
									echo '</tr>';
								}
							?> 
						</tbody>
					</table>
			</form>
			</div>
		</div>
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
<div class="clear"> </div>

</div>
</div>
<!-- WRAPPER END -->
<!-- FOOTER START -->
<div class="container_16" id="footer">
Website Administration by <a href="../index.htm">WebGurus</a></div>
<!-- FOOTER END -->
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("Cat_Id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "delc.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>