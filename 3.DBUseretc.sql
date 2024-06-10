CREATE DATABASE hurtownia_danych;
CREATE USER 'uzytkownik'@'localhost' IDENTIFIED BY 'haslo';
GRANT ALL PRIVILEGES ON hurtownia_danych.* TO 'uzytkownik'@'localhost';
FLUSH PRIVILEGES;