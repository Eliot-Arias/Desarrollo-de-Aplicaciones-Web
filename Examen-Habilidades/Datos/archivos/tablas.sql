-- Active: 1670362861836@@127.0.0.1@3306@eliotdb
CREATE TABLE TBL_ESPECIALIDAD(
    ID_ESPECIALIDAD INT PRIMARY KEY AUTO_INCREMENT,
    NOMBRE VARCHAR(30),
    DESCRIPCION VARCHAR(80)
);

CREATE TABLE TBL_CURSO(
    ID_CURSO INT PRIMARY KEY AUTO_INCREMENT,
    NOMBRE VARCHAR(50),
    ID_ESPECIALIDAD INT,
    Foreign Key (ID_ESPECIALIDAD) REFERENCES TBL_ESPECIALIDAD(ID_ESPECIALIDAD)
);