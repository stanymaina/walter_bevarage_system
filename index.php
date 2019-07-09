<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
?>
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
  <div id="templatemo_header_section"> 
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
  <div id="templatemo_menu_bg">
    <div id="templatemo_menu">
      <ul>
        <li><a href="index.php"  class="current">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
		
        <li><a href="product.php">Product</a></li>
        <li><a href="loginindex.php">Order Now! </a></li>
        
      </ul>
    </div>
  </div>
  <div id="templatemo_header_beverage"> </div>
  <div id="templatemo_content">
    <div id="templatemo_content_left"> <img src="images/drinks/sodazz.jpg" width="734" height="300" style="margin-left:-10px;" /></div>
    <div id="templatemo_card"></div>
  </div>
  <div id="templatemo_container_end"> </div>
</div>
<div id="templatemo_footer">
    	<div class="top"></div>
        <div class="middle">
    Copyright © Beverage ordering system</div>
        <div class="button"></div>
</div>
<div>
</div>
</body>

</html>