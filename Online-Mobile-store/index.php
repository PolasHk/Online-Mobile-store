<?php
	include('connection.php');
	session_start();
	if(!isset($_SESSION['id']))
	{
			include "index0.php";
	}
	else
	{
			include("index1.php");
	}
?>
