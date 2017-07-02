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
		'app_title' => 'Главная',
		'goods_data' => getAllGoods(), 
		'auth' => is_session(),
		]);
}

function descriptionAction() {
	//echo "DESCRIPTION";
	// var_dump(session_save_path());
	// //logout();
	// var_dump($_SESSION);
	$comments = getAllComments();
	$good = getGoodById(isset($_GET['id']) ? $_GET['id'] : '');

	generateView('good_info_view.php', 'template.php', [
		'app_title' => $good['title'],
		'comments' => $comments,
		'current_good' => $good,
		'auth' => is_session(),
		]);
} // all goods

function accountLoginAction() {
	$login  = (isset($_POST['login']) ? $_POST['login'] : '');
	$pwd  = (isset($_POST['pwd']) ? $_POST['pwd'] : '');

	if(login($login, $pwd) || is_session()) {
		echo 'ok';
    } else {
        echo "auth error";
	}
	//generateView('auth_form.php', 'template.php');
}

function accountLogoutAction() {
	setcookie('user_id');
	unset($_SESSION['name']);
	session_unset();
	session_destroy();
	echo "logout";
}

function accountAction() {
//    echo "ACCOUNT";
    $admin = is_admin($_SESSION['username']);
    generateView('account.php', 'template.php', [
        'app_title' => 'Личный кабинет',
        'username' => $_SESSION['username'],
        'admin' => $admin
    ]);
}

function cartAction() {
    echo "Корзина";
}

function orderAction() {
    echo "Заказ";
}



function contactsAction() {
    echo "Контакты";
}

function addCommentAction() {
	$comment = (isset($_POST['comment']) ? $_POST['comment'] : '');
	//$login = $_SESSION['name']; // проверить на isset
	if (comment_add($comment, $login)){ //comment_add - описать в models и получить имя пользователя(сессия)
	echo 'add'; //ответ сервера
	} else {
        echo "adding error";
    }
}

function generateView($contentView, $template, $data=[]) {
    if ($data) {
        extract($data);
    }
    require_once '../app/views/' . $template;
}

// function generateView($contentView, $template, $data=[]) {
//     if ($data) {
//         extract($data);
//     }
//     require_once '../app/views/' . $template;
// }

?>