<?php
//declare(strict_types = 1);

echo "<i>Пользовательские функции:</i> <br>";

// function function_name (arg1, &arg2, arg3 = 'default value', ...arg4) {
// 	// тело функцииж
// 	return;
// }

function echo_func ($value) {
	echo "<h3>$value</h3>";
}
echo_func("I WANT NUTELLA. <br> NOOOOOOOOW!!!! <br> MA FAAAAAKAAAAA");

// варианты передачи аргументов:
// 1 передача по значению arg1,
// 2 передача по ссылке &arg2,
// 3 указывать значение аргументов по умолчанию arg3 = 'default value'
// 4 переменное кол-во аргументов ...arg4

// по ссылке. 
function concat_func(&$main_str, $adding_str) {
	$main_str .= $adding_str;
}
$str = "<i>I want some</i>";
concat_func($str, " burger or pizza");
echo_func($str);

$str1 = "kit ";
$str2 = "kat";
function func_name ($str1, $str2) {
	$con_str = $str1 . $str2;
	echo $con_str;
}
func_name($str1, $str2);
echo "<br>";
echo "<br>";

// по умолчанию
function show_file_path ($dir, $file_name = 'index.html') {
	return "Путь к файлу " . $dir . "/" . $file_name;
}
echo (show_file_path("path/to/file", "style.css"));
echo "<br>";

// переменное кол-во аргументов
function get_sum($res, ...$numbs) {
	$res = 0;
	foreach ($numbs as $value) {
		$res += $value;
	}
	return $res;
}

get_sum(1, 1, 3, 5, 2);
echo "<br>";

// тип передаваемой переменной
function tst_bool (bool $boo) {
	if (!$boo) {
		echo "FALSE";
		return;
	}
	echo "TRUE";
	return;
}

tst_bool("hey");
// 0 null "" [] "0"  <---- this is false
echo "<br>";
echo "<br>";


// переменное кол-во аргументов при вызове функции
function get_summ($a, $b) {
	return $a + $b;
}
$arr = [262, 404];
echo (get_summ(...$arr));
echo "<br>";
echo "<br>";

function get_smm($a, $b, $c, $d) {
	$ab_smm = $a + $b;
	$cd_smm = $c + $d;
	return [$ab_smm, $cd_smm];
}
$rslt = get_smm(1, 2, 3, 4);
var_dump($rslt);
echo "<br>";
echo "<br>";
function arr_fnc ($arg_rslt) {
	foreach ($arg_rslt as  $value) {
		echo $value;	
	}
}
arr_fnc($rslt);
echo "<br>";
echo "<br>";
// хранение по значению 
$a = 7;
$b = $a;
var_dump($a);
var_dump($b);
echo "<br>";
$b = 10;
var_dump($a);
var_dump($b);
echo "<br>";

// хранение по ссылке
$a = 7;
$b = &$a;
var_dump($a);
var_dump($b);
echo "<br>";

$b = 10;
var_dump($a);
var_dump($b);
echo "<br>";
echo "<br>";

function some_function1 () {
	echo ("Milky");
	function some_function2 () {
		echo ("Way");
	}
}
some_function1();
echo "<br>";
some_function2();
echo "<br>";
echo "<br>";

// анонимная функция
$some_var = function($arg) {
	echo $arg;
};
$some_var("1975");
echo "<br>";
echo "<br>";


function soom_func($a, $b): int {
	return $a + $b;
}
soom_func(1, 9);




function counter() {
	static $count = 0;
	$count++;
	return $count;
}
echo counter();
echo "<br>";
echo counter();
echo "<br>";
echo counter();
echo "<br>";
echo counter();
echo "<br>";
echo counter();
echo "<br>";
echo "<br>";

// func_num_args();
// func_get_arg(arg_num);
// func_get_args(oid);



