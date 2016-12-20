<?php
		
		include "connection.php";		
		$id=trim($_POST['t1']);
		$pass=trim($_POST['t2']);
		$sql = mysql_query ("select * from admin_login where admin='".$id."' and pass='".$pass."'");
		$num=mysql_num_rows($sql);
		if($num==0)
		{	
		
			echo "<script language='javascript'>
				alert('Error :- Login Name or Password is Invalid.')	
				window.location.assign('admin_login.php')
			</script>";	
			
			unset($id);
		}
		else
		{
		session_start();
		$_SESSION['admin']=$id;
		$_SESSION['id']=$id;
		header("location:admin_home.php");
		}	
?>
