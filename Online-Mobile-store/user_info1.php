<?php
	session_start();
	if(!isset($_SESSION['id']))
	{
		header("Location:purchase_login.php");
	}
	
	if($_REQUEST['count']==0)
	{
		echo "<script language='javascript'>
				alert('Error :- No item is selected.')	
				window.location.assign('cart.php')
			</script>";	
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
 	function char_check(e)
 	{ 	
		var code=e.keyCode;
		if(!((code>=65 && code<=90)||(code>=97 && code<=122)))
		{
			alert("Error :- Enter Only Characters.");
			e.keyCode=0;
		}
	}
	
	function num_check(e)
 	{ 	
		var code=e.keyCode;
		if(!(code>=47 && code<=58))
		{
			alert("Error :- Enter Only Numbers.");
			e.keyCode=0;
		}
	}
	
	function check_blank()
	{
		a=new Array(6);
		a[0]=f1.t1.value;
		a[1]=f1.t2.value;
		a[2]=f1.t3.value;
		a[3]=f1.t4.value;
		a[4]=f1.t5.value;
		a[5]=f1.t6.value;
		
		
		b=new Array(10);
		b[0]="User ID";
		b[1]="Country";
		b[2]="City";
		b[3]="Mobile No.";
		b[4]="Email ID";
		
		b[5]="Full Address";
		
		var test="";
		var c;
		for(x=0;x<=5;x++)
		{
			if(a[x]=="")
			{
				test=test+","+b[x];
				c="true";
			}	
		}
		
		if(c=="true")
		{
			alert("Plz. Enter "+test);
		}
		else
		{
			if(confirm("Are you want to purchase ?"))
			{
				f1.submit();
			}			
		}
		
	}			 
</script>

    <link rel="stylesheet" type="text/css" href="./css/default.css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/msie.css" /><![endif]-->
    <link rel="stylesheet" type="text/css" href="./css/print.css" media="print" />
    <link rel="shortcut icon" href="" />
    <style type="text/css">
<!--
.style3 {color: #FFFF00; font-family: "Times New Roman", Times, serif; }
.style5 {color: #FFFFFF; font-family: "Times New Roman", Times, serif; }
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
		<h2 id="searchForm"><font size="+2" color="#006633"><a href="logout.php">Logout</a></font></h2>
      </div>
      <!-- // Header -->
	  <div id="menu">
        <ul id="mainMenu">
          <li><a href="index.php">Home</a></li>
		  <li><a href="pricelist.php">Price List </a></li>
          <li><a href="purchase.php">Perchase</a></li>
          <li><a href="download.php">Download</a></li>		            
		  <li><a href="contact.php">Contact Us</a></li>
		  <li><a href="about.php">About Us</a></li>
        </ul>
      </div>
      
      
      <hr class="hidden" />
      
      <!-- Main content -->
      <div id="content">
        <!-- Left content part -->
        
        <!-- // ContentBlock -->
        <hr class="hidden" />
        <!-- Right sidebox -->
        <!-- Right sidebox -->
        <div align="center">
		  <form name="f1" method="post" action="user_info2.php" enctype="multipart/form-data">
      	    <table width="543" height="776" align="center">
              <tr align="center">
                <td height="71" colspan="4"><h2 class="subheader biggest" align="center">Your Information </h2></td>
              </tr>
              <tr>
               <tr>
                <td height="46" align="left"><span class="style5"><font size="+2">User Id</font></span></td>
                <td colspan="2"><input name="t1" type="text" style="background-color:#CCCCCC" size="20" maxlength="10"/></td>
              </tr>
               
                <tr>
                <td height="43" align="left"><span class="style5"><font size="+2">Country</font></span></td>
                <td colspan="2"><input name="t2"  type="text" style="background-color:#CCCCCC" size="30" maxlength="30"  onkeypress="char_check(event)" /></td>
              </tr>
              <tr>
                <td height="37" align="left"><span class="style5"><font size="+2">City</font></span></td>
                <td colspan="2"><input name="t3" type="text" style="background-color:#CCCCCC" size="30" maxlength="30"  onkeypress="char_check(event)" /></td>
              </tr>
              <tr>
                <td height="46" align="left"><span class="style5"><font size="+2">Mobile No</font></span></td>
                <td colspan="2"><input name="t4" type="text" style="background-color:#CCCCCC" size="30" maxlength="10" onkeypress="num_check(event)"/></td>
              </tr>
              <tr>
                <td height="37" align="left"><span class="style5"><font size="+2">Email id</font></span></td>
                <td colspan="2"><input name="t5" type="text" style="background-color:#CCCCCC" size="30" maxlength="50"/></td>
              </tr>
			  <tr>
			  	<td height="100" align="left"><span class="style5"><font size="+2">Full Address</font></span></td>
				<td height="100"><textarea name="t6" cols="30" rows="5" style="background-color:#CCCCCC"></textarea></td>
			  </tr>
              <tr> </tr>
              <tr align="center">&nbsp;&nbsp;&nbsp;
                <td  colspan="3"><label></label>
                    <br />
                  <br />
                    <input name="button" type="button"  onclick="check_blank()"  value="    I agre purchase   "/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" name="Reset" value="    Reset    " /></td>
              </tr>
			  <tr>
			  	<td colspan="2" align="center"><a href="cart.php"><font color="#00CC33" size="+1">Back</font></a></td>
			  </tr>
      	      
            </table>
		  </form>
        </div>
      </div>
      
	  <!-- // Content -->
      <hr class="hidden noprint" />
      
      <!-- Main menu and submenu -->
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
