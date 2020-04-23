<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MMusic</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic|Playfair+Display:400,700&subset=latin,cyrillic">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
</head>

<body>
<header>
        <div class="header-line">
            <div class="logo">
                <a href="">
                    <img src="assets/images/logo.PNG" width="55" height="55" alt="">
                </a>
            </div>

            <div class="menu">
                <ul>
                    <li class="menu-line">
                        <a href="#">Главная</a>
                        <a href="#">Новости</a>
                        <a href="#">Мой профиль</a>
                        <a href="#" id="profile">Загрузить трек</a>
                    </li>
                </ul>
            </div>

            <div class="registration">
                <a href=""><img src="images/reg.png" width="30" height="30"></a>
            </div>
        </div>
    </header>
    
    <main class="main">
        

        <div class="user-info">
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['login'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="vendor/logout.php" class="logout">Выход</a>
        
        </div>
        
        
    </main>
    <footer>
        <div class="footer-line">
            <p class="  footer-description">Mmusic - онлайн форум для музыкантов</p>
            <a href=""><img src="assets/images/vk.jpg" width="30" height="30"></a>
            <a href=""><img src="assets/images/inst.png" width="30" height="30"></a>
            
        </div>
    </footer>








</body>
</html>