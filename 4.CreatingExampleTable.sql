USE hurtownia_danych;

CREATE TABLE produkty (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nazwa VARCHAR(255) NOT NULL,
    cena DECIMAL(10, 2) NOT NULL
);

INSERT INTO produkty (nazwa, cena) VALUES
('Laptop', 3000.00),
('Telefon', 1500.00),
('Tablet', 1000.00);