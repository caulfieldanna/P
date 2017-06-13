<!-- 
mysql -u root
mysql -u root -p
mysql -u root -p
create database phpshop;
show databases;
use phpshop; 

после того как создала таблицу, посмотреть ее
show tables;

внести данные в таблицу
insert into users (login, pwd, email, avatar) values ('user1', '122', 'qwww@mail.com', 'picture');

mysql> insert into users (login, pwd, email, avatar) values ('user2', '133', 'qwee@mail.com', 'picture');


-->

<?php 
// подключение к базе
function dbConnect () {
	$server = "localhost";
	$db_name = "phpshop";
	$user = "root";
	$password = "holden";

	// создаем соединение
	$connection = new PDO("mysql:host=$server;dbname=$db_name", $user, $password); // Работает только с двойными кавычками 	
	return $connection;
}

function createTable($tablename) {
	$conn = dbConnect();
	// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
	$sql = "CREATE TABLE IF NOT EXISTS $tablename(
	id INT AUTO_INCREMENT PRIMARY KEY,
	login VARCHAR ( 100 ) NOT NULL,
	pwd VARCHAR ( 250 ) NOT NULL,
	email VARCHAR ( 250 ) NOT NULL,
	avatar VARCHAR ( 250 ));";


	$conn->exec($sql);
	echo "Table created"; 

}

//createTable('users');


function getAllFromTable() {
	$conn = dbConnect();
	$sql = "SELECT * FROM users";
	$statement = $conn->query($sql);
	var_dump($statement);

	while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
		// PDO::FETCH_ASSOC - возвращает массив только из числовых значений 
		var_dump($row);
	}
}
getAllFromTable();

// анонимный запрос
// параметры как в нумерованном массиве
function getByParams($id) {
	$conn = dbConnect();
	$sql = "SELECT login FROM users WHERE id = ?";
	$statement = $conn->prepare($sql);
	$params = [
		$id, //$login
	];
	$statement->execute($params);
	foreach ($statement as $row) {
		var_dump($row['login']);
	}
  }
//второй способ: 
// именованный запрос
// параметры как в ассоциативном массиве
function getByParamsTwo($id) {
	$conn = dbConnect();
	$sql = "SELECT login FROM users WHERE id = :id";
	$statement = $conn->prepare($sql);
	$params = [
		'id' => $id,
		//'login' => 
	];
	$statement->execute($params);
	foreach ($statement as $row) {
		var_dump($row['login']);
	}
}
// function insertIntoUsers() {
// 	$conn = dbConnect();
// 	$sql = "INSERT INTO users";
// }

?>