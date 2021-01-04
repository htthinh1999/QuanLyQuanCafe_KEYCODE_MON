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

        public function correctPassword($username, $password){
            $username = $this->fm->validation($username);
            $password = $this->fm->validation($password);
            $password = md5($password);
            
            $username = mysqli_real_escape_string($this->db->link, $username);
            $password = mysqli_real_escape_string($this->db->link, $password);
            
            $query = "CALL USP_Login('$username', '$password')";
            $result = $this->db->select($query);
            
            if($result > 0){
                return true;
            }
            
            return false;
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
                $query = "CALL USP_Login('$username', '$password')";
                $result = $this->db->select($query);
                
                if($result > 0){
                    $value = $result->fetch_assoc();
                    Session::set('login', true);
                    $account = new AccountViewModel($value['username'], $value['id'], $value['name'], $value['displayName'], $value['gender'], $value['birthday'], $value['address']);
                    Session::set('account', $account);
                    header("Location: index.php");
                }else{
                    $alertText = "Tên tài khoản hoặc mật khẩu không hợp lệ";
                    return $alertText;
                }
            }
        }

        public function getAllAccounts(){
            $query = "CALL USP_LoadAccountList()";
            $result = $this->db->procedure($query);

            $accountList = array();
            while ($row = mysqli_fetch_array($result)){
                $account = new AccountViewModel($row['username'], $row['id'], $row['name'], $row['displayName'], $row['gender'], $row['birthday'], $row['address']);
                array_push($accountList, $account);
            }

            return $accountList;
        }

        public function getAccountInformation($username){
            $query = "CALL USP_GetAccountInfoByUsername('$username')";
            $result = $this->db->procedure($query);

            if($row = mysqli_fetch_array($result)){
                $account = new AccountViewModel($row['username'], $row['id'], $row['name'], $row['displayName'], $row['gender'], $row['birthday'], $row['address']);
                return $account;
            }

            return false;
        }

        public function addAccount($username, $displayName, $typeID, $gender, $birthday, $address){
            $query = "CALL USP_AddAccount('$username', '$displayName', $typeID, '$gender', '$birthday', '$address')";
            $result = $this->db->procedure($query);

            if($result){
                return true;
            }
            return false;
        }
        
        public function updateAccount($username, $displayName, $typeID, $gender, $birthday, $address){
            $query = "CALL USP_UpdateAccount('$username', '$displayName', $typeID, '$gender', '$birthday', '$address')";
            $result = $this->db->procedure($query);

            if($result){
                return true;
            }
            return false;
        }
        
        public function deleteAccount($username){
            $query = "CALL USP_DeleteAccount('$username')";
            $result = $this->db->procedure($query);

            if($result){
                return true;
            }
            return false;
        }
        
        public function resetPassword($username){
            $query = "CALL USP_ResetPassword('$username')";
            $result = $this->db->procedure($query);

            if($result){
                return true;
            }
            return false;
        }

        public function changePassword($username, $password){
            $username = $this->fm->validation($username);
            $password = $this->fm->validation($password);
            $password = md5($password);
            $query = "CALL USP_ChangePassword('$username', '$password')";
            $result = $this->db->procedure($query);

            if($result){
                return true;
            }
            return false;
        }
        
        public function changeAccountInfo($username, $displayName, $gender, $birthday, $address){
            $query = "CALL USP_ChangeAccountInfo('$username', '$displayName', '$gender', '$birthday', '$address')";
            $result = $this->db->procedure($query);

            if($result){
                return true;
            }
            return false;
        }
    }

?>