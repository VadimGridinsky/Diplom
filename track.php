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
    <link rel="stylesheet" href="/assets/css/track.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
</head>
<?= require_once 'header.php' ?>

    <main class="main">
        <div class="wraper">
            <form 
            action ="Vendor/track-send.php"
             method="post"
             class="form-download"
             enctype="multipart/form-data">
                <div class="form-container">
                    <div class="form-prerender">
                      <input 
                         type="file"
                         name="photo-track"
                         class="download-img"
                         id="file" >
                         
                      <div class="form-window">
                      <span id="output"></span>
                      </div>      
                    </div>
                    <div class="form-input-container">
                        <input
                          type="text"
                          required
                          class="input-user-name"
                          placeholder="Имя исполнителя"
                          name="author-name">
                        <input
                          type="text"
                          required
                          class="input-track-name"
                          placeholder="Название трека"
                          name="track-name">
                        <input
                         type="file"
                         class="input-file" 
                         name ="track">
                    </div>

                </div>
                <input 
                  type="submit"
                  class="input-submit"
                  value="Отправить">
                  <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
            </form>

        </div>

    </main>

    <?= require_once 'footer.php' ?> 


