CREATE TABLE Product (
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
    Id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    OrderNumber VARCHAR(20) NOT NULL,
    ClientName VARCHAR(100) NOT NULL
);

CREATE TABLE OrderProducts (
    OrderID INT NOT NULL,
    ProductID INT NOT NULL,
    PRIMARY KEY (OrderID, ProductID)
);

-- INSERTS PRODUCT
INSERT INTO Product (ProductType, Brand, Model, EngineCapacity, Colour, NumberOfDoors, CarCategory, NumberOfBeds, LoadCapacity, NumberOfAxles)
VALUES (1, 'Honda', 'CBR1000RR', 1000, 'Red', NULL, NULL, NULL, NULL, NULL),
		(1, 'Harley-Davidson', 'Street Glide', 1800, 'Black', NULL, NULL, NULL, NULL, NULL),
		(2, 'Toyota', 'Camry', 2500, 'Silver', 4, 'Sedan', NULL, NULL, NULL),
		(2, 'Ford', 'Mustang', 5000, 'Blue', 2, 'Sports Car', NULL, NULL, NULL),
		(3, 'Chevrolet', 'Silverado', 6000, 'White', NULL, NULL, 2, NULL, NULL),
		(3, 'Ford', 'F-150', 5500, 'Black', NULL, NULL, 1, NULL, NULL),
		(4, 'Utility Trailer Co.', 'CargoPro', NULL, 'Gray', NULL, NULL, NULL, 5000, 2),
		(4, 'Big Tex Trailers', 'Dump Trailer', NULL, 'Green', NULL, NULL, NULL, 8000, 3);

-- INSERTS ORDERS
INSERT INTO Orders (OrderNumber, ClientName)
VALUES ('ORD001', 'John Doe'),
       ('ORD002', 'Jane Smith');

-- INSERTS ORDER PRODUCTS
INSERT INTO OrderProducts (OrderID, ProductID)
VALUES (1, 1), -- John Doe orders Honda CBR1000RR
       (1, 3), -- John Doe also orders Toyota Camry
       (2, 2), -- Jane Smith orders Harley-Davidson Street Glide
       (2, 5); -- Jane Smith also orders Chevrolet Silverado


use motorstore;

TRUNCATE TABLE Product;

DROP PROCEDURE GetOrders;

DELIMITER //
create procedure getProducts()
begin
	SELECT * FROM Product;
end//
DELIMITER ;

DELIMITER //
create procedure getOrders()
begin
	SELECT 
		op.OrderID, 
        op.ProductID, 
        o.OrderNumber, 
        o.ClientName, 
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
    FROM OrderProducts AS op
    JOIN Orders AS o
    ON op.OrderID = o.Id
    JOIN Product AS p
    ON op.ProductID = p.Id;
end//
DELIMITER ;

CALL getProducts();
CALL getOrders();