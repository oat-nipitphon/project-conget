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
	
}
</style>
</head>
<body>
<center><a href="panelogin.php"><font size="5px" color="#ff0000">*</font></a></center>
<table width="80%" align="center" style="background-color:rgb(255, 255, 255, 0.7);">
<tr>
<td align="center">
<a href="main.php"><img src="imagestyle/panehome.png" style="width:80px;height:80px"><br><font size="4px" color="#ff0000">ผัด</font></a>
</td>
<td align="center">
<a href="selectshirts.php"><img src="imagestyle/shirts.png" style="width:80px;height:80px"><br><font size="4px" color="#ff0000">ทอด</font></a>
</td>
<td align="center">
<a href="selectjacket.php"><img src="imagestyle/jacket.png" style="width:80px;height:80px"><br><font size="4px" color="#ff0000">น้ำดื่ม</font></a>
</td>
</tr>
</table><br>
<?php
	include"connect.php";
	$Sql="SELECT * FROM `tableorder`";
	$obj = mysql_query($Sql) or die ("Error SQL'".$Sql."'");
	$numrow=mysql_num_rows($obj);
	for($i=0;$i<$numrow;$i++)
	{
		while($ResultID=mysql_fetch_array($obj))
		{
			$number[$i]=$ResultID["idorder"];
			$i++;
		}
	}
	
	
	
	/*$nameorder=$_POST["nameorder"];
	$nameorderup = "";	
	$Sql="UPDATE `tablebuy` SET `nameorder`='$nameorder',
	WHERE idorder='$idorder'";
	$objorder = mysql_query($Sqlorder) or die ("Error SQL'".$Sql."'");
	
	
	
	$Sqlorder="SELECT * FROM `tableorder` WHERE idorder='$idorder'";
	$objorder = mysql_query($Sqlorder) or die ("Error SQL'".$Sql."'");
	
		while($Reorder=mysql_fetch_array($objorder))
		{
			echo "$Reorder[nameorder]";
		}*/
	
	$idtable=$_GET["id"];
	echo $idtable;
	?>
	
<table width="80%" height="auto" border="0" align="center" style="background-color:rgb(255, 255, 255, 0.7);">
	<?
	for($j=0;$j<$numrow;$j++)
	{
		?>
			<tr>
						<td width="25%" align="center">
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tableorder` WHERE idorder='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							?>
								<img src="image/<?=$Re["imageorder"];?>" style="width:225px;height:320px;"><br>
								<form method="POST" action="selectorder.php" enctype="multipart/form-data">
								<input type="hidden" name="nameorder" value="<?=$Re["nameorder"];?>">
								 <?=$Re["nameorder"];?> 
								<br>ราคา <?=$Re["priceorder"];?> บาท <br></font>
								<input type="submit" value="สั่งอาหาร"><br>
								</form>
							<?
							
						}
						?>
						</td>
						<td width="25%" align="center">
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tableorder` WHERE idorder='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							?>
								<img src="image/<?=$Re["imageorder"];?>" style="width:225px;height:320px;"><br>
								<form method="POST" action="selectorder.php" enctype="multipart/form-data">
								<input type="hidden" name="idorder" value="<?=$Re["idorder"];?>">
								<?=$Re["nameorder"];?> 
								<br>ราคา <?=$Re["priceorder"];?> บาท <br></font>
								<input type="submit" value="สั่งอาหาร"><br>
								</form>
							<?
						}
						?>
						</td>
						<td width="25%" align="center">
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tableorder` WHERE idorder='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							?>
								<img src="image/<?=$Re["imageorder"];?>" style="width:225px;height:320px;"><br>
								<?=$Re["nameorder"];?> <br>
								ราคา <?=$Re["priceorder"];?> บาท <br></font>

								<a href="selectorder.php?nameorder=<?=$Re["nameorder"];?>"><input type="submit" value="สั่งอาหาร"></a><br>
							<?
						}
						?>
						</td>
						<td width="25%" align="center">
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tableorder` WHERE idorder='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							?>
								<img src="image/<?=$Re["imageorder"];?>" style="width:225px;height:320px;"><br>
								<?=$Re["nameorder"];?> <br>
								ราคา <?=$Re["priceorder"];?> บาท <br></font>
								<a href="selectorder.php?nameorder=<?=$Re["nameorder"];?>"><input type="submit" value="สั่งอาหาร"></a><br>
							<?
						}
						?>
						</td>
			</tr>
			
			<tr>
						<td width="25%" align="center">
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tableorder` WHERE idorder='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							?>
								<img src="image/<?=$Re["imageorder"];?>" style="width:225px;height:320px;"><br>
								<?=$Re["nameorder"];?> <br>
								ราคา <?=$Re["priceorder"];?> บาท <br></font>
								<a href="selectorder.php?nameorder=<?=$Re["nameorder"];?>"><input type="submit" value="สั่งอาหาร"></a><br>
							<?
						}
						?>
						</td>
						<td width="25%" align="center">
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tableorder` WHERE idorder='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							?>
								<img src="image/<?=$Re["imageorder"];?>" style="width:225px;height:320px;"><br>
								<?=$Re["nameorder"];?> <br>
								ราคา <?=$Re["priceorder"];?> บาท <br></font>
								<a href="selectorder.php?nameorder=<?=$Re["nameorder"];?>"><input type="submit" value="สั่งอาหาร"></a><br>
							<?
						}
						?>
						</td>
						<td width="25%" align="center">
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tableorder` WHERE idorder='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							?>
								<img src="image/<?=$Re["imageorder"];?>" style="width:225px;height:320px;"><br>
								<?=$Re["nameorder"];?> <br>
								ราคา <?=$Re["priceorder"];?> บาท <br></font>
								<a href="selectorder.php?nameorder=<?=$Re["nameorder"];?>"><input type="submit" value="สั่งอาหาร"></a><br>
							<?
						}
						?>
						</td>
						<td width="25%" align="center">
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tableorder` WHERE idorder='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							?>
								<img src="image/<?=$Re["imageorder"];?>" style="width:225px;height:320px;"><br>
								<?=$Re["nameorder"];?> <br>
								ราคา <?=$Re["priceorder"];?> บาท <br></font>
								<a href="selectorder.php?nameorder=<?=$Re["nameorder"];?>"><input type="submit" value="สั่งอาหาร"></a><br>
							<?
						}
						?>
						</td>
			</tr>
		<?
	}
?>
</table>
</body>
</html>