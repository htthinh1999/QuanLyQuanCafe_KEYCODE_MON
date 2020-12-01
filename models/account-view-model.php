<?php

class AccountViewModel{

    private $username;
    private $accountTypeName;
    private $displayName;
    private $gender;
    private $address;

    public function AccountViewModel($username, $accountTypeName, $displayName, $gender, $address){
        $this->username = $username;
        $this->accountTypeName = $accountTypeName;
        $this->displayName = $displayName;
        $this->gender = $gender;
        $this->address = $address;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getAccountTypeName(){
        return $this->accountTypeName;
    }

    public function getDisplayName(){
        return $this->displayName;
    }

    public function getGender(){
        return $this->gender;
    }

    public function getAddress(){
        return $this->address;
    }

}

?>