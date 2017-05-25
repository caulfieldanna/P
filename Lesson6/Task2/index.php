<?php 
// запись в файл информации о посещении 
$f = fopen('visits.txt', 'a+');
fwrite($f, date('Y-m-d H:i:s') . "\n");
fwrite($f, $_SERVER['REMOTE_ADDR'] . "\n");
fwrite($f, $_SERVER['HTTP_REFERER'] . "\n");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html" charset="UTF-8">
	<title>Lesson-6 Task-2</title>
</head>
<body>
	<h3>This is main page of the site</h3>
	We're  now <a href="visits.php"> watching</a> it's attendance.

	<br><br>

	On this page link two sites: <a href="site1.php"> first</a> and <a href="site2.php"> second</a>
</body>
</html>
