-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 28 Avril 2016 à 23:22
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `evasion`
--
DROP DATABASE IF EXISTS evasion;
CREATE DATABASE evasion;

USE evasion;
-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nomAdmin` varchar(250) NOT NULL,
  `passAdmin` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `nomAdmin`, `passAdmin`) VALUES
(1, 'carol', 'fortin');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nomMenu` varchar(250) NOT NULL,
  `contenuMenu` text NOT NULL,
  `positionMenu` int(8) NOT NULL,
  `parent` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id`, `nomMenu`, `contenuMenu`, `positionMenu`, `parent`) VALUES
(1, 'Accueil', '<div id="container">\n	<!-- SLIDER -->\n	<div class="picSlider demo-2">\n		<ul>\n			<li><img src="img/slider/lake.jpg" class=''img-reponsive''></li>\n			<li><img src="img/slider/cote.jpg" class=''img-reponsive''></li>\n			<li><img src="img/slider/mer.jpg" class=''img-reponsive''></li>\n			<li><img src="img/slider/coastline.jpg" class=''img-reponsive''></li>\n		</ul>\n	</div>\n	\n	<section>\n		<div id="section_evasion">\n			<div id="section_textRight">\n				<h1>Évasion</h1>\n				<p>Vous êtes en quête d''une nouvelle destination pour vos prochaine vacances? Vous recherchez une destination hors du commun? Une destination merveilleuse qui vous procurera un bien-être total?</p>\n			</div>\n		</div>\n\n		<div id="section_reve">\n			<div id="section_textLeft">\n				<h1>Rêve</h1>\n				<p>Évasion vous propose plusieurs idées de destinations pour vos vacances ! Fini les décéptions des vacances. Des destinations de rêve qui vous permettra de vous évader loin de votre pénible quotidien.</p>\n			</div>\n		</div>\n\n		<div id="section_paradis">\n			<div id="section_textRight">\n				<h1>Paradis</h1>\n				<p>Le paradis sera à porter de main. Le ciel, la mer, le soleil et la plage se réunissent pour de merveilleuses vacances. Des endroits paradisiaques où vous pourriez vous détendre loin de tous !</p>\n			</div>\n		</div>					\n	</section>\n</div> <!-- FIN MAIN -->', 1, 0),
(2, 'À propos', 'Je suis à propos', 2, 0),
(3, 'Destinations', 'Je suis Destination', 3, 0),
(4, 'Test', 'Je suis test', 1, 3),
(5, 'Testo', 'Je suis testo', 2, 3),
(6, 'Offres', 'Je suis offres', 4, 0),
(7, 'Contact', 'Je suis contact', 5, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
