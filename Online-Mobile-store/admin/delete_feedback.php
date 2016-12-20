<?php
	include "connection.php";
	
	$id1=$_REQUEST['id'];
	
	mysql_query("delete from dd_feedback where id=$id1");
	
	echo "<script language='javascript'>
				alert('Error :- Feedback is deleted successfully.')
				window.location.assign('admin_feedback.php')
			</script>";

?>