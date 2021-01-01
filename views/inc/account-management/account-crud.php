<!-- Change Account Card -->
<div class="card shadow">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Quản lý tài khoản</h6>
    </div>

    <div class="card-body">
        <!-- Rows -->
        <div class="row">
            <?php
                $account = new Account();
                $accountList = $account->getAllAccounts();
                
            ?>

            <div class="col-12 form-group">
                <label for="account-username">Tên đăng nhập</label>
                <input id="account-username" name="account-username" class="form-control" type="text" value="<?php echo $accountList[0]->getUsername(); ?>">
            </div>
            
            <div class="col-12 form-group">
                <label for="account-display-name">Tên tài khoản</label>
                <input id="account-display-name" name="account-display-name" class="form-control" type="text" value="<?php echo $accountList[0]->getDisplayname(); ?>">
            </div>
            
            <div class="col-12 form-group">
                <label for="account-type">Loại tài khoản</label>
                <select class="form-control" id="account-type" name="account-type">
                    <?php
                        $accountTypeID = $accountList[0]->getAccountTypeID();
                        echo "
                            <option value='1' ". (($accountTypeID == 1)?"selected='selected'":"") .">1 - Quản trị viên</option>
                            <option value='2' ". (($accountTypeID == 2)?"selected='selected'":"") .">2 - Nhân viên</option>
                        ";
                    ?>
                </select>
            </div>

            <div class="col-12 form-group">
                <label for="account-gender">Giới tính</label>
                <select class="form-control" id="account-gender" name="account-gender">
                    <?php
                        $accountGender = $accountList[0]->getGender();
                        echo "
                            <option value='Nam' ". (($accountGender == 'Nam')?"selected='selected'":"") .">Nam</option>
                            <option value='Nữ' ". (($accountGender == 'Nữ')?"selected='selected'":"") .">Nữ</option>
                        ";
                    ?>
                </select>
            </div>

            <div class="col-12 form-group">
                <label for="account-birthday">Ngày sinh</label>
                <input id="account-birthday" name="account-birthday" class="form-control" type="date" value="<?php echo $accountList[0]->getBirthday(); ?>">
            </div>

            <div class="col-12 form-group">
                <label for="account-address">Địa chỉ</label>
                <input id="account-address" name="account-address" class="form-control" type="text" value="<?php echo $accountList[0]->getAddress(); ?>">
            </div>
        </div>
        
        <!-- Rows -->
        <div class="row">
            <div class="col-4 form-group">
                <button class="btn btn-primary w-100 h-100" id="btn-add">
                    <span class="text-uppercase font-weight-bold">Thêm</span>
                </button>
            </div>
            <div class="col-4 form-group">
                <button class="btn btn-primary w-100 h-100" id="btn-open-update-modal"  data-toggle="modal" data-target="#updateModal">
                    <span class="text-uppercase font-weight-bold">Sửa</span>
                </button>
            </div>
            <div class="col-4 form-group">
                <button class="btn btn-primary w-100 h-100" id="btn-open-delete-modal"  data-toggle="modal" data-target="#deleteModal">
                    <span class="text-uppercase font-weight-bold">Xoá</span>
                </button>
            </div>
            <div class="col-12 form-group">
                <button class="btn btn-primary w-100 h-100" id="btn-reset-password-modal"  data-toggle="modal" data-target="#resetPasswordModal">
                    <span class="text-uppercase font-weight-bold">Đặt lại mật khẩu</span>
                </button>
            </div>
        </div>

    </div>
</div>