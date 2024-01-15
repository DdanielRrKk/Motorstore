USE motorstore;

CREATE TABLE Products (
    Id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    ProductType INT NOT NULL,
    Brand VARCHAR(255) NOT NULL,
    Model VARCHAR(255) NOT NULL,
    EngineCapacity INT,
    Colour VARCHAR(50),
    NumberOfDoors INT,
    CarCategory VARCHAR(50),
    NumberOfBeds INT,
    LoadCapacity INT,
    NumberOfAxles INT
);
CREATE TABLE Orders (
    OrderNumber VARCHAR(20) PRIMARY KEY NOT NULL,
    ClientName VARCHAR(100) NOT NULL
);
CREATE TABLE OrdersProducts (
	OrderNumber VARCHAR(20) NOT NULL,
    ProductID INT NOT NULL,
    Quantity INT NOT NULL,
    PRIMARY KEY (OrderNumber, ProductID),
    FOREIGN KEY (OrderNumber) REFERENCES Orders(OrderNumber),
    FOREIGN KEY (ProductID) REFERENCES Products(Id)
);

INSERT INTO Products (ProductType, Brand, Model, EngineCapacity, Colour, NumberOfDoors, CarCategory, NumberOfBeds, LoadCapacity, NumberOfAxles)
VALUES (1, 'Honda', 'CBR1000RR', 1000, 'Red', NULL, NULL, NULL, NULL, NULL),
		(1, 'Harley-Davidson', 'Street Glide', 1800, 'Black', NULL, NULL, NULL, NULL, NULL),
		(2, 'Toyota', 'Camry', 2500, 'Silver', 4, 'Sedan', NULL, NULL, NULL),
		(2, 'Ford', 'Mustang', 5000, 'Blue', 2, 'Sports Car', NULL, NULL, NULL),
		(3, 'Chevrolet', 'Silverado', 6000, 'White', NULL, NULL, 2, NULL, NULL),
		(3, 'Ford', 'F-150', 5500, 'Black', NULL, NULL, 1, NULL, NULL),
		(4, 'Utility Trailer Co.', 'CargoPro', NULL, 'Gray', NULL, NULL, NULL, 5000, 2),
		(4, 'Big Tex Trailers', 'Dump Trailer', NULL, 'Green', NULL, NULL, NULL, 8000, 3);
INSERT INTO Orders (OrderNumber, ClientName)
VALUES ('ORD001', 'John Doe'),
       ('ORD002', 'Jane Smith');
INSERT INTO OrdersProducts (OrderNumber, ProductID, Quantity)
VALUES ('ORD001', 1, 2), -- John Doe orders Honda CBR1000RR
       ('ORD001', 3, 2), -- John Doe also orders Toyota Camry
       ('ORD002', 2, 4), -- Jane Smith orders Harley-Davidson Street Glide
       ('ORD002', 5, 1); -- Jane Smith also orders Chevrolet Silverado


DELIMITER //
CREATE PROCEDURE GetProducts()
BEGIN
	SELECT * FROM Products;
END//
DELIMITER ;

DELIMITER //
CREATE PROCEDURE GetOrders()
BEGIN
	SELECT 
        o.OrderNumber, 
        o.ClientName, 
		p.Id AS 'ProductID',
        p.ProductType, 
        p.Brand, 
        p.Model,
        p.EngineCapacity, 
        p.Colour, 
        p.NumberOfDoors, 
        p.CarCategory, 
        p.NumberOfBeds, 
        p.LoadCapacity, 
        p.NumberOfAxles
    FROM Orders AS o
    JOIN OrdersProducts AS op
    ON o.OrderNumber = op.OrderNumber
    JOIN Products AS p
    ON op.ProductID = p.Id;
END//
DELIMITER ;

DELIMITER //
CREATE PROCEDURE AddOrder
(
	IN p_OrderNumber VARCHAR(20),
    IN p_ClientName VARCHAR(100),
    IN p_OrderedProductId INT,
    IN p_Quantity INT
)
BEGIN
	DECLARE orderExists INT DEFAULT 0;
	SET orderExists = (SELECT COUNT(*) FROM Orders WHERE OrderNumber = p_OrderNumber);
	
    IF orderExists = 1 THEN
        INSERT INTO OrdersProducts (OrderNumber, ProductID) VALUES (p_OrderNumber, p_OrderedProductId);
    ELSE
        INSERT INTO Orders (OrderNumber, ClientName) VALUES (p_OrderNumber, p_ClientName);
        INSERT INTO OrdersProducts (OrderNumber, ProductID, Quantity) VALUES (p_OrderNumber, p_OrderedProductId, p_Quantity);
    END IF;
END//
DELIMITER ;