<?php

	var_dump($_POST);

	$login = $_POST['login'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$check = $_POST['check'];

	$data_arr = [
		'login' => $login,
		'email' => $email,
		'pwd' => $pwd,
		'check' => $check
	];

// function openFile($filename) {
// 	if (!file_exists('user.data.txt')) {
// 		$fp = fopen($filename, 'w');
// 		addUser();
// 	}
// }

// function addUser($arr) {
// 	$file = 'user.data.txt';
// 	$data = file_get_contents($file);

// 	$data = implode(', ', $arr);
// 	file_put_contents($file, $data, FILE_APPEND);
// }

// addUser($data_arr);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Account</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>

<div class="header">
	<div class="header_menu">
		<ul>
			<li><a href="index.php">About</a></li>
			<li><a href="index.php">Portfolio</a></li>
			<li><a href="index.php">Contacts</a></li>
			<li><a href="reg.php">Regestration</a></li>
		</ul>
	</div>
</div>

<div class="spase">
	
</div>


<div class="footer">
		<div class="info">
			<h3>Contacts</h3>
			<p>	<strong>Office:</strong> Bla bla 314 blabla 413</p>
			<p>	<strong>Phone number:</strong>	+b-(lab)-lab-la-bl</p>
			<p>	<strong>Facebook: </strong> <a href="https://facebook.com/">link</a> </p>

			<div class="demo">
				<a href="#">Home</a>
			</div>
			<script>
				$('demo.a').on('click', function() {
				$(document).scrollTop()			
				})
			</script>
		</div>
	</div>
	
</body>
</html>