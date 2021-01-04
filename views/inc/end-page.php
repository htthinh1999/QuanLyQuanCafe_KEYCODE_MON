<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Checkout Modal-->
<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="Checkout Modal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Checkout Modal">Xác nhận thanh toán</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Bạn có chắc chắn muốn thanh toán ...?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Huỷ</button>
                <a class="btn btn-primary" id="btn-check-out-modal" data-dismiss="modal">Thanh toán</a>
            </div>
        </div>
    </div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="Logout Modal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Logout Modal">Xác nhận đăng xuất</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Bạn có chắc chắn muốn đăng xuất?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Huỷ</button>
                <a class="btn btn-primary" href="logout.php">Đăng xuất</a>
            </div>
        </div>
    </div>
</div>

<!-- Update Modal-->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="Update Modal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Update Modal">Xác nhận cập nhật dữ liệu</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Bạn có chắc chắn muốn cập nhật dữ liệu?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Huỷ</button>
                <a class="btn btn-primary" id="btn-update" data-dismiss="modal">Cập nhật</a>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete Modal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Delete Modal">Xác nhận xoá dữ liệu</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Bạn có chắc chắn muốn xoá dữ liệu?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Huỷ</button>
                <a class="btn btn-primary" id="btn-delete" data-dismiss="modal">Xoá</a>
            </div>
        </div>
    </div>
</div>

<!-- Reset Password Modal-->
<div class="modal fade" id="resetPasswordModal" tabindex="-1" role="dialog" aria-labelledby="Reset Password Modal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Reset Password Modal">Xác nhận đặt lại mật khẩu</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Bạn có chắc chắn muốn đặt lại mật khẩu?<br><strong>(Mật khẩu sẽ được đặt lại là 1)</strong></div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Huỷ</button>
                <a class="btn btn-primary" id="btn-reset-password" data-dismiss="modal">Xác nhận</a>
            </div>
        </div>
    </div>
</div>

<!-- Change Password Modal-->
<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="Change Password Modal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Change Password Modal">Xác nhận đổi mật khẩu</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Bạn có chắc chắn muốn đổi mật khẩu?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Huỷ</button>
                <a class="btn btn-primary" id="btn-change-password" data-dismiss="modal">Xác nhận</a>
            </div>
        </div>
    </div>
</div>

<!-- Change Password Success Modal-->
<div class="modal fade" id="changePasswordSuccessModal" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="Change Password Success Modal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Change Password Modal">Thay đổi mật khẩu thành công</h5>
            </div>
            <div class="modal-body">Thay đổi mật khẩu thành công! Bạn cần đăng nhập lại!</div>
            <div class="modal-footer">
                <a class="btn btn-primary" id="btn-change-password-success" data-dismiss="modal">Đồng ý</a>
            </div>
        </div>
    </div>
</div>