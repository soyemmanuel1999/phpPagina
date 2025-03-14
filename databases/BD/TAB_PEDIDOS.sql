CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `fechaPedido` date NOT NULL,
  `fechaEntrega` date NOT NULL,
  `productos` text NOT NULL,
  `totalCompra` float NOT NULL,
  `idPaypal` varchar(255) NOT NULL,
  `idPayer` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;