<?php
    session_start();
    class Database
    {
        private $connect;

        public function __construct()
        {
            $this->connect = new PDO('mysql:host=localhost;dbname=mmusic', 'root', '');
        }

        public function registration($login, $nickname, $email, $password, $path)
        {
            $request = $this->connect->prepare("INSERT INTO user (login, nickname, email, password, avatar) VALUES (?, ?, ?, ?, ?)");
            $status = $request->execute(Array($login, $nickname, $email, $password, $path));
            
            if (!$status) {
                $this->response['status'] = false;
                return;
            }

            $this->response['status'] = true;
            $this->response['id'] = $this->connect->lastInsertId();
            return $this->response;
        }

        public function authorization($login, $password)
        {
            $request = $this->connect->prepare("SELECT * FROM user WHERE login = ? AND password = ? ");
            $request->execute(Array($login,$password));
            $data = $request->fetch();
            $_SESSION['data'] = $data;
            
            if ($data) {
                $this->response['status'] = true;

                $_SESSION['user'] = [
                    "id" => $data['id'],
                    "login" => $data['login'],
                    "avatar" => $data['avatar'],
                    "email" => $data['email']
                ];
            } else {
                $this->response['status'] = false;
            }
            return $this->response;
        }

        public function getTracks($user_id = false) {
            if ($user_id) {
                $request = $this->connect->prepare("SELECT t.track_name, t.audio, t.id, t.image, t.id_user, u.nickname, g.name as genre 
                FROM `track` AS t 
                INNER JOIN `user` AS u ON u.id = t.id_user 
                INNER JOIN `genre` AS g ON g.id = t.id_genre 
                WHERE t.id_user = ?");
                $request->execute(Array($user_id));
            } else {
                $request = $this->connect->prepare("SELECT t.track_name, t.audio, t.id, t.image, t.id_user, u.nickname, g.name as genre 
                FROM `track` AS t 
                INNER JOIN `user` AS u ON u.id = t.id_user 
                INNER JOIN `genre` AS g ON g.id = t.id_genre ");
                $request->execute();
            }

            return $request->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getTrack($trackId) {
        
                $request = $this->connect->prepare("SELECT t.track_name, t.audio, t.id, t.image, t.id_user, u.nickname, g.name as genre 
                FROM `track` AS t 
                INNER JOIN `user` AS u ON u.id = t.id_user 
                INNER JOIN `genre` AS g ON g.id = t.id_genre 
                WHERE t.id = ? ");
                $request->execute(Array($trackId));
            

            return $request->fetch();
        }
        public function addComment($trackId, $userId, $comment){
         
            $request = $this->connect->prepare("INSERT INTO comment (content, id_user, id_track) VALUES (?, ?, ?)");
            $status = $request->execute(Array($comment, $userId, $trackId));
            
            if (!$status) {
                $this->response['status'] = false;
                return;
            }
            $this->response['status'] = true;
            return $this->response;
            
    }

    public function getComments($trackId) {
        
            $request = $this->connect->prepare("SELECT c.content, c.id as author_id, u.nickname 
            FROM `comment` AS c 
            INNER JOIN `user` AS u ON u.id = c.id_user 
            WHERE c.id_track = ?");
            $request->execute(Array($trackId));


        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

        public function getGenres(){
            
            $request = $this->connect->prepare("SELECT * FROM `genre`");
            $request->execute();
           
            return $request->fetchAll(PDO::FETCH_ASSOC);

        }
        public function trackSend($trackname, $tracks, $phototrack, $id_user, $genre){
         
            $request = $this->connect->prepare("INSERT INTO track (track_name, audio, image, id_user, id_genre) VALUES (?, ?, ?, ?, ?)");
            $status = $request->execute(Array($trackname, $tracks, $phototrack, $id_user, $genre));
            
            if (!$status) {
                $this->response['status'] = false;
                return;
            }
            $this->response['status'] = true;
            return $this->response;
            
    }
    public function deleteTrack($trackId){
        $request = $this->connect->prepare("DELETE FROM `track` WHERE id = ? ");
        $status = $request->execute(Array($trackId));
        
        if (!$status) {
            $this->response['status'] = false;
            return;
        }
        $this->response['status'] = true;
        return $this->response;
    }
}