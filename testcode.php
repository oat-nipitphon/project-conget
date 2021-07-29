<!DOCTYPE html>
<html lang="en">
<head>
<title>TEST CODE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
</style>
</head>
<body>
<form >
<input type="text" name="test">
</body>
</html>
<?php
ob_start();
session_start();
session_destroy();
session_start();
$_SESSION["strName"] = "Mr.Weerachai Nukitram";
$_SESSION["strSiteName"] = "ThaiCreate.Com";
?>
<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
Session Created.<br><br>
<a href="PageSession2.php">Check Session</a>
</body>
</html>