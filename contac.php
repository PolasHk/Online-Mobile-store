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
.style10 {font-family: "Times New Roman", Times, serif; color: #FFCC00; }
.style1 {color: #000000}
.style11 {color: #FFCC00}
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


        <!-- Left content part -->

          <h2 class="subheader biggest"><font color="#FF9933" face="pristina, Arial, Rage Italic" size="+4"><center>Contact Us</center></font></h2>

        <div class="item first" align="center"><font color="#00CC33" size="+2"><table>
	  	  <tr>
			  <td width="150" rowspan="1"></td>
			  <th rowspan="1" align="right">Name -</th>
			  <td align="left">Md.Polash Khan<br>Mst.Aklima Akter</td>
			  <td align="left">Md.Sayed khan<br>Mst.Aklima </td>
		  </tr>
		  <tr><td>&nbsp;</td></tr>
		  <tr>
			  <td width="150" rowspan="1"></td>
			  <th rowspan="1" align="right">Mobile No.-</th>
			  <td align="left">01674-164789</td>
		  </tr>
	  	  <tr><td>&nbsp;</td></tr>
		  <tr>
			  <td width="150" rowspan="1"></td>
			  <th rowspan="1" align="right">Email -</th>
			  <td align="left"><a href="mailto:niravgajjar49@yahoo.in?subject=" class="style1""">dadupolash@gmail.com</a></td>
		  </tr>
		  </table>
		  </font>        </div>
        <!-- // ContentBlock -->

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
          <li><strong>Contact Us</strong></li>
          <li><a href="about.php">About Us</a></li>
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
