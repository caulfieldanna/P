<?php
// получение запроса
// формирование запроса
// get / post 
// фильтрация данных

//'param1=value&param2=value&param3=value'

// $_SSERVER

$link = 'http://' . $_SSERVER['HTTP_HOST'].$_SSERVER['LESSON4_URI'];
var_dump($link);
echo "<br>";

$url_site = 'https://tproger.ru/articles/localstorage/amp/';
$parse_site_url = parse_url($url_site);
var_dump($parse_site_url);
echo "<br>";

// декодирование
// urldecode(str);
// rawurldecode(str);

// кодирование
// urlencode(str);
// rawurlencode(str);

$yandex_req = 'https://yandex.ru/search/?lr=2&msid=1495126294.70221.22880.26104&text=c';
$decode_url = urldecode($yandex_req);
var_dump($decode_url);
echo "<br>";
$r = parse_url($decode_url);
var_dump($r);
echo "<br>";

// формирование запроса
// http_build_query(query_data);

$vk_url = 'https://oauth.vk.com/autorize?';
$vk_params = [
	'client_id' => $client_id,
	'display' => 'page',
	'redirect_uri' => 'http://example.com/callback',
];

$req = $vk_url . http_build_query($vk_params);
var_dump($req);