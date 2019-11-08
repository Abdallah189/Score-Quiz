-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 08 nov. 2019 à 16:17
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `appiq`
--

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

DROP TABLE IF EXISTS `groupe`;
CREATE TABLE IF NOT EXISTS `groupe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `section` varchar(50) NOT NULL,
  `tour1` float DEFAULT NULL,
  `tour2` float DEFAULT NULL,
  `tour3` float DEFAULT NULL,
  `desi` int(11) NOT NULL,
  `dst2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`id`, `nom`, `section`, `tour1`, `tour2`, `tour3`, `desi`, `dst2`) VALUES
(12, 'Einstein', 'Math', 50, 37.5, 0, 1, 0),
(15, 'Radio Actif', 'Science EXP', 75, 75, 100, 1, 1),
(16, 'Hybatya', 'Lettre', 33.13, 0, 0, 0, 0),
(17, 'RedMachine', 'Technique', 49.06, 0, NULL, 0, 0),
(18, 'Boo yeah', 'Informatique', 75, 62.5, NULL, 1, 0),
(19, 'Competitivite', 'Economie', 50, 72.5, 80, 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
