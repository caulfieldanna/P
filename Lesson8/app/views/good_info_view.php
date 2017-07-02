
	<div>
		<h1> <?php echo $current_good['title']; ?> </h1>
		<p> <?php echo $current_good['description']; ?> </p>
	</div>
	
	<?php if ($auth): ?>
	<form id="comment_form">
		<textarea title="Комментарий" name="" id="comment" cols="30" rows="10"></textarea>
		<button class="btn btn-1 btn-1e btn-1e2" type="submit">Оставить комментарий</button>
	</form>

	<?php else: ?>
		<p>Вы не можете оставлять комментарии</p>
	<?php endif; ?>

	<script src="/php/js/comment.js"></script>
