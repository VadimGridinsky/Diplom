<?php
require_once 'connect.php';
   
   

   $login = $_POST['login'];
   $password = md5($_POST['password']);

   $response = signin($login, $password,);
      

       
   ?>
   
   
