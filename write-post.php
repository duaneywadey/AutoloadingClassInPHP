<?php require_once 'controllers/core.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="controllers/posts.php" method="POST">
		<textarea name="description" id="" rows="10" cols="50"></textarea>
		<input type="submit" name="savePostBtn" value="Save">
	</form>
	<div class="postGroup">

		<?php $seeAllPosts = $postObj->seeAllPosts($conn); ?>
		<?php foreach ($seeAllPosts as $col) { ?>
		<div class="post" style="border-style: solid; margin-top: 10px;">
			<div class="header">
				<h1><?php echo $col['date_posted']; ?></h1>
			</div>
			<div class="postDescription">
				<p><?php echo $col['description']; ?></p>
			</div>
		</div>
		<?php } ?>

	</div>
</body>
</html>