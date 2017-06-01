<?php 

/*
class ClassName {
 описание 
перечисляются свойства и методы
 public $prop; - свойства
 public function имя_метода () {
	- метод
 } 
}

*/

/**
* 
*/
class Animal {
 	
 	protected $name;
 	protected $level;	

 	public function __construct($name, $level) {
 		$this->name = $name;
 		$this->level = $level;
 	}

 	public function introducing($data) {
 		//return $this->name;
 		return $data;
 	}
}
/*
$cow = new Animal(); // создаие объекта
$chicken = new Animal();

$cow->name = 'Cow'; //свойство объекта
$cow->level = 4;

$chicken->name = 'Chicken';
$chicken->level = 7;

var_dump($cow->name);
var_dump($chicken->level);

var_dump($cow->introducing());
*/
//$sheep = new Animal('Sheep', 3);
//var_dump($sheep->introducing+(90));

/**
* дочерний класс
*/
class WildAnimal extends Animal
{	
	const SOME_CONST_VAL = 15;
	public $actions = [];
	protected $some_var = 'some val';

	//создание статического метода STATIC
	public static function introduceParent() {
	// $this этот метод здесь использовать нельзя
		return get_parent_class();
		// get_parent_class  возвращает родит класс
	}

	public function introducing() {
		// self:: - ссылка на себя
		return 23;
	}

	// function some_func () {
	// 	return parent::$name;
	// }

	public function __construct($name, $level, array $actions)
	{
		parent::__construct($name, $level); // свойства родительского класса
		$this->actions = $actions; // новые свойства
	}
}

$wolf = new WildAnimal('Wolf', 9, ['eat cow']);
// var_dump($wolf->some_func());

//echo $wolf->introducing('89');

//var_dump(WildAnimal::SOME_CONST_VAL); // доступ к значению через ::  
									  // без создания объекта
									  // :: разрешение области видимости. :: это оператор.
// модификаторы доступа:
// public --- этот метод доступен отовсюду
// protected --- эта переменная будет доступна только в самом классе и в дочерних а при создании объект доступна не будет
// private --- этот метод доступен только внутри самого класса в котором она указана. не наследуемая

// Типизация аргументов


class Shed
{
	protected $animals = [];

	public function addAnimal(WildAnimal $animal) {
		array_push($this->animals, $animal);
	}
}

$shed = new Shed();
$shed->addAnimal($wolf);

var_dump($shed);

var_dump(WildAnimal::SOME_CONST_VAL); // 1
var_dump(WildAnimal::introducing()); // 2
var_dump(WildAnimal::introduceParent()) // 3
?>