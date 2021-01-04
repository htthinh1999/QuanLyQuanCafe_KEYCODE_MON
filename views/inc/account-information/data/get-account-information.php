<?php
    require_once '../../../../lib/session.php';
    Session::checkSession();
    // important
	require_once '../../../../config/config.php';
    require_once '../../../../lib/database.php';
    require_once '../../../../helpers/format.php';

    // models
    require_once '../../../../models/account-view-model.php';

    // controllers
    require_once '../../../../controllers/account.php';
?>

<?php

    if(isset($_POST["accountUsername"])){

        $username = $_POST["accountUsername"];

        $account = new Account();
        $accountInformation = $account->getAccountInformation($username);

        if($accountInformation){
            echo json_encode($accountInformation->getJson());
        }else{
            echo "<b>KHÔNG</b> thể lấy thông tin tài khoản";
        }

    }
?>