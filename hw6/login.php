<?php
//Запуск сессий;
/*
session_start();



if (isset($_POST['login']) && isset($_POST['password']))
{
// получаем данные из формы с авторизацией

// $login = ($_POST['login']);
// $password = $_POST['password'];
		// var_dump($_POST);

	$login = $_POST['login'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$check = $_POST['check'];

	$data_arr = [
		'login' => $login,
		'email' => $email,
		'password' => $password,
		'check' => $check
	];

//проверка пароля и логина
if (($login=='')&& ($password=='')){
echo ("логин совпадает и пароль верны");
$_SESSION['Name']=$login;
// идем на страницу для авторизованного пользователя
header("Location: secret.php");
}
else
{die('Такой логин с паролем не найдены в базе данных.');
}
}

?>

 <?php 
*/
function Login ($login, $remember) {
	if ($login == '')
		return false;
	$_SESSION['login'] = $login;

	

	if ($remember)
		// если запоминание будет длиться неделю
		setcookie('login', $login, time() + 2600*24*7);
	return true;
}

// сброс авторизации

function Logout () {
	// делает cookies устаревшими
	setcookie('login', '' , time() - 1);

	// сброс сессии
	unset($_SESSION['login']);
}

// место входа:

session_start();
$enter_site = false;

// при попадении на страницу login.php, авторизация сбрасывается
Logout();
 
// если post не пустой, то обрабатывает отправку формы
if (count($_POST) > 0) {
	$enter_site = Login($_POST['login'], $_POST['remember'] == 'on');
}

// если авториз. пройдена, то переадресация на одну из страниц сайта
 if ($enter_site) {
 	header("Location: account.php");
 	exit();
 }



// -------



function Password ($password, $remember) {
	if ($password == '')
		return false;
	$_SESSION['password'] = $password;

	

	if ($remember)
		// если запоминание будет длиться неделю
		setcookie('password', $password, time() + 2600*24*7);
	return true;
}



// место входа:

session_start();
$enter_site = false;

//при попадении на страницу password.php, авторизация сбрасывается
Logout();
 
// если post не пустой, то обрабатывает отправку формы
if (count($_POST) > 0) {
	$enter_site = Password($_POST['password'] == 'on');
}

// если авториз. пройдена, то переадресация на одну из страниц сайта
 if ($enter_site) {
 	header("Location: account.php");
 	exit();
 }


 ?>