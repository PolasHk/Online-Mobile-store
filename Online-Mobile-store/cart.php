
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
          <h2 class="subheader biggest">Your Cart <br />
		  </h2>
          <div class="item first">
		  
		  	
            <p>&nbsp;</p>
            <p>&nbsp;</p>
			<?php 
				echo "<div class='in'>";
			  	include "connection.php";
				//session_start();
				$id1=$_SESSION['user'];
				$q="select * from dd_cart where user_name='".$id1."'";
				$rs=mysql_query($q);
				echo "<table border='0' align='center'>
					<tr>
						<th>NO.</th>
						<th>Company</th>
						<th>Product</th>
						<th>Quantity</th>
						<th>Price</th>
						<th>Total Price</th>
						<th>Delete</th>
					<tr>";
					$i=0;
					$qua=0;
					$p1=0;
					$p2=0;
				while($row=mysql_fetch_array($rs))
				{
					$i++;
					echo"<tr>
						<td>$i</td>
						<td>$row[2]</td>
						<td>$row[3]</td>
						<td>$row[5]</td>
						<td>$row[4]</td>
						<td>".$row[5]*$row[4]."</td>
						<td><a href='delete_product?id=$row[0]'>Delete</a></td>
						</tr>";
						$qua+=$row[5];
						$p1+=$row[4];
						$p2=$p2+($row[5]*$row[4]);
				
				}
				
				echo "<tr><th colspan='3'>Total</th>
						<th>".$qua."</th>
						<th>".$p1."</th>
						<th>".$p2."</th>
						<th><a href='deleteall_product.php'>Delete All</a></th>
					 </tr>";
				echo "</table>";
				
			
			echo "</div>
          
		  <div class='in'>
		  	<form method='post' action='user_info1.php?count=$i'>
				<input type='submit' name='s1' value='Proceed To Checkout' />
			</form>
		  </div>";
         ?>
		 <br />
		 <br />
		 <div class="in">
		 	<a href="purchase.php"><font size="+2" color="#FF3333">Purchase More</font></a>
          </div>
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
