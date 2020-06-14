<?php
    
    require_once 'connect.php'; 

    $trackId = $_POST['trackId'];
    $userId = $_POST['userId'];
    $comment = $_POST['comment'];
    


    if (isset($trackId)  && isset($userId) && isset($comment)) {
        if(!empty($trackId) && !empty($userId) && !empty($comment)) {
            

                $db = new Database();
                
                $response = $db->addComment($trackId, $userId, $comment);

              
                    header('Location: /usertrack.php?id='.$trackId);
        } else {
            $_SESSION['message'] = 'Вы заполнили не все поля';
            header('Location: /register.php');
        }
    } else {
        $_SESSION['message'] = 'Вы заполнили не все поля';
        header('Location: /register.php');
    }
    
?>
