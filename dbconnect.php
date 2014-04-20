<?php 
	$servername="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="passportparking";

	mysql_connect($servername,$dbusername,$dbpassword) or die('database Connection Issue');
	mysql_select_db($dbname);
 ?>