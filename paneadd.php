<?
session_start();
if($_SESSION["username"] == "")
{

	header("location:panelogin.php");
	exit();
}



?>
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
<h2><a href="index.php">BACK</a></h2>
<center><img src="imagestyle/backgroundhead.jpg" style="width:950px;height:200px;"></center>
<div style="background-color:rgb(255, 255, 255, 1);">
<form action="checkadd.php" method="POST" enctype="multipart/form-data">
<h3>
<p align="center">รูปอาหาร <input type="file" name="imageorder"></p>
<p align="center">ชื่ออาหาร <input type="text" size="5" name="nameorder">
ราคา <input type="text" size="5" name="priceorder"> 
เวลาประกอบอาหาร <input type="text" size="5" name="timeorder"></p>
<p align="center">ประเภทอาหาร
<select name="typeorder">
<option value="shirts">อาหารจานหลัก
<option value="jacket">ของหวาน
<option value="pants">น้ำดื่ม
<option value="jeans">อาหารกินเล่น
</select> สถานะสินค้า
<select name="statusorder">
<option value="null">หมด
<option value="sale">คงเหลือ
</select>
</p>
<p align="center"><input type="submit" name="okbut" value="เพิ่มสินค้า"></p>
</form>
<p align="center"><a href="edit.php"><input type="submit" name="editbut" value="แก้ไขข้อมูลสินค้า"></a></p>
<center>
</div>
</center>
</tr>
</table>
</body>
</html>