<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
		#login, #pwd {
  margin: 10px;
}

#check {
  margin-bottom: 20px;
}
	</style>

</head>
<body>
	
	<form id="frm" method="post" action="lesson5.add_user.php">
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
	</form>


</body>
</html>