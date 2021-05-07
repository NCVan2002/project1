<?php
	if (isset($_POST['username'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = "select * from admin where username='$username' and password='$password'";
		$result=$connect->query($query);
		if (mysqli_num_rows($result)==0) {
			$alert="Sai tên đăng nhập!";
		}else{
			$result= mysqli_fetch_array($result);
			$_SESSION['admin']=$username;
			header("location: ?option=");
		}
	}
?>
<h1 style="text-align: center;">Đăng nhập tài khoản Amin</h1>
<section><?=isset($alert)?$alert:""?></section>
<form method="post" style="margin-left: 600px;">
	<table style="border: solid 1px;">
		<tr>
			<td><label>Username</label></td>
			<td><input type="text" name="username" required></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td><input type="text" name="password" required></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Đăng Nhập"></td>
		</tr>
	</table>
</form>



