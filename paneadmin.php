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
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

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
<table border="0" width="100%" height="250" style="background-color:rgb(255, 255, 255, 0);">
<tr>
<td><img src="image/background1.jpg" style="width:100%;height:350px;"></td>
</tr>
</table>
<center><h2><a href="logout.php">logout</a></h2></center>
<?
	include"connect.php";
	$Sqluser="SELECT * FROM userlogin";
	$objuser=mysql_query($Sqluser)or die("Error.'$Sqluser'");
	while($Reuser=mysql_fetch_array($objuser))
	{
		?>
		<table width="100%" height="auto" border="0" align="center" style="background-color:rgb(255, 255, 255, 0);">
	<tr>
	<td align="center" width="5%">ยินดีต้อนรับ :: <?=$Reuser["nameuser"];?> </td>
	</tr>
	</table>
<?
	}
?>
<div style="background-color:rgb(255, 255, 255, 0);" align="center">
<a href="paneadminfororder.php">จัดการรายการอาหาร</a>
</div>
</center>
<br>
<?
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
<table width="100%" height="auto" border="0" align="center" style="background-color:rgb(255, 255, 255, 0);">
	<?
	for($j=0;$j<$numrow;$j++)
	{
		?>
			<tr>
						

						<td width="25%" align="center">
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "โต๊ะ ".$Re["idtable"];
							?>
								<a href="deordertable.php?idtable=<?=$Re["idtable"];?>"><?=$Re["status"];?></a>
							<?
						}
						
$SqlList="SELECT * FROM allorder WHERE idtable='$row'";
	$ObjList = mysql_query($SqlList) or die ($SqlList);
						?>
						
	
	<table border="0" width="100%" align="center">
			<tr>
			<td>รายการ</td>
			<td>ราคา</td>
			</tr>
	<?
	while($ReList = mysql_fetch_array($ObjList))
	{
		?>
			<tr>
			<td><?=$ReList["orderbuy"];?></td>
			<td><?=$ReList["price"];?></td>
			</tr>
			
		<?
	}
	?>
	</table>
						</td>
						<td width="25%" align="center">
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "โต๊ะ ".$Re["idtable"];
							?>
								<a href="deordertable.php?idtable=<?=$Re["idtable"];?>"><?=$Re["status"];?></a>
							<?
						}
$SqlList="SELECT * FROM allorder WHERE idtable='$row'";
	$ObjList = mysql_query($SqlList) or die ($SqlList);
						?>
						
	
	<table border="0" width="100%" align="center">
			<tr>
			<td>รายการ</td>
			<td>ราคา</td>
			</tr>
	<?
	while($ReList = mysql_fetch_array($ObjList))
	{
		?>
			<tr>
			<td><?=$ReList["orderbuy"];?></td>
			<td><?=$ReList["price"];?></td>
			</tr>
			
		<?
	}
	?>
	</table>
						</td>
						<td width="25%" align="center">
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "โต๊ะ ".$Re["idtable"];
							?>
								<a href="deordertable.php?idtable=<?=$Re["idtable"];?>"><?=$Re["status"];?></a>
							<?
						}
$SqlList="SELECT * FROM allorder WHERE idtable='$row'";
	$ObjList = mysql_query($SqlList) or die ($SqlList);
						?>
						
	
	<table border="0" width="100%" align="center">
			<tr>
			<td>รายการ</td>
			<td>ราคา</td>
			</tr>
	<?
	while($ReList = mysql_fetch_array($ObjList))
	{
		?>
			<tr>
			<td><?=$ReList["orderbuy"];?></td>
			<td><?=$ReList["price"];?></td>
			</tr>
			
		<?
	}
	?>
	</table>
						</td>
						<td width="25%" align="center">
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "โต๊ะ ".$Re["idtable"];
							?>
								<a href="deordertable.php?idtable=<?=$Re["idtable"];?>"><?=$Re["status"];?></a>
							<?
						}
