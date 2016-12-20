<?PHP
	include "connection.php";
	$user = $_REQUEST["user"];
	
	mysql_query("delete from dd_ordered where user_name = '$user'") or die(mysql_error());
	mysql_query("delete from dd_ordered_userinfo where user_id = '$user'") or die(mysql_error());
	
	header("location:admin_order.php");
	
?>