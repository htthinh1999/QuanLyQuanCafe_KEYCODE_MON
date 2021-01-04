<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-fw fa-coffee logo-size"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Quán cafe KEYCODE MON</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Trang chủ</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Quản lý chung
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="all-tables.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Danh sách các bàn</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Only admin can access -->
    <?php
        $account = unserialize(serialize(Session::get('account')));
        if($account->getAccountTypeName() == 'Quản trị viên'){
    ?>

    <!-- Heading -->
    <div class="sidebar-heading">
        Quản lý
    </div>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-user-cog"></i>
            <span>Quản lý</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Quản lý:</h6>
                <a class="collapse-item" href="revenue-management.php">Doanh thu</a>
                <a class="collapse-item" href="food-management.php">Món</a>
                <a class="collapse-item" href="category-management.php">Danh mục</a>
                <a class="collapse-item" href="table-management.php">Bàn</a>
                <a class="collapse-item" href="account-management.php">Tài khoản</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <?php
        }
    ?>

    <!-- Heading -->
    <div class="sidebar-heading">
        Cài đặt
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-user"></i>
            <span>Tài khoản</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tài khoản:</h6>
                <a class="collapse-item" href="change-password.php">Thay đổi mật khẩu</a>
                <a class="collapse-item" href="account-information.php">Thông tin tài khoản</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Cài đặt khác</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Cài đặt khác:</h6>
                <a class="collapse-item" href="theme.php">Thay đổi màu sắc</a>
                <a class="collapse-item" href="backup.php">Sao lưu dữ liệu</a>
                <a class="collapse-item" href="restore.php">Phục hồi dữ liệu</a>
                <a class="collapse-item" href="information.php">Thông tin trang</a>
            </div>
        </div>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->