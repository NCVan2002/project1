<?php session_start(); $connect = new MySQLi("localhost","root","","project"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=2.0">
	<script src="jquery-3.5.0.min.js">
	</script> <script src="ckeditor/ckeditor.js"></script>
	<script src="ckeditor/ckfinder/ckfinder.js"></script>
	<link rel="stylesheet" type="text/css" href="../main/style.css">
</head>
<body>
	<?php 
	if (empty($_SESSION['admin'])) {
		include "content/loginadmin.php";
	}else {
		include "content/quantri.php";
	} ?>
</body>
	<script>
	    CKEDITOR.replace( 'editor1' );
	</script>
</html>
<?php
	function addComments(){
		global $connect;
		$user="seclect id from user where username='".$_SESSION['user']."'";
		$user=$connect->query($user);
		$user=mysqli_fetch_array($user);
		$userId=$user['id'];
		$content=$_POST['content'];
		$query="insert comments(userid,date,content) values('$userid',now(),'$content')";
		$connect->query($query);
		return 1;
	}
	function getComments(){
		global $connect;
		$query="select*from comments";
		$result=query($query);
		return $result;
	}
?>