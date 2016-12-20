				<?php 
				  	
					include("connection.php");
					session_start();
					$id=$_SESSION['id'];
					$qry=mysql_query("select * from dd_cart where user_name=$id");
					$no=mysql_num_rows($qry);
					echo "Items are selected ( $no )";
					
				?>          