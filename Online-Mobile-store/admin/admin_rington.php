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
		 <h2 class="subheader biggest">Ringtone's  </h2>
          <div class="item first">
            <div class="in">
              <h6 class="subheader biggest" style="font-size:12px;">
			  	
				<?php
					include("connection.php");
					echo "<table>";
					echo "<tr><th>ID</th><th>DISPLAY NAME</th><th>FILE NAME</th><th>DELETE</th></tr>";
					
					$qry=mysql_query("select * from dd_rington");
					while($row=mysql_fetch_array($qry))
					{
						echo "<tr align='left'><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td><a href='delete_file.php?id=$row[0]&file=$row[2]&type=Ringtone'>Delete</a></td></tr>";
					}
					
					echo "</table>";
				?>
				
			  </h6>             
			</div>
            <br>
	        <br>
	        <!-- // Item -->
            <!-- // Item -->
        </div>
          </div>
        <!-- // ContentBlock -->
        
        <hr class="hidden" />
        
        <!-- Right sidebox -->
        <div id="rightBlock">
          <div class="box submenu">
            <h3 class="subheader">Download</h3>
            <div class="in">
              <ul>
                <li><a href="admin_song.php">Songs</a></li>
                <li><a href="admin_video.php">Videos</a></li>
                <li><a href="admin_game.php">Games</a></li>
                <li><a href="admin_wallpaper.php">Wallpapers</a></li>
                <li><a href="admin_rington.php"><font color="#009933">Ringtones</font></a></li>
				<li><a href="admin_gallery.php">Gallery</a></li>
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
          <li><a href="admin_purchase.php">Purchase</a></li>
          <li><strong>Download</strong></li>
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