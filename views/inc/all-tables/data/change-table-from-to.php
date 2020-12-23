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

    // get first table id & second table id
    if(isset($_POST["firstTableID"]) && isset($_POST["secondTableID"])){
        $firstTableID = $_POST["firstTableID"];
        $secondTableID = $_POST["secondTableID"];
        
        $tableFood = new TableFood();
        $result = $tableFood->changeTable($firstTableID, $secondTableID);

        if($result){
            echo 'Chuyển bàn thành công';
        }else{
            echo 'Chuyển bàn <b>KHÔNG</b> thành công';
        }
    }
?>