<?php
	include('connection.php');
	session_start();
	if(!isset($_SESSION['id']))
	{
			include "download_login.php";
	}
	else
	{
			include("download_home.php");
	}
?>
