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
    <meta name="description" content="Thông tin trang quán cafe Keycode Mon">
    <meta name="author" content="Huỳnh Tấn Thịnh">

    <title>Thông tin trang | Quán cafe Keycode Mon</title>

    <link href="../assets/css/information.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include 'inc/sidebar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include 'inc/topbar.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Title -->
                    <div class="text-center">
                        <div class="h1 mb-0 text-gray-800" data-text="Quản lý quán cafe KEYCODE MON">
                            <b>Quản lý quán cafe KEYCODE MON</b> <i class="fa fa-coffee rotate-n-15" aria-hidden="true"></i>
                        </div>
                        <p class="lead text-gray-800 mb-5">Trang web hỗ trợ quản lý quán cafe sân vườn</p>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <p class="h5 mb-2">
                                Các chức năng trang web
                            </p>
                            <ul>
                                <li>Đối với nhân viên</li>
                                    <ul>
                                        <li>Đăng nhập / Đăng xuất</li>
                                        <li>Đổi thông tin tài khoản</li>
                                        <li>Thêm món vào bàn</li>
                                        <li>Chuyển bàn</li>
                                        <li>Thanh toán</li>
                                        <li>Hỗ trợ giảm giá</li>
                                        <li>Sao lưu dữ liệu</li>
                                        <li>Phục hồi dữ liệu</li>
                                    </ul>
                                <li>Đối với quản trị</li>
                                    <ul>
                                        <li>Các chức năng của nhân viên</li>
                                        <li>Quản lý tài khoản</li>
                                        <li>Quản lý bàn</li>
                                        <li>Quản lý món</li>
                                        <li>Quản lý danh mục</li>
                                        <li>Thống kê doanh thu</li>
                                    </ul>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <p class="h5 mb-2">
                                Công nghệ sử dụng
                            </p>
                            <ul>
                                <li>PHP</li>
                                <li>MySQL</li>
                                <li>HTML - CSS - JavaScript - JQuery</li>
                                <li>Bootstrap</li>
                                <li>AJAX</li>
                                <li>Font Awesome Icons</li>
                                <li>Datatables</li>
                                <li>Toastr</li>
                                <li>Chart</li>
                            </ul>
                        </div>
                        
                        <div class="col-md-4">
                            <p class="h5 mb-2">
                                Nguồn tham khảo
                            </p>
                            <ul>
                                <li>Youtube: <a href="https://www.youtube.com/playlist?list=PL33lvabfss1xnPhBJHjM0A8TEBBcGCTsf">Quản lý quán Cafe với C# Winform- HowKteam</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

        <?php 
            include 'inc/footer.php'; 
        ?>

    </div>
    <!-- End of Page Wrapper -->

    <?php 
        include 'inc/end-page.php'; 
    ?>

    <!-- Main JavaScript -->
    <script src="../assets/js/backup-restore.js"></script>
</body>

</html>