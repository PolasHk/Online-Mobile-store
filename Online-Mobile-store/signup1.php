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
		a=new Array(10);
		a[0]=f1.t1.value;
		a[1]=f1.t2.value;
		a[2]=f1.t3.value;
		a[3]=f1.t4.value;
		a[4]=f1.t5.value;
		a[5]=f1.t6.value;
		a[6]=f1.t7.value;
		a[7]=f1.t8.value;
		a[8]=f1.t9.value;
		a[9]=f1.uploaded.value;

		b=new Array(10);
		b[0]="First Name";
		b[1]="Last Name";
		b[2]="Country";
		b[3]="State";
		b[4]="Mobile No.";
		b[5]="Email ID";
		b[6]="User ID";
		b[7]="Password";
		b[8]="Confirm Password";
		b[9]="Your Photo";

		var test="";
		var c;
		for(x=0;x<=9;x++)
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
			if(f1.t8.value==f1.t9.value)
			{
		  		if(confirm("Are you want to sign up ?"))
				{
					f1.submit();
				}
				else
				{
					f1.reset();
				}
			}
			else
			{
				alert("Error :- Password and Confirm Password are not match !");
				f1.t8.value="";
				f1.t9.value="";


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
.style1 {color: #000000}
.style3 {color: #FFFF00; font-family: "Times New Roman", Times, serif; }
.style5 {color: #FFFFFF; font-family: "Times New Roman", Times, serif; }
.style6 {	color: #FFFFFF;
	font-weight: bold;
}
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
    </div>
      <!-- // Header -->
	  <div id="menu">
        <ul id="mainMenu">
          <li><a href="index.php">Home</a></li>
		  <li><a href="pricelist.php">Price List </a></li>
          <li><a href="purchase.php">Purchase</a></li>
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
		  <form name="f1" method="post" action="singup2.php" enctype="multipart/form-data">
      	    <table width="543" height="776" align="center">
              <tr align="center">
                <td height="71" colspan="4"><font color="#0000FF" size="+3">&nbsp; </font>
                    <div class="content_header_01 style3"><font size="+3" color="#CC3300">Sign Up</font></div></td>
              </tr>
              <tr>
                <td width="194" rowspan="1" align="left"><span class="style5"><font size="+2">First Name</font></span></td>
                <td colspan="4" align="left">
                  <input  name="t1" type="text"  maxlength="50" size="50" style="background-color:#CCCCCC" onkeypress="char_check(event)" />                </td>
              </tr>
              <tr>
                <td align="left"><span class="style5"><font size="+2">Last Name</font></span></td>
                <td colspan="3" align="left"><input  name="t2" type="text"  style="background-color:#CCCCCC" size="50" maxlength="50" onclick="char_check(event)" /></td>
              </tr>
              <tr>
                <td height="37" align="left"><span class="style5"><font size="+2">Birth Date</font></span></td>
                <td width="102"><select name="s1">
                  <?php
   		for($i=1;$i<=31;$i++)
		{
			echo "<option>".$i."</option>";
		}
   ?>
                </select></td>
                <td><select name="s2">
                    <?php
   		for($i=01;$i<=12;$i++)
		{
			echo "<option>".$i."</option>";
		}
   ?>
                </select></td>
                <td width="87"><select name="s3">
                    <?php
   		for($i=1950;$i<=2050;$i++)
		{
			echo "<option>".$i."</option>";
		}
   ?>
                </select></td>
              </tr>
              <tr>
                <td height="41" align="left"><span class="style5"><font size="+2">Gender</font></span></td>
                <td><input type="radio" name="r1" checked="checked" value="Male"/>
                    <span class="style6"><font size="2">Male</font></span> </td>
                <td width="140"><input type="radio" name="r1" value="Female"/>
                    <span class="style6"><font size="2">Female</font></span> </td>
              </tr>
              <tr>
                <td height="43" align="left"><span class="style5"><font size="+2">Country</font></span></td>
                <td colspan="2"><input name="t3"  type="text" style="background-color:#CCCCCC" size="30" maxlength="30"  onclick="char_check(event)" /></td>
              </tr>
              <tr>
                <td height="37" align="left"><span class="style5"><font size="+2">City</font></span></td>
                <td colspan="2"><input name="t4" type="text" style="background-color:#CCCCCC" size="30" maxlength="30"  onclick="char_check(event)" /></td>
              </tr>
              <tr>
                <td height="46" align="left"><span class="style5"><font size="+2">Contact No.</font></span></td>
                <td colspan="2"><input name="t5" type="text" style="background-color:#CCCCCC" size="30" maxlength="10" onclick="num_check(event)"/></td>
              </tr>
              <tr>
                <td height="37" align="left"><span class="style5"><font size="+2">Email id </font></span></td>
                <td colspan="2"><input name="t6" type="text" style="background-color:#CCCCCC" size="30" maxlength="50"/></td>
              </tr>
              <tr>
                <td height="52" colspan="4" align="center" class="style1"><div class="content_header_01 style3"><span style="font-weight: bold;"><font size="+3">Your Account</font></span></div></td>
              </tr>
              <tr>
                <td height="46" align="left"><span class="style5"><font size="+2">User Id </font></span></td>
                <td colspan="2"><input name="t7" type="text" style="background-color:#CCCCCC" size="20" maxlength="10"/></td>
              </tr>
              <tr>
                <td height="46" align="left"><span class="style5"><font size="+2">Password</font></span></td>
                <td colspan="2"><input name="t8" type="password" style="background-color:#CCCCCC" size="20" maxlength="10"/></td>
              </tr>
              <tr>
                <td height="52" align="left"><span class="style5"><font size="+2">Confirm Password </font></span></td>
                <td colspan="2"><input name="t9" type="password" style="background-color:#CCCCCC" size="20" maxlength="10"/></td>
              </tr>
      	      <tr>
                <td height="52" align="left"><span class="style5"><font size="+2">Your Photo</font></span></td>
      	        <td colspan="2"><input type="file" name="uploaded" style="background-color:#CCCCCC" /></td>
   	          </tr>
              <tr> </tr>
              <tr align="center">&nbsp;&nbsp;&nbsp;
                <td  colspan="3"><label></label>
                    <br />
                  <br />
                    <input name="button" type="button"  onclick="check_blank()"  value="I agree create my account"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" name="Reset" value="    Reset    " /></td>
              </tr>
      	      <tr>
      	        <td height="56" colspan="3" align="center"><font size="+3" color="#FFFFFF"><a href="index.php">Home</a></font></td>
   	          </tr>
              <tr>
                <td></tr></td>
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
