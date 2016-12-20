<?php
	
		$dpath=$_GET['fpath'];
		$type=$_GET['filetype'];
		
		header('Content-type: video/mpeg');
				header('Content-Disposition: attachment; filename="'.$dpath.'"');
				readfile($dpath);
				
		/*
		switch ($type)
		{
			case 1 :
				if(preg_match("/\.(mp3)$/i",basename($dpath)))
				{
					header('Content-type:audio/mpeg');
				}
				else if(preg_match("/\.(wav)$/i",basename($dpath)))
				{
					header('Content-type:audio/vnd.wave');
				}
				else if(preg_match("/\.(mp4)$/i",basename($dpath)))
				{
					header('Content-type:audio/mp4');
				}
				else if(preg_match("/\.(3gp)$/i",basename($dpath)))
				{
					header('Content-type:audio/3gpp');
				}
				header('Content-Disposition: attachment; filename='.basename($dpath));
				readfile($dpath);
								
			break;
			
			case 2 :
				if(preg_match("/\.(mp4)$/i",basename($dpath)))
				{
					header('Content-type:video/mpeg');
				}
				else if(preg_match("/\.(3gp)$/i",basename($dpath)))
				{
					header('Content-type:video/3gpp');
				}
				else if(preg_match("/\.(wmv)$/i",basename($dpath)))
				{
					header('Content-type:video/x-ms-wmv');
				}
				header('Content-Disposition: attachment; filename='.basename($dpath));
				readfile($dpath);
				
				
			break;
			
			case 3 :
				If(preg_match("/\.(swf)$/i",basename($dpath)))
				{
					header('Content-type:application/x-shockwave-flash');
				}
				else if(preg_match("/\.(jar)$/i",basename($dpath)))
				{
					header('Content-type:application/java-archiv');
				}
				else if(preg_match("/\.(jad)$/i",basename($dpath)))
				{
					header('Content-type:application/vnd.sun.j2me.app-descripton');
				}
				else if(preg_match("/\.(sisx)$/i",basename($dpath)))
				{
					header('Content-type:application/vnd.symbian.install.sis.sisx');
				}
				else if(preg_match("/\.(JAR)$/i",basename($dpath)))
				{
					header('Content-type:application/x-java-archive');
				}
				else if(preg_match("/\.(SISX)$/i",basename($dpath)))
				{
					header('Content-type:application/octet-stream');
				}
				header('Content-Disposition: attachment; filename='.basename($dpath));
				readfile($dpath);
				
			break;
			
			case 4 :
				if(preg_match("/\.(gif)$/i",basename($dpath)))
				{
					header('Content-type:image/gif');
				}
				else if(preg_match("/\.(jpg)$/i",basename($dpath)))
				{
					header('Content-type:image/jpeg');
				}
				else if(preg_match("/\.(png)$/i",basename($dpath)))
				{
					header('Content-type:image/png');
				}
				else if(preg_match("/\.(jpg)$/i",basename($dpath)))
				{
					header('Content-type:image/pjpeg');
				}
				header('Content-type:image/gif');
				header('Content-Disposition: attachment; filename='.basename($dpath));
				readfile($dpath);	
			break;
			
			case 5 :
				if(preg_match("/\.(mp3)$/i",basename($dpath)))
				{
					header('Content-type:audio/mpeg');
				}
				else if(preg_match("/\.(wav)$/i",basename($dpath)))
				{
					header('Content-type:audio/vnd.wave');
				}
				else if(preg_match("/\.(mp4)$/i",basename($dpath)))
				{
					header('Content-type:audio/mp4');
				}
				else if(preg_match("/\.(3gp)$/i",basename($dpath)))
				{
					header('Content-type:audio/3gpp');
				}
				header('Content-Disposition: attachment; filename='.basename($dpath));
				readfile($dpath);	
			break;
			
			default:
				echo "File not found";
			break;
		}*/
	
	/*$dir="/upload/song/";
	if (isset($_REQUEST['file']))
	{
		echo $file=$dir.$_REQUEST['file'];
		header("Content-type:song");
		echo basename($file);
		header("Content-disposition:attachment; filename = ".basename($file));
		readfile($file);
	}
	else
	{
		echo "File is not found";
	}*/
	
?>