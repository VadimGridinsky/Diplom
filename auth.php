<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
     <link rel="stylesheet" href="assets/css/auth.css">
</head>
<body>
    
<!--  Форма авторизации --> 
  
  <form  action="vendor/signin.php" method="post">
  <label> Логин </label>
  <input type="text" placeholder = "Введите свой логин" name ="login">
  <label> Пароль </label>
  <input type="password" placeholder = "Введите  пароль" name ="password">
  <button type="submit"> Войти </button>
  <p>
    У вас нет аккаунта? - <a href="/register.php"> Зарегистрируйтесь </a>
  </p>
  
  <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
  </form>

</body>
</html>