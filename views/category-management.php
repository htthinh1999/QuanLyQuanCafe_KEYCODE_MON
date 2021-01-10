<?php
    require_once '../lib/session.php';
    Session::checkSession();
    // important
	require_once '../config/config.php';
    require_once '../lib/database.php';
    require_once '../helpers/format.php';

    // models
    require_once '../models/account-view-model.php';
    require_once '../models/category-view-model.php';

    // controllers
    require_once '../controllers/food-category.php';
?>

<!DOCTYPE html>
<html lang="vi">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Quản lý danh mục quán cafe Keycode Mon">
    <meta name="author" content="Huỳnh Tấn Thịnh">

    <title>Quản lý danh mục | Quán cafe Keycode Mon</title>

    <link href="../assets/css/management.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Spinner Loading Page -->
    <div id="loading">
        <div class="spinner spinner-grow text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- End Spinner Loading Page -->

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
                        <h1 class="h3 mb-0 text-gray-800">Quản lý danh mục</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Create, Update, Delete Food Category-->
                        <div class="col-lg-4 mb-4">
                            <?php include 'inc/category-management/category-crud.php';?>
                        </div>

                        <!-- Food Category Data-->
                        <div class="col-lg-8 mb-4">
                            <?php include 'inc/category-management/category-data.php';?>
                        </div>

                    </div>
                </div>

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

    <!-- Main JavaScript -->
    <script src="../assets/js/category-management.js"></script>

</body>

</html>