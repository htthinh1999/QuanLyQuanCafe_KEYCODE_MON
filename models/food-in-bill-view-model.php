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

        public function getJson(){
            return [
                'food_name' => $this->name,
                'food_count' => $this->count,
                'food_price' => $this->price,
                'total_price' => $this->totalPrice,
            ];
        }

    }

?>