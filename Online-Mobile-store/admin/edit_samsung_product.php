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
    <meta name="author" content="Luk Tomek (info@lukastomek.cz)" />
    <meta name="copyright" content="2008 LT WebDevelopment (www.lukastomek.cz)" />
    <meta name="description" content=""  />
    <meta name="keywords" content="" />
    <meta name="language" content="cs" />
    <title></title>

	<script language="javascript">
	function num_check(e)
 	{ 	
		var code=e.keyCode;
		if(!(code>=47 && code<=58))
		{
			alert("Error :- Enter Only Numbers");
			e.keyCode=0;
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
      <li><a href="#content">Preskocit na obsah</a></li>
      <li><a href="#mainMenu">Preskocit na menu</a></li>
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
		 <h2 class="subheader biggest">Edit Nokia Product </h2>
          <div class="item first">
            <div class="in">
              
                <h6 class="subheader biggest" style="font-size:18px;">
				<?php
                  include "connection.php";
				 $pid =$_REQUEST["id"];
				  $q = "SELECT * FROM `dd_product` WHERE `p_id` = '$pid'";
				  $qry = mysql_query($q);
				  $row = mysql_fetch_array($qry); 
				 //	echo $a= mysql_num_rows($row);
				  	echo "<form  method='post' id='f1' action='edit_samsung_product.php?id=$pid' >
                    <p>&nbsp;</p>
                    
                    <p>Product Name &nbsp;&nbsp;
                        <input type='text' name='t1' maxlength='30' size='20' value='$row[2]' style='background-color:#CCCCCC;'/>
                    </p>
                    <p>Brif &nbsp; Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <textarea name='t2' rows='5' cols='20' style='background-color:#CCCCCC;' >$row[3]</textarea>                      
					</p>
					<p>Price&nbsp;&nbsp;&nbsp;
                     <input type='text' name='t3' maxlength='20' size='20' value='$row[4]' style='background-color:#CCCCCC;' onkeypress='num_check(event)' />
                    </p>
                    
					<p>Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  <textarea name='t4' cols='20' rows='5' style='background-color:#CCCCCC;'/>$row[7]</textarea>
					</p>
                    <p>
                      <input name='submit' type='submit'  value='Update'/>
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
          </div>
        <!-- // ContentBlock -->
        
        <hr class="hidden" />
        
        <!-- Right sidebox -->
        <div id="rightBlock">
<div class="box submenu">
  <h3 class="subheader">Ctegory</h3>
  <div class="in">
    <ul>
      <li><a href="admin_nokia.php">Nokia</a></li>
      <li><a href="admin_samsung.php"><font color="#009933">Samsung</font></a></li>
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
		$pid = $_REQUEST["id"];
		$pname = $_POST["t1"];
		$bdes = $_POST["t2"];
		$price = $_POST["t3"];
		$des = $_POST["t4"];
		
		$qry="UPDATE `dd_product` SET `p_name` = '$pname',`brif_description` = '$bdes',`price` = '$price',`description` = '$des' WHERE `p_id` = '$pid' ";
		echo $qry;
		mysql_query($qry) or die (mysql_error());
		echo "<script language='javascript'>
			alert('Product is updated successfully.')
			window.location.assign('admin_samsung.php')
			</script>";
		
	}
?>
