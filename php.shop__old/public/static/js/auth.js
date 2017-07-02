$(document).ready(function(){
	function authUser(event){
		event.preventDefault();
		var login = jQuery('#login').val();
		var pwd = jQuery('#pwd').val();
		jQuery.ajax({
			type: 'post',
			url: '/login',
			data: {
				login: login,
				pwd: pwd
			}
			success: function(resp) {
				//console.log(resp);
				if(resp === "Ok") {
					//window.location.href = '/';
					// =========  загуглить ==========  jQuery(location).attr('href' , '/');
					// как переключиться на другую страничку силами js DZ
				} // если не ok получить  доступ к этой информации и записать ее

			}, 
			error: function(resp) {
				console.log(resp);
			}
		});
	}
	jQuery('#auth_form').submit(authUser);
});
