<?php

echo "<i>ГЕНЕРАТОРЫ:</i> <br>";
// большеБ чем 100мбмассив быть не может

function some_function() {
	$data = ["что-нибудь"];
	$arr = [];
	foreach ($data as $value) {
		yield $value;
	}
	return $arr;
}
