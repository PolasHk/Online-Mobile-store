<?php
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
        <h2 id="searchForm"><font size="+2" color="#006633"><a href="admin_logout.php">Logout</a><a href="logout.php"></a></font></h2>
      </div>
      <!-- // Header -->
      
      <hr class="hidden" />
      
      <!-- Main content -->
      <div id="content">
        <p>
          <!-- Left content part --></p>
        <div id="contentBlock" align="center">
		 <h2 class="subheader biggest">Nokia</h2>
          <div class="item first">
            <div class="in">
              
                <h6 class="subheader biggest" style="font-size:18px;">
                  <?php
				  	include "connection.php";
					$q=mysql_query("select * from dd_category where c_id = 1");
					$r=mysql_fetch_array($q);
				  	echo "<form  method='post' id='f1'>
                    <br/>
                    <p>Enable&nbsp;&nbsp;&nbsp;($r[2])&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        <select name='s1' style='background-color:#CCCCCC;'>
							<option>TRUE</option>
							<option>FALSE</option>
						</select>
                    </p>
					<br />
					<p>
                      <input name='submit' type='submit' value='Update'/>
                    </p>
                  </form>";
				  ?>
                </h6>
			</div>
			<br>
	        <br>
	        <!-- // Item -->
            <!-- // Item -->
			</div>
			<h2 class="subheader biggest">Nokia Product's</h2>
			<div class="item first">
            	<div class="in">
					<?php
						include "connection.php";
						$qry = mysql_query("SELECT * FROM `dd_product` WHERE c_id = 1 ");
						
						echo "<table><tr><th>P_ID</th><th>C_ID</th><th>NAME</th><th>PRICE</th><th>EDIT</th><th>DELETE</th></tr>";
						
						while($row = mysql_fetch_array($qry))			
						{
							echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[4]</td>";
							echo "<td><a href='edit_nokia_product.php?id=$row[0]'>Edit</a></td>";
							echo "<td><a href='delete_product.php?id=$row[0]&cid=1'>Delete</a></td></tr>";
						}
						
						echo "</table>";
					?>
				</div>
			</div>
        </div>
        <!-- // ContentBlock -->
        
        <hr class="hidden" />
        
        <!-- Right sidebox -->
        <div id="rightBlock">
<div class="box submenu">
  <h3 class="subheader">Ctegory</h3>
  <div class="in">
    <ul>
      <li><a href="admin_nokia.php"><font color="#009933">Nokia</font></a></li>
      <li><a href="admin_samsung.php">Samsung</a></li>
      <li><a href="admin_sony.php">Sony</a></li>
      <li><a href="admin_motorola.php">Motorola</a></li>
      <li><a href="admin_lg.php">LG </a></li>
    </ul>
  </div>
</div>
<div class="submenu" align="center"></div>
          <!-- // Box -->
          <!-- // Box -->
          <!-- // Box -->
        </div>
        <!-- // RightBlock -->
    </div><!-- // Content -->
      
    <hr class="hidden noprint" />
      
      <!-- Main menu and submenu -->
      <div id="menu">
        <ul id="mainMenu">
          <li><strong>Purchase</strong></li>
          <li><a href="admin_download.php">Download</a></li>
          <li><a href="admin_order.php">Orders</a></li>
          <li><a href="admin_feedback.php" >Feedback</a></li>
          <li><a href="admin_aboutus.php">About us</a></li>
          <li><a href="admin_setting.php">Setting</a></li>
        </ul>
      </div>
  <!-- // Menu -->
      
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
     </div>
    <!-- // Foot -->

    </div><!-- // View -->

  </body>
</html>


<?php	
	
	if(isset($_POST['submit']))
	{
		include "connection.php";
		
		$name = $_POST["t1"];
		if($_POST["s1"]=="TRUE")
		{
			$enable = "T";
		}
		else if($_POST["s1"]=="FALSE")
		{
			$enable = "F";
		}
		
		mysql_query("UPDATE `dd_category` SET `enable` = '$enable' WHERE `c_id` =1");
		
		echo "<script language='javascript'>
			alert('Updated successfully...')
			</script>";	
	}
?>
