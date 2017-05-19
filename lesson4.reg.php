<?php
var_dump($_POST);


$post = $_POST;
$name = $post['name'];
 
// защищает от прямых атак
trim($name); // удаляет пробел
empty($name); // проверяет переменную на пустоту
isset($name); // проверяет на наличие переменной

// от XSS атак
strip_tags($name); // удаляет все тэги html & php
htmlspecialchars(string); // преобразует в html символы, сущности СПЕЦИАЛЬНЫЕ
htmlentities(string); // тоже самое, только вообще все

// от SQL инъекций
addcslashes(str, charlist); // экранирование спецсимволов
stripcslashes(str); // удаляет экранированные символы

// фильтрация данных
filter_var(variable); // обрабатывает одну переменную, фильтрует по заданному параметру
filter_var_array(data); // обрабатывает массив, фильтрует по заданному параметру
?>