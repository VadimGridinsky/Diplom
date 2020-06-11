<?php
    session_start();
    require_once 'connect.php';

    $authorname = $_POST['author-name'];
    $trackname = $_POST['track-name'];
    
    $track = 'uploads/tracks/' . time() . $_FILES['track']['name'];
        if (!move_uploaded_file($_FILES['track']['tmp_name'], '../' . $track)) {
            $_SESSION['message'] = 'Ошибка при загрузке трека';
            header('Location: ../track.php');
        }
        $phototrack = 'uploads/tracksphoto/' . time() . $_FILES['photo-track']['name'];
        if (!move_uploaded_file($_FILES['photo-track']['tmp_name'], '../' . $phototrack)) {
            $_SESSION['message'] = 'Ошибка при загрузке обложки ';
            header('Location: ../track.php');
        }
        mysqli_query($connect, "INSERT INTO `track` (`id`, `track_name`,`Author`, `audio`,`image`, `id_user` ) VALUES (NULL, '$trackname','$authorname', '$track' , '$phototrack' , ".$_SESSION['user']['id'].")");
        $_SESSION['message'] = 'Трек загружен успешно!';
        header('Location: ../profile.php');


    ?>