
<!DOCTYPE html>

<head>
<title>
PHP HW-3
</title>
<meta charset="utf-8"/> 
<link rel="stylesheet" type="text/css" href="hw3.css" />
<link href="https://fonts.googleapis.com/css?family=Ledger" rel="stylesheet"> 
</head>

<body>

<div class="task_1">
<?php
//Задачки (пока такие - завтра добавлю на генераторы):
// В первую очередь: 1, 4, 5, 7, 9, 10

//Задача 1
//Дана радиокнопка $radio_but = "<input type='radio' name='php' ";
//echo $radio_but .">"; // неактивная радиокнопка
//напишите функцию make_checked, которая сделает радиокнопку активной (атрибут checked)
//make_checked($radio_but); // вызов функции
//echo $radio_but .">"; // активная радиокнопка

if(isset($_POST['radioselector'])) {
    echo "Значение отмеченной радио-кнопки: ".$_POST['radioselector'];
} else {
    echo "Выберите один из вариантов: ";
    echo "<form action='' method='post'>
    <div class='first_check'>
    <input type='Radio' name='radioselector' checked id='R1' value='value1'>
    <label class='first_label' for='R1'>Красный</label>
	</div>
    <div class='second_check'>
    <input type='Radio' name='radioselector' id='R2' value='value1'>
    <label class='second_label' for='R2'>Зеленый</label><br>
    </div>
    <input class='button' type='Submit' value='Отправить'>
    </form>";
}
	echo "<br>";
?>
</div>

<div class="task_2">
<?php
//Задача 2 создать функцию с аргументом для вывода приветствия (Например, "Здравствуйте, ИМЯ"). Установить значение по умолчанию для аргумента равное «Гость»

function greeting($p,$name = "Гость"){
echo "$p, $name!<br/>";
}
greeting("Hi","Peteri"); 
greeting("Bonjour"); 
greeting("Guten Tag",null);
greeting("Ni hao",""); 
?>
</div>

<div class="task_3">
<?php

//Задача 3 Допустим, пользователь вводит названия городов через пробел. Вы их присваиваете переменной.Переставьте названия так, чтобы названия были упорядочены по алфавиту.

$text = "Tokio Moscow Minsk Sofia Havana London Amsterdam Oslo Stockholm Washington";
$cityes = explode(" ", $text);
sort($cityes);
$cityes = implode(", ", $cityes);
echo $cityes;
echo "<br>";
?>
</div>

<div class="task_4">
<?php
//Задача 4 Написать функцию - конвертер строки.Возможности: перевод всех символов в верхний регистр, перевод всех символов в нижний регистр, перевод всех символов в нижний регистр и первых символов слов в верхний регистр. Это должна быть одна функция

// strtolower()
//Функция производит преобразование символов строки в нижний регистр.
$str = "V LESU RODILAS' ELOCHKA";
$str = strtolower($str);
echo $str; // v lesu rodilas' elochka
echo "<br>";

// strtoupper()
//Производит преобразование строки в верхний регистр.
$str2 = "V Lesu Ona Rosla";
$str2 = strtoupper($str2);
echo $str2; // V LESU ONA ROSLA
echo "<br>";

// ucfirst()
//Производит преобразование первого символа строки в верхний регистр.
$str3 = "zimoi & letom stroinaya";
$str3 = ucfirst($str3);
echo $str3; // выведет Zimoi & letom stroinaya
echo "<br>";

// ucwords()
//Производит преобразование первого символа каждого слова строки в верхний регистр.
$str4 = "naryadnya bula";
$str4 = ucwords($str4);
echo $str4; // выведет Naryadnya Bula
echo "<br>";
?>
</div>

<div class="task_5">
<?php
//Задача 5 Используя функцию удаления HTML и PHP-тегов из строки, выведите на экран строку «<h1>Hello, world!</h1>». Строка не должна выглядеть как заголовок первого уровня – все теги должны быть удалены.
echo "<br>";
$text = '<h1>Это заголовок</h1>';
echo strip_tags($text);
echo "<br>";
// Разрешаем <h1>
echo strip_tags($text, '<h1>');
?>
</div>

<div class="task_6">
<?php
//Задача 6 Создайте массив. Объедините все элементы массива в строку и выведите её на экран.
// исходный массив
//Функция implode сливает массив в строку с указанным разделителем. 

$array = array(
    '1й элемент массива',
    '2й элемент массива',
    '3й элемент массива',
    '4й элемент массива',
    '5й элемент массива',
    '6й элемент массива'
);
// собираем элементы массива в строку
// разделяем каждый элемент пробелом
$string = implode(' ', $array);
// вывод результата
echo $string;
?>
</div>

<div class="task_7">
<?php
//Задача 7 В переменной $date лежит дата в формате '30-11-2017'. Преобразуйте эту дату в формат '2017.11.30'.
// Функция explode разбивает строку в массив по определенному разделителю. 

//Разбиваем строку в массив по разделителю '-':
	$arr = explode('-', '30-11-2017');

	//Получим дату в нужном формате:
	echo $arr[2].'.'.$arr[1].'.'.$arr[0];
?>
</div>

<div class="task_8">
<?php
//Задача 8 Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши.

//  Функция trim удаляет пробелы с начала и конца строки. Может также удалять другие символы, если их указать вторым параметром.
//Есть также функции ltrim и rtrim, которые делают то же самое, но ltrim только для левого края строки, а rtrim - для правого. 

	$str = ' php ';
	echo trim($str, '/');
?>
</div>

<div class="task_9">
<?php
//Задача 9 Дана строка 'просто строка.'. В конце этой строки может быть точка, а может и не быть. Сделайте так, чтобы в конце этой строки гарантировано стояла точка. То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать. Задачу решите через rtrim
// Функция rtrim удаляет пробелы с конца строки.

$str = 'Просто строка.';
echo rtrim($str, '.').'.';
?>
</div>

<div class="task_10">
<?php
//Задача 10 Написать функцию, которая выводит количество дней, оставшихся до нового года. Функция должна корректно работать при запуске в любом году.
//  Функция mktime переводит заданную дату в формат timestamp. Формат timestamp - это количество секунд, прошедшее с 1-го января 1970 года по заданный момент времени. 
// mktime(часы, минуты, секунды, месяц, день, год);

//Функция date выводит дату в заданном формате. 
// date(формат, [момент времени в формате timestamp])

//Функция time возвращает текущий момент времени в формате timestamp. 
// time();
$str = "До нового года осталось: ";
$str2 = " дней.";
echo $str . floor((mktime(0, 0, 0, 1, 1, date('Y') + 1) - time())/(60*60*24)) . $str2;
?>
</div>

<div class="task_11">
<?php
//Задача 11* Функция принимает число, в цикле for пытается поделить (без остатка) его на числа из диапазона 1..num и выводит результат
?>
</div>

</body>

</html>