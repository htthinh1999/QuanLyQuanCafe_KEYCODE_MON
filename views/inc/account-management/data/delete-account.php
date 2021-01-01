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

    if(isset($_POST["accountUsername"])){

        $accountUsername = $_POST["accountUsername"];

        $account = new Account();
        $result = $account->deleteAccount($accountUsername);

        if($result){
            echo 'Xoá tài khoản thành công';
        }else{
            echo 'Xoá tài khoản <b>KHÔNG</b> thành công';
        }
    }

?>