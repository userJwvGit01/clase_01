create database clase1;

use clase1;

CREATE TABLE IF NOT EXISTS `zona` (
  `cod` char(4) COLLATE utf8_spanish_ci NOT NULL,
  `des` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `zona` (`cod`, `des`) VALUES
('111', 'aaa'),
('222', 'Zulia'),
('333', 'Apure');

ALTER TABLE `zona`
 ADD PRIMARY KEY (`cod`);