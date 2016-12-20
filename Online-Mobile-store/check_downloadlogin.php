<?php
	
		include "connection.php";		
		$id=trim($_POST['t1']);
		$pass=trim($_POST['t2']);
		$sql = mysql_query ("select * from dd_user_login where user='".$id."' and pass='".$pass."'");
		$num=mysql_num_rows($sql);
		if($num==0)
		{	
		
			echo "<script language='javascript'>
				alert('Error :- Username or Password is Invalid')	
				window.location.assign('download_login.php')
			</script>";	
			
		//header("location:index.php");	
		unset($id);
		}
		else
		{
			$row=mysql_fetch_array($sql,MYSQL_NUM);
			/*if($row[11]=="Administrator")
			{
				$_SESSION['id']=0;
				$user=$_POST['t1'];
				setcookie('usernm',$user);	
			 	header("location:frames.php");
			}
			else
			{
			*/	
				session_start();
				$_SESSION['id']=0;
				$_SESSION['user']=$id;
				$user=$_POST['t1'];
				setcookie('usernm',$user);	
			 	header("location:download_home.php?user=$user");
			//}
	}	
?>




	