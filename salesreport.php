<style type="text/css">
<!--
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: none;
	color: #000000;
}
a:active {
	text-decoration: none;
	color: #000000;
}
-->
</style><div align="center" style="margin-top:40px;"><a href="home_admin.php"><strong>Mamma Maria's Pizzeria Sales Report</strong></a><br /> 
  From:&nbsp;<strong><?php echo $_POST['dayfrom']; ?></strong>&nbsp;&nbsp;To:&nbsp;<strong><?php echo $_POST['dayto']; ?></strong></div>
  <div style="margin-left:72%; width:50px; background-color:#cccccc; text-align:center;"><a href="sales.php">back</a></div>
  
  
<table width="635" border="1" align="center" cellpadding="0" cellspacing="0">
          <thead>
            <tr bgcolor="#cccccc" style="margin-bottom:10px;">
              		<th width="164"><div align="center">Name</div></th>
					<th width="136"><div align="center">Transaction Code</div></th>
					<th width="114"><div align="center">Date</div></th>
					<th width="108"><div align="center">Status</div></th>
					<th width="113"><div align="center">Amount Paid</div></th>
            </tr>
          </thead>
          <tbody>
         <?php
			   include('config.php');
								
								$a=$_POST['dayfrom'];
								$b=$_POST['dayto'];

								
								$result3 = mysql_query("SELECT * FROM beverage_orders where transactiondate BETWEEN '$a' AND '$b'");
								
								
								while($row3 = mysql_fetch_array($result3))
								  {
								 echo '<tr>';
								 $dasd=$row3['cusid'];
								 $result4 = mysql_query("SELECT * FROM beverage_members where id='$dasd'");
								
								
								while($row4 = mysql_fetch_array($result4))
								  {
									echo '<td><div align="center">'.$row4['firstname'].' '.$row4['lastname'].'</div></td>';
									}
									
									echo '<td><div align="center">'.$row3['transactioncode'].'</div></td>';
									echo '<td><div align="center">'.$row3['transactiondate'].'</div></td>';
									echo '<td><div align="center">'.$row3['status'].'</div></td>';
									echo '<td><div align="center">'.$row3['amountpaid'].'</div></td>';
								 echo '</tr>';
							
								  }
			  
			  ?>
			   <tr>
								<td colspan="4"><div align="right">Total Sales </div></td>
									<td>
									  <div align="center">
									    <?php
include('config.php');	
$a=$_POST['dayfrom'];
$b=$_POST['dayto'];
 
$result1 = mysql_query("SELECT sum(amountpaid) FROM beverage_orders WHERE transactiondate BETWEEN '$a' AND '$b'");
while($row = mysql_fetch_array($result1))
{
    echo $row['sum(amountpaid)'];
 }

mysql_close(); //($con) LAGAY MO MARK LOUIE//////////////////////////////////////////////>>>>>>>>>>>>>>>>>>>>>bosss

?>
							          </div></td>
			</tr>
          </tbody>
</table>
