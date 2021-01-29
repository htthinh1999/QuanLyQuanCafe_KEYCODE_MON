SET FOREIGN_KEY_CHECKS=0;

DELETE FROM account;

INSERT INTO account VALUES("admin","21232f297a57a5a743894a0e4a801fc3","ADMIN","1","Nam","1999-09-27","Khánh Hòa");
INSERT INTO account VALUES("htthinh","202cb962ac59075b964b07152d234b70","Huỳnh Tấn Thịnh","2","Nam","1999-09-27","Khánh Hòa");
INSERT INTO account VALUES("thoathoa","202cb962ac59075b964b07152d234b70","Nguyễn Thị Kim Thoa","1","Nữ","1999-05-12","Khánh Hòa");


DELETE FROM accounttype;

INSERT INTO accounttype VALUES("1","Quản trị viên");
INSERT INTO accounttype VALUES("2","Nhân viên");


DELETE FROM bill;



DELETE FROM billinfo;



DELETE FROM food;

INSERT INTO food VALUES("1","Bánh mì thường","1","15000","Sử dụng");
INSERT INTO food VALUES("2","Bánh mì heo quay","1","15000","Sử dụng");
INSERT INTO food VALUES("3","Bánh mì ốp la","1","15000","Sử dụng");
INSERT INTO food VALUES("4","Bánh mì đặc biệt","1","25000","Sử dụng");
INSERT INTO food VALUES("5","Bò né 1","1","45000","Sử dụng");
INSERT INTO food VALUES("6","Bò né 2","1","55000","Sử dụng");
INSERT INTO food VALUES("7","Hủ tiếu","2","40000","Sử dụng");
INSERT INTO food VALUES("8","Phở giò","2","40000","Sử dụng");
INSERT INTO food VALUES("9","Phở tái","2","35000","Sử dụng");
INSERT INTO food VALUES("10","Bún bò","2","40000","Sử dụng");
INSERT INTO food VALUES("11","Cafe đen","3","15000","Sử dụng");
INSERT INTO food VALUES("12","Cafe nguyên chất","3","25000","Sử dụng");
INSERT INTO food VALUES("13","Cafe sữa","3","17000","Sử dụng");
INSERT INTO food VALUES("14","Cafe đá xay","3","25000","Sử dụng");
INSERT INTO food VALUES("15","Trà sữa thường","4","20000","Sử dụng");
INSERT INTO food VALUES("16","Sữa tươi trân châu đường đen","4","25000","Sử dụng");
INSERT INTO food VALUES("17","Trà đào","4","30000","Sử dụng");
INSERT INTO food VALUES("18","Trà sen","4","30000","Sử dụng");


DELETE FROM foodcategory;

INSERT INTO foodcategory VALUES("1","Thức ăn khô");
INSERT INTO foodcategory VALUES("2","Thức ăn nước");
INSERT INTO foodcategory VALUES("3","Cafe");
INSERT INTO foodcategory VALUES("4","Trà sữa");


DELETE FROM tablefood;

INSERT INTO tablefood VALUES("1","Bàn số 1","Trống");
INSERT INTO tablefood VALUES("2","Bàn số 2","Trống");
INSERT INTO tablefood VALUES("3","Bàn số 3","Trống");
INSERT INTO tablefood VALUES("4","Bàn số 4","Trống");
INSERT INTO tablefood VALUES("5","Bàn số 5","Trống");
INSERT INTO tablefood VALUES("6","Bàn số 6","Trống");
INSERT INTO tablefood VALUES("7","Bàn số 7","Trống");
INSERT INTO tablefood VALUES("8","Bàn số 8","Trống");
INSERT INTO tablefood VALUES("9","Bàn số 9","Trống");
INSERT INTO tablefood VALUES("10","Bàn số 10","Trống");
INSERT INTO tablefood VALUES("11","Bàn số 11","Trống");
INSERT INTO tablefood VALUES("12","Bàn số 12","Trống");
INSERT INTO tablefood VALUES("13","Bàn số 13","Trống");
INSERT INTO tablefood VALUES("14","Bàn số 14","Trống");
INSERT INTO tablefood VALUES("15","Bàn số 15","Trống");
INSERT INTO tablefood VALUES("16","Bàn số 16","Trống");
INSERT INTO tablefood VALUES("17","Bàn số 17","Trống");
INSERT INTO tablefood VALUES("18","Bàn số 18","Trống");
INSERT INTO tablefood VALUES("19","Bàn số 19","Trống");
INSERT INTO tablefood VALUES("20","Bàn số 20","Trống");




SET FOREIGN_KEY_CHECKS=1;

