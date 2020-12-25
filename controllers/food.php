<?php
    Session::checkSession();
?>

<?php

    class Food{
        private $db;
        private $fm;

        public function Food(){
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function getAllFoods(){
            $query = "CALL USP_LoadFoodList()";
            $result = $this->db->procedure($query);

            $foodList = array();
            while ($row = mysqli_fetch_array($result)){
                $food = new FoodViewModel($row['ID'], $row['Tên món'], $row['Mã danh mục'], $row['Danh mục'], $row['Giá tiền'], $row['Trạng thái']);
                array_push($foodList, $food);
            }

            return $foodList;
        }

        public function addFood($foodName, $categoryID, $foodPrice){
            $query = "CALL USP_AddFood('$foodName', $categoryID, $foodPrice)";
            $result = $this->db->procedure($query);

            if($result){
                return true;
            }
            return false;
        }

        public function updateFood($foodID, $foodName, $categoryID, $foodPrice){
            $query = "CALL USP_UpdateFood($foodID, '$foodName', $categoryID, $foodPrice)";
            $result = $this->db->procedure($query);

            if($result){
                return true;
            }
            return false;
        }

        public function deleteFood($foodID){
            $query = "CALL USP_DeleteFood($foodID)";
            $result = $this->db->procedure($query);

            if($result){
                return true;
            }
            return false;
        }
        
        public function getFoodsByCategoryID($categoryID){
            $query = "CALL USP_LoadFoodListByCategoryID($categoryID)";
            $result = $this->db->procedure($query);

            $foodList = array();
            while ($row = mysqli_fetch_array($result)){
                $food = new FoodViewModel($row['ID'], $row['Tên món'], $row['Mã danh mục'], $row['Danh mục'], $row['Giá tiền'], $row['Trạng thái']);
                array_push($foodList, $food);
            }

            return $foodList;
        }

    }

?>