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
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic|Playfair+Display:400,700&subset=latin,cyrillic">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/profile.css">
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
                <a href="profile.php">Мой профиль</a>
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

            <div class="profile-container">

                <div class="profile-img">
                    <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
                </div>

                <div class="profile-info">
                    <h2 style="margin: 10px 0;"><?= $_SESSION['user']['login'] ?></h2>
                    <a href="#"><?= $_SESSION['user']['email'] ?></a>
                    <a href="#"><?= $_SESSION['authorname'] ?></a>
            
                </div>
                <a href="vendor/logout.php" class="logout">Выход</a>


            </div>

  
             
           

        <div class="user-tracks">
            <h2>Мои треки</h2>
        
            <?php foreach($filesT as $file) : ?>
                <div class="track"> 
                
            <audio  controls src="<?= $folderT.$file; ?>"></audio>
              </div>
            <?php endforeach; ?>

            <?php foreach($filesP as $file) : ?>
                
                <div class="phototrack"> 
            <img src="<?= $folderP.$file; ?>" alt="200px"></img>
              </div>
            <?php endforeach; ?>
            
            
              
                
                
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
