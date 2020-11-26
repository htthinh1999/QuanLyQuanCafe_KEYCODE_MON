CREATE DATABASE QL_QuanCafe_KeycodeMon CHARACTER SET utf8 COLLATE utf8_general_ci;

USE QL_QuanCafe_KeycodeMon;

/***************************************** CREATE TABLES *****************************************/

-- Food
-- Table
-- FoodCategory
-- Account
-- Bill
-- BillInfo

/*
status: Trống / Đã có người
*/
CREATE TABLE TableFood
(
	id INT AUTO_INCREMENT PRIMARY KEY,
	name NVARCHAR(100) NOT NULL,
	status NVARCHAR(100) NOT NULL DEFAULT N'Trống'
);

/*
1: Quản trị viên, 2: Nhân viên
*/
CREATE TABLE AccountType
(
	id INT AUTO_INCREMENT PRIMARY KEY,
	name NVARCHAR(50) NOT NULL
);

/*
default password = '1'
typeID 1: Quản trị viên, 2: Nhân viên
gender: Nam / Nữ
*/
CREATE TABLE Account
(
	username VARCHAR(100) PRIMARY KEY,
	password VARCHAR(1000) NOT NULL DEFAULT 'c4ca4238a0b923820dcc509a6f75849b',
	displayName NVARCHAR(100) NOT NULL,
	typeID INT NOT NULL DEFAULT 2,
	gender NVARCHAR(5) NOT NULL DEFAULT N'Nam',
	birthday DATE NOT NULL,
	address NVARCHAR(100) NOT NULL,

	FOREIGN KEY(typeID) REFERENCES AccountType(id)
);

/*
1: Sử dụng, 2: Ngưng sử dụng
*/
CREATE TABLE State
(
	id INT AUTO_INCREMENT PRIMARY KEY,
	name NVARCHAR(50) NOT NULL
);

CREATE TABLE FoodCategory
(
	id INT AUTO_INCREMENT PRIMARY KEY,
	name NVARCHAR(100) NOT NULL
);

CREATE TABLE Food
(
	id INT AUTO_INCREMENT PRIMARY KEY,
	name NVARCHAR(100) NOT NULL,
	idCategory INT NOT NULL,
	price FLOAT NOT NULL DEFAULT 0,
	stateID INT NOT NULL DEFAULT 1,
	
	FOREIGN KEY (idCategory) REFERENCES FoodCategory(id),
	FOREIGN KEY (stateID) REFERENCES State(id)
);

/*
status: Đã thanh toán / Chưa thanh toán
*/
CREATE TABLE Bill
(
	id INT AUTO_INCREMENT PRIMARY KEY,
	idTable INT NOT NULL,
	totalPrice FLOAT NOT NULL DEFAULT 0,
	discount INT NOT NULL DEFAULT 0,
	timeIn DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
	timeOut DATETIME DEFAULT NULL,
	status NVARCHAR(100) NOT NULL DEFAULT N'Chưa thanh toán',

	FOREIGN KEY (idTable) REFERENCES TableFood(id)
);

CREATE TABLE BillInfo
(
	id INT AUTO_INCREMENT PRIMARY KEY,
	idBill INT NOT NULL,
	idFood INT NOT NULL,
	count INT NOT NULL DEFAULT 1,
	
	FOREIGN KEY (idBill) REFERENCES Bill(id),
	FOREIGN KEY (idFood) REFERENCES Food(id)
);

/**************************************** END CREATE TABLES *****************************************/


/***************************************** INSERT DATA *****************************************/

INSERT INTO AccountType(name) VALUES(N'Quản trị viên');
INSERT INTO AccountType(name) VALUES(N'Nhân viên');    

