-- Active: 1669920483595@@127.0.0.1@3306@trabajofinaldb

CREATE PROCEDURE REGISTRAR_USUARIO(NOMBRES VARCHAR(
50), APELLIDOS VARCHAR(80), EDAD INT, CORREO VARCHAR
(150), NOMBRE_USUARIO VARCHAR(16), PASSWORD VARCHAR
(15), ID_PROVINCIA INT, TELEFONO VARCHAR(9)) BEGIN 
	INSERT INTO
	    usuarios(
	        NOMBRES,
	        APELLIDOS,
	        EDAD,
	        CORREO,
	        NOMBRE_USUARIO,
	        PASSWORD,
	        ID_PROVINCIA,
	        TELEFONO
	    )
	VALUES (
	        NOMBRES,
	        APELLIDOS,
	        EDAD,
	        CORREO,
	        NOMBRE_USUARIO,
	        PASSWORD,
	        ID_PROVINCIA,
	        TELEFONO
	    );
END; 

CREATE PROCEDURE CONSULTAR_USUARIO(NOMBRE_USUARIO VARCHAR
(16), PASSWORD VARCHAR(15)) BEGIN 
	SELECT *
	FROM vista_login
	WHERE
	    `NOMBRE_USUARIO` = NOMBRE_USUARIO
	    AND `PASSWORD` = PASSWORD;
END; 

CALL `CONSULTAR_USUARIO`('Fortalezawtf2', 'Antimago123_3 ');

CALL
    `REGISTRAR_USUARIO`(
        'Eliot Roy',
        'Aras Flores',
        18,
        'rampagecopilation@gmail.com',
        'Fortalezawtf2',
        'Antimago123_3',
        1,
        959596552
    );

CREATE PROCEDURE CONSULTAR_PAISES() BEGIN 
	SELECT DISTINCTROW
	    select_lugar.`ID_PAIS`,
		select_lugar.`NOMBRE_PAIS`
	FROM select_lugar;
END; 

CALL CONSULTAR_PAISES();

CREATE PROCEDURE CONSULTAR_DEPARTAMENTO(ID_DEPARTAMENTO INT) BEGIN 
	SELECT DISTINCTROW 
	    select_lugar.`ID_DEPARTAMENTO`,
	    select_lugar.`NOMBRE_DEPARTAMENTO`
	FROM select_lugar
	WHERE select_lugar.`ID_PAIS`= ID_DEPARTAMENTO;
END;

CALL `CONSULTAR_DEPARTAMENTO`(4);

CREATE PROCEDURE CONSULTAR_PROVINCIA(ID_PROVINCIA INT) 
BEGIN 
	SELECT
	    select_lugar.`ID_PROVINCIA`,
	    select_lugar.`NOMBRE_PROVINCIA`
	FROM select_lugar
	WHERE
	    select_lugar.`ID_DEPARTAMENTO` = ID_PROVINCIA;
END; 

CALL `CONSULTAR_PROVINCIA`(3);