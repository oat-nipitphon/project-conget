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
<body background="image/background.jpg">
<table border="0" width="100%" height="250" style="background-color:rgb(255, 255, 255, 0.3);">
<tr>
<td><img src="image/background1.jpg" style="width:100%;height:350px;"></td>
</tr>
</table>
<center><h2><a href="paneadmin.php">BACK</a> <a href="logout.php">logout</a></h2></center>
<div style="background-color:rgb(255, 255, 255, 1);">
<form action="checkadd.php" method="POST" enctype="multipart/form-data">
<h3>

<p align="center">ชื่ออาหาร <input type="text" size="5" name="nameorder">
ราคา <input type="text" size="5" name="priceorder"> 
<br>เวลาประกอบอาหาร <input type="text" size="5" name="timeorder"></p>
<p align="center">
</p>
<p align="center"><input type="submit" name="okbut" value="เพิ่มสินค้า"></p>
</form>
</div>
<?
	include"connect.php";
	$Sql="SELECT * FROM tableorder";
	$objorder = mysql_query($Sql) or die ("Error SQL '".$Sql."'");
?>
<table width="80%" height="auto" border="0" align="center" style="background-color:rgb(255, 255, 255, 0.7);">
<tr>

<td>ชื่ออาหาร</td>
<td>ราคา</td>
<td>เวลาดำเนินการ</td>
<td>-------</td>
</tr>
<?
		while($resultorder=mysql_fetch_array($objorder))
		{
			?>
			<input type="hidden" name="idorder" value="<?=$resultorder["idorder"];?>">
				<tr>
				
				<td><?=$resultorder["nameorder"];?></td>
				<td><?=$resultorder["price"];?></td>
				<td><?=$resultorder["timeorder"];?></td>
				<td><a href="update.php?idorder=<?=$resultorder["idorder"];?>">แก้ไข</a>
				<a href="delect.php?idorder=<?=$resultorder["idorder"];?>">ลบ</a></td>
				</tr>
			<?
		}
?>
</table>
</body>
</html>