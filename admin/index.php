<<<<<<< HEAD
=======
<?php session_start(); $connect = new MySQLi("localhost","root","","project"); ?>
>>>>>>> 0b5a13235d3c63caf9ed2bb6a5684aebc7544d26
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
<<<<<<< HEAD
</head>
<body>
	<?php include"../admin/loginadmin.php"?>
=======
	<meta name="viewport" content="width=device-width, initial-scale=2.0">
</head>
<body>
	<?php 
	if (empty($_SESSION['admin'])) {
		include "content/loginadmin.php";
	}else {
		include "content/quantri.php";
	} ?>
>>>>>>> 0b5a13235d3c63caf9ed2bb6a5684aebc7544d26
</body>
</html>