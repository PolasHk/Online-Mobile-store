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
	<script language="javascript">
	function check_blank()
	{
		a=new Array(4);
		a[0]=f1.t1.value;
		a[1]=f1.t2.value;
		a[2]=f1.t3.value;
		a[3]=f1.t4.value;
		
		
		b=new Array(4);
		b[0]="Login Name";
		b[1]="Current Password";
		b[2]="New Password";
		b[3]="Confirm Password";
		
		
		var test="";
		var c;
		for(x=0;x<=3;x++)
		{
			if(a[x]=="")
			{
				test=test+","+b[x];
				c="true";
			}	
		}
		
		if(c=="true")
		{
			alert("Error :-Plz. fill "+test);
		}
		else 
		{
			if(f1.t3.value==f1.t4.value)
			{
		  		if(confirm("Are you want to change login/password?"))
				{
					f1.submit();
				}
				else
				{
					f1.reset();
				}
			}
			else
			{
				alert("Error :- New Password and Confirm Password are not match !");
				f1.t3.value="";
				f1.t4.value="";
			}
		}
		
	}			 
	</script>
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
          <h2 class="subheader biggest">Admin login/password </h2>
          <div class="item first">
		  	<div class="in">
				<h6 class="subheader biggest" style="font-size:18px;">
				<form action="admin_setting1.php" method="post" name="f1">
				<p>&nbsp;</p>
				<p>Login Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t1"  maxlength="20" size="20" style="background-color:#CCCCCC;"/></p>
				<p>Current Password &nbsp;&nbsp;<input type="password" name="t2" maxlength="20" size="20" style="background-color:#CCCCCC;"/></p>
				<p>New Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="t3" maxlength="20" size="20" style="background-color:#CCCCCC;"/></p>
				<p>Confirm Password&nbsp;&nbsp;&nbsp;<input type="password" name="t4" maxlength="20" size="20" style="background-color:#CCCCCC;"/></p>
				<p><input name="button" type="button"  onclick="check_blank()"  value="Save"/></p>
				</form>
				</h6>
		  	</div>
		  </div>
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
          <li><a href="admin_feedback.php" >Feedback</a></li>		            
		  <li><a href="admin_aboutus.php">About us</a></li>
		  <li><strong>Setting</strong></li>		  
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
