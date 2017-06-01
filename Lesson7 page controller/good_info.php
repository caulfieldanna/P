<?php 

session_start();

require_once __DIR__ . '/app/models/goods_model.php';

$good_id = $_GET['id'];
var_dump($good_id);

$current_good = getGoodById($good_id);
var_dump($current_good);

echo "</br></br>";

var_dump($_SESSION);
echo (session_save_path());
echo "</br></br>";
echo (session_id());

if (isset($_SESSION['name'])) {
	$auth = true;
} else {
	$auth = false;
}

if ($_GET['exit'] == 'exit') {
	$auth = false;
	unset($_SESSION['name']);
	session_unset();
	session_destroy();
}

include __DIR__ . '/app/views/good_info_view.php';

?>