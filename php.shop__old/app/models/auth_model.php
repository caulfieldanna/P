<?php 

function getUsersFromFile() {
    $fp = fopen('/../app/users_list.txt', 'r');
    if($fp) {
        while (($data = fread($fp, 4096)) !== false) {
            return $data;
        }
        fclose($fp);
    }
    return false;
}


function getAllUser() {
    $json_data = getUsersFromFile();
    $json_data .= ']';
    $data = json_decode($json_data, true);
    return $data;
}

function login($login, $pwd) {
    $users_arr = getAllUser(); //123
    foreach ($users_arr as $key => $value) {
        if (($users_arr[$key]['login'] == $login) && (password_verify($pwd, $users_arr[$key]['hash']))) {
            $_SESSION['username'] = $login;
            setcookie('user_id', $pwd); // TODO генерировать уникальный id в целях безопасности!!!
            return true;
        }
    }
    return false;

}


function is_session() {
    if(isset($_SESSION['username'])) {
        return true;
    } else {
        return false;
    }
}

function getUserByLogin($login) {
    $users_arr = getAllUser();
    foreach ($users_arr as $key => $value) {
        if ($users_arr[$key]['login'] == $login) {
            return $value;
        }
    }
    return false;
}

function is_admin($login){
    $user_arr = getUserByLogin($login);
    if ($user_arr['role'] == 'admin') {
        return true;
    }
    return false;

}













// function login($login, $pwd) {
// 	if ($login == 'user3' && $pwd == '123'); {
// 		$_SESSION['name'] = $login;
// 		return true;
// 	}
// 	return false;
// }

// function is_session() {
// 	if (isset($_SESSION['name'])) {
// 		return true;
// 	} else {
// 		return false;
// 	}
// }


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
