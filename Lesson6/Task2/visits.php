<?php
//чтение из файла информации о посещениях 
$lines = file('visits.txt');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html" charset="UTF-8">
	<title>Lesson-6 Task-2</title>
</head>
<body>
	<h3>Browsing history</h3>

	<a href="index.php">Go to main</a>
	<br><br>

<table border="1">
<tr>
<td>Time</td>
<td>IP-adress</td>
<td>From where</td>

</tr>
<?php
$n = count($lines);
for ($i=0; $i < $n; $i+=3) {
echo '<tr>';
echo '<td>' . $lines[$i + 0] . '</td>';
echo '<td>' . $lines[$i + 1] . '</td>';
echo '<td>' . $lines[$i + 2] . '</td>';
echo '</tr>';
}
?>
</table>

<?php
echo "\n This website was visited";
echo $n/3;
echo " times";
?>
</body>
</html>