<?php
    require_once '../../../../lib/session.php';
    Session::checkSession();
    // important
	require_once '../../../../config/config.php';
    require_once '../../../../lib/database.php';
    require_once '../../../../helpers/format.php';

    // controllers
    require_once '../../../../controllers/table-food.php';
?>

<?php

    $currentTableID = 1;
    if(isset($_POST['currentTableID'])){
        $currentTableID = $_POST['currentTableID'];
    }
    if(isset($_POST['discount'])){
        $discount = $_POST['discount'];
        $tableFood = new TableFood();
        $result = $tableFood->checkoutTable($currentTableID, $discount);

        if($result){
            echo 'Thanh toán thành công';
        }else{
            echo 'Thanh toán <b>KHÔNG</b> thành công';
        }
    }

?>