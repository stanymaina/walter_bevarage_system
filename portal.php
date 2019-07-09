<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
	font-size: 24px;
}
-->
</style>
</head>

<body>

<table width="400" border="0" cellpadding="0" cellspacing="0">
<?php

				  if (isset($_GET['id']))
			{
	
	
			include('config.php');
		
			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM beverage_products WHERE product_id = $id and status='available'");

			$row3 = mysql_fetch_array($result);

  echo '<tr>';
    echo '<td width="80"><img alt="Pizza" src="images/pizza/'.$row3['product_photo'].'" /></td>';
    echo '<td width="200"><span class="style1">'.'</span></td>';
	echo '<td width="120"></span></td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td width="80"><input name="name" type="text" value="'.$row3['product_name'].'" readonly/><input name="ingre" type="hidden" value="'.$row3['product_ingredients'].'"/><input name="ids" type="hidden" value="'.$row3['id'].'"/></td>';
	echo '<td width="120"></span></td>';
  echo '</tr>';
  }
			?>

</table>
<br />
  <label style="color:#000000;"></label>
<br />
<table width="400" border="0" cellpadding="0" cellspacing="0" style="color:#000000;"> 
  <tr>
   
    <td width="179">Size</td>
    <td width="128">Price</td>
    <td width="93">Quantity</td>
  </tr>
  <?php

				  if (isset($_GET['id']))
			{
	
	
			include('config.php');

		
			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM beverage_products WHERE product_id = $id");

			while($row3 = mysql_fetch_array($result))
  			{
			
			$resultq = mysql_query("SELECT * FROM inventory WHERE product_id LIKE '%".$id."%'");
		
			while($rows = mysql_fetch_array($resultq))
{ 
$qwerty=$rows['qtyleft'];
}		
if ($qwerty!=0){			
			
			
			
  echo '<tr>';
 ?>
<form action="saveorder.php" method="post">
<input name="id" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>" />
<input name="transcode" type="hidden" value="<?php echo $_SESSION['SESS_FIRST_NAME']; ?>" />
<?php
    echo '<td>'.$row3['product_size_name'].'</td>';
    echo '<td>'.$row3['product_price'].'</td>';
	echo "<input type='hidden' name='pr' value='".$row3['product_price']."'>";
	echo "<input type='hidden' name='ps' value='".$row3['product_size_name']."'>";
	echo "<input type='hidden' name='pn' value='".$row3['product_name']."'>";
	echo "<td><input type='text' size='5' name='qty'></td>";
    echo '<td>'.'<input name="butadd" type="image" value="'.$row3['id'].'" src="images/button.png" />'.'</td>';
  echo '</tr></form>';
  }
  else
  {
  echo 'not available';
  }
  
  			}
	
			}
			?>
</table>
</form>
</body>
</html>
