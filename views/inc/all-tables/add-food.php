<!-- Add Food Card -->
<div class="card shadow">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Thêm món</h6>
    </div>

    <div class="card-body">
        <!-- Rows -->
        <div class="row">
            <div class="row w-100 mx-auto">
                <div class="col-md-6 form-group">
                    <label for="category">Loại món</label>
                    <select class="form-control" id="category" name="category">

                        <?php
                            $foodCategory = new FoodCategory();
                            $categoryList = $foodCategory->getAllCategories();

                            foreach($categoryList as $categoryViewModel){
                                $categoryID = $categoryViewModel->getID();
                                $categoryName = $categoryViewModel->getName();
                                
                                echo "<option value='$categoryID'>$categoryName</option>";
                            }
                        ?>

                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label for="food">Tên món</label>
                    <select class="form-control" id="food" name="food">

                        <?php
                            // Load foods follow first category id
                            $food = new Food();
                            $foodList = $food->getFoodsByCategoryID(1);

                            foreach($foodList as $foodViewModel){
                                $foodID = $foodViewModel->getID();
                                $foodName = $foodViewModel->getName();
                                
                                echo "<option value='$foodID'>".$foodName."</option>";
                            }
                        ?>
                        
                    </select>
                </div>
            </div>
        </div>
        
        <!-- Rows -->
        <div class="row">
            <div class="col-md-6 form-group">
                <button class="btn btn-primary w-100 h-100" id="btn-add-food">
                    <span class="text-uppercase font-weight-bold mt-auto mb-auto">Thêm món</span>
                </button>
            </div>

            <div class="col-md-6 form-group">
                <label for="count">Số lượng</label>
                <input id="count" name="count" class="form-control" type="number" min="-10" max="10" step="1" value="1">
            </div>
        </div>

    </div>
</div>