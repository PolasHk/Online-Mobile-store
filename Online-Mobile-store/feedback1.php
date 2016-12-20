<?php	
	
		include "connection.php";	
		$qry = "insert into dd_feedback values(NULL,'".$_POST['t1']."', '".$_POST['r1']."','".$_POST['t2']."', '".$_POST['t3']."', '".$_POST['t4']."', '".$_POST['t5']."', '".$_POST['t6']."', '".$_POST['t7']."')";
		mysql_query($qry) or die(mysql_error()) ;
		
		echo "<script language='javascript'>
				alert('Your feedback is submited.')
				window.location.assign('feedback.php')
			</script>";		
?>