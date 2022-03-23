SET FOREIGN_KEY_CHECKS=0;

DELETE FROM Account;

INSERT INTO Account VALUES("admin","21232f297a57a5a743894a0e4a801fc3","ADMIN","1","Nam","1999-09-27","Khánh Hòa");
INSERT INTO Account VALUES("htthinh","202cb962ac59075b964b07152d234b70","Huỳnh Tấn Thịnh","2","Nam","1999-09-27","Khánh Hòa");
INSERT INTO Account VALUES("thoathoa","202cb962ac59075b964b07152d234b70","Nguyễn Thị Kim Thoa","1","Nữ","1999-05-12","Khánh Hòa");


DELETE FROM AccountType;

INSERT INTO AccountType VALUES("1","Quản trị viên");
INSERT INTO AccountType VALUES("2","Nhân viên");


DELETE FROM Bill;

INSERT INTO Bill VALUES("1","1","75000","0","2021-01-29 12:45:41","2021-01-29 12:45:46","Đã thanh toán");
INSERT INTO Bill VALUES("2","2","15000","0","2021-01-29 12:45:48","2021-01-29 12:45:49","Đã thanh toán");
INSERT INTO Bill VALUES("3","2","25000","0","2021-01-29 12:45:53","2021-01-29 12:45:54","Đã thanh toán");
INSERT INTO Bill VALUES("4","2","75000","0","2021-01-29 12:45:59","2021-01-29 12:46:00","Đã thanh toán");
INSERT INTO Bill VALUES("5","3","400000","0","2021-02-19 12:46:04","2021-02-19 12:46:08","Đã thanh toán");
INSERT INTO Bill VALUES("6","4","250000","0","2021-02-20 12:46:09","2021-02-20 12:46:13","Đã thanh toán");
INSERT INTO Bill VALUES("7","7","325000","10","2021-03-29 12:46:16","2021-03-29 12:46:21","Đã thanh toán");
INSERT INTO Bill VALUES("8","10","375000","10","2021-04-29 12:46:22","2021-04-29 12:46:29","Đã thanh toán");
INSERT INTO Bill VALUES("9","9","290000","20","2021-05-29 12:46:32","2021-05-29 12:46:42","Đã thanh toán");
INSERT INTO Bill VALUES("10","9","500000","20","2021-05-29 12:46:44","2021-05-29 12:46:53","Đã thanh toán");
INSERT INTO Bill VALUES("11","15","280000","20","2021-06-29 12:46:54","2021-06-29 12:46:59","Đã thanh toán");
INSERT INTO Bill VALUES("12","16","260000","20","2021-07-29 12:47:02","2021-07-29 12:47:08","Đã thanh toán");
INSERT INTO Bill VALUES("13","12","140000","20","2021-07-29 12:47:12","2021-07-29 12:47:16","Đã thanh toán");
INSERT INTO Bill VALUES("14","2","15000","0","2021-07-29 13:05:04","2021-07-29 13:05:08","Đã thanh toán");
INSERT INTO Bill VALUES("15","1","15000","0","2021-08-29 13:09:15","2021-08-29 13:43:23","Đã thanh toán");
INSERT INTO Bill VALUES("16","2","15000","0","2021-08-29 13:09:16","2021-08-29 13:33:04","Đã thanh toán");
INSERT INTO Bill VALUES("17","7","15000","5","2021-09-29 13:32:49","2021-09-29 13:33:08","Đã thanh toán");
INSERT INTO Bill VALUES("18","3","15000","0","2021-09-29 13:32:53","2021-09-29 13:32:58","Đã thanh toán");
INSERT INTO Bill VALUES("19","3","150000","5","2021-10-29 13:33:12","2021-10-29 13:33:27","Đã thanh toán");
INSERT INTO Bill VALUES("20","2","50000","5","2021-11-29 13:33:14","2021-11-29 13:33:29","Đã thanh toán");
INSERT INTO Bill VALUES("21","7","80000","5","2021-11-29 13:33:16","2021-11-29 13:33:24","Đã thanh toán");
INSERT INTO Bill VALUES("22","2","15000","0","2021-12-29 13:33:43","2021-12-29 13:34:37","Đã thanh toán");
INSERT INTO Bill VALUES("23","3","15000","0","2021-12-29 13:42:55","2021-12-29 13:43:25","Đã thanh toán");


DELETE FROM BillInfo;

