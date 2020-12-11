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
    class FoodInCategory{
        private $id, $name;
        public function FoodInCategory($id, $name){
            $this->id = $id;
            $this->name = $name;
        }
        public function getJson(){
            return [
                'id' => $this->id,
                'name' => $this->name
            ];
        }
    }
?>

<?php
    // get current categoryID
    $currentCategoryID = 1;
    if(isset($_POST["currentCategoryID"])){
        $currentCategoryID = $_POST["currentCategoryID"];
    }

    $food = new Food();
    $foodList = $food->getFoodsByCategoryID($currentCategoryID);

    $foods = array();
    foreach($foodList as $foodViewModel){
        $foodID = $foodViewModel->getID();
        $foodName = $foodViewModel->getName();

        $foodInCategory = new FoodInCategory($foodID, $foodName);
        array_push($foods, $foodInCategory->getJson());
    }
    echo json_encode($foods);
?>