<?php 

function login($login, $pwd) {
	if ($login == 'user3' && $pwd == '123'); {
		$_SESSION['name'] = $login;
		return true;
	}
	return false;
}

function is_session() {
	if (isset($_SESSION['name'])) {
		return true;
	} else {
		return false;
	}
}


// function logout() {
// 	if (isset($_GET['exit'])) {
// 		unset($_SESSION['name']);
// 		session_unset();
// 		session_destroy();
// 	}
// }
// хэширование паролей
// $options = [
//     'cost' => 12,
// // ];
// $hash_pwd = password_hash($pwd, PASSWORD_DEFAULT, $options)."\n";
// password_verify($pwd, $hash_pwd);


// $hash_pwd = crypt($pwd);


// // See the password_hash() example to see where this came from.
// $hash_pwd = '3amtkqo8vagvfbtgrb39h311n7 ';

// if (password_verify($pwd, $hash_pwd)) {
//     echo 'Password is valid!';
// } else {
//     echo 'Invalid password.';
// }



?>
