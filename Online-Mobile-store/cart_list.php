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
          <h2 class="subheader biggest">Add To Cart <br />
		  </h2>
          <div class="item first">
            <?php
			ob_start();
				include "connection.php";
				//session_start();
				$id1=$_SESSION["user"];
				$pid=$_REQUEST["id"];
				$q1="SELECT * FROM `dd_product` WHERE `p_id` =$pid";
				$rs1=mysql_query($q1);
				$row1=mysql_fetch_array($rs1);
				$pronm=$row1["2"];
				$proprice=$row1["4"];
				$cid=$row1["1"];
	
				
				$q2="SELECT * FROM `dd_category` WHERE `c_id` ='$cid'";
				$rs2=mysql_query($q2);
				$row2=mysql_fetch_array($rs2);
				$cname=$row2["1"];
				
				//if(0< mysql_num_rows($rs3))
				//{
			//	while($row=mysql_fetch_array($qry))
				//{
			  		echo "<div class='in'>
			  		<table>
					<form method='post'>
			  		<tr><th>Company</th>
						<th>Product</th>
						<th>price</th>
						<th>Quantity</th>
					</tr>
						<td>$cname</td>
						<td>$pronm</td>
						<td>$proprice</td>
						<td><input type='text' name='t1' value='1' size='3'></td>
					</tr>
					<tr>
						<td colspan='2'><input type='submit' name='s1' value='Done'></td>
						<td colspan='2'><input type='submit' name='s2' value='Cancle'></td>
					</tr>
					</form>
					</table>	
			  </div>";
			
			if(isset($_POST['s1']))
			{
				$quantity=$_POST['t1'];		
				$q3="insert into dd_cart values('$id1','$cname','$pronm',$proprice,$quantity)";
				echo $q3;
				mysql_query($q3);
				header("location:cart.php");	
			}
			else if(isset($_POST['s2']))
			{
				header("location:nokia.php");
			}


			 // }
			  //}
			  //else
			  //{
			  //	echo "<div class='in'>";
			  //	echo "<h4> <font color='orange'> No product available </font></h4>";
			//	echo "</div>";
			//}
			  ?>
          </div>
		  <!-- // Item -->
          <div class="in"> 
            <p><a href="feedback.php"> FeedBack</a></p>
          </div>
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
				  	//session_start();
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
