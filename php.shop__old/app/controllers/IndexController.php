<?php 

// class IndexController {
// 	function indexAction () {
// 		echo ("indexAction");
// 	}
// }

class Controller {
	public function generateResponce($contentView, $template, $data=[]) {
		// генерация ответа - реьд
		// все как в generateView
		extract($data);
		require_once __DIR__ . '/app/views/' . $template;
		return new Responce('');
	}

	public function generateAjaxRespons($val) {
		// генерация ответа на ajax запрос
		return new Responce($val);
	}
}


 ?>