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
        <h1 id="logotype">My Mobile Store</h1>
        <h2 id="searchForm">
          <font size="+2" color="#006633">
            <?php
            include('connection.php');
            session_start();
            echo "Hi ";
            echo $_SESSION ['user'];
            ?>
            <a href="logout.php">
              <?php
              if(isset($_SESSION['id']))
              {
                echo "Logout";
              }
              ?>
            </a>
          </font>
        </h2>
      </div>< <!-- // Header -->

      <hr class="hidden" />

      <!-- Main content -->
    <div id="content">
        <!-- Left content part -->
        <div id="contentBlock" align="center" style="width: 920px; float: left; padding: 25px 0;" >
          <h2 class="subheader biggest">Price List</h2>
          <div class="item first">
            <?php
					include "connection.php";
					echo "<table border='0' bordercolor='#00FF00'>";
					$q1=mysql_query("select * from dd_category where enable='T'") or die( mysql_error()) ;
					while($r1=mysql_fetch_array($q1))
					{
						echo "<tr><th bgcolor='#222222'>$r1[1]</th><th bgcolor='#222222'>Price</th></tr>";
						$c_id=$r1[0];

						$q2=mysql_query("select * from dd_product where c_id=".$c_id."") or die( mysql_error());
						while($r2=mysql_fetch_array($q2))
						{
							echo "<tr><td align='left'>$r2[2]</td><td align='left'>$r2[4]</td></tr>";
						}
					}
					echo "</table>";
				 ?>
          </div>
		  <!-- // Item -->
          <div class="in"> <a href="feedback.php"> FeedBack</a> </div>
          <!-- // Item -->
          <!-- // Item -->
        </div>
        <!-- // ContentBlock -->
      <hr class="hidden" />
        <!-- Right sidebox -->
        <!-- Right sidebox -->
    </div>
    <!-- // Content -->

    <hr class="hidden noprint" />

      <!-- Main menu and submenu -->
      <div id="menu">
        <ul id="mainMenu">
          <li><a href="index.php">Home</a></li>
          <li><strong>Price List </strong></li>
          <li><a href="purchase.php">Purchase</a></li>
          <li><a href="download.php" >Download</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="about.php">About Us</a></li>
        </ul>
      </div>
  <!-- // Menu -->

      <hr class="hidden noprint" />

     <!-- Web footer -->
     <div id="foot">
       <ul class="menu">
         <li><a href="index.php">Home</a></li>
		  <li><a href="pricelist.php">Price&nbsp;List </a></li>
          <li><a href="purchase.php">Purchase</a></li>
          <li><a href="download.php">Download</a></li>
		  <li><a href="contact.php">Contact&nbsp;Us</a></li>
		  <li><a href="about.php">About&nbsp;Us</a></li>
       </ul>
       <p class="copy small">www.mobileworld.com</p>
     </div>
    <!-- // Foot -->

  </div><!-- // View -->

  </body>
</html>
