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
	function num_check(e)
 	{ 	
		var code=e.keyCode;
		if(!(code>=47 && code<=58))
		{
			alert("Enter Only Numbers.!");
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
		 <h2 class="subheader biggest">Add New Product </h2>
          <div class="item first">
            <div class="in">
              
                <h6 class="subheader biggest" style="font-size:18px;">
                  <form  method="post" id="f1" enctype="multipart/form-data">
                    <p>&nbsp;</p>
                    <p>Company Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <select name="s1" style="background-color:#CCCCCC;">
                        <?php
						include "connection.php";
						$sql=mysql_query("select * from dd_category");
	
						while($row=mysql_fetch_array($sql))
						{
							echo "<option>".$row[1]."</option>";
						}
	
						?>
                      </select>
                    </p>
                    <p>Product Name &nbsp;&nbsp;
                        <input type="text" name="t1" maxlength="30" size="20" style="background-color:#CCCCCC;"/>
                    </p>
                    <p>Brif &nbsp; Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <textarea name="t2" rows="5" cols="20" style="background-color:#CCCCCC;" ></textarea>                      
					</p>
					<p>Price&nbsp;&nbsp;&nbsp;
                     <input type="text" name="t3" maxlength="20" size="20" style="background-color:#CCCCCC;" onkeypress="num_check(event)" />
                    </p>
                    <p>Picture&nbsp;&nbsp;&nbsp;
                      <input type="file" name="file1" size="10" style="background-color:#CCCCCC;"/>
                    </p>
					<p>Big Picture&nbsp;&nbsp;&nbsp;
                      <input type="file" name="file2" size="10" style="background-color:#CCCCCC;"/>
					</p>
					<p>Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  <textarea name="t4" cols="20" rows="5" style="background-color:#CCCCCC;"/></textarea>
					</p>
                    <p>
                      <input name="submit" type="submit"  value="ADD"/>
                    </p>
                  </form>
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
  <h3 class="subheader">Category</h3>
  <div class="in">
    <ul>
      <li><a href="admin_nokia.php">Nokia</a></li>
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
			
	
		if ((($_FILES["file1"]["type"] == "image/gif") || ($_FILES["file1"]["type"] == "image/jpeg") || ($_FILES["file1"]["type"] == "image/pjpeg") || ($_FILES["file1"]["type"] == "image/png")) and (($_FILES["file2"]["type"] == "image/gif") || ($_FILES["file2"]["type"] == "image/jpeg") || ($_FILES["file2"]["type"] == "image/pjpeg") || ($_FILES["file2"]["type"] == "image/png")))
		{
		
			if ($_FILES["file1"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file1"]["error"] . "<br />";
			}
			else if ($_FILES["file2"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file2"]["error"] . "<br />";
			}
			else
			{
				if (file_exists("../upload/product/" . $_FILES["file1"]["name"]))
				{
					echo "<script language='javascript'>
							alert('Picture is already exist...')
						</script>";
				}
				else if (file_exists("../upload/product/big/" . $_FILES["file2"]["name"]))
				{
					echo "<script language='javascript'>
							alert('Big Picture is already exist...')
						</script>";
				}
				else
				{
					if((move_uploaded_file($_FILES["file1"]["tmp_name"],"../upload/product/" . $_FILES["file1"]["name"])) and (move_uploaded_file($_FILES["file2"]["tmp_name"],"../upload/product/big/" . $_FILES["file2"]["name"])));
					{
						if($_POST['s1']=="Nokia")
						{
							$company = 1;
						}
						else if($_POST['s1']=="Samsung")
						{
							$company = 2;
						}	
						else if($_POST['s1']=="Sony")
						{
							$company = 3;
						}
						else if($_POST['s1']=="Motorola")
						{
							$company = 4;
						}
						else if($_POST['s1']=="LG")
						{
							$company = 5;
						}
						
						$pname = $_POST["t1"];
						$bdescription = $_POST["t2"];
						$price = $_POST["t3"];
						$description = $_POST["t4"];
						$picture=$_FILES["file1"]["name"];
						$bigpicture=$_FILES["file2"]["name"];
						
						$qry="INSERT INTO `dd_product` ( `p_id` , `c_id` , `p_name` , `brif_description` , `price` , `picture` , `big picture` , `description` ) 
VALUES (
'', $company, '$pname', '$bdescription', $price, '$picture', '$bigpicture', '$description')";
						
						
						mysql_query($qry);
						
						
						echo "<script language='javascript'>
								alert('Product is added successfully.')
							</script>";
					}	
				}
			}
		}
		else
		{
			echo"<br>";
			echo"<br>";
			echo "<script language='javascript'>
							alert('Please select jpeg, gif, pjpeg or png file for wallpaper.')
						</script>";	
		}
	}
?>
