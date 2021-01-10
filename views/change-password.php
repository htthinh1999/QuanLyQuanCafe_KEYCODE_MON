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

    <title>Thay đổi mật khẩu | Quán cafe Keycode Mon</title>

    <link href="../assets/css/change-password.css" rel="stylesheet">

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
                        <h1 class="h3 mb-0 text-gray-800">Thay đổi mật khẩu</h1>
                    </div>

                    <!-- Content -->
                    <div class="row">
                        <!-- Change Password Card -->
                        <div class="col-xl-5 col-lg-6">
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Thay đổi mật khẩu</h6>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="current-password">Mật khẩu hiện tại</label>
                                        <input id="current-password" name="current-password" class="form-control" type="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="new-password">Mật khẩu mới</label>
                                        <input id="new-password" name="new-password" class="form-control" type="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm-new-password">Nhập lại mật khẩu mới</label>
                                        <input id="confirm-new-password" name="confirm-new-password" class="form-control" type="password">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary w-100 h-100" id="btn-change-password-modal" data-toggle="modal" data-target="#changePasswordModal">
                                            <span class="text-uppercase font-weight-bold">Thay đổi mật khẩu</span>
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
    <script src="../assets/js/change-password.js"></script>

</body>

</html>