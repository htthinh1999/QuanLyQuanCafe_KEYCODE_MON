<!-- Change Table Card -->
<div class="card shadow h-100">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Chuyển bàn</h6>
    </div>

    <div class="card-body">
        <!-- Rows -->
        <div class="row">
            <div class="col-12 form-group">
                <label for="from-table" id="change-table-description">

                    <?php
                        // get current table
                        $currentTableID = 1;
                        $tableFood = new TableFood();
                        $table = $tableFood->getTableByID($currentTableID);
                        echo "Từ '".$table->getName()."'";
                    ?>
                        
                </label>
                <label for="to-table">đến</label>
                <select class="form-control" id="to-table" name="to-table">

                    <?php
                        // get all table except current table
                        $tableFood = new TableFood();
                        $tableList = $tableFood->getAllTables();

                        foreach($tableList as $tableViewModel){
                            if($tableViewModel->getID() != $GLOBALS["currentTableID"]){
                                $tableName = $tableViewModel->getName();
                                echo "<option>$tableName</option>";
                            }
                        }
                    ?>

                </select>
            </div>
        </div>
        
        <!-- Rows -->
        <div class="row">
            <div class="col-12 form-group">
                <button type="submit" class="btn btn-primary w-100 h-100">
                    <span class="text-uppercase font-weight-bold">Chuyển bàn</span>
                </button>
            </div>
        </div>

    </div>
</div>