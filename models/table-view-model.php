<?php

class TableViewModel{

    private $id;
    private $name;
    private $status;

    public function TableViewModel($id, $name, $status){
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
    }

    public function getID(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getStatus(){
        return $this->status;
    }

}

?>