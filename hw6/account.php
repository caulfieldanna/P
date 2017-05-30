<?php
//Запуск сессий;
session_start();
//если пользователь не авторизован

if (!(isset($_SESSION['login'])))
{
//идем на страницу авторизации
header("Location: index.php");
exit;
};
if (!(isset($_SESSION['password'])))
{
//идем на страницу авторизации
header("Location: index.php");
exit;
};
//Выводим саму страницу для авторизованных пользователей
$nm = $_SESSION['login'] or $_SESSION['new_login'];
$pas = $_SESSION['password'];
//echo ("<div style=\"text-align: center; margin-top: 10px;\">");
//print "Пользователь системы $nm <br> ";
//print "Вы на секретной странице $nm <br> ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Личный кабинет</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	
	<div class="header">
		<div class="header_menu">
			<ul>
				<li><a href="index.php">Lorem</a></li>
				<li><a href="index.php">Lorem</a></li>
				<li><a href="index.php">Lorem</a></li>
				<li><a href="index.php">Lorem</a></li>
			</ul>
		</div>
	</div>

	<div class="user_info">
		<p> Welcome  <?php print($nm) ?>!</p>
		<p> Your pass is <?php print($pas) ?></p> 
	</div>

	<div class="account">
		<form name="acc_form" action="" method="post" id="acc_form">
			
			<input ame="new_login" type="text" id="new_login" placeholder="Enter a new login" tabindex="1"><br>
			<button id="subm_acc" type="submit">SEND</button><br>

			<input name="new_email" type="text" id="new_email" placeholder="Enter new e-mail address" tabindex="1"><br>
			<button id="subm_acc" type="submit">SEND</button><br>

			<input name="new_password1" type="password" id="new_password1" placeholder="enter a new password" tabindex="1"><br>
			<input name="new_password2" type="password" id="new_password2" placeholder="enter a new password again" tabindex="1"><br>
			<button id="subm_acc" type="submit">SEND</button><br>

		</form>
	</div>
</body>
</html>