INSERT INTO Account(username, password, displayName, typeID, gender, birthday, address)
VALUES('admin', '21232f297a57a5a743894a0e4a801fc3', N'ADMIN', 1, N'Nam', '19990927', N'Khánh Hòa');
INSERT INTO Account(username, password, displayName, typeID, gender, birthday, address)
VALUES('htthinh', '202cb962ac59075b964b07152d234b70', N'Huỳnh Tấn Thịnh', 2, N'Nam', '19990927', N'Khánh Hòa');
INSERT INTO Account(username, password, displayName, typeID, gender, birthday, address)
VALUES('thoathoa', '202cb962ac59075b964b07152d234b70', N'Nguyễn Thị Kim Thoa', 1, N'Nữ', '19990512', N'Khánh Hòa');

DELIMITER $$
DROP PROCEDURE IF EXISTS InsertTableFood$$
CREATE PROCEDURE InsertTableFood()
BEGIN
	DECLARE i INT DEFAULT 1;
	WHILE i<=20 DO
		INSERT INTO TableFood(name) VALUES (N'Bàn số ' + CAST(i as CHAR(3)));
		SET i = i + 1;
	END WHILE;
END; $$
DELIMITER ;

CALL InsertTableFood();

INSERT INTO State(name) VALUES(N'Sử dụng');
INSERT INTO State(name) VALUES(N'Ngưng sử dụng');

INSERT INTO FoodCategory(name) VALUES(N'Thức ăn');
INSERT INTO FoodCategory(name) VALUES(N'Thức uống');

INSERT INTO Food(name, idCategory, price) VALUES(N'Bánh mì thịt', 1, 20000.0);
INSERT INTO Food(name, idCategory, price) VALUES(N'Bò né', 1, 50000.0);
INSERT INTO Food(name, idCategory, price) VALUES(N'Cafe đen', 2, 15000.0);
INSERT INTO Food(name, idCategory, price) VALUES(N'Cafe sữa', 2, 20000.0);
INSERT INTO Food(name, idCategory, price) VALUES(N'Cafe đá xay', 2, 30000.0);

INSERT INTO Bill(idTable) VALUES(1);
INSERT INTO Bill(idTable) VALUES(4);
INSERT INTO Bill(idTable) VALUES(5);
INSERT INTO Bill(idTable) VALUES(10);

INSERT INTO BillInfo(idBill, idFood, count) VALUES(1, 2, 5);
INSERT INTO BillInfo(idBill, idFood, count) VALUES(1, 4, 5);
INSERT INTO BillInfo(idBill, idFood, count) VALUES(2, 1, 4);
INSERT INTO BillInfo(idBill, idFood, count) VALUES(2, 3, 2);
INSERT INTO BillInfo(idBill, idFood, count) VALUES(2, 4, 2);
INSERT INTO BillInfo(idBill, idFood, count) VALUES(3, 3, 1);
INSERT INTO BillInfo(idBill, idFood, count) VALUES(3, 4, 1);
INSERT INTO BillInfo(idBill, idFood, count) VALUES(3, 5, 1);
INSERT INTO BillInfo(idBill, idFood, count) VALUES(4, 4, 1);

UPDATE TableFood
SET status = N'Đã có người'
WHERE id = 1 OR id = 4 OR id = 5 OR id = 10;

/***************************************** END INSERT DATA *****************************************/


/***************************************** CREATE PROCEDURES *****************************************/

/*------------------------------ PROCEDURES OF State ------------------------------*/

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_LoadStateList$$
CREATE PROCEDURE USP_LoadStateList()
	SELECT * FROM State; $$
DELIMITER ;

/*------------------------------ END PROCEDURES OF State ------------------------------*/

/*------------------------------ PROCEDURES OF FoodCategory ------------------------------*/

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_LoadFoodCategoryList$$
CREATE PROCEDURE USP_LoadFoodCategoryList()
	SELECT * FROM FoodCategory; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_ExistCategory$$
CREATE PROCEDURE USP_ExistCategory(IN categoryName NVARCHAR(100))
	SELECT *
	FROM FoodCategory
	WHERE Name = categoryName; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_AddFoodCategory$$
CREATE PROCEDURE USP_AddFoodCategory(IN categoryName NVARCHAR(100))
    INSERT INTO FoodCategory(name)
	VALUES(categoryName); $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_UpdateFoodCategory$$
