<?php
    session_start();
    require_once 'connect.php';

    $authorname = $_POST['author-name'];
    $trackname = $_POST['track-name'];
    $id_user = $_SESSION['user']['id'];
    $track = 'uploads/tracks/' . time() . $_FILES['track']['name'];
        if (!move_uploaded_file($_FILES['track']['tmp_name'], '../' . $track)) {
            $_SESSION['message'] = 'Ошибка при загрузке трека';
            header('Location: ../track.php');
        }
        $phototrack = 'uploads/photo/' . time() . $_FILES['photo']['name'];
        if (!move_uploaded_file($_FILES['photo']['tmp_name'], '../' . $phototrack)) {
            $_SESSION['message'] = 'Ошибка при загрузке обложки ';
            header('Location: ../track.php');
        }
        mysqli_query($connect, "INSERT INTO `track` (`id`, `name`, `audio`,`image`, `id_user` ) VALUES (NULL, '$trackname', '$track' , '$phototrack' , $id_user)");
        $_SESSION['message'] = 'Трек загружен успешно!';
        header('Location: ../profile.php');


    ?>