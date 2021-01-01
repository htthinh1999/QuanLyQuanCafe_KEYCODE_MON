<?php
    require_once '../../../../lib/session.php';
    Session::checkSession();
    // important
	require_once '../../../../config/config.php';
    require_once '../../../../lib/database.php';
    require_once '../../../../helpers/format.php';

    // controllers
    require_once '../../../../controllers/account.php';
?>

<?php

    if(isset($_POST["accountUsername"]) && isset($_POST["accountDisplayName"]) && isset($_POST["accountTypeID"]) && isset($_POST["accountBirthday"]) && isset($_POST["accountAddress"])){

        $accountUsername = $_POST["accountUsername"];
        $accountDisplayName = $_POST["accountDisplayName"];
        $accountTypeID = $_POST["accountTypeID"];
        $accountGender = $_POST["accountGender"];
        $accountBirthday = $_POST["accountBirthday"];
        $accountAddress = $_POST["accountAddress"];

        $account = new Account();
        $result = $account->addAccount($accountUsername, $accountDisplayName, $accountTypeID, $accountGender, $accountBirthday, $accountAddress);

        if($result){
            echo 'Thêm tài khoản thành công';
        }else{
            echo 'Thêm  tài khoản <b>KHÔNG</b> thành công';
        }
    }

?>