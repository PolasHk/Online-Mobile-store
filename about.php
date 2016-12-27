<?php include('connection.php'); ?>
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
    <style type="text/css">
<!--
.style12 {color: #333333}
.style5 {color: #00FFFF; font-family: "Times New Roman", Times, serif; }
.style6 {color: #FFFFFF; }
-->
    </style>
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
            if(isset($_SESSION['id']))
            {
            echo "Hi ";
            echo $_SESSION ['user'];
            }
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
      </div>
      <!-- // Header -->

      <hr class="hidden" />

      <!-- Main content -->
      <div id="content">

        <?php
			include "connection.php";
			$qry=mysql_query("select * from dd_aboutus");
			$row=mysql_fetch_array($qry);
			echo $row[1];
		?>

		<hr class="hidden" />

        <!-- Right sidebox -->
        <!-- // RightBlock -->
      </div>
      <!-- // Content -->

      <hr class="hidden noprint" />

      <!-- Main menu and submenu -->
      <div id="menu">
        <ul id="mainMenu">
          <li><a href="index.php">Home</a></li>
          <li><a href="pricelist.php">Price List </a></li>
          <li><a href="purchase.php">Purchase</a></li>
          <li><a href="download.php" >Download</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><strong>About Us</strong></li>
        </ul>
      </div><!-- // Menu -->

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
      </div><!-- // Foot -->

    </div><!-- // View -->

  </body>
</html>
