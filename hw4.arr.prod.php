<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Products</h2>

		<?php include "hw4.prod.info.php";?>
		<?php  foreach ($data as $key => $value):?>

	<div>
		<h3> <?php echo $data[$key]['title']; ?> </h3>
		<p>  <?php echo $data[$key]['description']; ?> </p>
		<a href="hw4.prod.desc.php?id=<?php echo '' .$data[$key]['id']; ?>">Read more</a>
	</div>

		<?php endforeach;?>
	<!-- foreach ($data as $key => $value) {
	echo $data[$key]['id'];
	} -->

	
</body>
</html>