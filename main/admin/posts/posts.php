<?php
	$query="select*from posts";
	$result=$connect->query($query);
?>
<h1>Bài viết</h1>
<section style="text-align: center; margin-bottom: 5px;"><a href="?option=addposts" style="background: white; text-decoration: none; padding: 5px; border-radius: 5px;">AddPosts</a></section>
<table cellspacing="0" cellpadding="0" border="1" width="100%">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($result as $item):?>
			<tr>
				<td><?=$item['id']?></td>
				<td><?=$item['name']?></td>
				<td><?=$item['status']==1?'Active':'UnActive'?></td>
				<td><a href="#">Update</a> | <a href="#">Delete</a></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>