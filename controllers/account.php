<?php
    include '../lib/session.php';
    Session::checkLogin();
    include '../lib/database.php';
    include '../helpers/format.php';
?>

<?php

    class Account{
        private $db;
        private $fm;

        public function Account(){
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function login($username, $password){
            $username = $this->fm->validation($username);
            $password = $this->fm->validation($password);
            $password = md5($password);
            
            $username = mysqli_real_escape_string($this->db->link, $username);
            $password = mysqli_real_escape_string($this->db->link, $password);

            if(empty($username) || empty($password)){
                $alertText = "Tên đăng nhập hoặc mật khẩu chưa được nhập";
                return $alertText;
            }else{
                $query = "SELECT * FROM account WHERE username = '$username' AND password = '$password' LIMIT 1";
                $result = $this->db->select($query);
                var_dump($result);
                if($result > 0){
                    $value = $result->fetch_assoc();
                    Session::set('login', true);
                    Session::set('username', $value['username']);
                    Session::set('password', $value['password']);
                    header('Location:index.php');
                }else{
                    $alertText = "Tên tài khoản hoặc mật khẩu không hợp lệ";
                    return $alertText;
                }
            }
        }
    }

?>