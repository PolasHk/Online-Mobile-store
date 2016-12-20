<?php
	include "connection.php";
	$pid = $_REQUEST["id"];
	
	$q = mysql_query("SELECT * FROM `dd_product` where p_id = $pid");
	$r = mysql_fetch_array($q);
	$file1 = $r["5"];
	$file2 = $r["6"];
	if(file_exists("../upload/product/$file1"))
	{
		unlink("../upload/product/$file1");
	}
	if(file_exists("../upload/product/big/$file2"))
	{
		unlink("../upload/product/big/$file2");
	}
	
	
	$_REQUEST["cid"];
	
	mysql_query("delete from dd_product where p_id = $pid");
	
	if($_REQUEST["cid"]==1)
	{
		header ("location:admin_nokia.php");
	}
	else if($_REQUEST["cid"]==2)
	{
		header ("location:admin_samsung.php");
	}
	else if($_REQUEST["cid"]==3)
	{
		header ("location:admin_sony.php");
	}
	else if($_REQUEST["cid"]==4)
	{
		header ("location:admin_motorola.php");
	}
	else if($_REQUEST["cid"]==5)
	{
		header ("location:admin_lg.php");
	}
		
?>

