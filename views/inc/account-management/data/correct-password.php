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

    if(isset($_POST["accountUsername"]) && isset($_POST["accountPassword"])){

        $accountUsername = $_POST["accountUsername"];
        $accountPassword = $_POST["accountPassword"];

        $account = new Account();
        $result = $account->correctPassword($accountUsername, $accountPassword);

        if($result){
            echo 'Mật khẩu chính xác';
        }else{
            echo 'Mật khẩu <b>KHÔNG</b> chính xác';
        }
    }

?>