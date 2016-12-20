<?php
	include "connection.php";
	session_start();
	$id=$_SESSION['user'];
	
	mysql_query("delete from dd_cart where user_name='".$id."'");
		

		header("location:cart.php");

?>