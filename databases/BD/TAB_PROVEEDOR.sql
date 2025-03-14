
CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(64) DEFAULT NULL,
  `apellidos` varchar(64) DEFAULT NULL,
  `direccion` varchar(64) DEFAULT NULL,
  `codigo` int(11) DEFAULT NULL,
  `estado` varchar(64) DEFAULT NULL,
  `administrador` int(11) DEFAULT NULL,
  `empresa` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

COMMIT;