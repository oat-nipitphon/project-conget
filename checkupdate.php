<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>บันทึกสินค้าใหม่</title>
</head>
<body>
<center>
<?
	include"connect.php";
	$idorder=$_POST["idorder"];
	$imageorder=$_POST["imageorder"];
	$nameorder=$_POST["nameorder"];
	$priceorder=$_POST["priceorder"];
	$timeorder=$_POST["timeorder"];
	$typeorder=$_POST["typeorder"];
	$statusorder=$_POST["statusorder"];
	
	$imageorder=$_FILES["imageorder"]["name"];
	$image_path = "image/";
	$upload_pats = $image_path.$imageorder;
	move_uploaded_file($_FILES["imageorder"]["tmp_name"],$upload_pats);
	
	$Sql="UPDATE `tableorder` SET `nameorder`='$nameorder',`imageorder`='$imageorder',`price`='$priceorder',
	`timeorder`='$timeorder',`typeorder`='$typeorder',`statusorder`='$statusorder' 
	WHERE idorder='$idorder'";
	$objQuery = mysql_query($Sql) or die ("Error SQL'".$Sql."'");
	if($objQuery)
	{
	echo "<h2>อัพเดทข้อมูลเรียบร้อยแล้ว</h2>";
	
	?>
	<br><h2><a href="paneadminfororder.php">กลับ</a></h2>
	</center>
</body>
</html>
	<?
	}
	else
	{
		echo $Sql;
	}
?>