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

    if(isset($_POST["foodID"])){

        $foodID = $_POST["foodID"];

        $food = new Food();
        $result = $food->deleteFood($foodID);

        if($result){
            echo 'Xoá món thành công';
        }else{
            echo 'Xoá món <b>KHÔNG</b> thành công';
        }
    }

?>