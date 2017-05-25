<?php

session_start();

if (!isset($_SESSION['username']) && isset($_COOKIE['username']))
	$_SESSION['username'] = $_COOKIE['username'];

	$username = $_SESSION['username'];
	if (username == null) {
		header("Location: login.php");
		exit();
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lesson-6</title>
</head>
<body>
	<h3>Fist page</h3>
	<a href="page1.php">First</a>  and <strong>second</strong> pages.
	<br>
	<br>
	You are logged in as <strong><?php echo $username; ?></strong> | <a href="login.php">Exit</a>
</body>
</html>