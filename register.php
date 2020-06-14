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
    <title>Регистрация</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/auth.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="./assets/scripts/jquery.fileinput.js"></script>
</head>

<body>



    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <div class="logo">
            <a href="index.php">
                <img src="assets/images/logo2.png" width="57" height="65" alt="">
            </a>
        </div>
        <h2>Регистрация</h2>
        <input type="text" name="login" placeholder="Логин">

        <input type="text" name="nickname" placeholder="Никнейм">

        <input type="email" name="email" placeholder="Адрес почты">

        <input type="password" name="password" placeholder="Пароль">

        <input type="password" name="password_confirm" placeholder="Подтверждение пароля">

        <input accept="image/*,image/jpeg" class="upload" name="avatar" id="avatar" type="file">

        <input readonly class="avatar-text" type="text" id="avatar-text">

        <button class="registration" type="submit">Зарегистрироваться</button>
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
<script src="assets/scripts/inputs.js"></script>
<script src="assets/scripts/avatar-name.js"></script>

</html>
