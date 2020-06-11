<?php
require_once 'Vendor/connect.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/auth.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js" integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script> -->
</head>
<body>
    
<!--  Форма авторизации --> 
  
<form   method="post" action="Vendor/signup.php" enctype="multipart/form-data">
        <label>Логин</label>
        <input type="text" id="login" name="login" placeholder="Введите ваш логин">
        <label>Никнейм</label>
        <input type="text" id="nickname" name="nickname" placeholder="Введите ваш никнейм">
        <label>Почта</label>
        <input type="email" id="email" name="email" placeholder="Введите адрес своей почты">
        <label>Пароль</label>
        <input type="password" id="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" id="password_confirm" name="password_confirm" placeholder="Подтвердите пароль">
        <label>Изображение профиля</label>
        <input type="file" id="avatar" name="avatar">
        <button type="submit" >Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? <br><a href="auth.php">Авторизируйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
    
</body>
<!-- <script src="assets/scripts/validation.js"></script> -->
</html>