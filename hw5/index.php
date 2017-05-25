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
	<div class="header">
		<div class="header_menu">
			<ul>
				<li><a href="#about">About</a></li>
				<li><a href="#gallery">Portfolio</a></li>
				<li><a href="#">Contacts</a></li>
				<li><a href="reg.php">Regestration</a></li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div class="info">
			<div class="col-4 offset-1">
					<h2><a name="about"></a>Lorem ipsum dolor sit.</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita perferendis nisi ipsam aut quasi.</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate totam facere suscipit vel facilis minus sint explicabo, nesciunt ullam. Nostrum numquam, voluptate, suscipit incidunt debitis quo blanditiis atque totam repudiandae.</p>

				</div>
				<div class="col-4 offset-1" >
					<h2>Lorem ipsum dolor.</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam necessitatibus molestias assumenda nesciunt cupiditate.</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, recusandae architecto error, tempore ipsam fugit perferendis illo. Culpa aperiam commodi non neque voluptates vel iste assumenda nostrum. Laudantium, modi, necessitatibus!</p>

				</div>
			</div>
	</div>

	<div class="gallery"><a name="gallery"></a>
		<div class="top">
			<a href=""><img src="img/bg1.jpg" alt="#"></a>
			<a href=""><img src="img/bg9.jpg" alt="#"></a>
			<a href=""><img src="img/bg5.jpg" alt="#"></a>
		</div>
		<div class="bottom">
			<a href=""><img src="img/bg12.jpg" alt="#"></a>
			<a href=""><img src="img/bg13.jpg" alt="#"></a>
			<a href=""><img src="img/fon6.jpg" alt="#"></a>
		</div>	
		<div class="upload">
			<form enctype="multipart/form-data" action="upload.php" method="post"> <!--для сервера-->
			    <input type="hidden" name="MAX_FILE_SIZE" value="10M" /><!--максимально допустимый размер файла для загрузки в байтах-->
			    <p>Выбрать файл для загрузки: <input name="uploaded_file" type="file" /> </p><!--файл для загрузки-->
			    <input id="subm" type="submit" value="Отправить" /><!--кнопка загрузки-->


			    <button id="button" type="button">Удалить файлы</button>
			</form>
		</div>	
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