<?php
    Session::checkSession();
?>

<?php

    class Revenue{
        private $db;
        private $fm;

        public function Revenue(){
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function getAvgMonthRevenue(){
            $query = "CALL USP_GetAvgMonthRevenue()";
            $result = $this->db->procedure($query);

            if ($row = mysqli_fetch_array($result)){
                return $row['AVG Month Revenue'];
            }
            return 0;
        }

        public function getCurrentYearRevenue(){
            $query = "CALL USP_GetCurrentYearRevenue()";
            $result = $this->db->procedure($query);

            if ($row = mysqli_fetch_array($result)){
                return $row['Current Year Revenue'];
            }
            return 0;
        }

        public function getAllMonthRevenues(){
            $query = "CALL USP_GetAllMonthRevenues()";
            $result = $this->db->procedure($query);

            $allMonthRevenues = array();
            while ($row = mysqli_fetch_array($result)){
                $monthRevenue['Month'] = $row['Month'];
                $monthRevenue['Revenue'] = $row['Month Revenue'];
                
                array_push($allMonthRevenues, $monthRevenue);
            }

            return $allMonthRevenues;
        }

        public function getAllSourceRevenues(){
            $query = "CALL USP_GetAllSourceRevenues()";
            $result = $this->db->procedure($query);

            $allMonthRevenues = array();
            while ($row = mysqli_fetch_array($result)){
                $monthRevenue['Food'] = $row['Food'];
                $monthRevenue['Percent'] = $row['Percent'];
                
                array_push($allMonthRevenues, $monthRevenue);
            }

            return $allMonthRevenues;
        }

        public function getAllBill(){
            $query = "CALL USP_GetAllBill()";
            $result = $this->db->procedure($query);

            $allBill = array();
            while ($row = mysqli_fetch_array($result)){
                $bill['timeInAndTableName'] = $row['timeInAndTableName'];
                $bill['foodName'] = $row['foodName'];
                $bill['categoryName'] = $row['categoryName'];
                $bill['price'] = $row['price'];
                $bill['count'] = $row['count'];
                $bill['discount'] = $row['discount'];
                $bill['totalPrice'] = $row['totalPrice'];
                
                array_push($allBill, $bill);
            }

            return $allBill;
        }

    }

?>