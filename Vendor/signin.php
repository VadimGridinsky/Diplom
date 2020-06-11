<?php
require_once 'connect.php';
    
   $login = $_POST['login'];
   $password = md5($_POST['password']);
   
   if($login !== '' && $password !== ''){

   $db = new Database();
   $response = $db->signin($login);
}else{
    header('Location: ../profile.php');
}
?>