CREATE PROCEDURE USP_UpdateFoodCategory(IN idFC INT, IN categoryName NVARCHAR(100))
    UPDATE FoodCategory SET name = categoryName
	WHERE id = idFC; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_DeleteFoodCategory$$
CREATE PROCEDURE USP_DeleteFoodCategory(idFC INT)
	DELETE FROM FoodCategory WHERE id = idFC; $$
DELIMITER ;

/*------------------------------ END PROCEDURES OF FoodCategory ------------------------------*/

/*------------------------------ PROCEDURES OF Food ------------------------------*/

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_LoadFoodList$$
CREATE PROCEDURE USP_LoadFoodList()
	SELECT f.id 'ID', f.name 'Tên món', fc.name 'Danh mục', price 'Giá tiền', s.name 'Trạng thái'
    FROM Food f INNER JOIN FoodCategory fc ON fc.id = f.idCategory
				INNER JOIN State s ON f.stateID = s.id; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_LoadFoodListByCategoryID$$
CREATE PROCEDURE USP_LoadFoodListByCategoryID(IN idCategory INT)
	SELECT *
	FROM Food
	WHERE idCategory = idCategory AND stateID = 1; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_ExistFood$$
CREATE PROCEDURE USP_ExistFood(IN foodName NVARCHAR(100))
	SELECT * FROM Food where name = foodName; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_AddFoodToTable$$
CREATE PROCEDURE USP_AddFoodToTable(IN foodID INT, IN count INT, IN tableID INT)
BEGIN
	DECLARE billID INT;
    DECLARE numberOfFoodNameOnTable INT;
	DECLARE existFood INT DEFAULT 0;
	DECLARE rest INT;
	
	SELECT id
	INTO billID
	FROM Bill
	WHERE idTable = tableID AND status = N'Chưa thanh toán';
	
	SELECT numberOfFoodNameOnTable = COUNT(*)
	FROM BillInfo
	WHERE idBill = billID;

	IF (numberOfFoodNameOnTable > 0) THEN
		
		SELECT existFood = COUNT(*)
		FROM BillInfo
		WHERE idBill = billID AND idFood = foodID;
		
		IF (existFood > 0) THEN
			SET rest = 0;

			SELECT rest = count + count
			FROM BillInfo
			WHERE idBill = billID AND idFood = foodID;

			IF (rest <= 0) THEN
				DELETE FROM BillInfo
				WHERE idBill = billID AND idFood = foodID;
			ELSE
				UPDATE BillInfo
				SET count = rest
				WHERE idBill = billID AND idFood = foodID;
			END IF;
		ELSE
            INSERT INTO BillInfo(idBill, idFood, count)
            VALUES(billID, foodID, count);
		END IF;
	ELSEIF (count > 0) THEN
		INSERT INTO Bill(idTable) VALUES (tableID);

		SELECT billID = MAX(id)
		FROM Bill;

		INSERT INTO BillInfo(idBill, idFood, count)
		VALUES(billID, foodID, count);
	END IF;
END; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_SearchFood$$
CREATE PROCEDURE USP_SearchFood(IN text NVARCHAR(100))
	SELECT f.id 'ID', f.name 'Tên món', fc.name 'Loại món', price 'Giá tiền'
	FROM Food f INNER JOIN FoodCategory fc ON fc.id = f.idCategory
	WHERE fuConvertToUnsign(f.name) LIKE fuConvertToUnsign(text); $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_AddFood$$
CREATE PROCEDURE USP_AddFood(IN foodName NVARCHAR(100), IN idCategory INT, IN price FLOAT)
	INSERT INTO Food(name, idCategory, price) VALUES(foodName, idCategory, price); $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_UpdateFood$$
CREATE PROCEDURE USP_UpdateFood(IN idFood INT, IN foodName NVARCHAR(100), IN idCategory INT, IN price FLOAT, IN stateID INT)
	UPDATE Food
	SET name = foodName, idCategory = idCategory, price = price, stateID = stateID
	WHERE id = idFood; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_DeleteFood$$
