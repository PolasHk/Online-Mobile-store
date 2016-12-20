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
		a[6]=f1.t7.value;
		
		b=new Array(6);
		b[0]="Name";
		b[1]="City";
		b[2]="State";
		b[3]="Contry";
		b[4]="Contect No.";
		b[5]="Email ID";
		b[6]="Comment";
		
		var test="";
		var c;
		for(x=0;x<=6;x++)
		{
			if(a[x]=="")
			{
				test=test+","+b[x];
				c="true";
			}	
		}
		
		if(c=="true")
		{
			alert("Plz...Enter "+test);
		}
		else 
		{
			
					f1.submit();
				
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
        <h1 id="logotype">My Mobile Store</h1>
      </div>
      <!-- // Header -->
      
      <hr class="hidden" />
      
      <!-- Main content -->
      <div id="content">
        <!-- Left content part -->
        
        <!-- // ContentBlock -->
        <hr class="hidden" />
        <!-- Right sidebox -->
        <!-- Right sidebox -->
        <div class="item first">
          <div class="in1"  align="center"> <font size="+1" color="#009933">
            <form action="feedback1.php" method="post" name="f1">
			  <table width="200" height="500" border="0%" align="center">
                <tr a align="center">
                  <td colspan="2"><h2 class="subheader biggest" align="center">Fill Your Feedback</h2></td>
                </tr>
                <tr >
                  <td align="right">Name</td>
                  <td>:
                    <input type="text" name="t1" maxlength="30" size="30" style="background-color:#CCCCCC" onkeypress="char_check(event);"/></td>
                </tr>
                <tr>
                  <td align="right">Gender</td>
                  <td>:&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="r1" value="Male" checked="checked"/>
                    Male
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="r1" value="Female" />
                    Female </td>
                </tr>
                <tr>
                  <td align="right">City</td>
                  <td>:
                    <input type="text" name="t2" maxlength="30" size="30" style="background-color:#CCCCCC" onkeypress="char_check(event)"/></td>
                </tr>
                <tr>
                  <td align="right">State</td>
                  <td>:
                    <input type="text" name="t3" maxlength="30" size="30" style="background-color:#CCCCCC" onkeypress="char_check(event)"/></td>
                </tr>
                <tr>
                  <td align="right">Country</td>
                  <td>:
                    <input type="text" name="t4" maxlength="30" size="30" style="background-color:#CCCCCC" onkeypress="char_check(event)"/></td>
                </tr>
                <tr>
                  <td align="right">Contact No.</td>
                  <td>:
                    <input type="text" name="t5" maxlength="15" size="30" style="background-color:#CCCCCC" onkeypress="num_check(event)"/></td>
                </tr>
                <tr>
                  <td align="right">E-mail ID</td>
                  <td>:
                    <input type="text" name="t6" maxlength="50" size="30" style="background-color:#CCCCCC" /></td>
                </tr>
                <tr valign="top" >
                  <td height="106" align="right">Comments</td>
                  <td >:                  
                  <textarea name="t7" style="background-color:#CCCCCC" rows="5" cols="30"></textarea></td>
                </tr>
                <tr align="center">
                  <td colspan="2">
				  		<input name="button" type="button"  onclick="check_blank()"  value="  Submit Feedback  "/> 
				  		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  		<input type="reset" name="reset" value="   Reset   "  />
				  </td> 
                </tr>
              </table>
			  </table>
            </form>
          </font> </div>
        </div>
        <div align="center">
	  		<p>&nbsp;</p>
	  		<p>&nbsp;</p>
	  		<p>&nbsp;</p>
      	</div>
      </div>
      
	  <!-- // Content -->
      <hr class="hidden noprint" />
      
      <!-- Main menu and submenu -->
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
