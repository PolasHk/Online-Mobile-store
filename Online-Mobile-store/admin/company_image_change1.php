<?php	
	
	if(isset($_POST['submit']))
	{
		include "connection.php";
		$type=$_REQUEST["type"];
		if ((($_FILES["file1"]["type"] == "image/gif") || ($_FILES["file1"]["type"] == "image/jpeg") || ($_FILES["file1"]["type"] == "image/pjpeg") || ($_FILES["file1"]["type"] == "image/png")))
		{
		
			if ($_FILES["file1"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file1"]["error"] . "<br />";
			}
			else
			{
				if (file_exists("../upload/category/" . $_FILES["file1"]["name"]))
				{
					echo "<script language='javascript'>
							alert('File is already exist...')
							window.location.assign('company_image_change.php?')
						</script>";
				}
				else
				{
					if((move_uploaded_file($_FILES["file1"]["tmp_name"],"../upload/category/" . $_FILES["file1"]["name"])));
					{
						$filename=$_FILES["file1"]["name"];
						if($_REQUEST["type"]=="Nokia")
						{
							mysql_query("UPDATE `dd_category` SET `picture` = '$filename' WHERE `c_id` =1");
							echo "<script language='javascript'>
								alert('Updated successfully...')
								window.location.assign('admin_nokia.php')
							</script>";
						}
						else if($_REQUEST["type"]=="Samsung")
						{
							mysql_query("UPDATE `dd_category` SET `picture` = '$filename' WHERE `c_id` =2");
							echo "<script language='javascript'>
								alert('Updated successfully...')
								window.location.assign('admin_samsung.php')
							</script>";
						}	
						else if($_REQUEST["type"]=="Sony")
						{
							mysql_query("UPDATE `dd_category` SET `picture` = '$filename' WHERE `c_id` =3");
							echo "<script language='javascript'>
								alert('Updated successfully...')
								window.location.assign('admin_sony.php')
							</script>";
						}
						else if($_REQUEST["type"]=="Motorola")
						{
							mysql_query("UPDATE `dd_category` SET `picture` = '$filename' WHERE `c_id` =4");
							echo "<script language='javascript'>
								alert('Updated successfully...')
								window.location.assign('admin_motorola.php')
							</script>";
						}
						else if($_REQUEST["type"]=="LG")
						{
							mysql_query("UPDATE `dd_category` SET `picture` = '$filename' WHERE `c_id` =5");
							echo "<script language='javascript'>
								alert('Updated successfully...')
								window.location.assign('admin_lg.php')
							</script>";
						}							
					}	
				}
			}
		}
		else
		{
			echo"<br>";
			echo"<br>";
			echo "<script language='javascript'>
							alert('Please select jpeg, gif, pjpeg or png file for wallpaper.')
							window.location.assign('company_image_change.php?type=$type')
						</script>";	
		}

		
		
	}
?>
