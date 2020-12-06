<?php
    Session::checkLogin();
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
                $query = "SELECT *
                            FROM account ac INNER JOIN accountType act ON ac.typeID = act.id
                            WHERE username = '$username' AND password = '$password' LIMIT 1";
                $result = $this->db->select($query);
                
                if($result > 0){
                    $value = $result->fetch_assoc();
                    Session::set('login', true);
                    $account = new AccountViewModel($value['username'], $value['name'], $value['displayName'], $value['gender'], $value['address']);
                    Session::set('account', $account);
                    header('Location:index.php');
                }else{
                    $alertText = "Tên tài khoản hoặc mật khẩu không hợp lệ";
                    return $alertText;
                }
            }
        }
    }

?>