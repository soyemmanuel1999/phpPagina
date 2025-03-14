CREATE TABLE `carrito` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `idusuario` int(5) DEFAULT NULL,
  `cantidad` int(5) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;