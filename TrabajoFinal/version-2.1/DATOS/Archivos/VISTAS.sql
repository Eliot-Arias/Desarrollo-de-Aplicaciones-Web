-- Active: 1669920483595@@127.0.0.1@3306@trabajofinaldb

-- CREATE VIEW AS

--     SELECT

-- 	    I.nombre,

-- 	    I.cantidad,

-- 	    I.unidad,

-- 	    P.id_plato,

-- 	    P.nombre AS nombre_Plato

-- 	FROM insumos I

-- 	    INNER JOIN plato P ON I.id_plato = P.i

-- ID_PLATO;

CREATE VIEW VISTA_LOGIN AS 
	SELECT
	    usuarios.`NOMBRE_USUARIO`,
	    usuarios.`PASSWORD`,
	    usuarios.`IDUSUARIO`
	FROM
USUARIOS;


CREATE VIEW SELECT_lUGAR AS
SELECT
    p.`IDPAIS` AS ID_PAIS,
    P.`NOMBRE` AS NOMBRE_PAIS,
    d.`ID_DEPARTAMENTO` AS ID_DEPARTAMENTO,
	d.`NOMBRE` AS NOMBRE_DEPARTAMENTO,
    provincia.`ID_PROVINCIA`, 
	provincia.`NOMBRE` AS NOMBRE_PROVINCIA    
	FROM provincia
	    INNER JOIN departamento as d ON provincia.`ID_DEPARTAMENTO` = d.`ID_DEPARTAMENTO`
	    INNER JOIN pais as p ON d.`IDPAIS` = p.`IDPAIS`
	WHERE
	    provincia.`ID_PROVINCIA` = provincia.`ID_PROVINCIA`;

SELECT * FROM select_lugar WHERE `ID_PROVINCIA`=18;