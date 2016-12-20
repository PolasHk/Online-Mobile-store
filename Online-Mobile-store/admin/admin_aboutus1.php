<?php	
	
		include "connection.php";	
		$a=$_POST['ta'];
		$q="update dd_aboutus set about='".$a."'";
		mysql_query($q) or die ("Error in query");
			
		echo "<script language='javascript'>
				alert('About us is successfully changed.')
				window.location.assign('admin_aboutus.php')
			</script>";		
		
?>