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
		 <h2 class="subheader biggest">Upload File  </h2>
          <div class="item first">
            <div class="in">
              
                <h6 class="subheader biggest" style="font-size:18px;">
                  <form action="" method="post" id="f1" enctype="multipart/form-data">
                    <p>&nbsp;</p>
                    <p>File Type  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <select name="s1" style="background-color:#CCCCCC;">
							<option>Song</option>
							<option>Video</option>
							<option>Game</option>
							<option>Wallpaper</option>
							<option>Ringtone</option>
							<option>Gallery</option>
						</select>
                    </p>
					<p>File  Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="t1"  maxlength="30" size="15" style="background-color:#CCCCCC;"/>
                    </p>
                    <p>Select File  &nbsp;&nbsp;
                      <input type="file" name="file" id="file" size="10" style="background-color:#CCCCCC;"/>
                    </p>
                    <p>
                      <input name="submit" type="submit" value="upload"/>
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
            <h3 class="subheader">Download</h3>
            <div class="in">
              <ul>
                <li><a href="admin_song.php">Songs</a></li>
                <li><a href="admin_video.php">Videos</a></li>
                <li><a href="admin_game.php">Games</a></li>
                <li><a href="admin_wallpaper.php">Wallpapers</a></li>
                <li><a href="admin_rington.php">Ringtones</a></li>
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

<?php

