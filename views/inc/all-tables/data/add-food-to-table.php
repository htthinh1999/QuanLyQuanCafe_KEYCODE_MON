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

    // get current table id
    $currentTableID = 1;
    if(isset($_POST["currentTableID"])){
        $currentTableID = $_POST["currentTableID"];
    }

    if(isset($_POST["foodID"])&&isset($_POST["foodCount"])){

        $foodID = $_POST["foodID"];
        $foodCount = $_POST["foodCount"];

        $tableFood = new TableFood();
        $result = $tableFood->addFoodToTable($foodID, $foodCount, $currentTableID);

        if($result){
            echo 'Thêm món ăn vào bàn thành công';
        }else{
            echo 'Thêm món ăn vào bàn <b>KHÔNG</b> thành công';
        }
    }

?>