<!-- Change Table Card -->
<div class="card shadow">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Quản lý bàn</h6>
    </div>

    <div class="card-body">
        <!-- Rows -->
        <div class="row">
        
            <?php
                $tableFood = new TableFood();
                $tableList = $tableFood->getAllTables();
                
            ?>

            <div class="col-12 form-group">
                <label for="table-id">Mã bàn</label>
                <input id="table-id" name="table-id" class="form-control" type="number" readonly value="<?php echo $tableList[0]->getID(); ?>">
            </div>
            
            <div class="col-12 form-group">
                <label for="table-name">Tên bàn</label>
                <input id="table-name" name="table-name" class="form-control" type="text" value="<?php echo $tableList[0]->getName(); ?>">
            </div>
            
            <div class="col-12 form-group">
                <label for="table-status">Trạng thái</label>
                <input id="table-status" name="table-status" class="form-control" type="text" readonly value="<?php echo $tableList[0]->getStatus(); ?>">
            </div>
        </div>
        
        <!-- Rows -->
        <div class="row">
            <div class="col-4 form-group">
                <button class="btn btn-primary w-100 h-100" id="btn-add">
                    <span class="text-uppercase font-weight-bold">Thêm</span>
                </button>
            </div>
            <div class="col-4 form-group">
                <button class="btn btn-primary w-100 h-100" id="btn-open-update-modal"  data-toggle="modal" data-target="#updateModal">
                    <span class="text-uppercase font-weight-bold">Sửa</span>
                </button>
            </div>
            <div class="col-4 form-group">
                <button class="btn btn-primary w-100 h-100" id="btn-open-delete-modal"  data-toggle="modal" data-target="#deleteModal">
                    <span class="text-uppercase font-weight-bold">Xoá</span>
                </button>
            </div>
        </div>

    </div>
</div>