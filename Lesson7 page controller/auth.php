<?php

session_start();

require_once __DIR__ . '/app/models/auth_model.php';

$is_auth = auth_user($_POST['login'], $_POST['pwd']);
var_dump($is_auth);

include __DIR__ . '/app/views/auth_form.php';

?>