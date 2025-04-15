-- 1. Adatbázis létrehozása
CREATE DATABASE IF NOT EXISTS webshop CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE webshop;

-- 2. Tábla létrehozása
CREATE TABLE IF NOT EXISTS Products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL
);

-- 3. Mintaadatok
INSERT INTO Products (name, price, stock) VALUES
('Laptop', 299999.99, 10),
('Okostelefon', 159999.50, 25),
('Fülhallgató', 9999.99, 100),
('Monitor', 74999.00, 15);

