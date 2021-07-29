<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>สำหรับผู้ดูแล</title>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>
</head>
<body background="imagestyle/background.jpg">
<center><img src="imagestyle/backgroundhead.jpg" style="width:950px;height:200px;"></center>
<form action="checkadd.php" method="POST" enctype="multipart/form-data">

</form>

<?
	include"connect.php";
	$Sql="SELECT * FROM tableshop";
	$objQuery=mysql_query($Sql)or die("ErrorSql.'$Sql'");
?>
<div align="center">
<a href="paneadmin.php">กลับ</a>
</div>
<table width="80%" height="auto" border="1" align="center" style="background-color:rgb(255, 255, 255, 1);">
<tr>
<td align="center">รหัสลูกค้า</td>
<td align="center">รูปด้านหน้า</td>
<td align="center">รูปด้านหลัง</td>
<td align="center">ราคา</td>
<td align="center">ไซต์</td>
<td align="center">ประเภท</td>
<td align="center">สถานะ</td>
<td align="center">ยี่ห่อ</td>
<td align="center">เพศ</td>
<td align="center">เมนูแก้ไข</td>
</tr>
<?
	while($Result=mysql_fetch_array($objQuery))
	{
?>
<tr>
<td align="center"><?=$Result["Id"];?></td>
<td align="center"><img src="image/<?=$Result["Image"];?>" style="width:120px;height:150px;"></td>
<td align="center"><img src="image/<?=$Result["Imageback"];?>" style="width:120px;height:150px;"></td>
<td align="center"><?=$Result["Price"];?></td>
<td align="center"><?=$Result["Size"];?></td>
<td align="center"><?=$Result["Type"];?></td>
<td align="center"><?=$Result["Status"];?></td>
<td align="center"><?=$Result["Brond"];?></td>
<td align="center"><?=$Result["Sex"];?></td>
<td align="center">
<p><a href="update.php?id=<?=$Result["Id"];?>"><input type="submit" name="upbut" value="แก้ไข"></a></p>
<p><a href="delect.php?id=<?=$Result["Id"];?>"><input type="submit" name="debut" value="ลบ"></a></p>
</td>
</tr>
<?
	}
?>
</table>
</body>
</html>