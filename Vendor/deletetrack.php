<?php
require_once 'connect.php';
    
    $trackId = $_POST['track'];
    
   
   
            $db = new Database();
            $response = $db->deleteTrack($trackId);

            
                $_SESSION['message'] = 'Трэк успешно удален!';
                header('Location: /profile.php');
           

    
?>
