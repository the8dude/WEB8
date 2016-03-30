-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Jeu 05 Mai 2011 à 12:01
-- Version du serveur: 5.1.36
-- Version de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `sites`
--
CREATE DATABASE `sites` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sites`;

-- --------------------------------------------------------

--
-- Structure de la table `liens`
--

CREATE TABLE IF NOT EXISTS `liens` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(128) NOT NULL,
  `webmaster` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(128) NOT NULL,
  `theme` enum('actualité','musique','sport','sciences','cinéma','divers') NOT NULL,
  `date` date NOT NULL,
  `affichage` enum('oui','non') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `liens`
--

INSERT INTO `liens` (`id`, `titre`, `webmaster`, `description`, `url`, `theme`, `date`, `affichage`) VALUES
(1, 'Développeur Logiciel', 'damien.bin@afpa.fr', 'Site développé par les stagiaires DL du centre de Caen/Ifs dans le cadre de leur formation.', 'http://dl.afpa.unicaen.fr/dl05', 'actualité', '2011-05-03', 'oui'),
(2, 'ugc', 'inconnu', 'site sur le cinéma en salles UGC', 'www.ugc.fr', 'cinéma', '2011-05-03', 'oui'),
(25, 'Site de MySQL', 'Sun microsystem', 'Site de SUN sur MySQL.', 'http://dev.mysql.com', 'actualité', '2009-04-24', 'oui'),
(24, 'Le modèle MVC pour PHP par serge TAHE', 'serge TAHE', 'Explication et exemple d''architecture MVC pour PHP.', 'http://tahe.developpez.com/web/php/mvc/', 'sciences', '2009-04-24', 'oui'),
(23, 'expreg.com', 'ADAM Benjamin', 'Site sur l''utilisation des expressions régulières en PHP.', 'http://www.expreg.com/ereg.php', 'sciences', '2009-04-24', 'oui'),
(19, 'L''écho "noir"', 'webmaster@echoNoir.fr', 'test', 'www.echoNoir.fr', 'actualité', '2009-04-24', 'oui'),
(20, 'PHP Sources', '@@phpsources', 'Sources et tutoriels PHP', 'www.phpsources.org', 'actualité', '2009-04-24', 'oui'),
(21, 'xhtml.le-developpeur-web', 'webmaster@xhtml', 'Site sur xhtml', 'http://xhtml.le-developpeur-web.com', 'actualité', '2009-04-24', 'oui'),
(22, 'PHP.Net france', 'php-webmaster@lists.php.net', 'Site référence PHP.', 'http://fr.php.net', 'actualité', '2009-04-24', 'oui'),
(17, 'L''artiste', 'webmaster@ultime.fr', 'musique', 'www.ultime.fr', 'actualité', '2009-04-24', 'oui'),
(18, 'L''art de la table', 'webmaster@artTable.fr', 'miam', 'www.artTable.fr', 'actualité', '2009-04-24', 'oui'),
(16, 'Concepteurs Développeurs de sites internet', 'tsig.cdmia@afpa.unicaen.fr', 'Site développé par les stagiaires CDSI 5 du centre de Caen / Ifs dans le cadre de leur formation.', 'http://cdsi@afpa.unicaen.fr', 'actualité', '2009-04-20', 'oui'),
(12, 'TV online', 'youWebTV', 'Télévision et radio sur le web', 'http://www.youweb.tv/fr/tvonline/web-tv.html', 'actualité', '2009-03-27', 'oui'),
(13, 'France 24', 'webdesk@france24.com', 'Actualité Internationale 24h/24', 'http://www.france24.com', 'actualité', '2009-04-01', 'oui'),
(14, 'L''équipe', 'webmaster@lequipe.fr', 'Tout le sport...', 'http://www.lequipe.fr/', '', '2009-04-09', 'oui'),
(10, 'Tout JavaScript', 'Olivier Hondermarck', 'Le javascript.', 'http://www.toutjavascript.com', 'actualité', '2009-04-21', 'oui'),
(15, 'Météofrance', 'webmaster@meteofrance.fr', 'Le site de la météo nationale.', 'http://france.meteofrance.com/', 'actualité', '2009-04-19', 'oui'),
(11, 'php.net', 'php group', 'Site en français dédié à php', 'http://fr.php.net', 'divers', '2009-02-12', 'oui');
