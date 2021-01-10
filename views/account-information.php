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
    <meta name="description" content="Thông tin tài khoản quán cafe Keycode Mon">
    <meta name="author" content="Huỳnh Tấn Thịnh">

    <title>Thông tin tài khoản | Quán cafe Keycode Mon</title>

    <link href="../assets/css/management.css" rel="stylesheet">

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
                        <h1 class="h3 mb-0 text-gray-800">Thông tin tài khoản</h1>
                    </div>

                    <!-- Content -->
                    <div class="row">
                        <!-- Change Password Card -->
                        <div class="col-xl-5 col-lg-6">
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Thông tin tài khoản</h6>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="username">Tên tài khoản</label>
                                        <input id="username" name="username" class="form-control" type="text" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="display-name">Tên hiển thị</label>
                                        <input id="display-name" name="display-name" class="form-control" type="text" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="type-name">Thuộc loại</label>
                                        <input id="type-name" name="type-name" class="form-control" type="text" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Giới tính</label>
                                        <select id="gender" name="gender" class="form-control" disabled>
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="birthday">Ngày sinh</label>
                                        <input id="birthday" name="birthday" class="form-control" type="date" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Địa chỉ</label>
                                        <input id="address" name="address" class="form-control" type="text" readonly>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary w-100 h-100" id="btn-change-information">
                                            <span class="text-uppercase font-weight-bold">Thay đổi thông tin</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
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
    <script src="../assets/js/account-information.js"></script>

</body>

</html>