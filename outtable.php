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
	$idtable=$_POST["idtable"];
	$text="เก็บเงิน";
	$Sql="UPDATE `tablebuy` SET `status`='$text' WHERE idtable='$idtable'";
	$objQuery = mysql_query($Sql) or die ("Error SQL'".$Sql."'");
	if($objQuery)
	{
	echo "ขอบคุณที่ใช่บริการค่ะ";
	
	?>
	<a href="selecttable.php">กลับ</a></h2></center>
</body>
</html>
	<?
	}
	else
	{
		echo $Sql;
	}
?>