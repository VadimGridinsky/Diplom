<?php
    
    require_once 'connect.php'; 

    $nickname = $_POST['nickname'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];


    if (isset($nickname) && isset($login) && isset($email) && isset($password) && isset($password_confirm)) {
        if(!empty($nickname) && !empty($login) && !empty($email) && !empty($password) && !empty($password_confirm)) {
            if ($password === $password_confirm) {

                $path = 'uploads/photo/' . time() . $_FILES['avatar']['name'];
                if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
                    $_SESSION['message'] = 'Не удалось загрузить аватар';
                    header('Location: /register.php');
                }

                $password = md5($password);
            
                $db = new Database();
                
                $response = $db->registration($login, $nickname, $email, $password, $path);

                if ($response['status']) {
                    header('Location: /auth.php');
                } else {
                    $_SESSION['message'] = 'Что-то пошло не так, попробуйте снова';
                    header('Location: /register.php');
                }
                
            } else {
                $_SESSION['message'] = 'Пароли не совпадают';
                header('Location: /register.php');
            }
        } else {
            $_SESSION['message'] = 'Вы заполнили не все поля';
            header('Location: /register.php');
        }
    } else {
        $_SESSION['message'] = 'Вы заполнили не все поля';
        header('Location: /register.php');
    }

?>
