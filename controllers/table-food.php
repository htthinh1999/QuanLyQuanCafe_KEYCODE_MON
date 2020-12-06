<?php
    Session::checkSession();
?>

<?php

    class TableFood{

        private $db;
        private $fm;

        public function TableFood(){
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function getAllTables(){
            $query = "CALL USP_LoadTableList()";
            $result = $this->db->procedure($query);

            $tableList = array();
            while ($row = mysqli_fetch_array($result)){
                $table = new TableViewModel($row['id'], $row['name'], $row['status']);
                array_push($tableList, $table);
            }

            return $tableList;
        }

        public function getTableByID($tableID){
            $query = "SELECT * FROM TableFood WHERE id = $tableID LIMIT 1";
            $result = $this->db->select($query);
            if($result !== false){
                $value = $result->fetch_assoc();
                $table = new TableViewModel($value['id'], $value['name'], $value['status']);
                return $table;
            }
            
            return false;
        }

        public function getBillByTableID($tableID){
            $query = "CALL USP_GetBillByTableID($tableID)";
            $result = $this->db->procedure($query);

            $bill = array();
            while ($row = mysqli_fetch_array($result)){
                $foodInBill = new FoodInBill($row['name'], $row['count'], $row['price'], $row['totalPrice']);
                array_push($bill, $foodInBill);
            }

            return $bill;
        }
    }

?>