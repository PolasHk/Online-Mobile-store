<?php
	include "connection.php";
	$id=$_REQUEST["id"];
	$file=$_REQUEST["file"];
	$type=$_REQUEST["type"];
	
	if($type=="Song")
	{
		mysql_query("delete from dd_song where s_id='$id'");
		if(file_exists("../upload/song/".$file))
		{
		 	unlink("../upload/song/".$file);
		}
		header("location:admin_song.php");
	}
	
	if($type=="Video")
	{
		mysql_query("delete from dd_video where v_id='$id'");
		if(file_exists("../upload/video/".$file))
		{
		 	unlink("../upload/video/".$file);
		}
		header("location:admin_video.php");
	}
	
	if($type=="Game")
	{
		mysql_query("delete from dd_game where g_id='$id'");
		if(file_exists("../upload/Game/".$file))
		{
		 	unlink("../upload/game/".$file);
		}
		header("location:admin_game.php");
	}
	
	if($type=="Wallpaper")
	{
		mysql_query("delete from dd_wallpaper where w_id='$id'");
		if(file_exists("../upload/wallpaper/".$file))
		{
		 	unlink("../upload/wallpaper/".$file);
		}
		header("location:admin_wallpaper.php");
	}
	
	if($type=="Ringtone")
	{
		mysql_query("delete from dd_rington where r_id='$id'");
		if(file_exists("../upload/rington/".$file))
		{
		 	unlink("../upload/rington/".$file);
		}
		header("location:admin_rington.php");
	}
	
	if($type=="Gallery")
	{
		mysql_query("delete from dd_gallery where id='$id'");
		if(file_exists("../upload/Gallery/".$file))
		{
		 	unlink("../upload/Gallery/".$file);
		}
		header("location:admin_gallery.php");
	}

?>