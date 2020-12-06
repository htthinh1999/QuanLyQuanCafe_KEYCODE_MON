<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" id='bill-title'>
        
            <?php
                $currentTableID = 1;
                $tableFood = new TableFood();
                $tableName = $tableFood->getTableByID($currentTableID)->getName();

                echo "Hoá đơn của '$tableName'";
            ?>
            
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Tổng tiền</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Tên</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Tổng tiền</th>
                    </tr>
                </tfoot>
                <tbody>
                
                    <?php
                        $tableFood = new TableFood();
                        $bill = $tableFood->getBillByTableID($GLOBALS["currentTableID"]);

                        foreach($bill as $foodInBillViewModel){
                            $foodInBillName = $foodInBillViewModel->getName();
                            $foodInBillCount = $foodInBillViewModel->getCount();
                            $foodInBillPrice = $foodInBillViewModel->getPrice();
                            $foodInBillTotalPrice = $foodInBillViewModel->getTotalPrice();
                            
                            echo "<tr>
                                <td>".$foodInBillName."</td>
                                <td>".$foodInBillCount."</td>
                                <td>".$foodInBillPrice."</td>
                                <td>".$foodInBillTotalPrice."</td>
                                </tr>";
                        }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>