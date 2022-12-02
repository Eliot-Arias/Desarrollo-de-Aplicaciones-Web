-- Active: 1669920483595@@127.0.0.1@3306@trabajofinaldb





CREATE TABLE usuarios (
    IDUSUARIO INT PRIMARY KEY AUTO_INCREMENT,
    NOMBRES VARCHAR(50) NOT NULL,
    APELLIDOS VARCHAR(80) NOT NULL,
    EDAD INT NULL,
    CORREO VARCHAR(150),
    NOMBRE_USUARIO VARCHAR(16) UNIQUE NOT NULL,
    PASSWORD VARCHAR(15),
    ID_PROVINCIA INT NOT NULL,
    Foreign Key (ID_PROVINCIA) REFERENCES PROVINCIA(ID_PROVINCIA),
    TELEFONO VARCHAR(9) NULL
)

