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

    if(isset($_POST["tableID"])){

        $tableID = $_POST["tableID"];

        $tableFood = new TableFood();
        $result = $tableFood->deleteTableFood($tableID);

        if($result){
            echo 'Xoá bàn thành công';
        }else{
            echo 'Xoá bàn <b>KHÔNG</b> thành công';
        }
    }

?>