CREATE PROCEDURE USP_DeleteFood(IN idFood INT)
	DELETE FROM Food WHERE id = idFood; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_FoodWasUsing$$
CREATE PROCEDURE USP_FoodWasUsing(IN idFood INT)
	SELECT id FROM BillInfo WHERE idFood = idFood; $$
DELIMITER ;

/*------------------------------ END PROCEDURES OF Food ------------------------------*/

/*------------------------------ PROCEDURES OF Bill & BillInfo ------------------------------*/

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_GetBillUnCheckOutByTableID$$
CREATE PROCEDURE USP_GetBillUnCheckOutByTableID(IN idTable INT)
	SELECT * FROM Bill
	WHERE status = N'Chưa thanh toán' AND idTable = idTable; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_CheckoutTable$$
CREATE PROCEDURE USP_CheckoutTable(IN tableID INT, IN totalPrice FLOAT, IN discount INT)
BEGIN
    DECLARE billID INT;
	
	SELECT billID = id
	FROM Bill
	WHERE idTable = tableID AND status = N'Chưa thanh toán';

	UPDATE Bill
	SET timeOut = GETDATE(), totalPrice = totalPrice, discount = discount, status = N'Đã thanh toán'
	WHERE id = billID;

	UPDATE TableFood
	SET status = N'Trống'
	WHERE id = tableID;
END; $$
DELIMITER ;

/* This PROCEDUREdure load all bill -> slow */
DELIMITER $$
DROP PROCEDURE IF EXISTS USP_GetListBillCheckedOutByDate$$
CREATE PROCEDURE USP_GetListBillCheckedOutByDate(IN fromDate DATETIME, IN toDate DATETIME)
BEGIN
    SELECT name 'Tên bàn', DATE_FORMAT(timeIn, '%Y-%m-%d %T') 'Thời gian vào', DATE_FORMAT(timeOut, '%Y-%m-%d %T') 'Thời gian ra', totalPrice 'Tổng hóa đơn', discount 'Giảm giá'
	FROM Bill INNER JOIN TableFood ON TableFood.id = Bill.idTable
	WHERE Bill.status = N'Đã thanh toán' AND timeOut >= fromDate AND timeOut <= toDate + 1;
END; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_GetListBillCheckedOutByDateAndPage$$
CREATE PROCEDURE USP_GetListBillCheckedOutByDateAndPage(IN fromDate DATETIME, IN toDate DATETIME, IN page INT, IN rowsPerPage int)
BEGIN
    SET page = page*rowsPerPage;
    SELECT name 'Tên bàn', DATE_FORMAT(timeIn, '%Y-%m-%d %T') 'Thời gian vào', DATE_FORMAT(timeOut, '%Y-%m-%d %T') 'Thời gian ra', totalPrice 'Tổng hóa đơn', discount 'Giảm giá'
	FROM Bill INNER JOIN TableFood ON TableFood.id = Bill.idTable
	WHERE Bill.status = N'Đã thanh toán' AND timeOut >= fromDate AND timeOut <= toDate + 1
	LIMIT rowsPerPage, page;
END; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_GetMaxPageOfListBillCheckedOutByDate$$
CREATE PROCEDURE USP_GetMaxPageOfListBillCheckedOutByDate(IN fromDate DATETIME, IN toDate DATETIME)
    SELECT COUNT(*)
	FROM Bill INNER JOIN TableFood ON TableFood.id = Bill.idTable
	WHERE Bill.status = N'Đã thanh toán' AND timeOut >= fromDate AND timeOut <= toDate + 1; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_GetBillByTableID$$
CREATE PROCEDURE USP_GetBillByTableID(IN idTable INT)
	SELECT f.name, bi.count, f.price, totalPrice = f.price * count
	FROM Food f INNER JOIN BillInfo bi ON bi.idFood = f.id
					INNER JOIN Bill b ON b.id = bi.idBill
	WHERE b.idTable = idTable AND b.status = N'Chưa thanh toán'; $$
