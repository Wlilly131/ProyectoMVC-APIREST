drop DATABASE IF EXISTS inventario_mvc;
CREATE DATABASE inventario_mvc;
USE inventario_mvc;
CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2),
    stock INT
);

INSERT INTO productos(nombre,descripcion,precio,stock)
VALUES
('Laptop','Portátil Lenovo',2500,10),
('Mouse','Mouse Inalámbrico',50,30),
('Teclado','Teclado Mecánico',120,15);

