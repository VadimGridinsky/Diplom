<?php
    require_once 'connect.php';
   
    $authorname = $_POST['author-name'];
    $trackname = $_POST['track-name'];
    $id_user = $_SESSION['user']['id'];
    $genre = $_POST['genre'];
    /* $user_name = $_SESSION['user']['nickname']; */
        $tracks = 'uploads/tracks/' . time() . $_FILES['track']['name'];
        if (!move_uploaded_file($_FILES['track']['tmp_name'], '../' . $tracks)) {
            $_SESSION['message'] = 'Ошибка при загрузке трека';
            header('Location: ../track.php');
        }
    $phototrack = 'uploads/tracksphoto/' . time() . $_FILES['photo-track']['name'];
        if (!move_uploaded_file($_FILES['photo-track']['tmp_name'], '../' . $phototrack)) {
            $_SESSION['message'] = 'Ошибка при загрузке обложки ';
            header('Location: ../track.php');
        }

        $db = new Database();
        $response = $db->tracksend($trackname, $authorname, $tracks, $phototrack, $id_user);
        /* var_dump($authorname); */
        $_SESSION['message'] = 'Трек загружен успешно!';
        header('Location: ../profile.php');


    ?>