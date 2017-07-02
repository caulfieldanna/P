<?php

require_once __DIR__ . '/../app/models/goods_model.php';
require_once __DIR__ . '/../app/models/auth_model.php';
require_once __DIR__ . '/../app/models/comments_model.php';
require_once __DIR__ . '/../app/controllers/controllers.php';


function runController() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $action = trim($uri, '/') ?: 'index';
        $action = $action . 'Action';
        if (!function_exists($action)) {
            echo $action;

            header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
            exit('404 Not Found');
        }
        $action();
}

// index, description,
// account, accountLogin, accountLogout,
// cart, order,

session_start();
runController();


