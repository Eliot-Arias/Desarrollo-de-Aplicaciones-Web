-- Active: 1669672849855@@127.0.0.1@3306@ventasdb

CREATE TABLE
    FAMILIA(
        IDFAMILIA INT PRIMARY KEY AUTO_INCREMENT,
        NOMBRE VARCHAR(30),
        DESCRIPCION VARCHAR(50)
    );

CREATE TABLE
    CATEGORIA (
        IDCATEGORIA INT PRIMARY KEY AUTO_INCREMENT,
        NOMBRE VARCHAR(30),
        DESCRIPCION VARCHAR(50),
        IDFAMILIA INT,
        Foreign Key (IDFAMILIA) REFERENCES FAMILIA(IDFAMILIA)
    );

CREATE TABLE
    PRODUCTO (
        IDPRODUCTO INT PRIMARY KEY AUTO_INCREMENT,
        NOMBRE VARCHAR(30),
        STOCK INT,
        MONTO DOUBLE,
        IDCATEGORIA INT,
        Foreign Key (IDCATEGORIA) REFERENCES CATEGORIA(IDCATEGORIA)
    );

CREATE TABLE
    CLIENTE (
        IDCLIENTE INT PRIMARY KEY AUTO_INCREMENT,
        NOMBRES VARCHAR(30),
        APELLIDOS VARCHAR(30),
        DNI VARCHAR(8)
    );

CREATE TABLE
    VENTA (
        IDVENTA INT PRIMARY KEY AUTO_INCREMENT,
        NROCOMPROBANTE VARCHAR(30),
        ESTADO INT,
        IDCLIENTE INT,
        IDUSUARIO INT,
        Foreign Key (IDCLIENTE) REFERENCES CLIENTE(IDCLIENTE)
    );

CREATE TABLE
    DETALLE (
        IDDETALLE INT PRIMARY KEY AUTO_INCREMENT,
        CANTIDAD VARCHAR(30),
        IDPRODUCTO INT,
        Foreign Key (IDPRODUCTO) REFERENCES PRODUCTO(IDPRODUCTO),
        NOMBRE VARCHAR(30),
        MONTO DOUBLE,
        IDVENTA INT,
        Foreign Key (IDVENTA) REFERENCES VENTA(IDVENTA)
    );

--INSERSIONES DE DATOS--

INSERT INTO
    FAMILIA (NOMBRE, DESCRIPCION)
VALUES ('Bebidas', 'Todo bebidas');

INSERT INTO
    FAMILIA (NOMBRE, DESCRIPCION)
VALUES ('Lácteos', 'Todo lacteos');

INSERT INTO
    FAMILIA (NOMBRE, DESCRIPCION)
VALUES (
        'Infantiles',
        'Todo infantiles'
    );

INSERT INTO
    CATEGORIA (NOMBRE, DESCRIPCION, IDFAMILIA)
VALUES ('Gaseosas', 'Todo gaseosas', 1);

INSERT INTO
    CATEGORIA (NOMBRE, DESCRIPCION, IDFAMILIA)
VALUES ('Aguas', 'Todo aguas', 1);

INSERT INTO
    CATEGORIA (NOMBRE, DESCRIPCION, IDFAMILIA)
VALUES ('Jugos', 'Todo juegos', 1);

INSERT INTO
    CATEGORIA (NOMBRE, DESCRIPCION, IDFAMILIA)
VALUES ('Leches', 'Todo leches', 2);

INSERT INTO
    CATEGORIA (NOMBRE, DESCRIPCION, IDFAMILIA)
VALUES ('Quesos', 'Todo quesos', 2);

INSERT INTO
    CATEGORIA (NOMBRE, DESCRIPCION, IDFAMILIA)
VALUES (
        'Ropa Bebes',
        'Todo ropa bebes',
        1
    );

INSERT INTO
    CATEGORIA (NOMBRE, DESCRIPCION, IDFAMILIA)
VALUES ('Juguetes', 'Todo juguetes', 1);

--GASEOSAS

INSERT INTO
    PRODUCTO (
        NOMBRE,
        STOCK,
        MONTO,
        IDCATEGORIA
    )
VALUES ('INKA-KOLA', 100, 1.5, 1);
INSERT INTO
    PRODUCTO (
        NOMBRE,
        STOCK,
        MONTO,
        IDCATEGORIA
    )
VALUES ('COCA-KOLA', 200, 2.5, 1);
INSERT INTO
    PRODUCTO (
        NOMBRE,
        STOCK,
        MONTO,
        IDCATEGORIA
    )
VALUES ('SPRITE', 100, 2, 1);

--AGUAS
INSERT INTO
    PRODUCTO (
        NOMBRE,
        STOCK,
        MONTO,
        IDCATEGORIA
    )
VALUES ('CIELO', 150, 1, 2);
INSERT INTO
    PRODUCTO (
        NOMBRE,
        STOCK,
        MONTO,
        IDCATEGORIA
    )
VALUES ('SAN-LUIS', 450, 1.2, 2);
INSERT INTO
    PRODUCTO (
        NOMBRE,
        STOCK,
        MONTO,
        IDCATEGORIA
    )
VALUES ('VIDA', 350, 1, 2);

--JUGOS
INSERT INTO
    PRODUCTO (
        NOMBRE,
        STOCK,
        MONTO,
        IDCATEGORIA
    )
VALUES ('CIFRUT', 350, 1, 3);
INSERT INTO
    PRODUCTO (
        NOMBRE,
        STOCK,
        MONTO,
        IDCATEGORIA
    )
VALUES ('TAMPICO', 350, 1.5, 3);
INSERT INTO
    PRODUCTO (
        NOMBRE,
        STOCK,
        MONTO,
        IDCATEGORIA
    )
VALUES ('PULP', 350, 1, 3);

--LECHES
INSERT INTO
    PRODUCTO (
        NOMBRE,
        STOCK,
        MONTO,
        IDCATEGORIA
    )
VALUES ('PURA-VIDA', 350, 3.5, 4);
INSERT INTO
    PRODUCTO (
        NOMBRE,
        STOCK,
        MONTO,
        IDCATEGORIA
    )
VALUES ('GLORIA', 350, 3.8, 4);
INSERT INTO
    PRODUCTO (
        NOMBRE,
        STOCK,
        MONTO,
        IDCATEGORIA
    )
VALUES ('NESTLE', 350, 2.7, 4);

--QUESOS
INSERT INTO
    PRODUCTO (
        NOMBRE,
        STOCK,
        MONTO,
        IDCATEGORIA
    )
VALUES ('PARMESANO', 150, 25, 5);
INSERT INTO
    PRODUCTO (
        NOMBRE,
        STOCK,
        MONTO,
        IDCATEGORIA
    )
VALUES ('CHEDAR', 50, 55, 5);
INSERT INTO
    PRODUCTO (
        NOMBRE,
        STOCK,
        MONTO,
        IDCATEGORIA
    )
VALUES ('GORUMET XD', 60, 150, 5);

--ROPA
