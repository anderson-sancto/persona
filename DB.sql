CREATE DATABASE `personamaker` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

-- personamaker.persona definition

CREATE TABLE `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `idade` int(11) NOT NULL,
  `genero` char(1) NOT NULL,
  `profissao` varchar(30) NOT NULL,
  `salario` varchar(11) NOT NULL,
  `hobbie` varchar(500) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` char(2) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;