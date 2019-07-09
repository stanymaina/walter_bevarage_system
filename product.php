<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Beverage ordering system</title>

<meta name="keywords" content="free website templates, CSS layout, Pizza Company Website, HTML CSS" />

<meta name="description" content="Pizza Company Website - free CSS website template, Free HTML CSS Layout" />

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
 
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
</head>
<body>
<div id="templatemo_container">
  <div id="templatemo_header_section"> </div>
  <div id="templatemo_menu_bg">
    <div id="templatemo_menu">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
		<li><a href="contact.php">Contact Us</a></li>
        <li><a href="product.php"  class="current">Product</a></li>
        <li><a href="loginindex.php">Order Now! </a></li>
    
      </ul>
    </div>
  </div>
  <div id="templatemo_header_pizza"> </div>
  
  <div class="con">
    <div id="templatemo_content_left1">
      <?php
			   include('config.php');
								
								

								
								$result2 = mysql_query("SELECT * FROM category");
								
								
								while($row2 = mysql_fetch_array($result2))
								  {
								  $ble=$row2['id'];
								  $result3 = mysql_query("SELECT * FROM beverage_products where product_id='$ble'");
								
								
								$row3 = mysql_fetch_array($result3);
								  
								  
      echo '<div class="templatemo_pizza_box"> <a rel="facebox" href=large.php?id=' . $row3["product_id"] . '><img alt="Pizza" src="images/drinks/'.$row3['product_photo'].'" width="65px" height="65px" /></a>';
          echo '<div class="textbox"> '.$row3['product_name'].' </div>';
      echo '</div>';
	 
								  }
										  
	?>
      
    </div>
  </div>
  <div id="templatemo_footer">
    	<div class="top"></div>
        <div class="middle">
    Copyright © Beverage ordering system</div>
        <div class="button"></div>
  <div>
</div>
</body>

</html>