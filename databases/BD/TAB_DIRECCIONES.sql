CREATE TABLE TAB_DIRECCIONES(
ID_TAB_DIR INT(11) PRIMARY KEY AUTO_INCREMENT,
CALLE VARCHAR(50) DEFAULT NULL, 
NUMERO_CALLE VARCHAR(50) DEFAULT NULL, 
COLONIA VARCHAR(50) DEFAULT NULL, 
CODIGO_POSTAL VARCHAR(50) DEFAULT NULL, 
CIUDAD VARCHAR(50) DEFAULT NULL, 
ID_ESTADO INT(11) DEFAULT NULL,
ID_USUARIO INT(11) NOT NULL
);