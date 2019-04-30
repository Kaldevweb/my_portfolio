-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 28 Avril 2016 à 17:44
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
  `contenuMenu` varchar(250) NOT NULL,
  `positionMenu` int(8) NOT NULL,
  `parent` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id`, `nomMenu`, `contenuMenu`, `positionMenu`, `parent`) VALUES
(1, 'Accueil', 'Je suis accueil', 1, 0),
(2, 'À propos', 'Je suis à propos', 2, 0),
(3, 'Destinations', 'Je suis Destination', 3, 0),
(4, 'Test', 'Je suis test', 1, 3),
(5, 'Testo', 'Je suis testo', 2, 3),
(6, 'Offres', 'Je suis offres', 4, 0),
(7, 'Contact', 'Je suis contact', 5, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
