<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MMusic</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic|Playfair+Display:400,700&subset=latin,cyrillic">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/track.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
</head>

<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <a href="index.php">
                    <img src="assets/images/logo2.png" width="55" height="55" alt="">
                </a>
            </div>
            <div class="header-item">
                <a href="index.php">Главная</a>
            </div>
            <div class="header-item">
                <a href="#">Новости</a>
            </div>
            <div class="header-item">
                <a href="#">Мой профиль</a>
            </div>
            <div class="header-item">
                <a href="track.php" id="track-up">Загрузить трек</a>
            </div>
            <div class="registration">
                <a href="auth.php"><img src="assets/images/reg.png" width="30" height="30"></a>
            </div>
        </div>
    </header>

    <main class="main">
        <div class="wraper">
            <form method="post" class="form-download" enctype="multipart/form-data">
                <div class="form-container">
                    <div class="form-prerender">
                      <input type="file" name="photo" multiple accept="image/*,image/jpeg" class="download-img">
                      <div class="form-window">
                      
                      </div>      
                    </div>
                    <div class="form-input-container">
                        <input type="text" class="input-user-name" placeholder="Имя исполнителя">
                        <input type="text" class="input-track-name" placeholder="Название трека">
                        <input type="file" class="input-file">
                    </div>

                </div>
                <input type="submit" class="input-submit" value="Отправить">
            </form>

        </div>

    </main>

    <footer>
        <div class="footer-line">
            <p class="footer-description">Mmusic - онлайн форум для музыкантов</p>
            <a href=""><img src="assets/images/vk.jpg" width="30" height="30"></a>
            <a href=""><img src="assets/images/inst.png" width="30" height="30"></a>
        </div>
    </footer>

</body>
</html>

