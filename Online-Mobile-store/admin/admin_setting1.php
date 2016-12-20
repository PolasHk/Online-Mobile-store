<?php	
	
		include "connection.php";	
		
		$id=$_POST['t1'];
		$pass=$_POST['t2'];
		
		$q="select * from admin_login where admin='".$id."' and pass='".$pass."'";
		$r=mysql_query($q);
		$n=mysql_num_rows($r);
		
		
		if($n <= 0)
		{
		echo "<script language='javascript'>
				alert('Error :- Error can't match login/password.')
				window.location.assign('admin_setting.php')
			</script>";
		}
		else
		{
			$newpass=$_POST['t3'];
			$q="update admin_login set pass='".$newpass."' where admin=$id";
			mysql_query($q) or die ("Error in query");
			
			echo "<script language='javascript'>
				alert('Password is changed successfully')
				window.location.assign('admin_setting.php')
			</script>";
		}
?>