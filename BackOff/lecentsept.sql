-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 21 Mars 2016 à 15:33
-- Version du serveur: 5.5.47-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `lecentsept`
--
CREATE DATABASE IF NOT EXISTS `lecentsept` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lecentsept`;

-- --------------------------------------------------------

--
-- Structure de la table `Content`
--

CREATE TABLE IF NOT EXISTS `Content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idTitle` int(5) DEFAULT NULL,
  `text` varchar(10000) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=18 ;

--
-- Contenu de la table `Content`
--

INSERT INTO `Content` (`id`, `idTitle`, `text`) VALUES
(1, NULL, 'Lecentsept est une association qui regroupe Lyon Métropole et des Grands Comptes autour de 5 acteurs de l''innovation sociale : [[Ashoka::http://france.ashoka.org/]], [[le Mouves::http://mouves.org/]], [[In Homine::#]], [[Etic::http://etic.co/]] et [[Ronalpia::http://www.ronalpia.fr/]]. Ensemble, nous souhaitons développer des solutions entrepreneuriales sociales et innovantes sur le territoire métropolitain. Nous avons pour objectif de devenir le pôle d''excellence français en innovation sociale.'),
(2, 1, 'Détection des besoins sociaux du territoire dans tous les domaines.'),
(3, 2, 'Sélection des pépites entrepreneuriales pour résoudre les besoins du territoire.'),
(4, 3, 'De l''incubation au changement d''échelle pour maximiser l''impact social des entrepreneurs. Parrainage de nos entrepreneurs sociaux et mécénat.'),
(5, 4, 'Construire avec les pouvoirs publics et les partenaires privés des solutions aux besoins des populations du territoire.'),
(6, 5, 'Evénement, mise en réseau, animation de la communauté pour faire vivre notre écosystème.'),
(7, 6, 'Emploi et insertion'),
(8, 6, 'Education et jeunesse'),
(9, 7, 'Consomation'),
(10, 7, 'Environnement'),
(11, 8, 'Logement'),
(12, 8, 'Vivre ensemble'),
(13, 8, 'Santé'),
(14, 9, 'Partir des besoins et des défis du territoire pour y trouver des solutions.'),
(15, 10, 'Accueillir tous les acteurs porteurs d''une initiative à impact social, sociétal ou environnemental.'),
(16, 10, 'Sélectionner les projets pour maximiser la création de valeur économique sociale et environnementale.'),
(17, 11, 'Cultiver l''échange entre acteurs hétérogènes dans un lieu partagé.');

-- --------------------------------------------------------

--
-- Structure de la table `Title`
--

CREATE TABLE IF NOT EXISTS `Title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8_bin NOT NULL,
  `block` int(1) DEFAULT NULL,
  `inblock` varchar(1) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=12 ;

--
-- Contenu de la table `Title`
--

INSERT INTO `Title` (`id`, `title`, `block`, `inblock`) VALUES
(1, 'BAROMETRE DES BESOINS', 1, NULL),
(2, 'DETECTION ET SELECTION', 2, NULL),
(3, 'ACCOMPAGNEMENT', 3, NULL),
(4, 'CO-CONSTRUCTION', 4, NULL),
(5, 'PROMOTION DE L''ENTREPRENEURIAT', 5, NULL),
(6, 'Emploi', 1, 'A'),
(7, 'Cadre de vie', 1, 'B'),
(8, 'Solidarité', 1, 'C'),
(9, 'Pour le territoire', 6, NULL),
(10, 'Pour les porteurs de projet', 7, NULL),
(11, 'Pour l''écosystème', 8, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
