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

    if(isset($_POST["accountUsername"]) && isset($_POST["accountNewPassword"])){

        $accountUsername = $_POST["accountUsername"];
        $accountNewPassword = $_POST["accountNewPassword"];

        $account = new Account();
        $result = $account->changePassword($accountUsername, $accountNewPassword);

        if($result){
            echo 'Đổi mật khẩu tài khoản thành công';
        }else{
            echo 'Đổi mật khẩu tài khoản <b>KHÔNG</b> thành công';
        }
    }

?>