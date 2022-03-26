-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 26 mars 2022 à 15:43
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `siteweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `adopte`
--

DROP TABLE IF EXISTS `adopte`;
CREATE TABLE IF NOT EXISTS `adopte` (
  `noma` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` text NOT NULL,
  `demande` text NOT NULL,
  `date_env` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_c` int(11) NOT NULL,
  `nom_c` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `adopte_e`
--

DROP TABLE IF EXISTS `adopte_e`;
CREATE TABLE IF NOT EXISTS `adopte_e` (
  `noma` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `demande` text NOT NULL,
  `date_env` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_c` int(11) NOT NULL,
  `nom_c` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `adopte_h`
--

DROP TABLE IF EXISTS `adopte_h`;
CREATE TABLE IF NOT EXISTS `adopte_h` (
  `noma` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` text NOT NULL,
  `demande` text NOT NULL,
  `date_env` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_c` int(11) NOT NULL,
  `nom_c` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `adopte_r`
--

DROP TABLE IF EXISTS `adopte_r`;
CREATE TABLE IF NOT EXISTS `adopte_r` (
  `noma` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `demande` text NOT NULL,
  `date_env` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_c` int(11) NOT NULL,
  `nom_c` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `chats`
--

DROP TABLE IF EXISTS `chats`;
CREATE TABLE IF NOT EXISTS `chats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `datepub` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_edit` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chats`
--

INSERT INTO `chats` (`id`, `nom`, `categorie`, `info`, `datepub`, `date_edit`) VALUES
(19, ' LOAN', 'chat', '7mois<br />\r\nmale', '2022-03-26 00:16:10', '2022-03-26 16:28:53'),
(16, ' ALEX', 'chat', '14mois<br />\r\nmale', '2022-03-26 00:14:46', '2022-03-26 16:29:52'),
(17, ' EDGAR', 'chat', '5mois<br />\r\nmale', '2022-03-26 00:15:16', '2022-03-26 16:28:17'),
(20, ' LUIZA', 'chat', '12mois<br />\r\nfemal', '2022-03-26 00:16:37', '2022-03-26 16:27:26'),
(21, ' MATHIEU', 'chat', '5mois<br />\r\nmale', '2022-03-26 00:17:05', '2022-03-26 16:26:35');

-- --------------------------------------------------------

--
-- Structure de la table `chiens`
--

DROP TABLE IF EXISTS `chiens`;
CREATE TABLE IF NOT EXISTS `chiens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `datepub` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_edit` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chiens`
--

INSERT INTO `chiens` (`id`, `nom`, `categorie`, `info`, `datepub`, `date_edit`) VALUES
(56, ' SAMUEL', 'chien', '6mois<br />\r\nmale', '2022-03-26 00:12:02', '2022-03-26 16:38:54'),
(54, 'ROCK', 'chien', '2ans&lt;br /&gt;<br />\r\nmale', '2022-03-26 00:11:04', '2022-03-26 16:25:21'),
(51, ' pauline', 'chien', '19mois<br />\r\nfemal', '2022-03-26 00:04:37', '2022-03-26 16:25:50'),
(50, ' JUSTIN', 'chien', '16mois<br />\r\nmale<br />\r\n', '2022-03-26 00:04:04', '2022-03-26 16:24:50');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `message_pub` text NOT NULL,
  `date_pub` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `equide`
--

DROP TABLE IF EXISTS `equide`;
CREATE TABLE IF NOT EXISTS `equide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `datepub` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_edit` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `equide`
--

INSERT INTO `equide` (`id`, `nom`, `categorie`, `info`, `datepub`, `date_edit`) VALUES
(6, ' RAUL', 'cheval', '2ans<br />\r\nmale', '2022-03-26 00:21:19', '2022-03-26 16:21:54'),
(9, ' ANE', 'ane', '1an<br />\r\nmale', '2022-03-26 00:22:35', '2022-03-26 16:21:18'),
(13, ' APOSTOLO', 'chaval', '3ans<br />\r\nmale', '2022-03-26 00:27:00', '2022-03-26 16:20:51'),
(18, ' LUISA', 'cheval', '5ans<br />\r\nfemal', '2022-03-26 00:40:49', '2022-03-26 16:20:04');

-- --------------------------------------------------------

--
-- Structure de la table `rogneur`
--

DROP TABLE IF EXISTS `rogneur`;
CREATE TABLE IF NOT EXISTS `rogneur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `datepub` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_edit` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rogneur`
--

INSERT INTO `rogneur` (`id`, `nom`, `categorie`, `info`, `datepub`, `date_edit`) VALUES
(5, 'AMSTER', 'amster', '28jours<br />\r\nmale', '2022-03-26 00:42:30', '2022-03-26 16:37:48'),
(7, 'AMSTER', 'amster', '2mois&lt;br /&gt;<br />\r\nmale&lt;br /&gt;<br />\r\n', '2022-03-26 00:43:01', '2022-03-26 16:36:46'),
(8, 'AMSTER', 'amster', '1mois<br />\r\nfemal', '2022-03-26 00:43:17', '2022-03-26 16:36:02'),
(10, ' ALVINE', 'ecureille', '2mois<br />\r\nmale', '2022-03-26 00:43:56', '2022-03-26 16:34:20');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
