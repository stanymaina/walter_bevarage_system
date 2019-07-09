<?php
session_start();

include('config.php');
$userid = $_POST['userid'];
$username=$_POST['username'];
$password=$_POST['password'];

mysql_query("UPDATE beverage_users SET username='$username', password='$password' WHERE id='$userid'");
header("location: allusers.php");
mysql_close($con);
?> 