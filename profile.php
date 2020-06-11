<?php
require_once 'Vendor/connect.php';

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

<<?= require_once 'header.php' ?>

    <main class="main">

            <div class="profile-container">

                <div class="profile-img">
                    <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
                </div>

                <div class="profile-info">
                    <h2 style="margin: 10px 0;"><?= $_SESSION['user']['login'] ?></h2>
                    <a href="#"><?= $_SESSION['user']['email'] ?></a>
                    <img src="<?= $_SESSION['user']['image'] ?>" width="200" alt="">
                    <a href="#"><?= $_SESSION['user']['Author'] ?></a>
                    <a href="#"><?= $_SESSION['user']['track_name'] ?></a>
                    <audio controls src="<?=$_SESSION['user']['audio']?>"></audio>
                    
            
                </div>
                <a href="vendor/logout.php" class="logout">Выход</a>


            </div>

  
             
           

        <div class="user-tracks">
            <h2>Мои треки</h2>
       

            <div class="track">
                    <audio controls src="<?=$_SESSION['user']['audio']?>"></audio> 
                   <?= var_dump($_SESSION['user']['Author']);?>
                </div>
        </div>
       



    </main>
    <?= require_once 'footer.php' ?>
