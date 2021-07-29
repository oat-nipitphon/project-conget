<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>สั่งซื้อสินค้า</title>
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
.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body background="imagestyle/background.jpg">
<center><img src="imagestyle/backgroundhead.jpg" style="width:950px;height:200px;"></center>
<?
	include"connect.php";
	$id=$_GET["id"];
	$Sql="SELECT * FROM tableshop WHERE Id='$id'";
	$objQuery=mysql_query($Sql) or die ("Error Sql.'$Sql'");
?>
<table align="center" width="80%" border="0" style="background-color:rgb(255, 255, 255, 0.7);">
<?
	while($Result=mysql_fetch_array($objQuery))
	{
?>
<tr>
<td align="center">
<p align="center"><font size="7px">หน้า-หลัง</p><br></font>
<img src="image/<?=$Result["Image"];?>" style="width:320px;height:450px;">
<img src="image/<?=$Result["Imageback"];?>" style="width:320px;height:450px;">
<br>
<font size="7px">รหัสสินค้า # <?=$Result["Id"];?></font>
<br>
<font size="7px">ราคา :: <?=$Result["Price"];?> ไซต์ <?=$Result["Size"];?></td></font>
</tr>
<form action="checkbuyuser.php" method="POST" enctype="multipart/form-data">
<tr>
<td align="center"><input type="hidden" name="idshop" value="<?=$Result["Id"];?>">
<p><font size="5px">ชื่อ-นามสกุล <input type="text" name="nameuser" size="30"></font></p>
<p><font size="5px">เบอร์โทรศัพท์ <input type="text" name="teluser" size="27"></font></p>
<p><font size="5px">ที่อยู่ บ้านเลขที่ ซอย ถนน ตำบล อำเภอ จังหวัด</p>
<p><textarea rows="10" cols="40" name="addressuser"></textarea></font></p>
<button class="button">สั่งซื้อ</button></form>
<a href="main.php"><button class="button button3">ยกเลิก</button></a>
</td>
</tr>
<?
	}
?>
</table>
</body>
</html>