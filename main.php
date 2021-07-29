<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ยินดีต้อนรับ</title>
<style>
.skilltop {
    background-color: black;
    color: white;
    margin: 20px;
    padding: 20px;
	width: 100%;
}
.boxsell{
	margin: 50px;
    padding: 50px;
}
.imgsell{
	width: 100%;
}
.divsell{
	
    color: black;
    margin: 20px;
    padding: 20px;
.c-nav {
    text-align: center;
    position: relative;
    margin: 0 -20px;
    background: #fff;
}
.fontsell{
	font-size:20px;
}
h1{
	font-size:500px;
	color: #ffffff;
	text-align:center;
}
@media only screen and (min-width: 480px){
	h1{
		font-size:200px;
	color: #ffffff;
	text-align:center;
	}
}
</style>
</head>
<body background="imagestyle/background.jpg">
<center><img src="imagestyle/backgroundhead.jpg" style="width:1250px;height:200px;"></center>
<table width="80%" align="center" style="background-color:rgb(255, 255, 255);">
<tr>
<td align="center" width="20%"><a href="panelogin.php"><font size="5px" color="#ff0000">*</font></a></td>
<td align="center">
<a href="main.php"><img src="imagestyle/panehome.png" style="width:80px;height:80px"><br><font size="4px" color="#ff0000">หน้าหลัก</font></a>
</td>
<td align="center">
<a href="selectshirts.php"><img src="imagestyle/shirts.png" style="width:80px;height:80px"><br><font size="4px" color="#ff0000">เสื้อ</font></a>
</td>
<td align="center">
<a href="selectjacket.php"><img src="imagestyle/jacket.png" style="width:80px;height:80px"><br><font size="4px" color="#ff0000">เสื้อกางหนาว</font></a>
</td>
<td align="center">
<a href="selectpants.php"><img src="imagestyle/pants1.png" style="width:80px;height:80px"><br><font size="4px" color="#ff0000">กางเกง</font></a>
</td>
<td align="center">
<a href="selectjeans.php"><img src="imagestyle/jeans.png" style="width:80px;height:80px"><br><font size="4px" color="#ff0000">กางเกงยีนส์</font></a>
</td>
<td align="center" width="20%"><a href="#"><font size="5px" color="#ff0000">*</font></a></td>
</tr>
</table><br>
<?
	include"connect.php";
	$shirts="shirts";
	$jacket="jacket";
	$pants="pants";
	$jeans="jeans";
	$Sqlshirts="SELECT * FROM `tableshop` WHERE Type='$shirts'";
	$Sqljacket="SELECT * FROM `tableshop` WHERE Type='$jacket'";
	$Sqlpants="SELECT * FROM `tableshop` WHERE Type='$pants'";
	$Sqljeans="SELECT * FROM `tableshop` WHERE Type='$jeans'";
	$objQueryshirts = mysql_query($Sqlshirts) or die ("Error SQL shirts");
	$objQueryjacket = mysql_query($Sqljacket) or die ("Error SQL jacket");
	$objQuerypants = mysql_query($Sqlpants) or die ("Error SQL pants");
	$objQueryjeans = mysql_query($Sqljeans) or die ("Error SQL jeans");
?>
<table width="80%" height="auto" border="0" align="center" style="background-color:rgb(255, 255, 255, 0.7);">
<tr>
<td width="20%" align="center">
	<?
		while($Resultshirts = mysql_fetch_array($objQueryshirts))
		{
	?>
	
	<div class="divsell">
	<img class="imgsell" src="image/<?=$Resultshirts["Image"]?>" style="width:225px;height:320px;"><br>
	<input type="hidden" name="Idshop" value="<?=$Resultshirts["Id"];?>"><br>
	<font size="6px" color="#000000">ไซต์ <?=$Resultshirts["Size"];?> .<br>ราคา <?=$Resultshirts["Price"];?> บาท <br></font>
	<a href="buy.php?id=<?=$Resultshirts["Id"];?>"><img src="image/buybutton.png" style="width:200px;height:80px;"></a><br>
	</div>
	<?
		}
	?>
</td>
<td width="20%" align="center">
	<?
		while($Resultjacket = mysql_fetch_array($objQueryjacket))
		{
	?>
	<div class="divsell">
	<img class="imgsell" src="image/<?=$Resultjacket["Image"]?>" style="width:225px;height:320px;"><br>
	<input type="hidden" name="Idshop" value="<?=$Resultjacket["Id"];?>"><br>
	<font size="6px" color="#000000">ไซต์ <?=$Resultjacket["Size"];?> .<br>ราคา <?=$Resultjacket["Price"];?> บาท <br></font>
	<a href="buy.php?id=<?=$Resultjacket["Id"];?>"><img src="image/buybutton.png" style="width:200px;height:80px;"></a><br>
	</div>
	<?
		}
	?>
</td>
<td width="20%" align="center">
	<?
		while($Resultpants = mysql_fetch_array($objQuerypants))
		{
	?>
	<div class="divsell">
	<img class="imgsell" src="image/<?=$Resultpants["Image"]?>" style="width:225px;height:320px;"><br>
	<input type="hidden" name="Idshop" value="<?=$Resultpants["Id"];?>"><br>
	<font size="6px" color="#000000">ไซต์ <?=$Resultpants["Size"];?> .<br>ราคา <?=$Resultpants["Price"];?> บาท <br></font>
	<a href="buy.php?id=<?=$Resultpants["Id"];?>"><img src="image/buybutton.png" style="width:200px;height:80px;"></a><br>
	</div>
	<?
		}
	?>
</td>
<td width="20%" align="center">
	<?
		while($Resultjeans = mysql_fetch_array($objQueryjeans))
		{
	?>
	<div class="divsell">
	<img class="imgsell" src="image/<?=$Resultjeans["Image"]?>" style="width:225px;height:320px;"><br>
	<input type="hidden" name="Idshop" value="<?=$Resultjeans["Id"];?>"><br>
	<font size="6px" color="#000000">ไซต์ <?=$Resultjeans["Size"];?> .<br>ราคา <?=$Resultjeans["Price"];?> บาท <br></font>
	<a href="buy.php?id=<?=$Resultjeans["Id"];?>"><img src="image/buybutton.png" style="width:200px;height:80px;"></a><br>
	</div>
	<?
		}
	?>
</td>
</tr>
</table>
</body>
</html>