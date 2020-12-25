<?php
    require_once '../../../../lib/session.php';
    Session::checkSession();
    // important
	require_once '../../../../config/config.php';
    require_once '../../../../lib/database.php';
    require_once '../../../../helpers/format.php';

    // controllers
    require_once '../../../../controllers/food.php';
?>

<?php

    if(isset($_POST["foodID"]) && isset($_POST["foodName"]) && isset($_POST["categoryID"]) && isset($_POST["foodPrice"])){

        $foodID = $_POST["foodID"];
        $foodName = $_POST["foodName"];
        $categoryID = $_POST["categoryID"];
        $foodPrice = $_POST["foodPrice"];

        $food = new Food();
        $result = $food->updateFood($foodID, $foodName, $categoryID, $foodPrice);

        if($result){
            echo 'Cập nhật món thành công';
        }else{
            echo 'Cập nhật món <b>KHÔNG</b> thành công';
        }
    }

?>