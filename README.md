# Quản lý quán cafe KEYCODE MON :coffee:
## Giới thiệu đề tài
Website "Quản lý quán cafe KEYCODE MON" là trang web hỗ trợ quản lý cho quán cafe sân vườn với các chức năng như:
- Nhân viên
	+ Đăng nhập / Đăng xuất
	+ Đổi thông tin tài khoản
	+ Thêm món vào bàn
	+ Chuyển bàn
	+ Thanh toán
	+ Hỗ trợ giảm giá
	+ Sao lưu dữ liệu
	+ Phục hồi dữ liệu
- Quản trị
	+ Các chức năng của nhân viên
	+ Quản lý tài khoản
	+ Quản lý bàn
	+ Quản lý món
	+ Quản lý danh mục
	+ Thống kê doanh thu
## Công nghệ sử dụng
- PHP
- MySQL
- HTML - CSS - JavaScript - JQuery
- Bootstrap
- Ajax
- Font Awesome Icons
- Datatables
- Toastr
- Chart
## Thông tin liên hệ
- Facebook: [fb.com/htthinh1999](https://fb.com/htthinh1999/)
- Gmail: htthinh1999@gmail.com
## Nguồn tham khảo
- Youtube: [Quản lý quán Cafe với C# Winform- HowKteam](https://www.youtube.com/playlist?list=PL33lvabfss1xnPhBJHjM0A8TEBBcGCTsf)
## Hướng dẫn cài đặt
### Cài đặt XAMPP
Trước tiên, ta vào trang web https://www.apachefriends.org/download.html chọn **Download (64 bit)** phiên bản mới nhất cho Windows (Ở đây là phiên bản **8.0.1**)
<p align="center">
  <img alt="Download XAMPP" src="/images/download-xampp.jpg">
</p>

Sau khi tải xuống hoàn tất, ta chạy tệp vừa tải lên, sau đó nhấn nút **Next >** cho đến khi cài đặt hoàn tất.
Lúc này, **XAMPP Control Panel** sẽ được bật lên. Ta sẽ chọn **Start** vào 2 dịch vụ quan trọng là **Apache** và **MySQL**.
<p align="center">
  <img alt="XAMPP Control Panel" src="/images/xampp-control-panel.jpg">
</p>

### Cài đặt cơ sở dữ liệu
Ta chọn vào nút **Admin** của dịch vụ **MySQL** để vào được trang **phpMyAdmin**, sau đó nhấn vào tab **SQL** bên phải tab **Databases**.
<p align="center">
  <img alt="PHP MyAdmin" src="/images/phpmyadmin.jpg">
</p>

Lúc này ta mở tệp **database.sql** bằng **Notepad**, ta **copy hết tất cả** và **patse** vào ô **SQL query** trong **phpMyAdmin**.
<p align="center">
  <img alt="SQL Copy Patse" src="/images/sql-copy-patse.jpg">
</p>

Sau khi copy patse hoàn tất, ta nhấn vào nút **Go** để thực thi các câu lệnh SQL. Sau khi thực thi hoàn tất, màn hình hiển thị **"# MySQL returned an empty result set (i.e. zero rows)"** là ta đã cài đặt cơ sở dữ liệu hoàn tất.
### Cài đặt code
Ta vào địa chỉ https://github.com/htthinh1999/QuanLyQuanCafe_KEYCODE_MON và nhấn nút **Code** > **Download ZIP**.
<p align="center">
  <img alt="Download Code" src="/images/download-code.jpg">
</p>

Sau khi quá trình tải xuống hoàn tất, giải nén tệp đã tải được thư mục **QuanLyQuanCafe_KEYCODE_MON-main**, sau đó sửa tên thư mục thành **QLQuanCafe_KEYCODE_MON**. Cuối cùng, ta copy thư mục vào đường dẫn **"C:/xampp/htdocs"**.
<p align="center">
  <img alt="htdocs Folder" src="/images/htdocs-folder.jpg">
</p>

### Khởi chạy trang web
Ta vào địa chỉ http://localhost:8080/QLQuanCafe_KEYCODE_MON/views/login.php và đăng nhập với tên đăng nhập **admin** và mật khẩu là **admin**. Lúc này ta đã có thể sử dụng được trang web **Quản lý quán cafe KEYCODE MON**.

## Một số hình ảnh trang web
<p align="center">
  <img alt="Login" src="/images/login.jpg">
  <label>Trang "Đăng nhập"</label>
</p>

<p align="center">
  <img alt="Revenue Management" src="/images/revenue-management.jpg">
  <label>Trang "Quản lý doanh thu"</label>
</p>

<p align="center">
  <img alt="Food Management" src="/images/food-management.jpg">
  <label>Trang "Quản lý món"</label>
</p>

<p align="center">
  <img alt="Category Management" src="/images/category-management.jpg">
  <label>Trang "Quản lý danh mục"</label>
</p>

<p align="center">
  <img alt="Table Management" src="/images/table-management.jpg">
  <label>Trang "Quản lý bàn"</label>
</p>

<p align="center">
  <img alt="Account Management" src="/images/account-management.jpg">
  <label>Trang "Quản lý tài khoản"</label>
</p>

<p align="center">
  <img alt="Change Password" src="/images/change-password.jpg">
  <label>Trang "Thay đổi mật khẩu"</label>
</p>

<p align="center">
  <img alt="Change Account Info" src="/images/change-account-info.jpg">
  <label>Trang "Thông tin tài khoản"</label>
</p>

<p align="center">
  <img alt="Backup Restore" src="/images/backup-restore.jpg">
  <label>Trang "Sao lưu và phục hồi dữ liệu"</label>
</p>

<p align="center">
  <img alt="htdocs Folder" src="/images/web-information.jpg">
  <label>Trang "Thông tin trang web"</label>
</p>