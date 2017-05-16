<?php
// $a = 'hello';
// $hello = 'Hi';
// echo $$a;
//Hi

// $var_name = 45;
// $var_name2 = $var_name;
// echo $var_name2;

//var_dump($GLOBALS);
//45

//переменные переменных
// $a = 'hello';
// $$a = 'world';

// echo "$a ${$a}"; //hello world
// echo "$a $hello"; //hello world

// константы

// объявление констант (false - чувствительность к регистру)

// define("CONST_NAME", "const_value");

// var_dump(CONST_NAME);

// const CONST_TWO_NAME = 488;
// echo CONST_TWO_NAME; //488
//echo get_defined_constants(); //array
//var_dump(get_defined_constants());


// типы переменных 
// скалярные числа, строки, булевые выражения
// смешанные типы - массивы, объекты
// специальные значения null, ссылки на ресурсы

// скалярные типы: 
// boolean => true / false
// $boo = true; | false

// целочисленный тип integer(int)
// echo PHP_INT_SIZE; // константа размер числа. у меня 8
// echo PHP_INT_MAX; //9223372036854775807
// echo PHP_INT_MIN; //-9223372036854775808

// дробное число float(double)
// $fl = 1.43;
// echo $fl;// 1.43

// string строки
// $str = 'String';
// $str_two = "STRING{$str}ppp\n";
// echo $str_two;
// В такие "" кавычки можно засунуть преременную, например $str_two = "STRING $fl"; то он ее выведет. т.е. будет string 1.43
// можно еще так $str_two = "STRING{$str}name_blabla"; ВЫВЕДЕТ: STRINGStringname_blabla
// В ДВОЙНЫХ КАВЫЧКАХ ЕЩЕ МОЖНО СДЕЛАТЬ ПЕРЕНОС СТРОКИ
// $a = 'My name is';
// $$a = 'fatima';

// echo "$a ${$a}";
// echo "$nameis $$name"; //
//ARRAY массивы
// нумерованные и ассоциативные
//$arrayName = array(2, 3, 4);

//$arrayName2 = array('key' => 'value',
//					'key' => 'value',
//					);

// объекты 
//$obj = new ClassName();

//специальные типы

// дескриптор ресурсов resource
//$fp = fopen(filename, mode);
//null
// $var = 67899;
// unset($var);

// $qw = 89223;
// var_dump($qw);
// unset($qw);
// var_dump($qw);
// gettype();

// is_null($qw);
// is_bool($qw);
// is_int($qw);
// is_float($qw);
// is_array($qw);
// is_object($qw);
// is_resource($qw);

// $qw = 4323;
// var_dump($qw);
// unset($qw);
// var_dump($qw); //int 4323

// $var_n = (int)"34"; | (integer)'34';
// var_dump($var_n); //int 34

// $fl = (float) '56.887ty87'; | (double) '56.887ty87';
// var_dump($fl); //float(56.887) 


// ПРИВЕДЕНИЕ К СТРОКЕ
// $st = (string)7654;
// var_dump($st); //string(4) "7654" 

// $ar  = (array) 98;
// var_dump($ar); //array(1) { [0]=> int(98) } 

// $obj = (object) 'jhgfdsa';
// var_dump($obj); //object(stdClass)#1 (1) { ["scalar"]=> string(7) "jhgfdsa" } 

// $arr_three = array();
// $t;
// $b = (bool) $t;
// var_dump($b); // bool(false) (0 = false, 0.0 = fase, пустая строка тоже = фолс)

// $ft_num = (int) 56.66;
// var_dump($ft_num); //int(56) 

//ОПЕРАТОРЫ
// операторы присваивания 
// = присвоить значение| += сложить и присвоить| -= отнять и присвоить| *= | /=

// арифметические операторы 
// + | - | * | / | **(возведение в степень)

// $num = 45;
// $str9 = "56";
// echo $num + $str9; //101

// инкремент и декремент
// ++ --
// ++$i --$i префиксная
// постфиксная i++ i--

// конкатенация строк
// .
// $str1 = 1;
// $str2 = "two";
// echo $str1.$str2; //1two

// операторы сравнения
// == | === | != не равно | !== |
// > | < | >= | <= | <==> сравнивает он в пхп7

// оператор проверки класса обьекта
// instanceof();

// логические операторы
// &&   	 || 		and 		 or
// ! (значит He) | 			xor 

// оператор контроля ошибок 
// @ 

// оператор исолнения 
//  ` ` (две обратные кавычки)

// $out = `ls -al`;// `ls -al` посмотреть список файлов в папке
// echo $out; //total 16 drwxr-xr-x 2 ann ann 4096 май 11 18:58 . drwxr-xr-x 33 ann ann 4096 май 11 19:08 .. -rw-r--r-- 1 ann ann 4321 май 11 21:36 lesson1.php 

?>