if(isset($_POST['submit']))
{
	include("connection.php");
	$type = $_POST['s1'];
	
	if($type == 'Song')
	{
	
		if ((($_FILES["file"]["type"] == "audio/mp3") || ($_FILES["file"]["type"] == "audio/mpeg") || ($_FILES["file"]["type"] == "audio/vnd.wave") || ($_FILES["file"]["type"] == "audio/3gpp") ))
		{
		
			if ($_FILES["file"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
			else
			{
				
				$imgname=$_FILES["file"]["name"] ;
				if (file_exists("../upload/song/" . $_FILES["file"]["name"]))
				{
					echo "<script language='javascript'>
							alert('File is already exist...')
						</script>";
				}
				else
				{
					if(move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/song/" . $_FILES["file"]["name"]));
					{
					
						$name=$_POST["t1"];
						$add=$_FILES["file"]["name"];
						
						$qry="INSERT INTO `dd_song` (`s_name`, `s_path`) VALUES ('".$name."', '".$add."')";
						echo $qry;
						
						mysql_query($qry);
						echo "<script language='javascript'>
								alert('File is uploaded successfully.')
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
							alert('Please select mp3, mp4 or wav file for song.')
						</script>";	
		}
	}
	else 	if($type == 'Video')
	{
	
		if ((($_FILES["file"]["type"] == "video/mpeg") || ($_FILES["file"]["type"] == "video/x-ms-wmv") || ($_FILES["file"]["type"] == "video/3gpp")))
		{
		
			if ($_FILES["file"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
			else
			{
				
				$imgname=$_FILES["file"]["name"] ;
				if (file_exists("../upload/video/" . $_FILES["file"]["name"]))
				{
					echo "<script language='javascript'>
							alert('File is already exist...')
						</script>";
				}
				else
				{
					move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/video/" . $_FILES["file"]["name"]);
					
					$name=$_POST["t1"];
					$add=$_FILES["file"]["name"];
					
					$qry="INSERT INTO `dd_video` (`v_name`, `v_path`) VALUES ('".$name."', '".$add."')";
					echo $qry;
					
					mysql_query($qry);
					echo "<script language='javascript'>
							alert('File is uploaded successfully.')
						</script>";
					
				}
			}
		}
		else
		{
			echo"<br>";
			echo"<br>";
			echo "<script language='javascript'>
							alert('Please select mp4, wmv or 3gp file for video.')
						</script>";	
		}
	}
	else
		if($type == 'Game')
	{
	
		if ((($_FILES["file"]["type"] == "application/java-archiv") || ($_FILES["file"]["type"] == "application/vnd.sun.j2me.app-descripton") || ($_FILES["file"]["type"] == "application/x-shockwave-flash") || ($_FILES["file"]["type"] == "application/vnd.symbian.install.sis.sisx") || ($_FILES["file"]["type"] == "application/x-java-archive")  || ($_FILES["file"]["type"] == "application/octet-stream")))
		{
		
			if ($_FILES["file"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
			else
			{
				
				$imgname=$_FILES["file"]["name"] ;
				if (file_exists("../upload/game/" . $_FILES["file"]["name"]))
				{
					echo "<script language='javascript'>
							alert('File is already exist...')
						</script>";
				}
				else
				{
					move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/game/" . $_FILES["file"]["name"]);
					
					$name=$_POST["t1"];
					$add=$_FILES["file"]["name"];
					
					$qry="INSERT INTO `dd_game` (`g_name`, `g_path`) VALUES ('".$name."', '".$add."')";
					echo $qry;
					
					mysql_query($qry);
					echo "<script language='javascript'>
							alert('File is uploaded successfully.')
						</script>";
					
				}
			}
		}
		else
		{
			echo"<br>";
			echo"<br>";
			echo "<script language='javascript'>
							alert('Please select .jar, .swf, .jed, .sis or .sisx  file for Game.')
						</script>";	
		}
	}
	else
		if($type == 'Wallpaper')
	{
	
		if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg")|| ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/bmp")))
		{
		
			if ($_FILES["file"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
			else
			{
				
				$imgname=$_FILES["file"]["name"] ;
				if (file_exists("../upload/wallpaper/" . $_FILES["file"]["name"]))
				{
					echo "<script language='javascript'>
							alert('File is already exist...')
						</script>";
				}
				else
				{
					move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/wallpaper/" . $_FILES["file"]["name"]);
					
					$name=$_POST["t1"];
					$add=$_FILES["file"]["name"];
					
					$qry="INSERT INTO `dd_wallpaper` (`w_name`, `w_path`) VALUES ('".$_POST["t1"]."', '".$_FILES["file"]["name"]."')";
					echo $qry;
					
					mysql_query($qry);
					echo "<script language='javascript'>
							alert('File is uploaded successfully.')
						</script>";
					
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
	else
		if($type == 'Ringtone')
	{
	
		if ((($_FILES["file"]["type"] == "audio/mp4") || ($_FILES["file"]["type"] == "audio/mpeg") || ($_FILES["file"]["type"] == "audio/vnd.wave") || ($_FILES["file"]["type"] == "audio/3gpp") ))
		{
			if ($_FILES["file"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
			else
			{
				
				$imgname=$_FILES["file"]["name"] ;
				if (file_exists("../upload/rington/" . $_FILES["file"]["name"]))
				{
					echo "<script language='javascript'>
							alert('File is already exist...')
						</script>";
				}
				else
				{
					move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/rington/" . $_FILES["file"]["name"]);
					
					$name=$_POST["t1"];
					$add=$_FILES["file"]["name"];
					
					$qry="INSERT INTO `dd_rington` (`r_name`, `r_path`) VALUES ('".$name."', '".$add."')";
					echo $qry;
					
					mysql_query($qry);
					echo "<script language='javascript'>
							alert('File is uploaded successfully.')
						</script>";
					
				}
			}
		}
		else
		{
			echo"<br>";
			echo"<br>";
			echo "<script language='javascript'>
							alert('Please select mp3, mp4 or wav file for ringtone.')
						</script>";	
		}
	}
	else
		if($type == 'Gallery')
	{
	
		if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/svg+xml") || ($_FILES["file"]["type"] == "image/tiff")))
		{
		
			if ($_FILES["file"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
			else
			{
				
				$imgname=$_FILES["file"]["name"] ;
				if (file_exists("../upload/Gallery/" . $_FILES["file"]["name"]))
				{
					echo "<script language='javascript'>
							alert('File is already exist...')
						</script>";
				}
				else
				{
					move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/Gallery/" . $_FILES["file"]["name"]);
					
					$name=$_POST["t1"];
					$add=$_FILES["file"]["name"];
					
					$qry="INSERT INTO `dd_gallery` (`name`, `path`) VALUES ('".$_POST["t1"]."', '".$_FILES["file"]["name"]."')";
					echo $qry;
					
					mysql_query($qry);
					echo "<script language='javascript'>
							alert('File is uploaded successfully.')
						</script>";
					
				}
			}
		}
		else
		{
			echo"<br>";
			echo"<br>";
			echo "<script language='javascript'>
							alert('Please select jpeg, gif, pjpeg, png svg or tiff file for gallery.')
						</script>";	
		}
	}
	
	else
	{
		echo "<script language='javascript'>
						alert('Invalid file.!')
					</script>";	
	}
}
?>