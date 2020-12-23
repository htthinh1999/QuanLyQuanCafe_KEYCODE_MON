<!-- Change Table Card -->
<div class="card shadow">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Quản lý danh mục</h6>
    </div>

    <div class="card-body">
        <!-- Rows -->
        <div class="row">
        
            <?php
                $foodCategory = new FoodCategory();
                $categoryList = $foodCategory->getAllCategories();
                
            ?>

            <div class="col-12 form-group">
                <label for="category-id">Mã danh mục</label>
                <input id="category-id" name="category-id" class="form-control" type="number" readonly value="<?php echo $categoryList[0]->getID(); ?>">
            </div>
            
            <div class="col-12 form-group">
                <label for="category-name">Tên danh mục</label>
                <input id="category-name" name="category-name" class="form-control" type="text" value="<?php echo $categoryList[0]->getName(); ?>">
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