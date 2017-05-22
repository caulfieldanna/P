<?php
// 3. Создать массив, который будет хранить товары, либо статьи, либо записи блога
// Структура:
// [ [ id => значения указывайте произвольные
// title => значение
// description => значение
// preview => значение]

// [ id => значение
// title => значение
// description => значение
// preview => значение ]
// и тд

// Структура:
// [ [ id => значения указывайте произвольные
// title => значение
// description => значение
// preview => значение]

// [ id => значение
// title => значение
// description => значение
// preview => значение ]
// и тд
  


  // --------------------------------



// $data = [
// 	[
// 	'id' => 1,
// 	'title' => 'Title1',
// 	'description' => 'kitty',
// 	'preview' => 'bg1.jpg'
// 	], 
// 	[
// 	'id' => 2,
// 	'title' => 'Title2',
// 	'description' => 'milk',
// 	'preview' => 'bg2.jpg'
// 	], 
// 	[
// 	'id' => 3,
// 	'title' => 'Title3',
// 	'description' => 'honey',
// 	'preview' => 'bg5.jpg'
// 	]
// ];

function getGoods() {
	$fp = fopen('hw4.db.txt', 'r'); // file open to 'R'ead
	if($fp) {
		while (($data = fread($fp, 4096)) !== false) {
			// echo $data;
			return $data;
		}
		fclose($fp);
	} 
	return false;
}

//json
$json_data = getGoods();
//var_dump($json_data);

$data = json_decode($json_data, true);
//var_dump($data);


//$qw = json_encode($data);
//echo $qw;
// [{"id":1,"title":"Title1","description":"kitty","preview":"bg1.jpg"},{"id":2,"title":"Title2","description":"milk","preview":"bg2.jpg"},{"id":3,"title":"Title3","description":"honey","preview":"bg5.jpg"}]



//var_dump($data);     
//array(3) { [0]=> array(4) { ["id"]=> int(1) ["title"]=> string(6) "Title1" ["description"]=> string(5) "kitty" ["preview"]=> string(7) "bg1.jpg" } [1]=> array(4) { ["id"]=> int(2) ["title"]=> string(6) "Title2" ["description"]=> string(4) "milk" ["preview"]=> string(7) "bg2.jpg" } [2]=> array(4) { ["id"]=> int(3) ["title"]=> string(6) "Title3" ["description"]=> string(5) "honey" ["preview"]=> string(7) "bg5.jpg" } } 


//foreach ($data as $key => $value) {
//	echo $data[$key]['id'];
//}