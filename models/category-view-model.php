<?php

    class CategoryViewModel{
        private $id;
        private $name;

        public function CategoryViewModel($id, $name){
            $this->id = $id;
            $this->name = $name;
        }

        public function getID(){
            return $this->id;
        }

        public function getName(){
            return $this->name;
        }

    }

?>