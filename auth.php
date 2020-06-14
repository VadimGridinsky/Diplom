<?php
require_once 'start.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/auth.css">
</head>

<body>

    <form action="vendor/signin.php" method="post">
   <div class="logo">
                <a href="index.php">
                    <img src="assets/images/logo2.png" width="57" height="65" alt="">
                </a>
            </div>
            <h2>Авторизация</h2>
        <input type="text" placeholder="Логин" name="login">

        <input type="password" placeholder="Пароль" name="password">
        <button class="signin" type="submit"> Войти </button>
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
