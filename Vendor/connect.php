    <?php

    class Database
    {

        private $connect;

        public function __construct()
        {
            $this->connect = new PDO('mysql:host=localhost;dbname=mmusic', 'root', '');
        }

        public function registration($login, $nickname, $email, $password, $path)
        {
            if ($this->getauthorization($login)['status']) {
                $this->response['status'] = false;
                $this->response['errorInfo'] = 'user already exists';
                return;
            }

            $sth = $this->connect->prepare("INSERT INTO `user` (login, nickname, email, password, path) VALUES (?, ?, ?, ?, ?)");
            $status = $sth->execute(array($login, $nickname, $email, $password, $path));
            if (!$status) {
                $this->response['status'] = false;
                return;
            }

            $this->response['status'] = true;
            $this->response['id'] = $this->connect->lastInsertId();
            return $this->response;
        }

        public function getauthorization($login)
        {
            $sth = $this->connect->prepare("SELECT * FROM `user` WHERE login = ?");
            $sth->execute(array($login));
            if ($data = $sth->fetch()) {
                $this->response['status'] = true;
                $this->response['data'] = $data;
                session_start();
                $_SESSION['user'] = [
                    "id" => $data['id'],
                    "login" => $data['login'],
                    "avatar" => $data['avatar'],
                    "email" => $data['email']
                ];
            } else {
                $this->response['status'] = false;
                $this->response['errorInfo'] = 'This user does not exist';
            }
            return $this->response;
        }



       
    }
