<!DOCTYPE html>
<html lang="ru">
<head>
<title>Главная</title>
	<script src="jquery.min.js"></script>
<meta charset="utf-8">
</head>
<body>
	<ul>
		<li> <a href="index.php">Главная </a> </li>
		<li> <a href="auth.php">Войти </a>  </li>
		<?php if($auth): ?>
			<li> <a href="?exit=exit">Выйти</a> </li>
		<?php endif; ?>
	</ul>

	<div>
		<h1> <?php echo $current_good['title']; ?> </h1>
		<p> <?php echo $current_good['description']; ?> </p>
	</div>
	
	<?php if ($auth): ?>
	<form id="comment_form">
		<textarea title="Комментарий" name="" id="" cols="30" rows="10"></textarea>
		<button type="submit">Оставить комментарий</button>
	</form>

	<?php else: ?>
		<p>Вы не можете оставлять комментарии</p>
	<?php endif; ?>

	<script src="/php/js/comment.js"></script>

</body>
</html>