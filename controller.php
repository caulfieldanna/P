<?php

namespace Sky\Frame;
use Symfony\Component\HttpFoundation\Response;

class Controller
{
public function generateResponse($contentView, $template, $data=[]){
// генерация ответа - html
// все как в generateView!!!!!
extract($data);
require_once '../app/views/' . $template;
return new Response('');
}

public function generateAjaxRespons($val){
// генерация ответа на ajax Запрос
return new Response($val);
}

}



