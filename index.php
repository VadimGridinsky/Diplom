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
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
</head>

<?= include_once 'header.php' ?> 


<main class="main">
        <div class="wraper">
            <div class="tracks">
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



        </div>
    </main>

    <?= require_once 'footer.php' ?> 
