<html>
<head>
<title>รายการที่สั่ง</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
	/*
	include"connect.php";	
	$tableid=$_POST["idtable"];
	$nameorder=$_POST["nameorder"];
	$price=$_POST["price"];
	$price_b=$_POST["price"];
	if($price_n==0)
	{
		$priceorder=$price_b;
	}
	else
	{
		$priceorder=$price_n;
	}
	header('Content-Type: application/json');

	$arr = array("nameorder"=>$_POST["nameorder"],
							"price"=>$_POST["price"];

	
	$Sqlbuy="INSERT INTO `allorder`(`orderbuy`, `price`) 
	VALUES ('$nameorder','$price')";
	$objQuery = mysql_query($Sqlbuy) or die ("Error SQL'".$Sqlbuy."'");
	echo json_encode($arr);
	*/?>
	<?php
	header('Content-Type: application/json');

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "09876543210";
	$dbName = "dbfororder";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$sql = "INSERT INTO allorder (orderbuy, price) 
		VALUES ('".$_POST["nameorder"]."','".$_POST["price"]."')";
	$query = mysqli_query($conn,$sql);

	if($query) {
		echo json_encode(array('status' => '1','message'=> 'Record add successfully'));
	}
	else
	{
		echo json_encode(array('status' => '0','message'=> 'Error insert data!'));
	}

	mysqli_close($conn);
?>
	
</body>
</html>