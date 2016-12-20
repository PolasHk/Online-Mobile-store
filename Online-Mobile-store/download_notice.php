<?php
	session_start();
	if(!isset($_SESSION['id']))
	{
		header("Location:download.php");
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
		  <h2 id="searchForm"><font size="+2" color="#006633"><a href="logout.php">
            <?php session_start();
echo $_SESSION ['user'];?> Logout</a></font></h2>
  
    </a></font></h2>

      </div><!-- // Header -->
      
      <hr class="hidden" />
      
      <!-- Main content -->
      <div id="content">
        <!-- Left content part -->
        <div id="contentBlock" align="center">
          <h2 class="subheader biggest" align="center">Download Notice</h2>
		  </h2>
          <div class="item first">
		  
          <p>
           <?php
			$ft=$_GET['filetype'];
			$fpath=$_GET['fpath'];
				
			if(file_exists($fpath))
			{
				echo "<div class='in'><ul>";
				
				if($ft==1)
				{
					echo "&nbsp; &nbsp; &nbsp; &nbsp;<li><font color='#990033' size='+1'>".basename($fpath)  ."&nbsp;&nbsp;(&nbsp;".(filesize($fpath)/1024)."&nbsp;kb&nbsp;)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='file_download.php?fpath=$fpath&filetype=1'>download now</a></font></li><br><br>";
			  	}
			  	else if($ft==2)
				{
					echo "&nbsp; &nbsp; &nbsp; &nbsp;<li><font color='#990033' size='+1'>".basename($fpath)  ."&nbsp;&nbsp;(&nbsp;".(filesize($fpath)/1024)."&nbsp;kb&nbsp;)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='file_download.php?fpath=$fpath&filetype=2'>download now</a></font></li><br><br>";
			  	}
				else if($ft==3)
				{
					echo "&nbsp; &nbsp; &nbsp; &nbsp;<li><font color='#990033' size='+1'>".basename($fpath)  ."&nbsp;&nbsp;(&nbsp;".(filesize($fpath)/1024)."&nbsp;kb&nbsp;)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='file_download.php?fpath=$fpath&filetype=3'>download now</a></font></li><br><br>";
			  	}
				else if($ft==4)
				{
					echo "&nbsp; &nbsp; &nbsp; &nbsp;<li><font color='#990033' size='+1'>".basename($fpath)  ."&nbsp;&nbsp;(&nbsp;".(filesize($fpath)/1024)."&nbsp;kb&nbsp;)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='file_download.php?fpath=$fpath&filetype=4'>download now</a></font></li><br><br>";
			  	}
				else if($ft==5)
				{
					echo "&nbsp; &nbsp; &nbsp; &nbsp;<li><font color='#990033' size='+1'>".basename($fpath)  ."&nbsp;&nbsp;(&nbsp;".(filesize($fpath)/1024)."&nbsp;kb&nbsp;)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='file_download.php?fpath=$fpath&filetype=5'>download now</a></font></li><br><br>";
				}
				else
			 	{
					echo "<h4> <font color='orange'>Sory, No such file found</font></h4>";
				}
				echo "</h5></div>";
			}
			else
			{
				echo "<div class='in'><br><h4><font color='orange'>File is not Found</font></h4><br></div>";
			}
		  ?>
          </p>
          
          </div>
		  <!-- // Item -->
          <div class="in"> 
            <p>&nbsp;</p>
            <p><a href="feedback.php">FeedBack</a></p>
            <p>&nbsp;</p>
            <p>&nbsp; </p>
          </div>
          <!-- // Item -->
          <!-- // Item -->
        </div>
        <!-- // ContentBlock -->
        <hr class="hidden" />
        <!-- Right sidebox -->
        
         <div id="rightBlock">
           <div class="box submenu">
             <h3 class="subheader">Download</h3>
             <div class="in">
               <ul>
                 <li><a href="song.php">Bollywood Song</a></li>
                 <li><a href="video.php">Videos</a></li>
                 <li><a href="game.php">Games</a></li>
                 <li><a href="wallpaper.php">Wallpapers</a></li>
                 <li><a href="rington.php">Ringtones</a></li>
               </ul>
             </div>
           </div>
         </div>
        <!-- Right sidebox -->
      </div>
      <!-- // Content -->
      
    <hr class="hidden noprint" />
      
      <!-- Main menu and submenu -->
      <div id="menu">
        <ul id="mainMenu">
          <li><a href="index.php"> Home</a></li>
          <li><a href="pricelist.php">Price List </a></li>
          <li><a href="purchase.php">Purchase</a></li>
          <li><strong>Download</strong></li>
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
