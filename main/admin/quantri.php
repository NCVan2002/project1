<table width="100%" border="1" cellpadding="0" cellspacing="0">
	<tr>
		<td>Hello: <?=$_SESSION['admin']?><br>[<a href="?option=logout">Logout</a>]</td>
		<td>Trang Quản Trị Admin</td>
	</tr>
	<tr>
		<td>
			<section><a href="?option=">thêm địa điểm:</a></section>
		</td>
		<td>
			<?php
				if (isset($_GET['option'])) {
					switch ($_GET['option']) {
						case 'logoutadmin':
							unset($_SESSION['admin']);
							header("location: .");
							break;
						case 'addposts':
							include 'posts/addposts.php';
							break;
					}
				}
			?>
		</td>
	</tr>
</table>