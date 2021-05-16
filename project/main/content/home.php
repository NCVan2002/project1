<section class="content">
<h1 class="banner">THÔNG TIN CHI TIẾT VỀ BỘ MÔN LEO NÚI</h1>
<ul class="option">
	<?php $query="select*from post";
	$result=$connect->query($query);
	foreach ($result as $item) {?>
		<li class="choice"><a href="?option=menulist&id=<?=$item['id']?>"><?=$item['title']?></a></li>
	<?php }?>
</ul>
</section>