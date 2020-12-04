<?php

    class FoodViewModel{
        private $id;
        private $name;
        private $categoryID;
        private $categoryName;
        private $price;
        private $status;

        public function FoodViewModel($id, $name, $categoryID, $categoryName, $price, $status){
            $this->id = $id;
            $this->name = $name;
            $this->categoryID = $categoryID;
            $this->categoryName = $categoryName;
            $this->price = $price;
            $this->status = $status;
        }

        public function getID(){
            return $this->id;
        }

        public function getName(){
            return $this->name;
        }

        public function getCategoryID(){
            return $this->categoryID;
        }

        public function getCategoryName(){
            return $this->categoryName;
        }

        public function getPrice(){
            return $this->price;
        }

        public function getStatus(){
            return $this->status;
        }

    }

?>