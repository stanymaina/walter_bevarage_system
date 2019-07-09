<?php
			if (isset($_GET['id']))
			{
	
	
			include('config.php');
		
			$id=$_GET['id'];
			mysql_query("DELETE FROM beverage_products WHERE id='$id'");
			header("location: viewproducts.php");
			exit();
			}
			?>
			
			
