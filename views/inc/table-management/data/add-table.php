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

    if(isset($_POST["tableName"])){

        $tableName = $_POST["tableName"];

        $tableFood = new TableFood();
        $result = $tableFood->addTableFood($tableName);

        if($result){
            echo 'Thêm bàn thành công';
        }else{
            echo 'Thêm bàn <b>KHÔNG</b> thành công';
        }
    }

?>