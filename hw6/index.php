<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Вход в систему</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- <form action="login.php" method="post">
	<table align=center>
	<tr>
	<td>Логин:</td>
	<td><input type="text" name="login" /></td>
	</tr>
	<tr>
	<td>Пароль:</td>
	<td><input type="password" name="password" /></td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" class="buttons" value="Войти" /></td>
	</tr>
	</table>
	</form> -->


<div class="reg_form">
	<form id="frm" method="post" action="login.php" autocomplete="on">
		<!-- <label for="login">Login</label><br> -->
		<input autofocus name="login" type="text" id="login" placeholder="Login" tabindex="1" required>
		<br>

		<!-- <label for="email">Email</label><br> -->
<!-- 		<input name="email" type="text" id="email" placeholder="Email or phone number" tabindex="1" required>
		<br> -->
	
		<!-- <label for="pwd">Password</label><br> -->
		<input name="password" type="password" id="password" placeholder="Password" tabindex="1" required>
		<br>

		<label class="check" for="check">Remember</label>
		<input name="check" type="checkbox" id="check">
		<br>
		
		<button id="subm" type="submit">SIGN IN</button>
	</form>
</div>

</body>
</html>

