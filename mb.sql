-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 13 juin 2019 à 11:15
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mb`
--

-- --------------------------------------------------------

--
-- Structure de la table `cake`
--

DROP TABLE IF EXISTS `cake`;
CREATE TABLE IF NOT EXISTS `cake` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomcake` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `montant` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cake`
--

INSERT INTO `cake` (`id`, `nomcake`, `description`, `montant`) VALUES
(1, 'c1', '', 0),
(2, 'c89', '21323', 66);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `n_commande` int(10) NOT NULL,
  `montant` int(5) NOT NULL,
  `statut` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `soupe`
--

DROP TABLE IF EXISTS `soupe`;
CREATE TABLE IF NOT EXISTS `soupe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `soupe` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `montant` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `soupe`
--

INSERT INTO `soupe` (`id`, `soupe`, `description`, `montant`) VALUES
(1, 's1', '', 1),
(2, 's2', '', 2);

-- --------------------------------------------------------

--
-- Structure de la table `tarte`
--

DROP TABLE IF EXISTS `tarte`;
CREATE TABLE IF NOT EXISTS `tarte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tarte` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `montant` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tarte`
--

INSERT INTO `tarte` (`id`, `tarte`, `description`, `montant`) VALUES
(1, 't1', '', 0),
(2, 't2', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(25) NOT NULL,
  `Prenom` varchar(25) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Tel` int(8) NOT NULL,
  `Nom entreprise` varchar(50) NOT NULL,
  `Adresse entreprise` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
