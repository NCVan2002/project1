<?php
	if (isset($_POST['editor1'])) {
		$title = $_POST['title'];
		$content = $_POST['editor1'];
		$writer = $_SESSION['admin'];
		$query = "insert post(writer, title, content)values('$writer', '$title', '$content')";
		$result = $connect->query($query);
	}
?>
<tr>
	<td>
		<div style="font-size: 24px;">title:</div>				
		<textarea cols="30" rows="10" name="title" style="resize: none; font-size: 24px;"></textarea>
	</td>
	<td>
		<textarea id="editor1" name="editor1" required="true"></textarea>
		<input type="submit" value="đăng bài" style="text-align: center; padding: 1% 3%; margin: 2% 45%" >
	</td>
</tr>