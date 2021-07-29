<?
ob_start();
session_start();
session_destroy();
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Login</title>
</head>

<body background="image/background.jpg">
<table border="0" width="100%" height="250" style="background-color:rgb(255, 255, 255, 0.3);">
<tr>
<td><img src="image/background1.jpg" style="width:100%;height:350px;"></td>
</tr>
</table>
<p align="center"><b><font size="7">Login</font></b></p>
<p align="center">&nbsp;</p>
<form method="post" action="?Action=Login" name="fromlogin" id="fromlogin">
<?
	if($_GET["Action"] == "Login")
	{
		include("nusoap/lib/nusoap.php");
		$client = new nusoap_client("http://127.0.0.1/qrcodefororder/chksession.php?wsdl",true);
		$params = array(
		'username' => $_POST["inid"],
		'password' => $_POST["inpass"]);

   $data = $client->call("ShopLogin",$params);
   if($data[0]==true)
   {
	   
	   $_SESSION["username"] = $data[1];
	   header("location:paneadmin.php");
	   //header("location:paneadminfororder.php");
   }
   else
   {
	   
	   echo "<font color='red'>".$data[2]."</font>";
	   $_SESSION["username"] = null;
   }
	}
?>
	<p align="center"><b>Username</b> <input type="text" name="inid" id="inid" size="20"></p>
	<p align="center"><b>Password</b> <input type="password" name="inpass" id="inpass" size="20"></p>
	<p align="center"><font size="3">
	<input type="submit" value="Login" name="B1"> <input type="submit" value="back" name="B2"></font></p>
</form>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
</body>

</html>
