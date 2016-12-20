<?php	
	
		include "connection.php";
			
	
		if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/GIF") || ($_FILES["file"]["type"] == "image/JPEG") || ($_FILES["file"]["type"] == "image/PJPEG")))
		{
		
			if ($_FILES["file"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
			else
			{
				
				$imgname=$_FILES["file"]["name"] ;
				if (file_exists("../upload/product/" . $_FILES["file"]["name"]))
				{
					echo "<script language='javascript'>
							alert('File is already exist...')
						</script>";
				}
				else
				{
					if(move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/product/" . $_FILES["file"]["name"]));
					{
						$name=$_POST["t1"];
						$add=$_FILES["file"]["name"];
					
						//$qry="INSERT INTO `dd_wallpaper` (`w_name`, `w_path`) VALUES ('".$_POST["t1"]."', '".$_FILES["file"]["name"]."')";
						echo $qry;
						
						//mysql_query($qry);
						echo "<script language='javascript'>
								alert('File is uploaded successfully.')
							</script>";
					}	
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
	
?>