DELIMITER ;

/*------------------------------ END PROCEDURES OF Bill & BillInfo ------------------------------*/

/*------------------------------ PROCEDURES OF Account & AccountInfo ------------------------------*/

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_LoadAccountList$$
CREATE PROCEDURE USP_LoadAccountList()
	SELECT username 'Tên tài khoản', displayName 'Tên hiển thị', t.name 'Loại tài khoản', sex 'Giới tính', birthday 'Ngày sinh', address 'Địa chỉ'
    FROM Account a INNER JOIN AccountType t ON t.id = a.typeID; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_LoadAccountTypeList$$
CREATE PROCEDURE USP_LoadAccountTypeList()
	SELECT *
	FROM AccountType; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_ExistAccount$$
CREATE PROCEDURE USP_ExistAccount(IN username VARCHAR(100))
	SELECT *
	FROM Account
	WHERE username = username; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_Login$$
CREATE PROCEDURE USP_Login(username VARCHAR(100), password VARCHAR(100))
	SELECT username
	FROM Account
	WHERE username = username AND password = password; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_GetAccountInfoByUsername$$
CREATE PROCEDURE USP_GetAccountInfoByUsername(IN username VARCHAR(100))
    SELECT *
	FROM Account
	WHERE username = username; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_UpdateAccountInfo$$
CREATE PROCEDURE USP_UpdateAccountInfo(IN username VARCHAR(100), IN displayName NVARCHAR(100), IN typeID INT, IN sex NVARCHAR(5), IN birthday DATE, IN address NVARCHAR(100))
    UPDATE Account
	SET displayName = displayName, typeID = typeID, sex = sex, birthday = birthday, address = address
	WHERE username = username; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_UpdatePassword$$
CREATE PROCEDURE USP_UpdatePassword(IN username VARCHAR(100), IN newPass VARCHAR(100))
	UPDATE Account
	SET password = newPass
	WHERE username = username; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_AddAccount$$
CREATE PROCEDURE USP_AddAccount(IN username VARCHAR(100), IN displayName NVARCHAR(100), IN typeID INT, IN sex NVARCHAR(5), IN birthday DATE, IN address NVARCHAR(100))
    INSERT INTO Account
    (username, displayName, typeID, sex, birthday, address)
    VALUES
    (username, displayName, typeID, sex, birthday, address); $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_DeleteAccount$$
CREATE PROCEDURE USP_DeleteAccount(username VARCHAR(100))
    DELETE FROM Account
	WHERE username = username; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_ResetPassword$$
CREATE PROCEDURE USP_ResetPassword(username VARCHAR(100))
    UPDATE Account
	SET password = 'c4ca4238a0b923820dcc509a6f75849b'
	WHERE username = username; $$
DELIMITER ;

/*------------------------------ END PROCEDURES OF Account & AccountInfo ------------------------------*/

/*------------------------------ PROCEDURES OF TableFood ------------------------------*/

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_LoadTableList$$
CREATE PROCEDURE USP_LoadTableList()
	SELECT * FROM TableFood; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_ExistTableFood$$
CREATE PROCEDURE USP_ExistTableFood(IN tableName NVARCHAR(100))
    SELECT *
	FROM TableFood
	WHERE name = tableName; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_LoadTableStatusByID$$
CREATE PROCEDURE USP_LoadTableStatusByID(IN tableID INT)
    SELECT id, name, status
	FROM TableFood
	WHERE id = tableID; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_LoadTableStatusList$$
CREATE PROCEDURE USP_LoadTableStatusList()
    SELECT DISTINCT(status) FROM TableFood; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_MoveTable$$
