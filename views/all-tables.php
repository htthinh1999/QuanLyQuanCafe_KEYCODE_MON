<?php
    include '../lib/session.php';
    Session::checkSession();
    include '../models/account-view-model.php';
    include '../controllers/table-food.php';
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

                        <!-- Tables -->
                        <div class="col-md-8 wrap-all-tables-left">
                            
                            <!-- Rows -->
                            <div class="row wrap-tables shadow bg-white">
                                
                                <?php
                                    $tableFood = new TableFood();
                                    $tableList = $tableFood->getAllTables();

                                    foreach($tableList as $tableViewModel){
                                        $tableName = $tableViewModel->getName();
                                        $tableStatus = $tableViewModel->getStatus();
                                        
                                        echo "<div class='col-xl-3 col-lg-4 col-md-6 text-center text-white mb-4'>
                                            <div class='table-food ".(($tableStatus=='Trống')?"bg-success":"bg-danger")."'>
                                                <h5>Bàn số ". $tableName ."</h5>
                                                <p class='table-description'>". $tableStatus ."</p>
                                            </div>
                                        </div>";
                                    }
                                ?>

                            </div>
                            
                        </div>
                        
                        <!-- Function -->
                        <div class="col-md-4">
                        
                            <!-- Rows -->
                            <div class="row wrap-functions shadow bg-white">
                                <form class="row w-100 mx-auto">
                                    <div class="col-md-6 form-group">
                                        <label for="category">Loại món</label>
                                        <select class="form-control" id="category">
                                            <option>Thức ăn</option>
                                            <option>Thức uống</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="category">Tên món</label>
                                        <select class="form-control" id="category">
                                            <option>Caffe đen</option>
                                            <option>Caffe sữa</option>
                                            <option>Bánh mì</option>
                                            <option>Bánh mì đặc biệt</option>
                                            <option>Bò né</option>
                                        </select>
                                    </div>
                                </form>
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