-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 03 Avril 2016 à 03:32
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `pokemon`
--

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `utiAdmin` varchar(25) NOT NULL,
  `passAdmin` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `login`
--

INSERT INTO `login` (`id`, `utiAdmin`, `passAdmin`) VALUES
(1, 'carol', 'fortin');

-- --------------------------------------------------------

--
-- Structure de la table `pokemon_ch`
--

CREATE TABLE IF NOT EXISTS `pokemon_ch` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nomPokemon` varchar(250) NOT NULL,
  `formatPokemon` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `pokemon_ch`
--

INSERT INTO `pokemon_ch` (`id`, `nomPokemon`, `formatPokemon`) VALUES
(1, 'bulbi', 'Bulbi.png'),
(2, 'carapuce', 'Carapuce.png'),
(3, 'Dracaufeu', 'Dracaufeu.png'),
(4, 'dracoshiney', 'Dracoshiney.png'),
(5, 'evoli', 'Evoli.png'),
(6, 'Pikachu', 'Pikachu.png'),
(7, 'ronflex', 'Ronflex.png'),
(8, 'sabelette', 'sabelette.png'),
(9, 'smogo', 'Smogo.png'),
(10, 'tortank', 'Tortank.png'),
(11, 'Togepi', 'togepi.png'),
(13, 'Croko', 'croko.png'),
(14, 'Salameche', 'salameche.png'),
(15, 'Shark', 'shark.png'),
(20, 'L''école', 'shark.gif');

-- --------------------------------------------------------

--
-- Structure de la table `police`
--

CREATE TABLE IF NOT EXISTS `police` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nomPolice` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `police`
--

INSERT INTO `police` (`id`, `nomPolice`) VALUES
(1, 'Arial'),
(2, 'Verdana'),
(3, 'Comic Sans MS'),
(4, 'Indigo Joker'),
(5, 'Times New Roman'),
(6, 'Lucida sans'),
(7, 'Papyrus'),
(8, 'Mistral'),
(9, 'Onyx'),
(10, 'Onyx'),
(11, 'L''école'),
(12, 'Pkiachu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
