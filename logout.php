<?
	session_start();
	unset( $_SESSION['sess_userid']);
	unset( $_SESSION['sess_username']);
	session_destroy(); //คำสั่งลบข้อมูลออกจาก Session
	header('Location: paneadmin.php');
?>