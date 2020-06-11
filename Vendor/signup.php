<?php


require_once 'connect.php';

    $nickname = $_POST['nickname'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

        $path = 'uploads/photo/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Вы не указали ваше фото';
            header('Location: ../register.php');
        }

        $password = md5($password);
    
       
        $db = new Database();
        if($nickname !== '' && $login !== '' && $email !== '' && $password !== '' && $path !== ''){ 
      $response = $db->registration($login, $nickname, $email, $password, $path);
     
      header('Location: ../auth.php');
        }else{
            $_SESSION['message'] = 'Вы ввели не все поля';
            header('Location: ../register.php');
        }

       
    } 

?>
