<?php
	$host = "fdb14.freehostingeu.com";
	$user = "2261097_air";
	$pass = "ASD12345678";
	$db   = "2261097_air";
	
	$con = mysql_connect($host,$user,$pass) 
			or die("Koneksi ke MySQL gagal dibentuk");
			
	mysql_select_db($db,$con) 
			or die("Database $db tidak dapat diakses");
?>