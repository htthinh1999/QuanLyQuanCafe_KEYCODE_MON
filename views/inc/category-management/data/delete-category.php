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

    if(isset($_POST["categoryID"])){

        $categoryName = $_POST["categoryID"];

        $foodCategory = new FoodCategory();
        $result = $foodCategory->deleteFoodCategory($categoryName);

        if($result){
            echo 'Thêm danh mục thành công';
        }else{
            echo 'Thêm danh mục <b>KHÔNG</b> thành công';
        }
    }

?>