<?php session_start(); $connect = new MySQLi("localhost","root","","project"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=2.0">
</head>
<body>
	<?php 
	if (empty($_SESSION['admin'])) {
		include "content/loginadmin.php";
	}else {
		include "content/quantri.php";
	} ?>
</body>
</html>