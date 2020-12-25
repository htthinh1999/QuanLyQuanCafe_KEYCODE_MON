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

    if(isset($_POST["foodName"]) && isset($_POST["categoryID"]) && isset($_POST["foodPrice"])){

        $foodName = $_POST["foodName"];
        $categoryID = $_POST["categoryID"];
        $foodPrice = $_POST["foodPrice"];

        $food = new Food();
        $result = $food->addFood($foodName, $categoryID, $foodPrice);

        if($result){
            echo 'Thêm món thành công';
        }else{
            echo 'Thêm món <b>KHÔNG</b> thành công';
        }
    }

?>