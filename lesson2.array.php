<?php


// echo "Массивы <br>";

// $arr  = array(1, 2, 3);

// $arr = [
// 	'key1' => 'value',
// 	'key2' => 'value',
// ];

// $arr = [
// 	true => 'v1',
// 	false => 'v2',
// (
// null (пустая строка), число, флоат
//)
// ];

// var_dump($arr); //array(2) { [1]=> string(2) "v1" [0]=> string(2) "v2" }

//$arr_num = [2, 6, 9, 6];
//var_dump($arr_num['2']);
// $count_size = count($arr_num);
// var_dump(count($arr_num));   // count - длина массива 
// unset($arr_num[1]) // массив, который удаляет переменные 

//  перебрать массив 
// $arr = [
// 	'key1' => 'value',
// 	'key2' => 'value 2',
// 	'key3' => 'value 3',
// ];

// получить значение
// foreach ($arr as $value) {
// 	var_dump($value);
// }
// // получить ключи
// foreach ($arr as $key => $value) {
// 	var_dump($key);
// }


// $arr2 = [1, 2, 3, 4];  // &&&&& !!!!
// var_dump($arr2);

// foreach ($arr2 as &$value) {
// 	$value = $value * 2;
// }
// unset($value); // после цикла. разорвать связь с последним элеменотом массива

// var_dump($arr2);

// альтернативный синтаксис у foreach
// foreach ($arr as $value):
// 	var_dump($value);
// endforeach;

// ЗАДАЧА
// $some_arr = [4, 5, 66, 3, 23];
// // найти сумму квадратов элем массива. увеличить значение каждого на 1

// $sum = 0;
// foreach ($some_arr as $value) {
// 	$sum = $sum + $value*$value; 
// }

// echo $sum;

// foreach ($some_arr as &$value):
// 	$value++;
// endforeach;
// unset($value);
// var_dump($some_arr);


// echo "языковая конструкция list() <br>";

// $arr = [
// 	[1, 2],
// 	[3, 4],
// ];
// //list($a, $b);
// foreach ($arr as list($a, $b)) {
// 	echo "A: $a; B: $b <br>";
// }


// $arr2 = [1, 2, 3];
// list($a, $b, $c) = $arr2;
// echo $c;


// ЗАДАЧА
// нарисовать треугольникю высота 10ю следю вида:
// *
// **
// ***
// ****

// $h = 10;
// $var = '*';
// for ($i = 0; $i < $h; $i++) { 
// 	for ($i = 0; $i < $i; $j++) { 
// 		echo "*";
// 	}
// 	echo "<br>";
// }

// for ($i = 0; $i < $h; $i++) {
// 	$str = $str.$var;
// 	echo "$str <br>";
// }


// ЗАДАЧА
// с начала каждого часа: 3 минуты зеленый, 2 минуты красный, 3 минуты зеленый
var_dump(date("i"));

echo (date("i")%5) < 3 ? 'green' : 'red';


// ЗАДАЧА
// вывести все счастливые билеты 000 = 000
$i = 0;
while (i < 1000000) {
	$ticket = str_pad($i, 6, '0', STR_PAD_LEFT);
	
	$first_half = substr($ticket, 0, 3); // 000 

	$second_half = substr($ticket, 3); // 003
	
	$first_sum = $first_half[0] + $first_half[1] + $first_half[2];
	$second_sum = $second_half[0] + $second_half[1] + $second_half[2];

	if ($first_sum == $second_sum) {
		echo "$ticket <br>";
	}
	$i++;
}




