<?php   
 session_start();
$connect = mysqli_connect('localhost', 'root', '', 'mmusic');

if (!$connect) {
    die('Error connect to DataBase');
}

 function signin($login, $password, $check_user){
    $check_user = mysqli_query($connect, "SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
        "id" => $user['id'],
        "login" => $user['login'],
        "avatar" => $user['avatar'],
        "email" => $user['email']
        ];
    header('Location: ../profile.php');

} else {
    $_SESSION['message'] = 'Неверный логин или пароль';
    header('Location: ../auth.php');
}

}

 