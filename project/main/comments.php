<!DOCTYPE html>
<html>
<head>
	<title>comments</title>
</head>z
<body>
	<?php
	function addComments(){
		global $connect;
		$user="select id from user where username='".$_SESSION['user']."'";
		$user=$connect->query($user);
		$user=mysqli_fetch_array($user);
		$userId=$user['id'];
		$content=$_POST['content'];
		$query="insert comments(userid,date,content) values('$userid',now(),'$content')";
		$connect->query($query);
		return 1;
	}
	function getCommentByPostId($productId){
		global $connect;
		$query="select*from customer a join comments b on a.id=b.customerId where postId=$postId and b.status";
		$result=$connect->query($query);
		return $result;
	}
	function getPostById(){
		global $connect;
		$id=$_GET['id'];
		$query="select*from post where id=1";
		$result=$connect->query($query);
		$result=mysqli_fetch_array($result);
		return $result;
	}
	?>
	<?php
		if(isset($_POST['content'])){
			addComments();
			$alert=1;
		}
		$post=getPostById();
		$comments=getCommentByPostId($post['id']);
	?>
	<?php if(isset($alert)):?>
		<script>alert('Bình luận của bạn đã được gửi. Chúng tôi sẽ xem xét để hiển thị!') </script>
	<?php endif;?>
	<?php if(mysqli_num_rows($comments)==0):?>
		<section>Không có bình luận nào!</section>
	<?php else:?>
	<?php foreach($comments as $item):?>
		<h3><?=$item['username']?></h3>
		<section><?=$item['content']?></section>
	<?php endforeach;?>
	<?php endif;?>
	<?php if(isset($_SESSION['customer'])):?>
		<div class="well">
			<h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span> </h4>
			<form method="post" role="form">
				<div class="form">
					<textarea name="content" rows="3" cols="100" required></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Gửi</button>
			</form>
		</div>
	<?php else:?>
		<section>Bạn hãy <a href="signin.php"> Đăng nhập </a> để bình luận</section>
	<?php endif;?>
</body>
</html>
		
