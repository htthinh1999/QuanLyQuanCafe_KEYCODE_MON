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

    if(isset($_POST["tableID"]) && isset($_POST["tableName"])){

        $tableID = $_POST["tableID"];
        $tableName = $_POST["tableName"];

        $tableFood = new TableFood();
        $result = $tableFood->updateTableFood($tableID, $tableName);

        if($result){
            echo 'Cập nhật bàn thành công';
        }else{
            echo 'Cập nhật bàn <b>KHÔNG</b> thành công';
        }
    }

?>