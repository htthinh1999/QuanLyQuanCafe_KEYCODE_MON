<?php
    Session::checkSession();
    include '../lib/database.php';
    include '../helpers/format.php';
    include '../models/table-view-model.php';
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
                $table = new TableViewModel($row['name'], $row['status']);
                array_push($tableList, $table);
            }

            return $tableList;
        }
    }

?>