
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Lesson-6</title>
 </head>
 <body>

	<h3>Type your login</h3>

 	<form id="frm" method="post" action="" autocomplete="on">
		<label for="login">Login</label><br>
		<input autofocus name="username" type="text" id="username" placeholder="username" tabindex="1" required>
		<br>
		
<!-- 		<label for="email">Email</label><br>
		<input name="email" type="text" id="email" placeholder="Email or phone number" tabindex="1" required>
		<br> -->
		
<!-- 		<label for="pwd">Password</label><br>
		<input name="password" type="password" id="password" placeholder="Password" tabindex="1" required>
		<br> -->

		<label class="check" for="check">Remember me</label>
		<input name="remember" type="checkbox" id="remember">
		<br>
		
		<button id="subm" type="submit">SIGN IN</button>
	</form>
 </body>
 </html>


 <?php 

function Login ($username, $remember) {
	if ($username == '')
		return false;
	$_SESSION['username'] = $username;

	

	if ($remember)
		// если запоминание будет длиться неделю
		setcookie('username', $username, time() + 2600*24*7);
	return true;
}

// сброс авторизации

function Logout () {
	// делает cookies устаревшими
	setcookie('username', '' , time() - 1);

	// сброс сессии
	unset($_SESSION['username']);
}

// место входа:

session_start();
$enter_site = false;

// при попадении на страницу login.php, авторизация сбрасывается
Logout();
 
// если post не пустой, то обрабатывает отправку формы
if (count($_POST) > 0) {
	$enter_site = Login($_POST['username'], $_POST['remember'] == 'on');
}

// если авториз. пройдена, то переадресация на одну из страниц сайта
 if ($enter_site) {
 	header("Location: page1.php");
 	exit();
 }

 ?>