<?php
	include('connection.php');
	session_start();
	if(!isset($_SESSION['id']))
	{
			include "p_login.php";
	}
	else
	{
			include("pricelist0.php");
	}
?>
