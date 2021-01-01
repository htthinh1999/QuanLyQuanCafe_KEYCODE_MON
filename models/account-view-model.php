<?php

class AccountViewModel{

    private $username;
    private $accountTypeID;
    private $accountTypeName;
    private $displayName;
    private $gender;
    private $birthday;
    private $address;

    public function AccountViewModel($username, $accountTypeID, $accountTypeName, $displayName, $gender, $birthday, $address){
        $this->username = $username;
        $this->accountTypeID = $accountTypeID;
        $this->accountTypeName = $accountTypeName;
        $this->displayName = $displayName;
        $this->gender = $gender;
        $this->birthday = $birthday;
        $this->address = $address;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getAccountTypeID(){
        return $this->accountTypeID;
    }

    public function getAccountTypeName(){
        return $this->accountTypeName;
    }

    public function getDisplayName(){
        return $this->displayName;
    }

    public function getBirthday(){
        return $this->birthday;
    }

    public function getGender(){
        return $this->gender;
    }

    public function getAddress(){
        return $this->address;
    }

    public function getJson(){
        return [
            'username' => $this->username,
            'accountTypeID' => $this->accountTypeID,
            'accountTypeName' => $this->accountTypeName,
            'displayName' => $this->displayName,
            'gender' => $this->gender,
            'birthday' => $this->birthday,
            'address' => $this->address
        ];
    }

}

?>