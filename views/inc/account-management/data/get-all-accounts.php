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

    $account = new Account();
    $accounts = $account->getAllAccounts();

    $accountsAsJson = array();
    foreach($accounts as $accountViewModel){
        array_push($accountsAsJson, $accountViewModel->getJson());
    }

    $accountsDataAsJson = array();
    $accountsDataAsJson['data']=$accountsAsJson;
    echo json_encode($accountsDataAsJson);
?>