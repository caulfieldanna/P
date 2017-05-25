<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HW-5</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">


</head>
<body>
	
<!-- 	<form id="frm" method="post" action="add.user.php">
		<label for="login">Login</label>
		<input name="login" type="text" id="login" placeholder="Login">
		<br>

		<label for="pwd">Password</label>
		<input name="pwd" type="text" id="pwd" placeholder="Password">
		<br>
		
		<label for="check">Remember</label>
		<input name="check" type="checkbox" id="check">
		<br>
		
		<button id="subm" type="submit">SEND</button>
	</form> -->

<div class="reg_form">
	<form id="frm" method="post" action="add.user.php" autocomplete="on">
		<!-- <label for="login">Login</label><br> -->
		<input autofocus name="login" type="text" id="login" placeholder="Login" tabindex="1" required>
		<br>

		<!-- <label for="email">Email</label><br> -->
		<input name="email" type="text" id="email" placeholder="Email or phone number" tabindex="1" required>
		<br>
	
		<!-- <label for="pwd">Password</label><br> -->
		<input name="pwd" type="password" id="pwd" placeholder="Password" tabindex="1" required>
		<br>

		<label class="check" for="check">Remember</label>
		<input name="check" type="checkbox" id="check">
		<br>
		
		<button id="subm" type="submit">SIGN IN</button>
	</form>
</div>

</body>
</html>