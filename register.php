<?php
session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/auth.css">
</head>
<body>
    
<!--  Форма авторизации --> 
  
<form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите ваш логин">
        <label>Никнейм</label>
        <input type="text" name="nickname" placeholder="Введите ваш никнейм">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес своей почты">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <label>Изображение профиля</label>
        <input type="file" name="avatar">
        <button type="submit">Зарегистрироваться</button>
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
</html>