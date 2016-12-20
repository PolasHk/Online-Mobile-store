<?php
include "connection.php";
	session_start();
	if(!isset($_SESSION['admin']))
	{
		header("location:admin_login.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Lukáš Tomek (info@lukastomek.cz)" />
    <meta name="copyright" content="2008 LT WebDevelopment (www.lukastomek.cz)" />
    <meta name="description" content=""  />
    <meta name="keywords" content="" />
    <meta name="language" content="cs" />
    <title></title>
	
    <link rel="stylesheet" type="text/css" href="./css/default.css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/msie.css" /><![endif]-->
    <link rel="stylesheet" type="text/css" href="./css/print.css" media="print" />
    <link rel="shortcut icon" href="" />
  </head>
  <body>
    <!-- Accessibility items - do not remove !!! -->
    <ul class="noscreen">
      <li><a href="#content">Přeskočit na obsah</a></li>
      <li><a href="#mainMenu">Přeskočit na menu</a></li>
    </ul>

    <hr class="hidden" />

    <!-- View -  -->
    <div id="view">
      <!-- Header (logotype, search, menus) -->
      <div id="head">
        <h1 id="logotype">Administrative Tools</h1>
		<h2 id="searchForm"><font size="+2" color="#006633"><a href="admin_logout.php">Logout</a></font></h2>
      </div>
      <!-- // Header -->
      
      <hr class="hidden" />
      
      <!-- Main content -->
      <div id="content">
        <!-- Left content part -->
        
        <!-- // ContentBlock -->
        <hr class="hidden" />
        <!-- Right sidebox -->
        <!-- Right sidebox -->
        <div id="contentBlock" align="center" style="width: 920px; float: left; padding: 25px 0;" >
          <h2 class="subheader biggest">User Feedback <hr /></h2>
     		<h6 class="subheader biggest" style="font-size:12px;">
            <?php 
					include "connection.php";
					echo "<table border='1' bordercolor='#4466'>";
					
					
					echo "<tr bgcolor='#004D66'><th>ID</th><th>NAME</th><th>GENDER</th><th>CITY</th><th>STATE</th><th>COUNTRY</th><th>CONTECT NO.</th><th>E-MAIL ID</th><th>COMMENT</th><th>Delete</th></tr>";
										
					
					$q1=mysql_query("select * from dd_feedback") or die( mysql_error()) ;
					
					while($r1=mysql_fetch_array($q1))
					{
						echo "<tr align='center' height='50'><td>$r1[0]</td> <td>$r1[1]</td> <td>$r1[2]</td> <td>$r1[3]</td> <td>$r1[4]</td> <td>$r1[5]</td> <td>$r1[6]</td> <td>$r1[7]</td><td>$r1[8]</td><td><a href='delete_feedback.php?id=$r1[0]'><img src='images/icon/delete.gif' /></a></td></tr>";
					}
					
					echo "</table>";
				 ?>
          </h6>
          <!-- // Item -->
          <!-- // Item -->
          <!-- // Item -->
        </div>
      </div>
      
      <hr class="hidden noprint" />
      
      <!-- Main menu and submenu -->
      <div id="menu">
        <ul id="mainMenu">
          <li><a href="admin_purchase.php">Purchase</a></li>
		  <li><a href="admin_download.php">Download</a></li>
          <li><a href="admin_order.php">Orders</a></li>
          <li><strong>Feedback</strong></li>		            
		  <li><a href="admin_aboutus.php">About us</a></li>
		  <li><a href="admin_setting.php">Setting</a></li>		  
        </ul>
        
      </div><!-- // Menu -->
      
      <hr class="hidden noprint" />
      
     <!-- Web footer -->
      <div id="foot">
              <ul class="menu">
         <li><a href="admin_purchase.php">Purchase</a></li>
		  <li><a href="admin_download.php">Download</a></li>
          <li><a href="admin_order.php">Orders</a></li>
          <li><a href="admin_feedback.php" >Feedback</a></li>		            
		  <li><a href="admin_aboutus.php">About&nbsp;us</a></li>
		 <li><a href="admin_setting.php">Setting</a></li>		   
      
        </ul>

              <p class="copy small">Copyright @ My Mobile Store. All rights reserved.</p>
      </div><!-- // Foot -->

    </div><!-- // View -->

  </body>
</html>
