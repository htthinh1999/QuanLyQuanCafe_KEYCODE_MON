<?php
    require_once '../lib/session.php';
    Session::checkSession();
    // important
	require_once '../config/config.php';
    require_once '../lib/database.php';
    require_once '../helpers/format.php';

    // models
    require_once '../models/account-view-model.php';
    require_once '../models/table-view-model.php';
    require_once '../models/category-view-model.php';
    require_once '../models/food-view-model.php';
    require_once '../models/food-in-bill-view-model.php';

    // controllers
    require_once '../controllers/table-food.php';
    require_once '../controllers/food-category.php';
    require_once '../controllers/food.php';
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
                        
                        <!-- Current Table ID -->
                        <input type="hidden" class="currentTableID" name="currentTableID" value="1" />

                        <!-- Add Food -->
                        <div class="col-lg-6 wrap-add-food mb-4 block-content">
                            <?php include 'inc/all-tables/add-food.php';?>
                        </div>

                        <!-- Checkout -->
                        <div class="col-lg-3 wrap-check-out mb-4 block-content">
                            <?php include 'inc/all-tables/check-out.php';?>
                        </div>

                        <!-- Change Table -->
                        <div class="col-lg-3 wrap-change-table mb-4 block-content">
                            <?php include 'inc/all-tables/change-table.php';?>
                        </div>

                        <!-- Tables -->
                        <div class="col-xl-7 col-lg-6 wrap-all-tables-left block-content">
                            <?php include 'inc/all-tables/tables.php';?>
                        </div>

                        <!-- Bill -->
                        <div class="col-xl-5 col-lg-6 block-content">
                            <?php include 'inc/all-tables/bill.php';?>
                        </div>

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

    <!-- All Table JavaScript -->
    <script src="../assets/js/all-tables.js"></script>

</body>

</html>