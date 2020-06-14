<?php
require_once 'start.php';
require_once 'Vendor/connect.php';
$db = new Database();
$genres = $db->getGenres();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MMusic</title>
    <link rel="stylesheet" href="assets/css/reset.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/track.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="./assets/scripts/jquery.fileinput.js"></script>
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
        <div class="wraper">
            <form action="Vendor/track-send.php" method="post" class="form-download" enctype="multipart/form-data">
                <div class="form-container">
                    <div class="form-prerender">
                        <input required type="file" name="photo-track" accept="image/*,image/jpeg" class="download-img" id="file">
                        <div class="form-window">
                            <img class="preview-image" src="#" alt="" />
                            <span id="output"></span>
                        </div>
                    </div>
                    <div class="form-input-container">
                        <input required type="text" class="input-user-name" placeholder="Имя исполнителя" name="author-name">
                        <input required type="text" class="input-track-name" placeholder="Название трека" name="track-name">
                        <input required type="file" accept="audio/*" class="download-track" id="dwnld-trck" name="track">
                        
                        <input readonly class="track-name" type="text" id="track-text">
                        
                      <p class="genre" >Выберите жанр</p>
                        <select class="genre-select" name="genre">
                        <?php foreach ($genres as $genre) { ?>
                            <option value ="<?=$genre['id']?>"><?=$genre['name']?></option>
                        <?php } ?> 
                        </select>
                       
                    </div>

                </div>
                <input type="submit" class="input-submit" value="Отправить">
                <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
            </form>

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
<script src="assets/scripts/inputs.js"></script>
<script src="assets/scripts/photo.js"> </script>
<script src="assets/scripts/file-name.js"></script>
<script src="assets/scripts/menu.js"></script>

</html>
