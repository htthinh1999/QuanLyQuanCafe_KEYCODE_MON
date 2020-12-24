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

    $tableFood = new TableFood();
    $tables = $tableFood->getAllTables();

    $tablesAsJson = array();
    foreach($tables as $tableViewModel){
        array_push($tablesAsJson, $tableViewModel->getJson());
    }

    $tablesDataAsJson = array();
    $tablesDataAsJson['data']=$tablesAsJson;
    echo json_encode($tablesDataAsJson);
?>