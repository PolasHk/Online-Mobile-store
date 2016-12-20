				 <?php
					include "connection.php";
					$sql=mysql_query("select * from dd_category where Enable='T'");
	
					while($row=mysql_fetch_array($sql))
					{
						if($row[0]==1)
						{
							echo "<li><a href='Nokia.php'>".$row[1]."</a></li>";
						}
						else if($row[0]==2)
						{
							echo "<li><a href='Samsung.php'>".$row[1]."</a></li>";
						}
						else if($row[0]==3)
						{
							echo "<li><a href='Sony.php'>".$row[1]."</a></li>";
						}
						else if($row[0]==4)
						{
							echo "<li><a href='Motorola.php'>".$row[1]."</a></li>";
						}
						else if($row[0]==5)
						{
							echo "<li><a href='LG.php'>".$row[1]."</a></li>";
						}
					}
						
				?>
    