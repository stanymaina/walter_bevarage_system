<?php
			if (isset($_GET['id']))
			{
	
	
			include('config.php');
		
			$id=$_GET['id'];
			mysql_query("DELETE FROM beverage_members WHERE id='$id'");
			header("location: viewmembers.php");
			exit();
			}
			?>
			
			
