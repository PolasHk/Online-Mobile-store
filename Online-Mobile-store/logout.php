<?php
	session_start();
	if(isset($_SESSION['id']))
	{
			include "connection.php";
			$id1=$_SESSION['id'];
			session_destroy();
			header("location:index.php");
	}
	else
	{
		echo "<script language='javascript'>
				window.history.back()
				</script>";	
	}
?>
