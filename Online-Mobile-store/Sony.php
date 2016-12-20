<?php
	session_start();
	if(!isset($_SESSION['id']))
	{
		header("Location:purchase_login.php");
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
        <h1 id="logotype">My Mobile Store</h1>
		<h2 id="searchForm"><font size="+2" color="#006633"><a href="logout.php">Logout</a></font></h2>
      </div><!-- // Header -->
      
      <hr class="hidden" />
      
      <!-- Main content -->
    <div id="content">
        <!-- Left content part -->
        <div id="contentBlock" align="center">
          <h2 class="subheader biggest"><font size="+5" color="#33FF66" face="pristina, Arial, Rage Italic">Sony</font></h2>
          <div class="item first">
            <?php
				include "connection.php";
				$qry=mysql_query("select * from dd_product where c_id='3'");
				if(0< mysql_num_rows($qry))
				{
				while($row=mysql_fetch_array($qry))
				{
			  		echo "<div class='in'>
			  		<table>
			  		<tr>
						<td><img src='upload/product/$row[5]' height=150 width=140/></td>
					<td><table>
						<tr>
						<td>Name  : ".$row[2]." </td>
						</tr>
						<tr>
						<td>Price  : ".$row[4]."</td>
						</tr>
						</table>
					</td>
					</tr>
					<tr>
					<td><a href='cart_list.php?id=$row[0]'> Add to Cart </a></td>
					<td><a href='more_description.php?id=$row[0]'> more </a></td>
					</tr>
					</table>	
			  </div>";
			  }
			  }
			  else
			  {
			  	echo "<div class='in'>";
			  	echo "<h4> <font color='orange'> No product available </font></h4>";
				echo "</div>";
			}
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
        <div id="rightBlock">
          <div class="box submenu">
            <h3 class="subheader">Proceed To CheckOut</h3>
            <div class="in">
              <ul>
                <li><a href="cart.php">
                  <?php 
					$id=$_SESSION['user'];
					$qry=mysql_query("select * from dd_cart where user_name='".$id."'");
					$no=mysql_num_rows($qry);
					echo "Items are selected ( $no )";
					?>
                </a> </li>
              </ul>
            </div>
          </div>
          <div class="box submenu">
            <h3 class="subheader">Category</h3>
            <div class="in">
              <ul>
                <?php include "category.php"; ?>
              </ul>
            </div>
          </div>
          <!-- // Box -->
          <!-- // Box -->
          <!-- // Box -->
        </div>
      <!-- Right sidebox -->
      </div>
      <!-- // Content -->
      
    <hr class="hidden noprint" />
      
      <!-- Main menu and submenu -->
      <div id="menu">
        <ul id="mainMenu">
          <li><a href="index.php">Home</a></li>
          <li><a href="pricelist.php">Price List </a></li>
          <li><strong>Purchase</strong></li>
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
