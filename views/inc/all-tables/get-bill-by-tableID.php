<?php
    require_once '../../../lib/session.php';
    Session::checkSession();
    // important
	require_once '../../../config/config.php';
    require_once '../../../lib/database.php';
    require_once '../../../helpers/format.php';

    // models
    require_once '../../../models/food-in-bill-view-model.php';

    // controllers
    require_once '../../../controllers/table-food.php';
?>



<?php

    // get current table id
    $currentTableID = 1;
    if(isset($_POST["currentTableID"])){
        $currentTableID = $_POST["currentTableID"];
    }

    $tableFood = new TableFood();
    $bill = $tableFood->getBillByTableID($currentTableID);

    $foodsInBill = array();
    foreach($bill as $foodInBillViewModel){
        array_push($foodsInBill, $foodInBillViewModel->getJson());
    }

    $foodsAsJson = array();
    $foodsAsJson['data']=$foodsInBill;
    echo json_encode($foodsAsJson);
?>