<?php
	include "connection.php";
	
	$id1=$_REQUEST['id'];
	
	mysql_query("delete from dd_cart where id=$id1");
	
	header("location:cart.php");

?>