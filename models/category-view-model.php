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

        public function getJson(){
            return [
                'id' => $this->id,
                'name' => $this->name
            ];
        }

    }

?>