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

    if(isset($_POST["accountUsername"]) && isset($_POST["accountDisplayName"]) && isset($_POST["accountBirthday"]) && isset($_POST["accountAddress"])){

        $accountUsername = $_POST["accountUsername"];
        $accountDisplayName = $_POST["accountDisplayName"];
        $accountGender = $_POST["accountGender"];
        $accountBirthday = $_POST["accountBirthday"];
        $accountAddress = $_POST["accountAddress"];

        $account = new Account();
        $result = $account->changeAccountInfo($accountUsername, $accountDisplayName, $accountGender, $accountBirthday, $accountAddress);

        if($result){
            echo 'Thay đổi thông tin tài khoản thành công';
        }else{
            echo 'Thay đổi thông tin <b>KHÔNG</b> thành công';
        }
    }

?>