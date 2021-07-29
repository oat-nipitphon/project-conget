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
<center><h2>
<?
	include"connect.php";
	$idtable=$_GET["idtable"];
	$total=0;
	$time=0;
	$st="ว่าง";
	$Sql="UPDATE `tablebuy` SET `totalprice`='$total',`timeorder`='$time',`status`='$st' WHERE idtable='$idtable'";
	$objQuery1 = mysql_query($Sql) or die ("Error SQL'".$Sql."'");
	
	$Sqlde="DELETE FROM `allorder` WHERE idtable ='$idtable'";
	$objQueryde2 = mysql_query($Sqlde) or die ("Error SQL'".$Sqlde."'");
	if($objQuery1 AND $objQuery1)
	{
		
	echo"ลบข้อมูลเรียบร้อยแล้ว";
	?>
	<br><a href="paneadmin.php">กลับ</a></h2></center>
</body>
</html>
	<?
	}
?>