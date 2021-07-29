<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>สำหรับผู้ดูแล อัพเดทสินค้า</title>
<style>
</style>
</head>
<body>
<table border="0" width="100%" height="250" style="background-color:rgb(255, 255, 255, 0.3);">
<tr>
<td><img src="image/background1.jpg" style="width:100%;height:350px;"></td>
</tr>
</table> 
<?
	include"connect.php";
	$idorder=$_GET["idorder"];
	$Sql="SELECT * FROM tableorder WHERE idorder='$idorder'";
	$objQuery=mysql_query($Sql)or die("ErrorSql.'$Sql'");
	while($Result=mysql_fetch_array($objQuery))
	{		
?>
<form action="checkupdate.php" method="POST" enctype="multipart/form-data">
<h3>
<input type="hidden" name="idorder" value="<?=$Result["idorder"];?>">
<p align="center">ชื่ออาหาร <input type="text" size="5" name="nameorder" value="<?=$Result["nameorder"];?>">
ราคา <input type="text" size="5" name="priceorder" value="<?=$Result["price"];?>"> 
<br>เวลาประกอบอาหาร <input type="text" size="5" name="timeorder" value="<?=$Result["timeorder"];?>"></p>
</p>
<p align="center"><input type="submit" name="okbut" value="แก้ไข"></p>
</form>
<?
	}
?>
</body>
</html>