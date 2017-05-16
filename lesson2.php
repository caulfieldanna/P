<?php

// echo "Условный оператор if <br>";

// if (выражение) {
// 	# code...
// } elseif (condition) {
// 	# code...
// } 
// elseif (condition) {
// 	# code...
// } else {
// 	# code...
// }


// $begin = 58;
// $end = 12;
// $num = 99;

// if ($begin < $end) {
// 	if (($num > $begin) && ($num < $end)); {
// 		echo "в диапазоне";
// 	} elseif (($num === $begin) or ($num === $end)) {
// 		echo "num равно либо end, либо begin";
// 	}	else {
// 		echo "не в диапазоне";
// 	}
// } else {
// 	echo "begin не может быть больше end";


// альтернативный синтаксис 
// if (выражение) :
// 	# code...
//  elseif (condition) 
// 	# code...
 
// elseif (condition) 
// 	# code...
//  else 
// 	# code...
// endif;


// тернарный оператор ? :
//isset(var) // проверяет наличие переменной

// $some_res = (!isset($some_var)) ? 'default value' : $some_var;
// var_dump($some_res);

// //php7 - оператор ??
// $some_res2 = $some_var2 ?? 'default value';
// var_dump($some_res2);

// switch
// switch (variable) {
// 	case 'value':
// 		# code...;
// 		break;

// 	case 'value':	
// 	case 'value':
// 		# code...;
// 		break;

// 	default:
// 		# code...;
// 		break;
// }

// альтернативный синтаксис 

// switch (variable):
// 	case 'value':
// 		# code...;
// 		break;

// 	case 'value':	
// 	case 'value':
// 		# code...;
// 		break;

// 	default:
// 		# code...;
// 		break;
// endswitch;

// //php7 <=>
// var_dump(1 <=> 1);
// var_dump(1 <=> 2);
// var_dump(2 <=> 1);

// $a = 23;
// $b = 12;

// switch ($a <=> $b) {
// 	case '0':
// 		echo "переменные равны";
// 		break;

// 	case '1':
// 		echo "A > B";
// 		break;

// 	case '-1':
// 		echo "A < B <br>";
// 		break;
// }

// $current_day = (int)date("N");

// switch ($current_day):
// 	case 1:
// 	case 2:
// 	case 3:
// 	case 4:
// 	case 5:
// 		echo " Рабочая неделя";
// 		break;
// 	case 6:
// 	case 7:
// 		echo " Выходные <br>";
// 		break;
// endswitch;

// цикл while

// while (выражение) {
// 	# code... ;
// }

// альтернативный синтаксис 
// while (выражение):
// 	# code... ;
// endwhile;

// цикл do while и в нем нет альтерантивной записи :(

// do {
// 	# code...
// } while ( <= 10) {
// 	# code...
// }


// цикл for
// for ($i=0; $i < ; $i++) { 
// 	# code...
// }

// альтернативный синтаксис 
// for ($i=0; $i < ; $i++):
// 	# code...
// endfor;


//break - выйти из циклаю может быть больше 1
//continue - пропустить итерацию




