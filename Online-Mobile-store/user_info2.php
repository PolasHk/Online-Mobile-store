
<?php	
	
		include "connection.php";
		session_start();
		if(!isset($_SESSION['id']))
		{
			header("Location:purchase_login.php");
		}
		$user=$_SESSION['user'];	
		if(($_POST['t1'])!=($_SESSION['user']))
		{
			echo "<script language='javascript'>
				alert('Error :- Username is not match with current username')	
				window.location.assign('user_info1.php')
			</script>";	
		}
		
		
			$qry = "insert into dd_ordered_userinfo values('".$_POST['t1']."', '".$_POST['t2']."', '".$_POST['t3']."',   					   			'".$_POST['t4']."', '".$_POST['t5']."', '".$_POST['t6']."')";
		
			mysql_query($qry);
			
			echo $user;
			echo $qry1="select * from dd_cart where user_name='".$user."'";
			$q11=mysql_query($qry1);
			
			while($row=mysql_fetch_array($q11))
			{
				echo $a="insert into dd_ordered values(NULL,'".$row[1]."','".$row[2]."','".$row[3]."',".$row[4].",".$row[5].")";
				$b=mysql_query($a);
			}
			mysql_query("delete from dd_cart where user_name='".$user."'"); 
			header("location:purchase_finish.php");
		
?>