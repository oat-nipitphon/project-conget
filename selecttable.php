
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ยินดีต้อนรับ</title>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {border-radius: 2px;}
.button2 {border-radius: 4px;}
.button3 {border-radius: 8px;}
.button4 {border-radius: 12px;}
.button5 {border-radius: 50%;}
</style>
</head>
<body background="image/background.jpg">
<table border="0" width="100%" height="250" style="background-color:rgb(255, 255, 255, 0.3);">
<tr>
<td><img src="image/background1.jpg" style="width:100%;height:350px;"></td>
</tr>
</table> 
<?
	include"connect.php";
	$Sqltable="SELECT * FROM `tablebuy`";
	$objtable = mysql_query($Sqltable) or die ("Error SQL Sqltable");
	$numrow=mysql_num_rows($objtable);
	for($i=0;$i<$numrow;$i++)
	{
		while($ResultID=mysql_fetch_array($objtable))
		{
			$number[$i]=$ResultID["idtable"];
			$i++;
		}
	}
	?>
<table width="100%" height="200" border="0" align="center" style="background-color:rgb(255, 255, 255, 0);">
	<?
	for($j=0;$j<$numrow;$j++)
	{
		?>
			<tr>
						<td>
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "สถานะ :: ".$Re["status"];
							?>
								<form method="post" action="buyorder.php">
								<input type="submit" style="width:100%;height:50px;" name="idtable" value="<?=$Re["idtable"];?>">
								</form>
							<?
						}
						?>
						</td>
						<td>
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "สถานะ :: ".$Re["status"];
							?>
								<form method="post" action="buyorder.php">
								<input type="submit" style="width:100%;height:50px;" name="idtable" value="<?=$Re["idtable"];?>">
								</form>
							<?
						}
						?>
						</td>
						<td>
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "สถานะ :: ".$Re["status"];
							?>
								<form method="post" action="buyorder.php">
								<input type="submit" style="width:100%;height:50px;" name="idtable" value="<?=$Re["idtable"];?>">
								</form>
								<?
						}
						?>
						</td>
						<td>
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "สถานะ :: ".$Re["status"];
							?>
								<form method="post" action="buyorder.php">
								<input type="submit" style="width:100%;height:50px;" name="idtable" value="<?=$Re["idtable"];?>">
								</form>
							<?
						}
						?>
						</td>
			</tr>
			
			
			<tr>
						<td>
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "สถานะ :: ".$Re["status"];
							?>
								<form method="post" action="buyorder.php">
								<input type="submit" style="width:100%;height:50px;" name="idtable" value="<?=$Re["idtable"];?>">
								</form>
							<?
						}
						?>
						</td>
						<td>
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "สถานะ :: ".$Re["status"];
							?>
								<form method="post" action="buyorder.php">
								<input type="submit" style="width:100%;height:50px;" name="idtable" value="<?=$Re["idtable"];?>">
								</form>
							<?
						}
						?>
						</td>
						<td>
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "สถานะ :: ".$Re["status"];
							?>
								<form method="post" action="buyorder.php">
								<input type="submit" style="width:100%;height:50px;" name="idtable" value="<?=$Re["idtable"];?>">
								</form>
							<?
						}
						?>
						</td>
						<td>
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "สถานะ :: ".$Re["status"];
							?>
								<form method="post" action="buyorder.php">
								<input type="submit" style="width:100%;height:50px;" name="idtable" value="<?=$Re["idtable"];?>">
								</form>
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