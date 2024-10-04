CREATE DATABASE libreria;

USE tienda;
CREATE TABLE libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    autor TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL
);

INSERT INTO libros (nombre, autor, precio, stock) VALUES
('Caperucita Roja', 'Pepe', 5.00, 50),
('Cenicienta', 'Rosa', 8.50, 40),
('La bella y la Bestia', 'Carlos', 5.99, 60),
('Blancanieves', 'Ana', 4.00, 35),
('Pinocho', 'Pablo', 6.50, 15);