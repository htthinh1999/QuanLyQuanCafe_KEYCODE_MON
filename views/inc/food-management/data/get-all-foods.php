<?php
    require_once '../../../../lib/session.php';
    Session::checkSession();
    // important
	require_once '../../../../config/config.php';
    require_once '../../../../lib/database.php';
    require_once '../../../../helpers/format.php';

    // models
    require_once '../../../../models/food-view-model.php';

    // controllers
    require_once '../../../../controllers/food.php';
?>

<?php

    $food = new Food();
    $foods = $food->getAllFoods();

    $foodsAsJson = array();
    foreach($foods as $foodViewModel){
        array_push($foodsAsJson, $foodViewModel->getJson());
    }

    $foodsDataAsJson = array();
    $foodsDataAsJson['data']=$foodsAsJson;
    echo json_encode($foodsDataAsJson);
?>