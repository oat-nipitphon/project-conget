<?
	$objConnect = mysql_connect("localhost","root","09876543210") or die ("Error Connect DataBase");
	$objDB = mysql_select_db("dbfororder");
	mysql_query("SET NAMES UTF8");
	if(!$objConnect)
	{
		echo "Error Connect DataBase".$objConnect;
	}
?>