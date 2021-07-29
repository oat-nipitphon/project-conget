<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>บันทึกสินค้าใหม่</title>
</head>
<body>
<?
	include"connect.php";
	
	$nameorder=$_POST["nameorder"];
	$priceorder=$_POST["price"];
	$timeorder=$_POST["timeorder"];
	$typeorder=$_POST["typeorder"];
	$statusorder=$_POST["statusorder"];
	
	$imageorder=$_FILES["imageorder"]["name"];
	$image_path = "image/";
	$upload_pats = $image_path.$imageorder;
	move_uploaded_file($_FILES["imageorder"]["tmp_name"],$upload_pats);
	
	$Sql="INSERT INTO `tableorder`(`nameorder`, `imageorder`, `price`, `timeorder`, `typeorder`, `statusorder`) 
	VALUES ('$nameorder','$imageorder','$priceorder','$timeorder','$typeorder','$statusorder')";
	$objQuery = mysql_query($Sql) or die ("Error SQL'".$Sql."'");
	if($objQuery)
	{
	echo"เพิ่มข้อมูลเรียบร้อยแล้ว";
	?>
	<a href="paneadminfororder.php">กลับ</a>
</body>
</html>
	<?
	}
?>