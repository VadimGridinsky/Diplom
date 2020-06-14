<?php
require_once 'start.php';

 $db = new Database();
 $track = $db->getTrack($_GET['id']);
 $comments = $db->getComments($track['id']);
 
            ?>


    <title>MMusic</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/usertrack.css">
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
                <a href="profile.php">Мой профиль</a>
            </div>
            <div class="header-item header-item_track">
                <a href="track.php" class="track-up">Загрузить трек</a>
            </div>
            <div class="registration">
                <a href="auth.php" class="user">Имя пользователя</a>
                <a href="auth.php"><img src="assets/images/wwwww.png" width="30" height="30"></a>
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

      <div class="wrapper">
         
          <div class="usertrack">
              
              <div class="tracks">
                <div class="phototrack">
                     <img src="<?=$track['image']; ?>" width="100" height="100" alt="<?=$track['trackname']; ?>">
                </div>
                <div class="track-description">
                    <p class="track-info trackname"><?=$track['track_name']; ?></p>
                    <p class="track-info genre"><?=$track['genre']; ?></p>
                    <audio controls src="<?=$track['audio']; ?>"></audio>
                </div>
            </div>
          </>
          
          
          <div class="users-comments">
              <?php foreach ($comments as $comment ) {?>
                  
             
              <div style="color:aliceblue;">
                   <h3><?=$comment['nickname'];?></h3> 
                   <p><?=$comment['content'];?></p>
                </div>


              <?php } ?>
          </div>
          
          <?php
          if ($_SESSION['user']['id']) : 
          ?>
          <h2> Оставить комментарий </h2>
          <form action ="Vendor/addComment.php" method="POST" class="comment">
              <input type="hidden" name="trackId" value="<?=$track['id']?>">
              <input type="hidden" name="userId" value="<?=$_SESSION['user']['id'];?>">
              <textarea name="comment" id="" cols="30" rows="10" placeholder="Введите комментарий"></textarea>
              <button type="submit"> Отправить </button>
              
          </form>

          <?php endif; ?>
          
          
          
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

<script src="assets/scripts/audio.js"></script>
<script src="assets/scripts/menu.js"></script>



</html>