INSERT INTO BillInfo VALUES("1","1","1","5");
INSERT INTO BillInfo VALUES("2","2","1","1");
INSERT INTO BillInfo VALUES("3","3","4","1");
INSERT INTO BillInfo VALUES("4","4","3","5");
INSERT INTO BillInfo VALUES("5","5","6","5");
INSERT INTO BillInfo VALUES("6","5","4","5");
INSERT INTO BillInfo VALUES("7","6","4","5");
INSERT INTO BillInfo VALUES("8","6","12","5");
INSERT INTO BillInfo VALUES("9","7","14","5");
INSERT INTO BillInfo VALUES("10","7","8","5");
INSERT INTO BillInfo VALUES("11","8","8","5");
INSERT INTO BillInfo VALUES("12","8","14","7");
INSERT INTO BillInfo VALUES("13","9","6","2");
INSERT INTO BillInfo VALUES("14","9","2","2");
INSERT INTO BillInfo VALUES("15","9","4","2");
INSERT INTO BillInfo VALUES("16","9","16","2");
INSERT INTO BillInfo VALUES("17","9","14","2");
INSERT INTO BillInfo VALUES("18","10","16","6");
INSERT INTO BillInfo VALUES("19","10","12","2");
INSERT INTO BillInfo VALUES("20","10","14","4");
INSERT INTO BillInfo VALUES("21","10","18","4");
INSERT INTO BillInfo VALUES("22","10","7","2");
INSERT INTO BillInfo VALUES("23","11","7","4");
INSERT INTO BillInfo VALUES("24","11","5","2");
INSERT INTO BillInfo VALUES("25","11","2","2");
INSERT INTO BillInfo VALUES("26","12","10","2");
INSERT INTO BillInfo VALUES("27","12","6","2");
INSERT INTO BillInfo VALUES("28","12","11","2");
INSERT INTO BillInfo VALUES("29","12","15","2");
INSERT INTO BillInfo VALUES("30","13","11","2");
INSERT INTO BillInfo VALUES("31","13","3","2");
INSERT INTO BillInfo VALUES("32","13","8","2");
INSERT INTO BillInfo VALUES("33","14","1","1");
INSERT INTO BillInfo VALUES("34","22","1","1");
INSERT INTO BillInfo VALUES("35","16","1","1");
INSERT INTO BillInfo VALUES("36","17","1","1");
INSERT INTO BillInfo VALUES("37","18","1","1");
INSERT INTO BillInfo VALUES("38","19","12","6");
INSERT INTO BillInfo VALUES("39","20","12","2");
INSERT INTO BillInfo VALUES("40","21","10","2");
INSERT INTO BillInfo VALUES("41","15","1","1");
INSERT INTO BillInfo VALUES("42","23","1","1");


DELETE FROM Food;

INSERT INTO Food VALUES("1","Bánh mì thường","1","15000","Sử dụng");
INSERT INTO Food VALUES("2","Bánh mì heo quay","1","15000","Sử dụng");
INSERT INTO Food VALUES("3","Bánh mì ốp la","1","15000","Sử dụng");
INSERT INTO Food VALUES("4","Bánh mì đặc biệt","1","25000","Sử dụng");
INSERT INTO Food VALUES("5","Bò né 1","1","45000","Sử dụng");
INSERT INTO Food VALUES("6","Bò né 2","1","55000","Sử dụng");
INSERT INTO Food VALUES("7","Hủ tiếu","2","40000","Sử dụng");
INSERT INTO Food VALUES("8","Phở giò","2","40000","Sử dụng");
INSERT INTO Food VALUES("9","Phở tái","2","35000","Sử dụng");
INSERT INTO Food VALUES("10","Bún bò","2","40000","Sử dụng");
INSERT INTO Food VALUES("11","Cafe đen","3","15000","Sử dụng");
INSERT INTO Food VALUES("12","Cafe nguyên chất","3","25000","Sử dụng");
INSERT INTO Food VALUES("13","Cafe sữa","3","17000","Sử dụng");
INSERT INTO Food VALUES("14","Cafe đá xay","3","25000","Sử dụng");
INSERT INTO Food VALUES("15","Trà sữa thường","4","20000","Sử dụng");
INSERT INTO Food VALUES("16","Sữa tươi trân châu đường đen","4","25000","Sử dụng");
INSERT INTO Food VALUES("17","Trà đào","4","30000","Sử dụng");
INSERT INTO Food VALUES("18","Trà sen","4","30000","Sử dụng");


DELETE FROM FoodCategory;

INSERT INTO FoodCategory VALUES("1","Thức ăn khô");
INSERT INTO FoodCategory VALUES("2","Thức ăn nước");
INSERT INTO FoodCategory VALUES("3","Cafe");
INSERT INTO FoodCategory VALUES("4","Trà sữa");


DELETE FROM TableFood;

INSERT INTO TableFood VALUES("1","Bàn số 1","Trống");
INSERT INTO TableFood VALUES("2","Bàn số 2","Trống");
INSERT INTO TableFood VALUES("3","Bàn số 3","Trống");
INSERT INTO TableFood VALUES("4","Bàn số 4","Trống");
INSERT INTO TableFood VALUES("5","Bàn số 5","Trống");
INSERT INTO TableFood VALUES("6","Bàn số 6","Trống");
INSERT INTO TableFood VALUES("7","Bàn số 7","Trống");
INSERT INTO TableFood VALUES("8","Bàn số 8","Trống");
INSERT INTO TableFood VALUES("9","Bàn số 9","Trống");
INSERT INTO TableFood VALUES("10","Bàn số 10","Trống");
INSERT INTO TableFood VALUES("11","Bàn số 11","Trống");
INSERT INTO TableFood VALUES("12","Bàn số 12","Trống");
INSERT INTO TableFood VALUES("13","Bàn số 13","Trống");
INSERT INTO TableFood VALUES("14","Bàn số 14","Trống");
INSERT INTO TableFood VALUES("15","Bàn số 15","Trống");
INSERT INTO TableFood VALUES("16","Bàn số 16","Trống");
INSERT INTO TableFood VALUES("17","Bàn số 17","Trống");
INSERT INTO TableFood VALUES("18","Bàn số 18","Trống");
INSERT INTO TableFood VALUES("19","Bàn số 19","Trống");
INSERT INTO TableFood VALUES("20","Bàn số 20","Trống");


UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 1;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 2;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 3;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 4;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 5;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 6;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 7;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 8;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 9;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 10;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 11;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 12;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 13;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 14;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 15;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 16;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 17;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 18;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 19;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 20;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 21;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 22;
UPDATE Bill SET status = 'Đã thanh toán' WHERE id = 23;


SET FOREIGN_KEY_CHECKS=1;

