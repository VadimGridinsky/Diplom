<?php
require_once 'connect.php';
    
    $login = $_POST['login'];
    $password = md5($_POST['password']);
   
    if (isset($login) && isset($password)) {
        if(!empty($login) && !empty($password)){
            
            $db = new Database();
            $response = $db->authorization($login, $password);

            if ($response['status']) {
                header('Location: /profile.php');
            } else {
                $_SESSION['message'] = 'Неверно введён логин или пароль';
                header('Location: /auth.php');
            }

        } else {
            $_SESSION['message'] = 'Заполните все поля';
            header('Location: /auth.php');
        }
    } else {
        $_SESSION['message'] = 'Заполните все поля';
        header('Location: /auth.php');
    }
?>
