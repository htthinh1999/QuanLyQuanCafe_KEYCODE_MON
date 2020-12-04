<?php

class TableViewModel{

    private $name;
    private $status;

    public function TableViewModel($name, $status){
        $this->name = $name;
        $this->status = $status;
    }

    public function getName(){
        return $this->name;
    }

    public function getStatus(){
        return $this->status;
    }

}

?>