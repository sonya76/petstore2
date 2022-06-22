CREATE DATABASE `petstore` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

use DATABASE `petstore`;

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adresse1` varchar(255) DEFAULT NULL,
  `adresse2` varchar(255) DEFAULT NULL,
  `adresse3` varchar(255) DEFAULT NULL,
  `cp` char(5) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `tel` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;