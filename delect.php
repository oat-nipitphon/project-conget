<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>บันทึกสินค้าใหม่</title>
</head>
<body>
<?
	include"connect.php";
	$idorder=$_GET["idorder"];
	$Sql="DELETE FROM `tableorder` WHERE idorder ='$idorder'";
	$objQuery = mysql_query($Sql) or die ("Error SQL'".$Sql."'");
	if($objQuery)
	{
	echo"ลบข้อมูลเรียบร้อยแล้ว";
	?>
	<a href="paneadminfororder.php">กลับ</a>
</body>
</html>
	<?
	}
?>