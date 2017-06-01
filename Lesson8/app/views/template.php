<!DOCTYPE html>
<html lang="ru">
<head>
<title>Главная</title>
	 <script src="js/jquery.min.js"></script>
<meta charset="utf-8">
</head>
<body>
	<ul>
		<li> <a href="/">Главная </a> </li>
		
		<?php if($auth): ?>
			<li> <a href="/logout">Выйти</a> </li>
		<?php else: ?>
			<li> <a href="/login">Войти </a> </li>
		<?php endif; ?>
	</ul>

	<?php include $contentView; ?>

	<script src="js/comment.js"></script>
	<script src="js/auth.js"></script>

</body>
</html>
