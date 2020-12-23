<?php
    require_once '../../../../lib/session.php';
    Session::checkSession();
    // important
	require_once '../../../../config/config.php';
    require_once '../../../../lib/database.php';
    require_once '../../../../helpers/format.php';

    // models
    require_once '../../../../models/table-view-model.php';

    // controllers
    require_once '../../../../controllers/table-food.php';
?>

<?php

    $currentTableID = 1;
    if(isset($_POST['currentTableID'])){
        $currentTableID = $_POST['currentTableID'];
    }
    $tableFood = new TableFood();
    $table = $tableFood->getTableByID($currentTableID);
    echo json_encode($table->getJson());

?>