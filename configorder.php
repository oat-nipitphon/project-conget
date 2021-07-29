<?
	date_default_timezone_set("Asia/Bangkok");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>บันทึกสินค้าใหม่</title>
</head>
<body background="image/background.jpg">
<table border="0" width="100%" height="250" style="background-color:rgb(255, 255, 255, 0.3);">
<tr>
<td><img src="image/background1.jpg" style="width:100%;height:350px;"></td>
</tr>
</table> 
<?
	include"connect.php";
	$idtable=$_POST["idtable"];
	$timecon=$_POST["timecon"];
	$timeconi=$_POST["timeconi"];
	$timecons=$_POST["timecons"];
	$configorder="บืนยัน";
	$Sql="UPDATE allorder SET status='$configorder' WHERE idtable='$idtable'";
	$objQuery = mysql_query($Sql) or die ("Error SQL'".$Sql."'");
	$SqlList="SELECT * FROM allorder WHERE idtable='$idtable' AND status='$configorder'";
	$ObjList = mysql_query($SqlList) or die ($SqlList);
	?>
	<table border="0" width="100%" align="center">
			<tr>
			<td>รายการ</td>
			<td>ราคา</td>
			</tr>
	<?
	while($ReList = mysql_fetch_array($ObjList))
	{
		?>
			<tr>
			<td><?=$ReList["orderbuy"];?></td>
			<td><?=$ReList["price"];?></td>
			</tr>
			
		<?
		
	}
	?>
	</table>
	
		<table border="0" width="100%" align="center">
	<?
	$Sqltotal="SELECT * FROM tablebuy WHERE idtable='$idtable'";
	$Objtotal = mysql_query($Sqltotal) or die ($Sqltotal);	
	while($Retotal = mysql_fetch_array($Objtotal))
	{	
		?>
			<tr>
			<td width="20%">รวม <?=$Retotal["totalprice"]?> บาท</td>
			<td width="50%">เวลาที่สั่ง <?echo date("h:i:sa");?>
				<?
					$timesell=$Retotal["timeorder"];
					echo "รอ ".$timesell." นาที";
				?>
			</td>
			</tr>
	</table>
	<center><p>
	<form method="post" action="buyorder.php">
				<input type="hidden" name="idtable" value="<?=$Retotal["idtable"]?>">
				<input type="submit" name="back" value="เพิ่มเมนู">
				</form>
				<form method="post" action="outtable.php">
				<input type="hidden" name="idtable" value="<?=$Retotal["idtable"]?>"> 
				<input type="submit" name="back" value="เก็บเงิน">
				</form>
				</p>	</center>
	<?
	}
	?>
</body>
</html>
