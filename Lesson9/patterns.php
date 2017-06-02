<?php 

// 1. Singleton(одиночка)

class DB {
	public $name;
	private static $instance;

	public static function getinstance() {
		if(!(self::$instance instanceof self)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
}

$db1 = DB::getinstance();
$db2 = DB::getinstance();

$db1->name = 'DB';
//var_dump($db1, $db2);
$db2->name = 'Database';

var_dump($db1, $db2);


// ----------------------
/*
class Order () {
	$id;
	$price;
	$goods = [];
	$user;

	public function __construct($goods, $user) {
		$this->goods = $goods;
		$this->user = $user;
	}

	private function calc_price() {

	}

} 


class User {
	$id;
}

$user = new User();

$order = new Order([], $user);
*/


class Comments {
	$user; // пользователь
	$addComment; // добавить комм
	$editComment; // изменить комм
	$deleteComment; // удалить комм
} // комментарии

class Goods {
	$name; // название 
	$description; // описание
	$number; //количество товара в наличии или $quantity;
	$img; // изображение товара
} // товары

class DB {
	$sendDB; // Отправить информацию в бд
	$getDB; // получить информацию из бд
} // подключение к базе данных

class Account // см. ниже // личный кабинет

class Cart {
	$goodName; // название товара
	$goodNumber; // кол-во товара 
	$summOfGoods; // выводит сумму всех выбранных товаров в корзине
} // корзина

class Order {
	$orderDescription; // описание
	$orderPrice; // цена
	$orderNumber; //кол-во
	$img; // изображение товара
} // заказ

class User // см. ниже // пользователь


class Model {}
class View {}
class Controllers {}
class Router {} // index.php


class User {
	$id;
	$name = 'Гость';
	$pwd; 
	$role;
	// $rating;
	$orderHistory;
}

class Account {
	$auth_state; // статус авторизации
	function getUserInfo() {} // информация внутри личного кабинета
	function login() {
		function registration() {}
	}
	function logout() {}
}




//description
//or
//account/login
//контроллер/метод

?>