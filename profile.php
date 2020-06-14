<?php
require_once 'Vendor/connect.php';
require_once 'start.php';
$db = new Database();
$tracks = $db->getTracks($_SESSION['user']['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MMusic</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/reset.min.css">
    <link rel="stylesheet" href="assets/css/profile.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
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
            <a href="<?= $_SESSION['user']['login'] ? "profile.php" : "auth.php" ?> "class="user"><?= $_SESSION['user']['login'] ?></?a>
                <a href="<?= $_SESSION['user']['login'] ? "profile.php" : "auth.php" ?>"><img src="assets/images/wwwww.png" width="30" height="30"></a>
            </div>
            <img class="header-button" src="/assets/images/menu.svg" alt="menu">
            <div class="header-menu">
                <div class="header-menu_item">
                    <a href="index.php">Главная</a>
                </div>
                <div class="header-menu_item">
                    <a href="news.php">Новости</a>
                </div>
                <div class="header-menu_item">
                    <a href="profile.php">Мой профиль</a>
                </div>
                <div class="header-menu_item header-menu_track">
                    <a href="track.php" class="track-up">Загрузить трек</a>
                </div>
            </div>
        </div>
    </header>

    <main class="main">

        <div class="profile-container">

            <div class="profile-img">
                <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
            </div>

            <div class="profile-info">
                <h2 style="margin: 10px 0;"><?= $_SESSION['user']['login'] ?></h2>
                <a href="#"><?= $_SESSION['user']['email'] ?></a>
                <a href="#"><?= $track['authorname'] ?></a>

            </div>
            <a href="vendor/logout.php" class="logout">Выход</a>

        </div>


        <div class="user-tracks">
            <p class="heading">Треки пользователя</p>

          
                <?php foreach ($tracks as $track) { ?>
        <div class="tracks">
                <div class="phototrack">
                    <img src="<?=$track['image'];?>" alt=""></img>
                </div>
                <div class="track-description">
                <p class="trackname"> <?= $track['track_name'];?></>
                <p class="genre"> <?= $track['genre'];?></p>
                <audio controls src="<?= $track['audio'];?>"></audio>
                </div>
            </div>
            <?php } ?>
           

        </div>

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
<script src="assets/scripts/menu.js"></script>
</html>
