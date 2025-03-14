CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;