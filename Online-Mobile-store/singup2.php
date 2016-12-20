<?php	
	
		include "connection.php";	
	
		$dob=$_POST["s3"]."/".$_POST["s2"]."/".$_POST["s1"];
		
		$un=$_POST["t7"];
		
		
		$r=mysql_query("select * from dd_user_login where user='".$un."'");
		$n=mysql_num_rows($r);
		
		
		if($n > 0)
		{
		echo "<script language='javascript'>
				alert('Error :- Username are alrady exist plz change user id.')
				window.location.assign('signup1.php')
			</script>";		
		}
		else
		{
			$target = "upload/profile_images/" ;
			$target = $target . basename($_FILES['uploaded']['name']) ;	
			
			if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target))
			{
				echo "<script language='javascript'>
					alert('Join us Sussesfully Please Login.')
					window.location.assign('index.php')
				</script>";	
			}
			$type="client";   
		
		$qry = "insert into dd_user values(NULL,'".$_POST['t1']."', '".$_POST['t2']."', '".$dob."', '".$_POST['r1']."', '".$_POST['t3']."', '".$_POST['t4']."', '".$_POST['t5']."', '".$_POST['t6']."', '".$_POST['t7']."', '".$_POST['t8']."','".$_FILES['uploaded']['name']."')";
			mysql_query($qry);
			
			
			
			$u=$_POST['t7'];
			$p=$_POST['t8'];
		$q="insert into dd_user_login values(NULL,'$u','$p')";
		mysql_query($q) or die ("Error in query");		
		}
?>