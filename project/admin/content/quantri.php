
<form method="post" action="">
	<table width="100%" border="1" cellpadding="0" cellspacing="0">
		<tr>
			<td style="max-width: 20%; font-size: 24px;">Hello: <?=$_SESSION['admin']?><br>[<a href="?option=logout">Logout</a>]
				<div>
					<a href="?option=edit">>>>>>chỉnh sửa</a>
				</div>
				<div>
					<a href="?option=new">>>>>>thêm bài viết</a>
				</div>
				<div>
					<a href="?option=new">>>>>>tạo tài khoản admin</a>
				</div>
			</td>
			<td style=" text-align: center; font-size: 24px;">Trang Quản Trị Admin</td>
		</tr>
		<?php
			if (isset($_GET['option'])) {
				switch ($_GET['option']) {
					case 'edit':
						include "edit.php";
						break;
					case 'new':
						include "new.php";
						break;
					case 'create':
						include "create.php";
						break;
					case 'logout':
						unset($_SESSION['admin']);
						header('location: .');
						break;
				}
			}else{
				include "wellcome.php";
			}
		?>
	</table>
</form>