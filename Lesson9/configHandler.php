<?php 

// реализовать средство считывания записи данных конфиг файла приложения
// файл config.txt / config.xml
// ключ - значение

// функция для получ данных
function getData($filename) {
	$filetype = 'get_type';
	
	if($filetype == "txt") {
		// считывание из txt
	} else {
		// считывание из xml
	}

	$data = ['key', 'value'];
}

function setData($filename) {
	$filetype = 'get_type';
	if($filetype == "txt") {
		// считывание из txt
	} else if ($filetype == "xml"){
		// считывание из xml
	} else {
		// запись в ini
	}
}


// абстрактный метод
// в interface только public
// interface =  план
interface IconfigHandler {
	public function addParam($key, $value);
	public function getAllParams();
	public function read();
	public function write();
}

abstract class ConfigHandler implements IconfigHandler {
	// на основе абстр классна нельзя создать объект. только класс
	protected $params = [];

	public function addParam($key, $value) {
		$this->params[$key] = $value;
	}

	public function getAllParams(){
		$this->params;
	}
// определяет тип файла
// 	public static function getInstance($filename) {
// 		if (preg_match('~\.txt$~i', $filename)) {
// 			return new TextHandler($filename);
// 		}
// 		return new XmlHandler($filename);
// 	}
 }

// -------- или вот так, если форматов файлов много -----------

	public static function getInstance($filename) {
		$type = pathinfo($filename, PATHINFO_EXETENTON);
		if (!$type) {
			throw new Exception("Формат не известен");	
		}
		$classname = ucfirst(strtolower($type)) . ConfigHandler;
		$path = __DIR__ . '/' . $classname . '.php';
		if (!is_readable($path)) {
			throw new Exception("Файл не найден");
		}
		include_once $path;
		if (!class_exists($classname)) {
			throw new Exception("Объявите класс");
		}

		$obj = new $classname($filename);
		if (!is_subclass_of($obj, 'IconfigHandler')) {
			throw new Exception("Класс не поддерживает интерфейс");	
		}

		return $obj;
	}



// реализация в зависимости от типа файла 
class TextHandler extends ConfigHandler {
	function read() {
		// чтение из текстового файла
	}

	function write() {
		// запись в текстовый файл
	}
}

class XtmlHandler extends ConfigHandler {
	function read() {
		// чтение из xml файла
	}

	function write() {
		// запись в xml файл
	}
}


// использование
$config = ConfigHandler::getInstance('config.xml');
$config->addParams('key1', 'val1');
$config->write();

// Принципы которым нужно следовать в ООП
// 1. Полиформизм // возможность использовать объекты с одним и тем же интерфейсом
// 2. Инкапсуляция // сокрытие реализации того что делаем
// 3. Наследование // с помощью extends
// 4. Абстракция // когда код не зависит от конкретной реализации

// 5. Посылка сообщений // 
// 6. Повторное использование // использовать часть кода несколько раз


 ?>
