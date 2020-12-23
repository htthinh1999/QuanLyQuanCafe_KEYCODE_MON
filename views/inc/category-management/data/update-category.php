<?php
    require_once '../../../../lib/session.php';
    Session::checkSession();
    // important
	require_once '../../../../config/config.php';
    require_once '../../../../lib/database.php';
    require_once '../../../../helpers/format.php';

    // controllers
    require_once '../../../../controllers/food-category.php';
?>

<?php

    if(isset($_POST["categoryID"])&&isset($_POST["categoryName"])){

        $categoryID = $_POST["categoryID"];
        $categoryName = $_POST["categoryName"];

        $foodCategory = new FoodCategory();
        $result = $foodCategory->updateFoodCategory($categoryID, $categoryName);

        if($result){
            echo 'Cập nhật danh mục thành công';
        }else{
            echo 'Cập nhật danh mục <b>KHÔNG</b> thành công';
        }
    }

?>