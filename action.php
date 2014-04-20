<?php
	require 'dbconnect.php';
	if(isset($_POST['action']))
	{	
		$val1 = $_POST['val1'];
		$val2 = $_POST['val2'];
		$optn = $_POST['optn'];
		$ip = $_SERVER['REMOTE_ADDR'];
		$datetime = date("Y-m-d H:i:s");
		$result = $_POST['result'];
		$sql = "INSERT INTO calc VALUES('$val1', '$optn', '$val2', '$result', '$ip', '$datetime')";
		mysql_query($sql) or die('Database Error');
	}
	header('location:index.php');
?>
