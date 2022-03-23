<?php
    require_once '../lib/session.php';
    Session::checkSession();
    // important
	require_once '../config/config.php';
    require_once '../lib/database.php';
    require_once '../helpers/format.php';

    // models
    require_once '../models/account-view-model.php';

    // controllers
    require_once '../controllers/account.php';
?>

<!DOCTYPE html>
<html lang="vi">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Thay đổi mật khẩu tài khoản quán cafe Keycode Mon">
    <meta name="author" content="Huỳnh Tấn Thịnh">

    <title>Quán cafe Keycode Mon</title>

    <link href="../assets/css/error.css" rel="stylesheet">

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

                    <!-- 403 Error Text -->
                    <div class="text-center">
                        <div class="error mx-auto" data-text="403">403</div>
                        <p class="lead text-gray-800 mb-5">Bạn đang bị chặn hoặc không có quyền truy cập</p>
                        <p class="text-gray-500 mb-0">Có vẻ như bạn đang bị chặn truy cập vào địa chỉ web, do địa chỉ đó không có dữ liệu hoặc bạn không có đủ quyền truy cập hay bị chặn bởi hosting...</p>
                        <a href="all-tables.php ">&larr; Trở về trang Danh sách các bàn</a>
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

    <!-- JavaScript-->
    <script src="../assets/js/error.js"></script>

</body>

</html>
