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
	<script language="javascript">
	function check_blank()
	{
		a=new Array(2);
		a[0]=f1.t1.value;
		a[1]=f1.file.value;
		
		
		b=new Array(2);
		b[0]="File name";
		b[1]="Select File";
		
		var test="";
		var c;
		for(x=0;x<=1;x++)
		{
			if(a[x]=="")
			{
				test=test+"\n"+b[x];
				c="true";
			}	
		}
		
		if(c=="true")
		{
			alert("Error :-Plz. fill "+test);
		}
		else 
		{
				if(confirm("Sure, Upload this file?"))
				{
					f1.submit();
				}
				else
				{
					f1.reset();
				}
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
		 <h2 class="subheader biggest">Edit Song   </h2>
          <div class="item first">
            <div class="in">
              <h6 class="subheader biggest" style="font-size:18px;">
               
			   <?php
			    
                echo "<form action='' method='post' id='f1' enctype='multipart/form-data'>
                    <p>&nbsp;</p>
                   
					<p>File  Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type='text' name='t1'  maxlength='30' size='15' style='background-color:#CCCCCC;'/>
                    </p>
                    <p>Select File  &nbsp;&nbsp;
                      <input type='file' name='file' id='file' size='10' style='background-color:#CCCCCC;'/>
                    </p>
                    <p>
                      <input name='submit' type='submit' value='Save'/>
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
            <h3 class="subheader">Download</h3>
            <div class="in">
              <ul>
                <li><a href="admin_song.php"><font color="#009933">Songs</font></a></li>
                <li><a href="admin_video.php">Videos</a></li>
                <li><a href="admin_game.php">Games</a></li>
                <li><a href="admin_wallpaper.php">Wallpapers</a></li>
                <li><a href="admin_rington.php">Ringtones</a></li>
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
		$filename=$_POST['file'];
		$q=mysql_query("select * from dd_song where s_path=$filename");
		$no=mysql_num_rows($q);
		if($no <= 0)
		{
			if ((($_FILES["file"]["type"] == "song/mpeg")))
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
						move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/song" . $_FILES["file"]["name"]);
						
						$name=$_POST['t1'];
						$add=$_FILES["file"]["name"];
						
						$qry="INSERT INTO `dd_song`  VALUES (NULL,$name, $add)";
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
								alert('Please select .mp3 file for song.')
							</script>";	
			}

		}
	}

?>