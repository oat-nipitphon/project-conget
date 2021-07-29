<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>บันทึกสินค้าใหม่</title>
</head>
<body>
<table border="0" width="100%" height="250" style="background-color:rgb(255, 255, 255, 0.3);">
<tr>
<td><img src="image/background1.jpg" style="width:100%;height:350px;"></td>
</tr>
</table> 
<?
	include"connect.php";
	$idtable=$_POST["idtable"];
	$idbuyorder=$_POST["idbuyorder"];
	
	$Sql="SELECT * FROM `allorder` WHERE idbuyorder ='$idbuyorder'";
	$objQuery = mysql_query($Sql) or die ("Error SQL'".$Sql."'");
	while($Reorder=mysql_fetch_array($objQuery))
	{
		?>
			<center><h2>ยกเลิกรายการ <?=$Reorder["orderbuy"];?></h2></center>
		<?		
		$priceorder=$Reorder["price"];
		
	}
	
	$Sqltotal="SELECT * FROM tablebuy WHERE idtable='$idtable'";
	$objtotal = mysql_query($Sqltotal) or die ("Error SQL'".$Sqltotal."'");
	while($Retotal=mysql_fetch_array($objtotal))
	{	
		$Reprice=$Retotal["totalprice"];
	}
	$totalnew=$Reprice-$priceorder;

	
	$Sqluptotal="UPDATE `tablebuy` SET `totalprice`='$totalnew' WHERE idtable='$idtable'";
	$objuptotal = mysql_query($Sqluptotal) or die ("Error SQL'".$Sqluptotal."'");
			
	$Sqlde="DELETE FROM `allorder` WHERE idbuyorder ='$idbuyorder'";
	$objQueryde = mysql_query($Sqlde) or die ("Error SQL'".$Sqlde."'");
	
	if($objQueryde)
	{
		?>
			<center><form method="post" action="buyorder.php"><center>
				<input type="hidden" name="idtable" value="<?=$idtable?>">
				<input type="submit" name="back" value="กลับ">
				</form>
		<?
	}
	
	?>
</body>
</html>
