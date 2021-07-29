<!DOCTYPE html>
<html lang="th">
<head>
<title>สั่งรายการอาหาร</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<style>

</style>
</head>
<body>

  <?php
  //ส่วนของการสั่งซื้อ
	$idtable=$_POST["idtable"];
	//$idtable=$_GET["idtable"];
	include"connect.php";
	$Sql="SELECT * FROM `tableorder`";
	$obj = mysql_query($Sql) or die ("Error SQL'".$Sql."'");
	echo $idtable;
  ?>
  <table border="1" width="50%">
  <?php
	while($Result=mysql_fetch_array($obj))
	{
  ?>
   <form method="post" action="" name="getorder" id="getorder">
  <input type="hidden" value="<?=$idtable;?>" name="idtable" id="idtable">
  <tr>
  <td width="50%"><?=$Result["nameorder"];?><input type="hidden" value="<?=$Result["nameorder"];?>" name="nameorder" id="nameorder">
  <br><?=$Result["price_n"];?><input type="hidden" name="price" id="price" value="<?=$Result["price_n"];?>"></td>
  <td align="center" width="20%"><input type="button" name="butbuy" id="butbuy" value="สั่ง">
  </td>
  </tr>
  </form>
  <?php
	}
  ?>
    <script type="text/javascript">
		$(document).ready(function() {
			
			$("#butbuy").click(function() {
			
					$.ajax({
					   type: "POST",
					   url: "checkorder.php",
					   data: $("#getorder").serialize(),
					   success: function(result) {
							if(result.status == 1) // Success
							{
								alert(result.message); 
							}
							else // Err
							{
								alert(result.message);
							}
					   }
					 });

			});
	
		});
</script>

  <?php
  echo $_POST["nameorder"];
	echo $_POST["price"];
  
	//แสดงบิล
	$Sqlshow="SELECT * FROM allorder";
	$objshow=mysql_query($Sqlshow) or die("Error Sql".$Sqlshow);
	
  ?>
 
  <table width="70%" border="0" align="center">  
  <tr>
    <td>รายการอาหาร</td>
	<td>ราคา</td>
	<td>สถานะ</td>
	</tr>
  <?php
    while($Resultshow=mysql_fetch_array($objshow))
	{	
  ?>	
  <tr>
    <td>
		<?=$Resultshow["idtable"];?>
		<?=$Resultshow["orderbuy"];?>
		<?=$Resultshow["price"];?>
	</td>
	</tr>
	<?php
	}
	?>
   </table>
  
</body>
</html>
