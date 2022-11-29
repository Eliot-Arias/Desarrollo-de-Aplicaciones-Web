-- Active: 1669675658372@@127.0.0.1@3306@logindb

CREATE TABLE
    PAIS(
        IDPAIS INT PRIMARY KEY AUTO_INCREMENT,
        NOMBRE VARCHAR(50)
    );

CREATE TABLE
    DEPARTAMENTO (
        ID_DEPARTAMENTO INT PRIMARY KEY AUTO_INCREMENT,
        NOMBRE VARCHAR(50),
        IDPAIS INT,
        Foreign Key (IDPAIS) REFERENCES PAIS(IDPAIS)
    );

CREATE TABLE
    PROVINCIA(
        IDPROVINCIA INT PRIMARY KEY AUTO_INCREMENT,
        NOMBRE VARCHAR(50),
        ID_DEPARTAMENTO INT,
        Foreign Key (ID_DEPARTAMENTO) REFERENCES DEPARTAMENTO(ID_DEPARTAMENTO)
    );

CREATE TABLE
    USUARIOS(
        ID_USUARIO INT PRIMARY KEY AUTO_INCREMENT,
        NOMBRE VARCHAR(50),
        PASSWORD VARCHAR(18),
        IDPROVINCIA INT,
        Foreign Key (IDPROVINCIA) REFERENCES PROVINCIA(IDPROVINCIA)
    );

--paises

INSERT INTO pais (NOMBRE) VALUES ('Perú');

INSERT INTO pais (NOMBRE) VALUES ('Argentina');

INSERT INTO pais (NOMBRE) VALUES ('Chile');

--departamentos perú

INSERT INTO departamento (NOMBRE, IDPAIS) VALUES ('Arequipa', 1);

INSERT INTO departamento (NOMBRE, IDPAIS) VALUES ('Lima', 1);

INSERT INTO departamento (NOMBRE, IDPAIS) VALUES ('Huanuco', 1);

--departamentos Chile
INSERT INTO departamento (NOMBRE, IDPAIS) VALUES ('Santiago', 3);
INSERT INTO departamento (NOMBRE, IDPAIS) VALUES ('Antofagasta', 3);
INSERT INTO departamento (NOMBRE, IDPAIS) VALUES ('Arica', 3);

--departamentos Argentina
INSERT INTO departamento (NOMBRE, IDPAIS) VALUES ('Buenos Aires', 2);
INSERT INTO departamento (NOMBRE, IDPAIS) VALUES ('Chaco', 2);
INSERT INTO departamento (NOMBRE, IDPAIS) VALUES ('Cordova', 2);

--provincias arequipa
INSERT INTO provincia(NOMBRE, ID_DEPARTAMENTO) VALUES ('Arequipa', 1);
INSERT INTO provincia(NOMBRE, ID_DEPARTAMENTO)  VALUES ('Camana', 1);

--provincias Lima
INSERT INTO provincia(NOMBRE, ID_DEPARTAMENTO) VALUES ('Cañete', 2);
INSERT INTO provincia(NOMBRE, ID_DEPARTAMENTO) VALUES ('Huaral', 2);

-- huanuco
INSERT INTO provincia(NOMBRE, ID_DEPARTAMENTO) VALUES ('Huanuco', 3);
INSERT INTO provincia(NOMBRE, ID_DEPARTAMENTO) VALUES ('Puerto Inca', 3);

--Santiago

INSERT INTO provincia(NOMBRE, ID_DEPARTAMENTO) VALUES ('Talagante', 4);
INSERT INTO provincia(NOMBRE, ID_DEPARTAMENTO) VALUES ('Cordillera', 4);

--Antofagasta
INSERT INTO provincia(NOMBRE, ID_DEPARTAMENTO) VALUES ('Antofagasta', 5);
INSERT INTO provincia(NOMBRE, ID_DEPARTAMENTO)  VALUES ('El loa', 5);
--Arica
INSERT INTO provincia(NOMBRE, ID_DEPARTAMENTO) VALUES ('Arica', 6);
INSERT INTO provincia(NOMBRE, ID_DEPARTAMENTO) VALUES ('Paricanota', 6);
--Buenos Aires
INSERT INTO provincia(NOMBRE, ID_DEPARTAMENTO) VALUES ('Almirante Brown', 7);
INSERT INTO provincia(NOMBRE, ID_DEPARTAMENTO) VALUES ('Avellaneda', 7);
--Chaco
INSERT INTO provincia(NOMBRE, ID_DEPARTAMENTO) VALUES ('Bermejo', 8);
INSERT INTO provincia(NOMBRE, ID_DEPARTAMENTO) VALUES ('Chacabuco', 8);
--Cordova
INSERT INTO provincia(NOMBRE, ID_DEPARTAMENTO) VALUES ('Cosquín', 9);
INSERT INTO provincia(NOMBRE, ID_DEPARTAMENTO) VALUES ('Río Cuarto', 9);
