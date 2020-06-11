<?php
require_once 'vendor/connect.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/auth.css">
</head>

<body>



    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
<div class="logo">
                <a href="index.php">
                    <img src="assets/images/logo2.png" width="57" height="65" alt="">
                </a>
            </div>
            <h2>Регистрация</h2>
        <input type="text" name="login" placeholder="Введите ваш логин">

        <input type="text" name="nickname" placeholder="Введите ваш никнейм">

        <input type="email" name="email" placeholder="Введите адрес своей почты">

        <input type="password" name="password" placeholder="Введите пароль">

        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">

        <input class="upload" type="file" name="avatar">
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
