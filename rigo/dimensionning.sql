-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 14 Novembre 2018 à 12:45
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `dimensionning`
--

-- --------------------------------------------------------

--
-- Structure de la table `downlink`
--

CREATE TABLE IF NOT EXISTS `downlink` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_service` varchar(50) NOT NULL,
  `result_service` float NOT NULL,
  `bearer_rate_d` float NOT NULL,
  `ST_D` float NOT NULL,
  `SDR_D` float NOT NULL,
  `BLER_D` float NOT NULL,
  `PR` float NOT NULL,
  `BHSA` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `downlink`
--

INSERT INTO `downlink` (`id`, `nom_service`, `result_service`, `bearer_rate_d`, `ST_D`, `SDR_D`, `BLER_D`, `PR`, `BHSA`) VALUES
(1, 'VoIP', 0, 29.6, 80, 0.4, 0.01, 1, 1.4),
(2, 'Video_Phone', 0, 62.53, 70, 1, 0.01, 0.2, 0.2),
(3, 'Video_Conference', 0, 62.53, 1800, 1, 0.01, 0.2, 0.2),
(4, 'Real_Time_Gaming', 0, 125.06, 1800, 0.4, 0.01, 0.3, 0.2),
(5, 'Streaming_Media', 0, 250.11, 3600, 0.95, 0.01, 0.15, 0.2),
(6, 'IMS_Signalling', 0, 15.63, 7, 0.2, 0.01, 0.4, 5),
(7, 'Web_Browsing', 0, 250.11, 1800, 0.05, 0.01, 1, 0.6),
(8, 'File_Transfer', 0, 750.34, 600, 1, 0.01, 0.2, 0.3),
(9, 'Email', 0, 750.34, 15, 1, 0.01, 0.1, 0.6),
(10, 'file_sharing', 0, 750.34, 1200, 1, 0.01, 0.2, 0.2);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id_service` int(11) NOT NULL AUTO_INCREMENT,
  `nom_service` varchar(50) NOT NULL,
  PRIMARY KEY (`id_service`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

CREATE TABLE IF NOT EXISTS `statut` (
  `id_statut` int(11) NOT NULL AUTO_INCREMENT,
  `statut_user` text NOT NULL,
  PRIMARY KEY (`id_statut`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `statut`
--

INSERT INTO `statut` (`id_statut`, `statut_user`) VALUES
(1, 'Administrateur'),
(2, 'Employe');

-- --------------------------------------------------------

--
-- Structure de la table `uplink`
--

CREATE TABLE IF NOT EXISTS `uplink` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_service` varchar(50) NOT NULL,
  `result_service_u` float NOT NULL,
  `bearer_rate_u` float NOT NULL,
  `ST_U` float NOT NULL,
  `SDR_U` float NOT NULL,
  `BLER_U` float NOT NULL,
  `PR` float NOT NULL,
  `BHSA` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `uplink`
--

INSERT INTO `uplink` (`id`, `nom_service`, `result_service_u`, `bearer_rate_u`, `ST_U`, `SDR_U`, `BLER_U`, `PR`, `BHSA`) VALUES
(2, 'VoIP', 0, 26.9, 80, 0.4, 0.01, 1, 1.4),
(3, 'Video_Phone', 0, 62.53, 70, 1, 0.01, 0.2, 0.2),
(4, 'Video_Conference', 0, 62.53, 1800, 1, 0.01, 0.2, 0.2),
(5, 'Real_Time_Gaming', 0, 31.26, 1800, 0.2, 0.01, 0.3, 0.2),
(6, 'Streaming_Media', 0, 31.26, 3600, 0.05, 0.01, 0.15, 0.2),
(7, 'IMS_Signalling', 0, 15.63, 7, 0.2, 0.01, 0.4, 5),
(8, 'Web_Browsing', 0, 62.53, 1800, 0.05, 0.01, 1, 0.6),
(9, 'File_Transfer', 0, 140.69, 600, 1, 0.01, 0.2, 0.3),
(10, 'Email', 0, 140.69, 50, 1, 0.01, 0.1, 0.6),
(11, 'file_sharing', 0, 250.11, 1200, 1, 0.01, 0.2, 0.2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `password` int(11) NOT NULL,
  `email` text NOT NULL,
  `adresse` text NOT NULL,
  `country` text NOT NULL,
  `postal_code` text NOT NULL,
  `id_statut` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `name`, `surname`, `password`, `email`, `adresse`, `country`, `postal_code`, `id_statut`) VALUES
(2, 'rigo', 'tsouapi', 123456, 'rigo@gmail.com', 'supptic', 'cameroun', '444', 1);

-- --------------------------------------------------------

--
-- Structure de la table `zone`
--

CREATE TABLE IF NOT EXISTS `zone` (
  `id_zone` int(11) NOT NULL AUTO_INCREMENT,
  `val` int(11) NOT NULL,
  PRIMARY KEY (`id_zone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
