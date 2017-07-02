<!-- 
mysql -u root
mysql -u root -p
mysql -u root -p
create database phpshop;
show databases;
use phpshop; 



-->
<?php

//.htaccess это для apache

require_once __DIR__ . '/../app/core/Router.php';
require_once __DIR__ . '/../app/models/goods_model.php';
require_once __DIR__ . '/../app/models/auth_model.php';
require_once __DIR__ . '/../app/models/comments_model.php';
require_once __DIR__ . '/../app/controllers/controllers.php';
require_once __DIR__ . '/../app/controllers/IndexController.php';

function runController() {
	$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	//var_dump($uri);

	$action = trim($uri, '/') ?: 'index'; //add comment
	$action = $action . 'Action'; //add commentAction

	if (!function_exists($action)) {
		header($_SERVER['SERVER_PROTOCOL'] . '404 Not Found');
		exit('404 Not Found');
	}
	$action(); //add commentAction()
}

session_start();
$router = Router::getInstance();
var_dump($router);
$router->run;
//runController();

?>

<!-- <script src="js/classie.js"></script>
		<script>
			var buttons7Click = Array.prototype.slice.call( document.querySelectorAll( '#btn-click button' ) ),
				buttons9Click = Array.prototype.slice.call( document.querySelectorAll( 'button.btn-8g' ) ),
				totalButtons7Click = buttons7Click.length,
				totalButtons9Click = buttons9Click.length;

			buttons7Click.forEach( function( el, i ) { el.addEventListener( 'click', activate, false ); } );
			buttons9Click.forEach( function( el, i ) { el.addEventListener( 'click', activate, false ); } );

			function activate() {
				var self = this, activatedClass = 'btn-activated';

				if( classie.has( this, 'btn-7h' ) ) {
					// if it is the first of the two btn-7h then activatedClass = 'btn-error';
					// if it is the second then activatedClass = 'btn-success'
					activatedClass = buttons7Click.indexOf( this ) === totalButtons7Click-2 ? 'btn-error' : 'btn-success';
				}
				else if( classie.has( this, 'btn-8g' ) ) {
					// if it is the first of the two btn-8g then activatedClass = 'btn-success3d';
					// if it is the second then activatedClass = 'btn-error3d'
					activatedClass = buttons9Click.indexOf( this ) === totalButtons9Click-2 ? 'btn-success3d' : 'btn-error3d';
				}

				if( !classie.has( this, activatedClass ) ) {
					classie.add( this, activatedClass );
					setTimeout( function() { classie.remove( self, activatedClass ) }, 1000 );
				}
			}

			document.querySelector( '.btn-7i' ).addEventListener( 'click', function() {
				classie.add( document.querySelector( '#trash-effect' ), 'trash-effect-active' );
			}, false );
		</script> -->