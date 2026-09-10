-- crear database
CREATE DATABASE crud_app;
-- Ussar database
USE crud_app;
-- crear una tabla
CREATE TABLE usuarios{
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
}