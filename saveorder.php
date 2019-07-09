<?php
session_start();

include('config.php');
$memid=$_POST['id'];
$qty=$_POST['qty'];
$name=$_POST['name'];
$id=$_POST['butadd'];
$transcode=$_POST['transcode'];
$ingre=$_POST['ingre'];
$ids=$_POST['ids'];

$resultq = mysql_query("SELECT * FROM inventory WHERE product_id LIKE '%".$id."%'");

			while($rows = mysql_fetch_array($resultq))
			{
			$pql=$rows['qtyleft'];
			$pqs=$rows['qtysold'];
			$left=$pql-$qty;
			$solds=$pqs+$qty;
	   	mysql_query("UPDATE inventory SET qtyleft='$left', qtysold='$solds' WHERE product_id LIKE '%".$id."%'");
			}


//$resulta = mysql_query("SELECT * FROM beverage_products WHERE product_id = ".$id.");

			$pprice = (int)$_REQUEST['pr'];
			$psize = $_REQUEST['ps'];
			$pn = $_REQUEST['pn'];
  $total= $pprice * $qty;
 
mysql_query("INSERT INTO orderdetails (customer, qty, price, total, pizzaname, pizasize, transactioncode) VALUES('$memid', '$qty', '$pprice', '$total', '$pn', '$psize', '$transcode')");

header("location: order.php");












?> 