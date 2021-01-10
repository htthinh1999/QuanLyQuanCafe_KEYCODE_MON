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

<?php

    if(isset($_FILES["file-upload"]) && $_FILES["file-upload"]['error'] == 0){
        $db = new Database();
        $result = $db->restoreData($_FILES["file-upload"]["tmp_name"]);
    }



?>


<!DOCTYPE html>
<html lang="vi">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sao lưu & Phục hồi dữ liệu quán cafe Keycode Mon">
    <meta name="author" content="Huỳnh Tấn Thịnh">

    <title>Sao lưu & Phục hồi dữ liệu | Quán cafe Keycode Mon</title>

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
                        <h1 class="h3 mb-0 text-gray-800">Sao lưu & Phục hồi dữ liệu</h1>
                    </div>

                    <!-- Content -->
                    <div class="row">
                        <!-- Change Password Card -->
                        <div class="col-xl-5 col-lg-6">
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Sao lưu & Phục hồi dữ liệu</h6>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="btn-backup-data">Sao lưu</label>
                                        <button class="btn btn-primary w-100 h-100" id="btn-backup-data">
                                            <span class="text-uppercase font-weight-bold"><i class="fa fa-file-download"></i> Sao lưu dữ liệu</span>
                                        </button>
                                    </div>

                                    <form class="form-group" method="post" enctype="multipart/form-data">
                                        <label for="file-upload">Phục hồi</label>
                                        <div class="custom-file">
                                            <label id="file-upload-label" for="file-upload" class="custom-file-label">Chọn tệp...</label>
                                            <input type="file" class="custom-file-input" id="file-upload" name="file-upload" class="form-control">    
                                        </div>
                                        <button class="btn btn-primary w-100 h-100 mt-3" id="btn-restore" type="submit">
                                            <span class="text-uppercase font-weight-bold"><i class="fa fa-file-upload"></i> Phục hồi dữ liệu</span>
                                        </button>
                                    </form>

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
    <script src="../assets/js/backup-restore.js"></script>

    <?php
        if(isset($_FILES["file-upload"])){
            if($_FILES["file-upload"]['error'] != 0){
                echo "<script type='text/javascript'>toastr.error('Dữ liệu không đúng cấu trúc!')</script>";
            }else{
                if($result == 1){
                    echo "<script type='text/javascript'>toastr.success('Phục hồi dữ liệu thành công!')</script>";
                }else{
                    echo "<script type='text/javascript'>toastr.error('Phục hồi dữ liệu không thành công!')</script>";
                }
            }
        }
    ?>

</body>

</html>