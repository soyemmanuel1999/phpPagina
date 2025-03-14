CREATE TABLE `juguete` (
  `id` int(11) NOT NULL,
  `codigo` varchar(64) DEFAULT NULL,
  `nombre` varchar(64) DEFAULT NULL,
  `imagen` varchar(128) DEFAULT NULL,
  `descripcion` varchar(128) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `categoria` int(11) NOT NULL,
  `proveedor` int(11) DEFAULT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `juguete`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `juguete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
  COMMIT;