<?php
	$path=$_server['DOCUMENT_ROOT']."/upload/song/";
	$fullpath=$path.$_GET["file"];
	//if($fd=fopen($fullpath,"p"))
	//{
		/*$size=filesize($fullpath);*/
		$path_parts=pathinfo($fullpath);
		$ext=strtolower($path_parts["extention"]);
		
		echo $ext='.mp3';
		switch($ext)
		{
			case ".mp3":
				header("content type:song");
				header("content-disposition:attechment;filename=\" ".$path_parts["basename"]."\"");
				readfile($fullpath);
			break;
			default;
				echo "error";
				//header("content type:application/octent-diaposition:filename=\" "$path_parts["basename"]."\"");
		}
		/*	header("content-length:$size");
			header("content control:private");
			while(!feof($fd))
			{
				$buffer=fread($fd,2048);
				echo $buffer;
			}*/
	//}
	//fclose($fd);
	//exit;
?>
		