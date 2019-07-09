			<?php
				  if (isset($_GET['id']))
			{
			include('config.php');
		
			$id=$_GET['id'];
			$status='Delivered';
			mysql_query("UPDATE beverage_orders SET status='$status' WHERE id = $id");
			header("location: vieworders.php");
			exit();
			}
			?>