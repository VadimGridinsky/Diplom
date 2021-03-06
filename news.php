<?php
session_start();
            $folderT = 'uploads/tracks/';
            $folderP = 'uploads/tracksphoto/';
            $filesT = array_diff(scandir($folderT), array('..', '.'));
            $filesP = array_diff(scandir($folderP), array('..', '.'));
            ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MMusic</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/news.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>

<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <a href="index.php">
                    <img src="assets/images/logo2.png" width="55" height="65" alt="">
                </a>
            </div>
            <div class="header-item">
                <a href="index.php">Главная</a>
            </div>
            <div class="header-item">
                <a href="news.php">Новости</a>
            </div>
            <div class="header-item">
            <a href="<?= $_SESSION['user'] ? "profile.php" : "auth.php" ?>">Мой профиль</a>
            </div>
            <div class="header-item header-item_track">
                <a href="track.php" class="track-up">Загрузить трек</a>
            </div>
            <div class="registration">
                <a href="auth.php"><img src="assets/images/reg.png" width="30" height="30"></a>
            </div>
        </div>

    </header>
    <main class="main">

    </main>
    <footer>
        <div class="footer">

            <div class="footer-text">
                <p class="footer-description">©Copyright. All rights reserved.</p>
            </div>

            <div class="footer-links">

                <a href=""><img src="/assets/images/instagram-png-instagram-icon-1600-640x640.png" width="30" height="30"></a>
                <a href=""><img src="/assets/images/no-translate-detected_318-49685.png" width="30" height="30"></a>
                <a href=""><img src="/assets/images/deebbb_55f5f969820c4c0faa5405b68f80e771_mv2.png" width="30" height="30"></a>

            </div>

            <div class="footer-logo">
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/images/logo2.png" width="45" height="55" alt="">
                    </a>
                </div>

                <div>
                    <p class="footer-description">MMusic</p>
                </div>
            </div>

        </div>

    </footer>
</body>

<script src="assets/scripts/audio.js"></script>




</html>
