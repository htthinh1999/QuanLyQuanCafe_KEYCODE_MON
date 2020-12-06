<?php

    class FoodInBill{

        private $name;
        private $count;
        private $price;
        private $totalPrice;

        public function FoodInBill($name, $count, $price, $totalPrice){
            $this->name = $name;
            $this->count = $count;
            $this->price = $price;
            $this->totalPrice = $totalPrice;
        }

        public function getName(){
            return $this->name;
        }

        public function getCount(){
            return $this->count;
        }

        public function getPrice(){
            return $this->price;
        }

        public function getTotalPrice(){
            return $this->totalPrice;
        }

    }

?>