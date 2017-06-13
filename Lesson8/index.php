<?php

//.htaccess это для apache

require_once __DIR__ . '/app/models/goods_model.php';
require_once __DIR__ . '/app/models/auth_model.php';
require_once __DIR__ . '/app/controllers/controllers.php';

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
runController();

