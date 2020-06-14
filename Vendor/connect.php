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
                $request = $this->connect->prepare("SELECT t.track_name,t.Author, t.audio, t.id, t.image, t.id_user, u.nickname, g.name as genre 
                FROM `track` AS t 
                INNER JOIN `user` AS u ON u.id = t.id_user 
                INNER JOIN `genre` AS g ON g.id = t.id_genre 
                WHERE t.id_user = ?");
                $request->execute(Array($user_id));
            } else {
                $request = $this->connect->prepare("SELECT t.track_name,t.Author, t.audio, t.id, t.image, t.id_user, u.nickname, g.name as genre 
                FROM `track` AS t 
                INNER JOIN `user` AS u ON u.id = t.id_user 
                INNER JOIN `genre` AS g ON g.id = t.id_genre ");
                $request->execute();
            }

            return $request->fetchAll(PDO::FETCH_ASSOC);
        }
        /* public function genreshow(){
            
            $request = $this->connect->prepare("SELECT * FROM `genre`");
            $request->execute();
           
            return $request->fetchAll(PDO::FETCH_ASSOC);

        } */
        public function tracksend($trackname, $authorname, $tracks, $phototrack, $id_user/* , $genre */){
         
            $request = $this->connect->prepare("INSERT INTO track (track_name, Author, audio, image, id_user/* , id_genre */) VALUES (?, ?, ?, ?, ?/* ,? */)");
            $status = $request->execute(Array($trackname, $authorname, $tracks, $phototrack, $id_user, /* $genre */));
            
            if (!$status) {
                $this->response['status'] = false;
                return;
            }
            $this->response['status'] = true;
            return $this->response;
            
    }
}