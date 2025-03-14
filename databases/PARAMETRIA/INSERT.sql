----------------
INSERT INTO `carrito` (`id`, `idusuario`, `cantidad`) VALUES
(8, 2, 6),
(9, 1, 13),
(8, 1, 1),
(12, 1, 1),
(14, 1, 1),
(10, 2, 2),
(14, 2, 1),
(11, 2, 1),
(12, 2, 1);

---------------

INSERT INTO `categoria` (`id`, `categoria`) VALUES
(1, 'Primera infancia'),
(2, 'Figuras'),
(3, 'Construcciones'),
(4, 'Manualidades'),
(5, 'Muñecas/os'),
(6, 'Peluches'),
(7, 'Imitación hogar y entorno'),
(8, 'Vehículos gran tamaño'),
(9, 'Vehículos tamaño reducido'),
(10, 'Juegos de mesa'),
(11, 'Electrónicos y Robótica'),
(12, 'Musicales'),
(13, 'Deportivos'),
(14, 'Aire libre');

---------------

INSERT INTO `juguete` (`id`, `codigo`, `nombre`, `imagen`, `descripcion`, `precio`, `categoria`, `proveedor`, `stock`) VALUES
(10, '1243567', 'oso de peluche', '4ce9b0afb324c8d3937a577a23c971fe.jpg', 'un oso GRANDE', 2300.42, 6, 2, 4),
(11, '12345678', 'oso de peluche', 'ef75df3f09862f19f6fa417d9a7ceb52.jpg', 'oso ', 123, 1, 1, 12),
(12, '2134567890', 'jirafa', '3cba86082d52cdd71059b61ec2127c75.jpg', 'una jirafa dificil de romper', 23.8, 2, 2, 23),
(13, '1234567890', 'papalote', '5c3bac842b3c79d260b171119537f826.jpg', 'papalote grande ', 124.65, 14, 7, 50),
(14, '23456789', 'cubetas para playa', '5412daf69fe09df796d4345bc310ef9f.jpg', 'set de cubetas completo para playa ', 200, 3, 2, 8),
(15, '123', 'borrego', '135ee02930f0be6e03dc32fa8f24d0a8.jpg', 'borrego', 133.99, 6, 1, 5);

---------------

INSERT INTO `proveedor` (`id`, `nombre`, `apellidos`, `direccion`, `codigo`, `estado`, `administrador`, `empresa`) VALUES
(1, 'juan1', 'lopez', 'hidalgo numero10', 71300, 'oaxaca', 1, 'la pelucheria sa de cv'),
(2, 'pedro', 'ruiz jimenez', 'fraccionamiento 1', 3117, 'oaxaca', 1, 'planeta juguete'),
(7, 'antonio', 'lopez', 'calle21', 7, 'oaxaca', 0, 'jugueteria lopez');

-------------
INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `telefono`, `correo`, `contrasena`, `direccion`, `sexo`, `fecha`, `admin`) VALUES
(1, 'osiris', 'juarez', 0, '9513465567', '123', 'calle hidalgo numero6', 'hombre', '1999-03-27', 1),
(2, 'juan1', 'hernandez2', 95134578, 'juan1@gmail.com', '123', 'calle hidalgo numero7', 'hombre', '1994-02-17', 0),
(3, 'jose', 'martinez', 123456789, 'jose12', '123', NULL, '', '1999-03-12', 0);


--- CIUDADES DE LA REUBLICA MEXICANA -----
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(1,'Aguascalientes');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(2,'Baja California');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(3,'Baja California Sur');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(4,'Campeche');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(5,'Coahuila de Zaragoza');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(6,'Colima');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(7,'Chiapas');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(8,'Chihuahua');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(9,'Ciudad de México');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(10,'Durango');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(11,'Guanajuato');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(12,'Guerrero');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(13,'Hidalgo');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(14,'Jalisco');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(15,'Edo. de México');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(16,'Michoacán de Ocampo');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(17,'Morelos');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(18,'Nayarit');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(19,'Nuevo León');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(20,'Oaxaca');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(21,'Puebla');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(22,'Querétaro');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(23,'Quintana Roo');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(24,'San Luis Potosí');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(25,'Sinaloa');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(26,'Sonora');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(27,'Tabasco');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(28,'Tamaulipas');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(29,'Tlaxcala');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(30,'Veracruz de Ignacio de la Llave');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(31,'Yucatán');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(32,'Zacatecas');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(33,'Nacional');
INSERT INTO TAB_CIUDADES (ID_TAB_CIUDAD,CIUDAD)  VALUES(34,'Extranjero');
COMMIT;