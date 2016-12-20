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
          <div class="item first">
            <div class="in" align="center">
              <form action="check_adminlogin.php" method="post">
                <h5>&nbsp;</h5>
                <h3><font color="#55D51E">* Welcome Administrator *</font></h3>
				<br />
				<h5><font color="#55D51E">Please use navigation menus to access administrative departments.</font></h5>
				<br />
              </form>
            </div>
          </div>
   	  </div>
      
      <hr class="hidden noprint" />
      
      <!-- Main menu and submenu -->
      <div id="menu">
        <ul id="mainMenu">
          <li><a href="admin_purchase.php">Purchase</a></li>
		  <li><a href="admin_download.php">Download</a></li>
          <li><a href="admin_order.php">Orders</a></li>
          <li><a href="admin_feedback.php" >Feedback</a></li>		            
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