$SqlList="SELECT * FROM allorder WHERE idtable='$row'";
	$ObjList = mysql_query($SqlList) or die ($SqlList);
						?>
						
	
	<table border="0" width="100%" align="center">
			<tr>
			<td>รายการ</td>
			<td>ราคา</td>
			</tr>
	<?
	while($ReList = mysql_fetch_array($ObjList))
	{
		?>
			<tr>
			<td><?=$ReList["orderbuy"];?></td>
			<td><?=$ReList["price"];?></td>
			</tr>
			
		<?
	}
	?>
	</table>
						</td>
			</tr>
			
			
			<tr>
						<td width="25%" align="center">
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "โต๊ะ ".$Re["idtable"];
							?>
								<a href="deordertable.php?idtable=<?=$Re["idtable"];?>"><?=$Re["status"];?></a>
							<?
						}
$SqlList="SELECT * FROM allorder WHERE idtable='$row'";
	$ObjList = mysql_query($SqlList) or die ($SqlList);
						?>
						
	
	<table border="0" width="100%" align="center">
			<tr>
			<td>รายการ</td>
			<td>ราคา</td>
			</tr>
	<?
	while($ReList = mysql_fetch_array($ObjList))
	{
		?>
			<tr>
			<td><?=$ReList["orderbuy"];?></td>
			<td><?=$ReList["price"];?></td>
			</tr>
			
		<?
	}
	?>
	</table>
						</td>
						<td width="25%" align="center">
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "โต๊ะ ".$Re["idtable"];
						?>
								<a href="deordertable.php?idtable=<?=$Re["idtable"];?>"><?=$Re["status"];?></a>
							<?
						}
$SqlList="SELECT * FROM allorder WHERE idtable='$row'";
	$ObjList = mysql_query($SqlList) or die ($SqlList);
						?>
						
	
	<table border="0" width="100%" align="center">
			<tr>
			<td>รายการ</td>
			<td>ราคา</td>
			</tr>
	<?
	while($ReList = mysql_fetch_array($ObjList))
	{
		?>
			<tr>
			<td><?=$ReList["orderbuy"];?></td>
			<td><?=$ReList["price"];?></td>
			</tr>
			
		<?
	}
	?>
	</table>
						</td>
						<td width="25%" align="center">
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "โต๊ะ ".$Re["idtable"];
							?>
								<a href="deordertable.php?idtable=<?=$Re["idtable"];?>"><?=$Re["status"];?></a>
							<?
						}
$SqlList="SELECT * FROM allorder WHERE idtable='$row'";
	$ObjList = mysql_query($SqlList) or die ($SqlList);
						?>
						
	
	<table border="0" width="100%" align="center">
			<tr>
			<td>รายการ</td>
			<td>ราคา</td>
			</tr>
	<?
	while($ReList = mysql_fetch_array($ObjList))
	{
		?>
			<tr>
			<td><?=$ReList["orderbuy"];?></td>
			<td><?=$ReList["price"];?></td>
			</tr>
			
		<?
	}
	?>
	</table>
						</td>
						<td width="25%" align="center">
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "โต๊ะ ".$Re["idtable"];
							?>
								<a href="deordertable.php?idtable=<?=$Re["idtable"];?>"><?=$Re["status"];?></a>
							<?
						}
$SqlList="SELECT * FROM allorder WHERE idtable='$row'";
	$ObjList = mysql_query($SqlList) or die ($SqlList);
						?>
						
	
	<table border="0" width="100%" align="center">
			<tr>
			<td>รายการ</td>
			<td>ราคา</td>
			</tr>
	<?
	while($ReList = mysql_fetch_array($ObjList))
	{
		?>
			<tr>
			<td><?=$ReList["orderbuy"];?></td>
			<td><?=$ReList["price"];?></td>
			</tr>
			
		<?
	}
	?>
	</table>
						</td>
			</tr>
		<?			
	}
?>
</table>
</body>
</html>