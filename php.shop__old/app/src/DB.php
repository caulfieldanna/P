<?php
namespace Sky\Frame;
use PDO;

class DB 
{
	private $server;
	private $db_name;
	private $username;
	private $pass;

	private function __construct() 
	{
		$this->server = 'localhost';
		$this->db_name = 'tst';
		$this->username = 'root';
		$this->pass = 'holden';
	}

	private function dbConnect() 
	{
		$connection = new PDO("mysql:host=$this->server;dbname=$this->db_name", $this->username, $this->pass);
		return $connection;
	}

	public function selectAllFromTable($sql_string) 
	{
		$conn = $this->dbConnect();
		$statement = $conn->query($sql_string);
		$data = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $data;
	}

	public function selectByParams($sql_string, array $params) 
	{
		$conn = $this->dbConnect();
		$statement = $conn->prepare($sql_string);
		$statement->execute($params); 
		$data = $statement->fetch(PDO::FETCH_ASSOC);
		return $data; // всегда возвращает одну строку массива ['id' => 1, 'login' => 'qwe', ....]
	}

	public function selectByParamsFetchAll($sql_string, array $params) 
	{
		$conn = $this->dbConnect();
		$statement = $conn->prepare($sql_string);
		$statement->execute($params); 
		$data = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $data;
		// возвращает массив
		// [ ['id' => 1, 'login' => 'qwe'], [] ]

	}

	public function insertIntoTable($sql_string, array $params)
	{
		$conn = $this->dbConnect();
		$statement = $conn->prepare($sql_string);
		return $statement->execute($params); 
	}
}

// class DB {
// 	public $name;
// 	private static $instance;

// 	public static function getinstance() {
// 		if(!(self::$instance instanceof self)) {
// 			self::$instance = new self();
// 		}
// 		return self::$instance;
// 	}
// }

// $db1 = DB::getinstance();
// $db2 = DB::getinstance();

// $db1->name = 'DB';
// //var_dump($db1, $db2);
// $db2->name = 'Database';

// var_dump($db1, $db2);

// 
// $sql = "INSERT INTO имя_таблицы (login, pwd, email, avatar) 
// VALUES (:login, :pwd, :email, :avatar );";
//
// $param = [
// 	'login' => $login,
// 	'pwd' => $pwd,
// 	'email' => $email,
// 	'avatar' => $avatar
// ];


// прописывать существующие id
// таблица с комментариями
// comments = id, commentText, goodId,  userId, commentsDate
// по онклику записывать данные в базу

// таблица товаров
// id и count должны быть числами
// goods = id, title, description, preview, price, count, article

// таблица пользователя с вот такими полями:
// users = id, login, hash, email, avatar, role
// role (admin /user)

