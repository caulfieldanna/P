<?php 

class Router {
	public static $instance;

	public static function getInstance() {
		if(!(self::$instance instanceof self)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	protected $controller;
	protected $action;
	protected $params;

	private function __construct() {
		$uri = $_SERVER['REQUEST_URI'];
		
		var_dump($uri);
		$uri_parts = explode('/', trim($uri, '/'));
		var_dump($uri_parts);

		$this->controller = !empty($uri_parts[0]) ? 
		ucfirst(strtolower($uri_parts[0])) . 'Controller' : 
		'IndexController';
		var_dump($this->controller); // проверка на пустоту. все буквы в нижнем регистре кроме первой

		$this->action = !empty($uri_parts[1]) ? 
		ucfirst(strtolower($uri_parts[1])) . 'Action' : 
		'indexAction';// индекс с маленькой потому что это метод класса
		var_dump($this->action);

		//$this->params = trim($uri_parts[2], '?');
		// разбить ?id=7?param=76 на две строки
		//list() = ;
		$param_uri =  parse_url($uri, PHP_URL_QUERY);
		var_dump($param_uri);
		parse_str($param_uri, $arr);
		var_dump($arr);

		$this->params = $arr;

		// $params_arr = (explode('=', trim($uri_parts[2], '?')));
		// var_dump($params_arr);

		// $len  = count($params_arr);
		// for ($i=0; $i < $len; $i++) {
		// 	if ($i%2 == 0) {
		// 		$this->params =[ $params_arr[$i] => $params_arr[$i + 1] ];
		// 	}
		// }
		// var_dump($this->params);
}
		public function run() {
			if (class_exists($this->$getController())) {
				if(method_exists($this->$getController(), $this->getAction())) {
					$controllerName = new $this->$getController();
					$actionName = $this->getAction();
					$var = new $controllerName();
					$var->$actionName();
					
				} else {
					throw new Exception("Такого метода не существует");
				}


			} else {
				throw new Exception("Такого контроллера не существует");
			}
		}

		public function getController() {
			return $this->controller;
		}

		public function getAction() {
			return $this->action;
		}
	
}
//id=2&param=90

// curl -sS https://getcomposer.org/installer | php  
// php composer.phar require symfony/routing
// php composer.phar require symfony/http-kernel
// php composer.phar require symfony/http-foundation

?>
