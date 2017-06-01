<?php 
function indexAction() {
	//echo "INDEX";
	//session_start();
	var_dump($_COOKIE);
	// setcookie(
	// 	"name", // "user_id", 
	// 			//$user_id
	// 	        //12
	// 	"value",
	// 	"time", // time() + 1200);
	// 	"path",
	// 	"domain",
	// 	"https",
	// 	"httponly"
	// 	);
	//logout();
	generateView('all_goods_view.php' , 'template.php', [
		'goods_data' => getAllGoods(), 
		'auth' => is_session(),
		]);
}

function descriptionAction() {
	//echo "DESCRIPTION";
	//session_start();
	var_dump(session_save_path());
	//logout();
	var_dump($_SESSION);
	$good = getGoodById(isset($_GET['id']) ? $_GET['id'] : '');

	generateView('good_info_view.php', 'template.php', [
		'current_good' => $good,
		'auth' => is_session(),
		]);
} // all goods
 
function loginAction() {
	//echo "LOGIN";
	//session_start();
	//logout();
	$login  = (isset($_POST['login']) ? $_POST['login'] : '');
	$pwd  = (isset($_POST['pwd']) ? $_POST['pwd'] : '');

	if(login($login, $pwd) || is_session()) {
		// header("Location: /personal_acc.php"); // account
		//echo "Ok"; // auth.js 
		//return;
	}
	generateView('auth_form.php', 'template.php');
}

// function personalAccAction() {

//    session_start();
//     $login = (isset($_POST['login']) ? $_POST['login'] : '');
// 	generateView('personal_acc.php', 'template.php');

function addCommentAction() {
	$comment = (isset($_POST['comment']) ? $_POST['comment'] : '');
	$login = $_SESSION['name']; // проверить на isset
	if (comment_add($comment, $login));{ //comment_add - описать в models и получить имя пользователя(сессия)
	echo 'add'; //ответ сервера
	}
}

function logoutAction() {
	//if (isset($_GET['exit'])) {
		unset($_SESSION['name']);
		session_unset();
		session_destroy();

	}
//}

	

function generateView($contentView, $template, $data=[]) {
	if(is_array($data)) {
		extract($data);
	}
	require_once 'app/views/' . $template;
}

?>