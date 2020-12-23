<?php
    Session::checkSession();
?>

<?php

    class FoodCategory{
        private $db;
        private $fm;

        public function FoodCategory(){
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function getAllCategories(){
            $query = "CALL USP_LoadFoodCategoryList()";
            $result = $this->db->procedure($query);

            $categoryList = array();
            while ($row = mysqli_fetch_array($result)){
                $category = new CategoryViewModel($row['id'], $row['name']);
                array_push($categoryList, $category);
            }

            return $categoryList;
        }

        public function addFoodCategory($categoryName){
            $query = "CALL USP_AddFoodCategory('$categoryName')";
            $result = $this->db->procedure($query);

            if($result){
                return true;
            }
            return false;
        }

        public function updateFoodCategory($categoryID, $categoryName){
            $query = "CALL USP_UpdateFoodCategory($categoryID, '$categoryName')";
            $result = $this->db->procedure($query);

            if($result){
                return true;
            }
            return false;
        }
        
        public function deleteFoodCategory($categoryID){
            $query = "CALL USP_DeleteFoodCategory($categoryID)";
            $result = $this->db->procedure($query);

            if($result){
                return true;
            }
            return false;
        }
    }

?>