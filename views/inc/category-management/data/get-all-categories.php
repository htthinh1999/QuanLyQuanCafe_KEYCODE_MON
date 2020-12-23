<?php
    require_once '../../../../lib/session.php';
    Session::checkSession();
    // important
	require_once '../../../../config/config.php';
    require_once '../../../../lib/database.php';
    require_once '../../../../helpers/format.php';

    // models
    require_once '../../../../models/category-view-model.php';

    // controllers
    require_once '../../../../controllers/food-category.php';
?>

<?php

    $foodCategory = new FoodCategory();
    $categories = $foodCategory->getAllCategories();

    $categoriesAsJson = array();
    foreach($categories as $categoryViewModel){
        array_push($categoriesAsJson, $categoryViewModel->getJson());
    }

    $categoriesDataAsJson = array();
    $categoriesDataAsJson['data']=$categoriesAsJson;
    echo json_encode($categoriesDataAsJson);
?>