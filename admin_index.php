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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<!--sa poip up-->
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

  <!--sa validate from-->
<script type="text/javascript">
function validateForm()
{

var y=document.forms["login"]["user"].value;
var a=document.forms["login"]["password"].value;
if ((y==null || y==""))
  {
  alert("you must enter your username");
  return false;
  }
  if ((a==null || a==""))
  {
  alert("you must enter your password");
  return false;
  }
 

}
</script>

</head>

<body>
<div style="width:300px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px;">
  <form id="form1" name="login" method="post" action="login.php" onsubmit="return validateForm()">
  <div style="background-color:#ff3300; font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 
 
 <div style="float:left;"><strong>Administrator Login!</strong></div>
 <div style="float:right; margin-right:3px; background-color:#cccccc; width:25px; text-align:center; height:22px;"><a href="index.php">X</a></div>
 
 
 </div>
  <table width="286" align="center">
  <tr>
    <td colspan="2">
	<div style="font-family:Arial, Helvetica, sans-serif; color:#FF0000; font-size:12px;"><?php
	if( isset($_SESSION['ERRMSG_ARROGOY']) && is_array($_SESSION['ERRMSG_ARROGOY']) && count($_SESSION['ERRMSG_ARROGOY']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARROGOY'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARROGOY']);
	}
?></div>
	
	
	</td>
  </tr>
  <tr>
    <td width="92"><div align="right">UserName</div></td>
    <td width="178"><input type="text" name="user" /></td>
  </tr>
  <tr>
    <td><div align="right">Password:</div></td>
    <td>
      <input type="password" name="password" />
    </td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="login" /></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
    
  </form><div id="templatemo_footer">
    	<div class="top"></div>
        <div class="middle">
    Copyright � Mamma Maria's Pizzeria 2012
</div>
        <div class="button"></div>
</div>

</body>
</html>
