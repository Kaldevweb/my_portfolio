-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 02 Mai 2016 à 20:42
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

CREATE TABLE IF NOT EXISTS `menuevasion` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nomMenu` varchar(250) NOT NULL,
  `contenuMenu` text NOT NULL,
  `positionMenu` int(8) NOT NULL,
  `parent` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `menuevasion`
--

INSERT INTO `menuevasion` (`id`, `nomMenu`, `contenuMenu`, `positionMenu`, `parent`) VALUES
(1, 'Accueil', '<div id="container">\n\n	\n	<section>\n		<div id="section_evasion">\n			<div id="section_textRight">\n				<h1>Évasion</h1>\n				<p>Vous êtes en quête d''une nouvelle destination pour vos prochaine vacances? Vous recherchez une destination hors du commun? Une destination merveilleuse qui vous procurera un bien-être total?</p>\n			</div>\n		</div>\n\n		<div id="section_reve">\n			<div id="section_textLeft">\n				<h1>Rêve</h1>\n				<p>Évasion vous propose plusieurs idées de destinations pour vos vacances ! Fini les décéptions des vacances. Des destinations de rêve qui vous permettra de vous évader loin de votre pénible quotidien.</p>\n			</div>\n		</div>\n\n		<div id="section_paradis">\n			<div id="section_textRight">\n				<h1>Paradis</h1>\n				<p>Le paradis sera à porter de main. Le ciel, la mer, le soleil et la plage se réunissent pour de merveilleuses vacances. Des endroits paradisiaques où vous pourriez vous détendre loin de tous !</p>\n			</div>\n		</div>					\n	</section>\n</div> <!-- FIN MAIN -->', 1, 0),
(2, 'À propos', '<div id="container_apropos">\n	<h1>Qui sommes-nous ?</h1>\n	<div id="resume_apropos">\n		<p>Évasion est une petite entreprise qui a été créée par deux amis qui ont la même passion : voyager. \n		Voyager à travers le monde entier pour partager ensemble des moments inoubliables, pour faire de belles rencontre, pour connaître et apprendre de nouvelles traditions et cultures.\n		Mais surtout pour découvrir toutes les merveilles que nous propose la Terre. Les somptueux et magnifiques paysages, les endroits idylliques !\n		C''est dans cette optique qu''Évasion vous propose des destinations de rêves.\n		</p>	\n	</div>\n	\n	<section>\n		<div id="img_block_left">\n			<img src="img/voyageur3.jpg" alt="Christophe Desoiler partenaire d''Évasion" class="img-reponsive">\n		</div>\n		<div id="txt_block_right">\n			<div class="vertical_middle">\n				<h2>Christophe Desoiler</h2>\n				<p>Je suis un aventurier qui aime les sensations fortes. \n					Les sports extrêmes produisent des sentations fortes et me procurrent mon adrénaline. \n					Mais je peux affirmer maintenant que découvrir de nouveaux et magnifiques paysage me procurent plus d''adrénaline ! \n					J''en ai des frissons à chaque fois que je découvre des endroits paradisiaques ! \n				</p>\n			</div>\n		</div>\n		<div class="nofloat"><!-- block div#img_block_left--></div>	\n	</section>\n\n	<section>\n		<div id="img_block_right">\n			<img src="img/tst.jpg" alt="Frank Poirier partenaire d''Évasion" class="img-reponsive">\n		</div>\n		<div id="txt_block_left">\n			<div class="vertical_middle">\n				<h2>Frank Poirier</h2>\n				<p> Depuis tout petit, j''ai toujours aimé voyager avec mes parents. Ma passion c''est de découvrir de nouveaux horizons. \n					Je voyage à travers le monde pour apprendre à mieux me connaitre mais aussi pour découvrir tous pleins de bonnes choses.\n					De plus j''aime partager mes découvertes, ma passion !\n				</p>\n			</div>			\n		</div>\n		<div class="nofloat"><!-- block div#img_block_left--></div>	\n	</section>\n\n</div> <!-- FIN CONTAINER_APROPOS -->', 2, 0),
(3, 'Destinations', 'Je suis Destination', 3, 0),
(4, 'Test', 'Je suis test', 1, 3),
(5, 'Testo', 'Je suis testo', 2, 3),
(6, 'Offres', 'Je suis offres', 4, 0),
(7, 'Contact', '<div id="container_apropos">\n	<h1>Contactez-nous</h1>\n\n	<div id="noscoordonnees">\n		<h2>Nos coordonnées</h2>\n		<span class="strong">Courriel</span>\n		<p>evasion@gmail.com</p>\n		<span class="strong">Téléphone</span>\n		<p>418 376-3687</p>\n		<span class="strong">Télécopieur</span>\n		<p>418 376-2626</p>\n		<span class="strong">Adresse</span>\n		<p>\n			25 Rue du Pingouin <br />\n			Montreal, CANADA (QC) <br />\n			H3C 3J7\n		</p>\n	</div>\n\n	<div id="message">\n		<h2>Écrivez nous</h2>\n		<form id=''contact_message'' action="#" method="post">\n			<p><label>Nom</label><input type="text"></p>\n			<p><label>Prenom</label><input type="text"></p>\n			<p><label>Téléphone</label><input type="text"></p>\n			<p><label>Courriel</label><input type="email"></p>\n			<p><label class="input_message">Message</label><textarea name="" id="" cols="30" rows="10"></textarea></p>\n			<label for=""></label><input type="submit" value="Envoyer">\n		</form>\n	</div>\n	<div class="nofloat"><!-- block div#message div#noscoordonnees--></div>	\n</div> <!-- FIN CONTAINER_APROPOS -->', 5, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
