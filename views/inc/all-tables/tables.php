<!-- Table Card -->
<div class="card shadow mb-4">
    
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách các bàn</h6>
    </div>
    
    <div class="card-body wrap-tables">
        <!-- Rows -->
        <div class="row" id="table-foods">
            
            <?php
                $tableFood = new TableFood();
                $tableList = $tableFood->getAllTables();

                foreach($tableList as $tableViewModel){
                    $tableFoodID = $tableViewModel->getID();
                    $tableFoodName = $tableViewModel->getName();
                    $tableFoodStatus = $tableViewModel->getStatus();
                    
                    echo "<a role='button' class='col-xl-3 col-lg-4 col-md-6 text-center text-white mb-3 wrap-table-food'>
                        <div class='table-food w-100 btn ".(($tableFoodStatus=='Trống')?"btn-success":"btn-danger")."' data-table-id='$tableFoodID'>
                            <h5>$tableFoodName</h5>
                            <p class='table-description'>$tableFoodStatus</p>
                        </div>
                    </a>";

                }
            ?>

        </div>
    </div>
</div>