CREATE DATABASE AppDb;

CREATE TABLE Category (
Id INT(3) PRIMARY KEY AUTO_INCREMENT,
Category_name VARCHAR(30) NOT NULL,
Type VARCHAR(30) NOT NULL
);

CREATE TABLE Products (
SKU VARCHAR(6) PRIMARY KEY,
Name VARCHAR(60) NOT NULL,
Price DECIMAL(6,2) NOT NULL,
CategoryId INT(3) NOT NULL,
FOREIGN KEY (CategoryId) REFERENCES Category(Id),
Value Varchar(30) NOT NULL
);