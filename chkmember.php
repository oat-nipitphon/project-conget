<?
mysql_connect("localhost","root","09876543210");
mysql_select_db("dbfororder");
$username=$_POST["inid"];
$password=$_POST["inpass"];
$sql = "SELECT * FROM userlogin WHERE user='$username' AND pass='$password'";
$result = mysql_query($sql);
$numrow = mysql_num_rows($result);

if($numrow == 1) {
$value = mysql_fetch_array($result);
$_SESSION['user_name'] = $value["username"];
$_SESSION['name'] = $value["name"];
header ("location: paneadmin.php");
}
?>
// เสร็จหน้าcheck_login นะครับ //

แล้วในหน้าที่ต้อง login ก่อนก็ให้ใส่นี้ไว้บนหัวมันนะ

