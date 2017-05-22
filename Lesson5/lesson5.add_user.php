<?php

	var_dump($_POST);

	$login = $_POST['login'];
	$pwd = $_POST['pwd'];
	$check = $_POST['check'];

	$data_arr = [
		'login' => $login,
		'pwd' => $pwd,
		'check' => $check
	];

// function openFile($filename) {
// 	if (!file_exists('user_data.txt')) {
// 		$fp = fopen($filename, 'w');
// 		addUser();
// 	}
// }

function addUser($arr) {
	$file = 'user_data.txt';
	$data = file_get_contents($file);

	$data = implode(', ', $arr);
	file_put_contents($file, $data, FILE_APPEND);
}

addUser($data_arr);