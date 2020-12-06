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

    }

?>