CREATE PROCEDURE USP_MoveTable(IN firstTableID INT, IN secondTableID INT)
BEGIN
	DECLARE oldBillID INT;
    DECLARE newBillID int;
	
	SELECT oldBillID = id
	FROM Bill
	WHERE idTable = firstTableID AND status = N'Chưa thanh toán';

	SELECT newBillID = id
	FROM Bill
	WHERE idTable = secondTableID AND status = N'Chưa thanh toán';

	IF(newBillID IS NULL) THEN
	    INSERT INTO Bill(idTable) VALUES (secondTableID);
		
		SELECT newBillID = MAX(id)
		FROM Bill;
	END IF;

	UPDATE BillInfo
	SET idBill = newBillID
	WHERE idBill = oldBillID;

	UPDATE TableFood
	SET status = N'Trống'
	WHERE id = firstTableID;

	UPDATE TableFood
	SET status = N'Đã có người'
	WHERE id = secondTableID;
END; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_AddTableFood$$
CREATE PROCEDURE USP_AddTableFood(IN tableName NVARCHAR(100))
    INSERT INTO TableFood
    (name) VALUES(tableName); $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_AddTableFood$$
CREATE PROCEDURE USP_UpdateTableFood(IN id INT, IN tableName NVARCHAR(100))
    UPDATE TableFood
	SET name = tableName
	WHERE id = id; $$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS USP_DeleteTableFood$$
CREATE PROCEDURE USP_DeleteTableFood(id INT)
	DELETE FROM TableFood
	WHERE id = id; $$
DELIMITER ;
/*------------------------------ END PROCEDURES OF TableFood ------------------------------*/

/*--**************************************** END CREATE PROCEDURES ****************************************--*/


/*--**************************************** CREATE TRIGGERS ****************************************--*/
DELIMITER $$
DROP TRIGGER IF EXISTS UTG_UpdateBillInfo$$
CREATE TRIGGER UTG_UpdateBillInfo
AFTER INSERT ON BillInfo
FOR EACH ROW
BEGIN
    DECLARE billID INT;
	DECLARE tableID INT;
	DECLARE numberFoodToCheckDuplicate INT;
	DECLARE duplicateFood INT;
    DECLARE idFoodInserted INT;
	DECLARE firstDuplicateID INT;
    DECLARE secondDuplicateID INT;
    DECLARE existFoodOnTable INT DEFAULT 0;

	SELECT idBill
	INTO billID
	FROM NEW;

	UPDATE Bill
	SET status = N'Chưa thanh toán'
	WHERE id = billID;


	SELECT idTable
	INTO tableID
	FROM Bill
	WHERE id = billID;

	UPDATE TableFood
	SET status = N'Đã có người'
	WHERE id = tableID;
	

	SELECT COUNT(*)
	INTO existFoodOnTable
	FROM BillInfo
	WHERE idBill = billID;

	IF (existFoodOnTable = 0)
	THEN
	    UPDATE TableFood
		SET status = N'Trống'
		WHERE id = tableID;
	END IF;

	SELECT COUNT(*)
	INTO numberFoodToCheckDuplicate
	FROM NEW;

	WHILE (numberFoodToCheckDuplicate > 0) DO
		SELECT idFood
		INTO idFoodInserted
		FROM (SELECT id, idFood
				FROM NEW
				ORDER BY (id)) as foodInserted
		WHERE foodInserted.id = numberFoodToCheckDuplicate;

		SELECT COUNT(*)
		INTO duplicateFood
		FROM BillInfo
		WHERE idBill = billID AND idFood = idFoodInserted;

		IF(duplicateFood>1) THEN
			SELECT MIN(id)
			INTO firstDuplicateID
			FROM BillInfo
			WHERE idBill = billID AND idFood = idFoodInserted;

			SELECT MAX(id)
			INTO secondDuplicateID
			FROM BillInfo
			WHERE idBill = billID AND idFood = idFoodInserted;

			UPDATE BillInfo
			SET count = count + (SELECT count FROM BillInfo WHERE id = secondDuplicateID)
			WHERE id = firstDuplicateID;

			DELETE FROM BillInfo
			WHERE id = secondDuplicateID;
		END IF;

		SET numberFoodToCheckDuplicate = numberFoodToCheckDuplicate - 1;
	END WHILE;
END; $$
DELIMITER ;

/*--**************************************** END CREATE TRIGGERS ****************************************--*/