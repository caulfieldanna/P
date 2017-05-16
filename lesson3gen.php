<?php

echo "<i>ГЕНЕРАТОРЫ:</i> <br>";
// больше, чем 100 мб массив быть не может

function some_function() {
	$data = ["что-нибудь"];
	$arr = [];
	foreach ($data as $value) {
		yield $value;
	}
	return $arr;
}
