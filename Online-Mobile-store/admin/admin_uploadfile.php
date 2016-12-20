<?php

if(isset($_POST['submit']))
{
	echo include("connection.php");
	$type = $_POST['s1'];
	
	if($type == 'Song')
	{
	
		if ((($_FILES["file"]["type"] == "song/mpeg")))
		{
		
			if ($_FILES["file"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
			else
			{
				
				$imgname=$_FILES["file"]["name"] ;
				if (file_exists("../upload/song/" . $_FILES["file"]["name"]))
				{
					echo "<script language='javascript'>
							alert('File is already exist...')
						</script>";
				}
				else
				{
					move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/song" . $_FILES["file"]["name"]);
					
					$name=$_POST['t1'];
					$add=$_FILES["file"]["name"];
					
					$qry="INSERT INTO `dd_song` (`w_name`, `w_path`) VALUES ($name, $add)";
					echo $qry;
					
					mysql_query($qry);
					echo "<script language='javascript'>
							alert('File is uploaded successfully.')
						</script>";
					
				}
			}
		}
		else
		{
			echo"<br>";
			echo"<br>";
			echo "<script language='javascript'>
							alert('Please select .mp3 file for song.')
						</script>";	
		}
	}
	else 	if($type == 'Video')
	{
	
		if ((($_FILES["file"]["type"] == "Video/mpeg")))
		{
		
			if ($_FILES["file"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
			else
			{
				
				$imgname=$_FILES["file"]["name"] ;
				if (file_exists("../upload/video/" . $_FILES["file"]["name"]))
				{
					echo "<script language='javascript'>
							alert('File is already exist...')
						</script>";
				}
				else
				{
					move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/video/" . $_FILES["file"]["name"]);
					
					$name=$_POST['t1'];
					$add=$_FILES["file"]["name"];
					
					$qry="INSERT INTO `dd_video` (`w_name`, `w_path`) VALUES ($name, $add)";
					echo $qry;
					
					mysql_query($qry);
					echo "<script language='javascript'>
							alert('File is uploaded successfully.')
						</script>";
					
				}
			}
		}
		else
		{
			echo"<br>";
			echo"<br>";
			echo "<script language='javascript'>
							alert('Please select mp4 file for video.')
						</script>";	
		}
	}
	else
		if($type == 'Game')
	{
	
		if ((($_FILES["file"]["type"] == "Application/jar") || ($_FILES["file"]["type"] == "application/swf") || ($_FILES["file"]["type"] == "application/jed")))
		{
		
			if ($_FILES["file"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
			else
			{
				
				$imgname=$_FILES["file"]["name"] ;
				if (file_exists("../upload/game/" . $_FILES["file"]["name"]))
				{
					echo "<script language='javascript'>
							alert('File is already exist...')
						</script>";
				}
				else
				{
					move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/game/" . $_FILES["file"]["name"]);
					
					$name=$_POST['t1'];
					$add=$_FILES["file"]["name"];
					
					$qry="INSERT INTO `dd_game` (`w_name`, `w_path`) VALUES ($name, $add)";
					echo $qry;
					
					mysql_query($qry);
					echo "<script language='javascript'>
							alert('File is uploaded successfully.')
						</script>";
					
				}
			}
		}
		else
		{
			echo"<br>";
			echo"<br>";
			echo "<script language='javascript'>
							alert('Please select .jar, .swf or .jed file for Game.')
						</script>";	
		}
	}
	else
		if($type == 'Wallpaper')
	{
	
		if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg")))
		{
		
			if ($_FILES["file"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
			else
			{
				
				$imgname=$_FILES["file"]["name"] ;
				if (file_exists("../upload/wallpaper/" . $_FILES["file"]["name"]))
				{
					echo "<script language='javascript'>
							alert('File is already exist...')
						</script>";
				}
				else
				{
					move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/wallpaper/" . $_FILES["file"]["name"]);
					
					$name=$_POST['t1'];
					$add=$_FILES["file"]["name"];
					
					$qry="INSERT INTO `dd_wallpaper` (`w_name`, `w_path`) VALUES ($name, $add)";
					echo $qry;
					
					mysql_query($qry);
					echo "<script language='javascript'>
							alert('File is uploaded successfully.')
						</script>";
					
				}
			}
		}
		else
		{
			echo"<br>";
			echo"<br>";
			echo "<script language='javascript'>
							alert('Please select jpeg, gif, pjpeg file for wallpaper.')
						</script>";	
		}
	}
	else
		if($type == 'Ringtone')
	{
	
		if ((($_FILES["file"]["type"] == "song/mpeg")))
		{
		
			if ($_FILES["file"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
			else
			{
				
				$imgname=$_FILES["file"]["name"] ;
				if (file_exists("../upload/rington/" . $_FILES["file"]["name"]))
				{
					echo "<script language='javascript'>
							alert('File is already exist...')
						</script>";
				}
				else
				{
					move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/rington/" . $_FILES["file"]["name"]);
					
					$name=$_POST['t1'];
					$add=$_FILES["file"]["name"];
					
					$qry="INSERT INTO `dd_rington` (`w_name`, `w_path`) VALUES ($name, $add)";
					echo $qry;
					
					mysql_query($qry);
					echo "<script language='javascript'>
							alert('File is uploaded successfully.')
						</script>";
					
				}
			}
		}
		else
		{
			echo"<br>";
			echo"<br>";
			echo "<script language='javascript'>
							alert('Please select .mp3 file for ringtone.')
						</script>";	
		}
	}
	else
	{
		echo "<script language='javascript'>
						alert('Invalid file')
					</script>";	
	}
	header("location:admin_download.php");
}
?>