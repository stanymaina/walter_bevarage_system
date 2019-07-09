<?php
session_start();

include('config.php');
$roomid=$_POST['roomid'];
$name=$_POST['name'];
$price=$_POST['price'];
$size=$_POST['size'];
$status=$_POST['status'];
$ing=$_POST['ing'];

mysql_query("INSERT INTO beverage_products (product_id, product_name, product_price, product_size, product_size_name, status, product_ingredients) VALUES('$roomid', '$name', '$price', '$size', '$size', '$status', '$ing')");
header("location: viewproducts.php");
mysql_close($con);
?> 