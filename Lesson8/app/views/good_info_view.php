
	<div>
		<h1> <?php echo $current_good['title']; ?> </h1>
		<p> <?php echo $current_good['description']; ?> </p>
	</div>
	
	<?php if ($auth): ?>
	<form id="comment_form">
		<textarea title="Комментарий" name="" id="comment" cols="30" rows="10"></textarea>
		<button type="submit">Оставить комментарий</button>
	</form>

	<?php else: ?>
		<p>Вы не можете оставлять комментарии</p>
	<?php endif; ?>

	<script src="/php/js/comment.js"></script>
