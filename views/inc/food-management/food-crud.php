<!-- Change Table Card -->
<div class="card shadow">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Quản lý món</h6>
    </div>

    <div class="card-body">
        <!-- Rows -->
        <div class="row">
        
            <?php
                $food = new Food();
                $foodList = $food->getAllFoods();
            ?>

            <div class="col-12 form-group">
                <label for="food-id">Mã món</label>
                <input id="food-id" name="food-id" class="form-control" type="number" readonly value="<?php echo $foodList[0]->getID(); ?>">
            </div>
            
            <div class="col-12 form-group">
                <label for="food-name">Tên món</label>
                <input id="food-name" name="food-name" class="form-control" type="text" value="<?php echo $foodList[0]->getName(); ?>">
            </div>
            
            <div class="col-12 form-group">
                <label for="category-id">Mã danh mục</label>
                <select class="form-control" id="category-id" name="category-id">
                        <?php
                            $foodCategory = new FoodCategory();
                            $categoryList = $foodCategory->getAllCategories();

                            foreach($categoryList as $categoryViewModel){
                                $categoryID = $categoryViewModel->getID();
                                $categoryName = $categoryViewModel->getName();
                                
                                echo "<option value='$categoryID'>$categoryID - $categoryName</option>";
                            }
                        ?>
                </select>
            </div>

            <div class="col-12 form-group">
                <label for="food-price">Giá</label>
                <input id="food-price" name="food-price" class="form-control" type="text" value="<?php echo $foodList[0]->getPrice(); ?>">
            </div>

            <div class="col-12 form-group">
                <label for="food-status">Trạng thái</label>
                <input id="food-status" name="food-status" class="form-control" type="text" readonly value="<?php echo $foodList[0]->getStatus(); ?>">
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