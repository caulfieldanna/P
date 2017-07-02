$(document).ready(function() {
	console.log("comment.js")
	jQuery('#comment_form').submit(function(event) {
		event.preventDefault();
		var comment = document.getElementById('comment').value;
		jQuery.ajax ({
			type: 'post',
			url: '/addComment',
			data: {comment: comment},
			success: function(resp) {
				console.log(resp);//получить add
				if (resp === 'add') {
					// добавляем коммент
					//getElementById или
					//getElementsByName
				}
			},
			error: function(resp) {
				console.log(resp);			
			}
		});
	});
});