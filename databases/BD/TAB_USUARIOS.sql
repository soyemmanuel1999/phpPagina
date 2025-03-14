CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(64) DEFAULT NULL,
  `apellidos` varchar(64) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `correo` varchar(64) NOT NULL,
  `contrasena` varchar(64) DEFAULT NULL,
  `direccion` varchar(64) DEFAULT NULL,
  `sexo` varchar(64) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `admin` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`correo`),
  ADD UNIQUE KEY `correo` (`correo`);

ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;