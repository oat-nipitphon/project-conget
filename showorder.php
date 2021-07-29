<html lang="en">
<head>
<title>ยอดบิล</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?
	//แสดงบิล
	include"connect.php";

		$idtable=$_POST["$idtable"];



	
	$Sqlshow="SELECT * FROM allorder WHERE idtable='$idtable'";
	$objshow=mysql_query($Sqlshow) or die("Error Sql".$Sqlshow);
		
  ?>
 
  <table width="50%" border="0" align="center">  
  <?php
    while($Resultshow=mysql_fetch_array($objshow))
	{	
  ?>	
  <tr>
    <td>
		<form method="post" action="deleteorder.php" name="deleteorder" id="deleteorder">
		<input type="hidden" name="idbuyorder" value="<?=$Resultshow["idbuyorder"];?>">
		<?=$Resultshow["orderbuy"];?>
		<?=$Resultshow["price"];?>
		<?=$Resultshow["status"];?>
	</td>
	<td>
	<input type="submit" name="butdelete" id="butdelete" value="ยกเลิกรายการอาหาร">
		</form>
	</td>
	</tr>
	</table>
  <?
}
?>
</body>
</html>