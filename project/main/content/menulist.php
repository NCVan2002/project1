<?php
	$query = "select*from post where status = 1 and id = ".$_GET['id'];
	$result = $connect->query($query);
	$result=mysqli_fetch_array($result);
?>

<section class="content container">
	<h1 style="padding: 20px 0px;"><?=$result['title']?></h1>
	<br><br>
	<div><?= $result['content']; ?></div>
</section>
