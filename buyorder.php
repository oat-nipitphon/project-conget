<!DOCTYPE html>
<html>
<head>
<title>สั่งรายการอาหาร</title>
<meta charset="utf-8">
 
<style>

</style>
</head>
<body background="image/background.jpg">
<table border="0" width="100%" height="250" style="background-color:rgb(255, 255, 255, 0.3);">
<tr>
<td><img src="image/background1.jpg" style="width:100%;height:350px;"></td>
</tr>
</table> 

  <?php
	$idtable=$_POST["idtable"];
	include"connect.php";
	$Sql="SELECT * FROM `tableorder`";
	$obj = mysql_query($Sql) or die ("Error SQL'".$Sql."'");
	$no="ไม่ว่าง";
	$Sqlno="UPDATE `tablebuy` SET `status`='$no' WHERE idtable='$idtable'";
	$objQueryno = mysql_query($Sqlno) or die ("Error SQL'".$Sqlno."'");



  ?>
  <table border="0" width="100%" align="center">
  <tr><td width="60%" align="center">
  <table border="0" width="100%" align="center">
  <tr>
  <td>รายการ</td>
  <td>ราคา</td>
  </tr>
  <?php
  
	while($Result=mysql_fetch_array($obj))
	{
  ?>
	<form method="post" action="buyorder.php" name="getorder">
   
  <tr>
  <td width="70%"><?=$Result["nameorder"];?><input type="hidden" value="<?=$Result["nameorder"];?>" name="nameorder"></td>
  <td width="15%">
  <input type="submit" name="price" style="width:100px"value="<?=$Result["price"];?>">
  </td>
  </tr>
  <input type="hidden" value="<?=$idtable;?>" name="idtable">
  </form>
  <?php
	}
  ?>
  </table>
  </td>
  
<?php
	//เพิ่มข้อมูล
	$idtable=$_POST["idtable"];
	$nameorder=$_POST["nameorder"];
	$price=$_POST["price"];
	
	///////////////////////TOTALPRICE///////////////////////////////////////////////
	$Sqltotal="SELECT * FROM `tablebuy` WHERE idtable='$idtable'";
	$objtotal = mysql_query($Sqltotal) or die ("Error SQL'".$Sqltotal."'");
	while($Resulttotal=mysql_fetch_array($objtotal))
	{
		$total = $Resulttotal["totalprice"];
		$timere = $Resulttotal["timeorder"];
	}
	$Sqltime="SELECT * FROM tableorder WHERE nameorder='$nameorder'";
	
	$Objtime = mysql_query($Sqltime) or die ("Error SQLTIME".$Sqltime);
	while($Retime=mysql_fetch_array($Objtime))
	{
		$timeorder=$Retime["timeorder"];

	}
	$timenew=$timeorder+$timere;
	$totalall=$price+$total;
	$Sqladdtotal="UPDATE tablebuy SET totalprice='$totalall' ,timeorder='$timenew' WHERE idtable='$idtable'";
	$alltotal = mysql_query($Sqladdtotal) or die ("Error".$Sqladdtotal);
	///////////////////////////////////////////////////////////////////////////////
	
	if($nameorder == "")
	{
		
	}
	else
	{
		$Sqlbuy="INSERT INTO allorder(`idtable`, `orderbuy`, `price`) 
		VALUES ('$idtable','$nameorder','$price')";
		$objQuery = mysql_query($Sqlbuy) or die ($Sqlbuy);
		
	}
	
	
	//แสดงบิล
	$Sqlshow="SELECT * FROM allorder WHERE idtable='$idtable'";
	$objshow=mysql_query($Sqlshow) or die("Error Sql".$Sqlshow);
		
  ?>
 <td width="40%" align="center">
  <table width="100%" border="0" align="center">  
  <?php
    while($Resultshow=mysql_fetch_array($objshow))
	{	
  ?>	
  <tr>
    <td>
		<form method="post" action="deleteorder.php" name="deleteorder" id="deleteorder">
		<input type="hidden" name="idbuyorder" id="idbuyorder" value="<?=$Resultshow["idbuyorder"];?>">
		<input type="hidden" name="idtable" id="idtable" value="<?=$Resultshow["idtable"];?>">
		
		<?=$Resultshow["orderbuy"];?>
		<?=$Resultshow["price"];?>
	</td>
	<td>
	<center><input type="submit" name="butdelete" value="ยกเลิก"></center>
		</form>
	</td>
	</tr>
	<?
	}
	?>
	<tr>
	<?
		echo "โต๊ะที่".$idtable." ";
		echo "รวมราคา"." ".$totalall." "."บาท";
	?>
	<td><form method="post" action="configorder.php" name="dateorder" id="dateorder">
	<input type="hidden" name="idtable" id="idtable" value="<?=$idtable?>">
	<?date_default_timezone_set("Asia/Bangkok");?>
	<input type="submit" name="buycon" id="buycon" value="ยืนยันรายการ"></td>
	</form>
	</tr>
	 </table>
	 </td></tr>
</table>
 
   <center><p><h3><a href="selecttable.php">เปลี่ยนโต๊ะ</a></h3></p></center>
</body>
</html>
