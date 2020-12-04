<?php
    include '../lib/session.php';
    Session::checkSession();
    include '../models/account-view-model.php';
    include '../controllers/table-food.php';
    include '../controllers/food-category.php';
    include '../controllers/food.php';
?>

<!DOCTYPE html>
<html lang="vi">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Danh sách các bàn quán cafe Keycode Mon">
    <meta name="author" content="Huỳnh Tấn Thịnh">

    <title>Danh sách các bàn | Quán cafe Keycode Mon</title>

    <link href="../assets/css/all-tables.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
            include 'inc/sidebar.php';
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                
                <?php
                    include 'inc/topbar.php';
                ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Danh sách các bàn</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Function -->
                        <div class="col-12 wrap-functions mb-4">
                            
                            <!-- Function Card -->
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Chức năng</h6>
                                </div>

                                <div class="card-body">
                                    <!-- Rows -->
                                    <div class="row">
                                        <form class="row w-100 mx-auto">
                                            <div class="col-md-6 form-group">
                                                <label for="category">Loại món</label>
                                                <select class="form-control" id="category">

                                                    <?php
                                                        $foodCategory = new FoodCategory();
                                                        $categoryList = $foodCategory->getAllCategories();

                                                        foreach($categoryList as $categoryViewModel){
                                                            $categoryName = $categoryViewModel->getName();
                                                            
                                                            echo "<option>".$categoryName."</option>";
                                                        }
                                                    ?>

                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="food">Tên món</label>
                                                <select class="form-control" id="food">

                                                    <?php
                                                        $food = new Food();
                                                        $foodList = $food->getAllFoods();

                                                        foreach($foodList as $foodViewModel){
                                                            $foodName = $foodViewModel->getName();
                                                            
                                                            echo "<option>".$foodName."</option>";
                                                        }
                                                    ?>
                                                    
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <!-- Rows -->
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <button class="btn btn-primary btn-icon-split w-100 h-100">
                                                <span class="text-uppercase font-weight-bold mt-auto mb-auto">Thêm món</span>
                                            </button>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="count">Số lượng</label>
                                            <input id="count" class="form-control" type="number" min="-10" max="10" step="1" value="1">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Tables -->
                        <div class="col-xl-7 col-lg-6 wrap-all-tables-left">
                            <!-- Table Card -->
                            <div class="card shadow">
                                
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Danh sách các bàn</h6>
                                </div>

                                <div class="card-body wrap-tables" id="table-foods">
                                    <!-- Rows -->
                                    <div class="row">
                                        
                                        <?php
                                            $tableFood = new TableFood();
                                            $tableList = $tableFood->getAllTables();

                                            foreach($tableList as $tableViewModel){
                                                $tableName = $tableViewModel->getName();
                                                $tableStatus = $tableViewModel->getStatus();
                                                
                                                echo "<a href='?tableID=".$tableViewModel->getID()."#table-foods' class='col-xl-3 col-lg-4 col-md-6 text-center text-white mb-3 wrap-table-food'>
                                                    <div class='table-food ".(($tableStatus=='Trống')?"bg-success":"bg-danger")."'>
                                                        <h5>". $tableName ."</h5>
                                                        <p class='table-description'>". $tableStatus ."</p>
                                                    </div>
                                                </a>";
                                            }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bill -->
                        <div class="col-xl-5 col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                        <?php
                                            $tableID = 1;
                                            if(isset($_GET["tableID"])){
                                                $tableID = $_GET["tableID"];
                                            }
                                            $tableFood = new TableFood();
                                            $table = $tableFood->getTableByID($tableID);
                                            if($table!==false){
                                                $tableName = $table->getName();
                                                echo "Hoá đơn của '".$tableName."'";
                                            }
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
                                                    $bill = $tableFood->getBillByTableID($tableID);

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
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php
                include 'inc/footer.php';
            ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php
        include 'inc/end-page.php';
    ?>

</body>

</html>