-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 16 Mai 2016 à 12:42
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tp_projet_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `forfait`
--

CREATE TABLE IF NOT EXISTS `forfait` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id (clef principale) de l''article',
  `name` varchar(256) NOT NULL COMMENT 'Nom de l''article ',
  `category_id` int(11) DEFAULT NULL COMMENT 'Catégorie à laquelle appartient l''article',
  `description` varchar(1024) NOT NULL COMMENT 'Description de l''article',
  `duree` tinyint(4) NOT NULL COMMENT 'duree forfait',
  `picture` varchar(128) NOT NULL COMMENT 'Photo de l''article',
  `price` decimal(8,2) DEFAULT NULL COMMENT 'Prix de l''article',
  `is_online` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Indique si l''article est affiché ou pas',
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Table des articles (forfaits, livres, metériel, etc...) du site' AUTO_INCREMENT=52 ;

--
-- Contenu de la table `forfait`
--

INSERT INTO `forfait` (`name`, `category_id`, `description`, `duree`, `picture`, `price`, `is_online`) VALUES
  ('Latlantique emblématique', 1, 'Bla bla bla en HTML', 14, 'images/croisiere_01.jpg', '1899.99', 1),
  ('Locean', 1, 'Bla bla bla en HTML', 14, 'images-modal/croisiere_02.jpg', '1899.99', 1),
  ('Les antilles', 1, 'Bla bla bla en HTML', 14, 'images-modal/croisiere_01.jpg', '1899.99', 1),
  ('La mediterrannée', 1, 'Bla bla bla en HTML', 14, 'images-modal/croisiere_01.jpg', '225.00', 1),
  ('Safari0', 2, 'Bla bla bla en HTML', 14, 'images-modal/automne.jpg', '225.00', 1),
  ('Safari 1', 2, 'Bla bla bla en HTML', 14, 'images-modal/automne.jpg', '225.00', 1),
  ('Safari 2', 2, 'Bla bla bla en HTML', 14, 'images-modal/automne.jpg', '225.00', 1),
  ('Safari 3', 2, 'Bla bla bla en HTML', 14, 'images-modal/croisiere_01.jpg', '225.00', 1),
  ('Safari 4', 2, 'Bla bla bla en HTML', 14, 'images-modal/croisiere_01.jpg', '225.00', 1),
  ('Motoneige 1 (Charlevoix, Québec)', 3, 'Bla bla bla en HTML', 10, 'images-modal/escalade_Husky.jpg', '225.00', 1),
  ('Motoneige 2 (Charlevoix, Québec)', 3, 'Bla bla bla en HTML', 10, 'images-modal/croisiere_01.jpg', '225.00', 1),
  ('Motoneige 3 (Charlevoix, Québec', 3, 'Bla bla bla en HTML', 10, 'images-modal/croisiere_01.jpg', '225.00', 1),
  ('Motoneige4 (Charlevoix, Québec)', 3, 'Bla bla bla en HTML', 10, 'images-modal/croisiere_01.jpg', '225.00', 1),
  ('Chiens et gîtes du grand nord1', 4, 'Bla bla bla en HTML',3 , 'images-modal/chiens_traineau.jpg', '225.00', 1),
  ('Chiens et gîtes du grand nord2', 4, 'Bla bla bla en HTML', 3, 'images-modal/croisiere_01.jpg', '225.00', 1),
  ('Chiens et gîtes du grand nord3', 4, 'Bla bla bla en HTML', 3, 'images-modal/croisiere_01.jpg', '225.00', 1),
  ('Chiens et gîtes du grand nord4', 4, 'Bla bla bla en HTML', 3, 'images-modal/croisiere_01.jpg', '225.00', 1),
  ('Formule famille1', 5, 'Bla bla bla en HTML', 7, 'images-modal/croisiere_01.jpg', '225.00', 1),
  ('Formule famille2', 5, 'Bla bla bla en HTML', 7, 'images-modal/croisiere_01.jpg', '225.00', 1),
  ('Formule famille3', 5, 'Bla bla bla en HTML', 7, 'images-modal/croisiere_01.jpg', '225.00', 1),
  ( 'Formule famille4', 5, 'Bla bla bla en HTML', 7, 'photo_article.jpg', '112.00', 1);
--
-- Structure de la table `forfait_category`
--
CREATE TABLE IF NOT EXISTS `forfait_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id (clef principale) catégorie',
  `name` varchar(256) NOT NULL COMMENT 'Nom de la catégorie',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Table des catégories des articles du site' AUTO_INCREMENT=6 ;
--
-- Contenu de la table `forfait_category`
--
INSERT INTO `forfait_category` (`id`, `name`) VALUES
  (1, 'Croisiere'),
  (2, 'Aventure'),
  (3, 'Sport d''hiver'),
  (4, 'Nature'),
  (5, 'Famille');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id (clef principale) utilisateur',
  `username` varchar(128) NOT NULL COMMENT 'Username',
  `password_hash` varchar(128) NOT NULL COMMENT 'Hash du mot de passe',
  `firstname` varchar(128) NOT NULL COMMENT 'Prénom',
  `lastname` varchar(256) NOT NULL COMMENT 'Nom',
  `email` varchar(128) NOT NULL COMMENT 'Adresse courriel utilisateur',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Table des utilisateurs du site' AUTO_INCREMENT=191 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password_hash`, `firstname`, `lastname`, `email`) VALUES
  (188, 'gp', '$2y$10$qgHMNfbLXi0C90dMVratou9TMQ/zf9Le/mIkVQF9856lYlZvVHKg2', 'Gilles', 'Pénissard', 'gilles.penissard@isi-mtl.com'),
  (189, 'pinocchio', '$2y$10$HMedEASO9EmJAYK0MayBzud05y.WacMwvtilOCivigCMFlVkGSHS2', 'Pinocchio', 'La marionetta', 'pinocchio.marionetta@isi-mtl.com'),
  (190, 'jiminy', '$2y$10$bmywgS/L.oHNJnZnI4Xc9e82yzLkQjQoFXthoBatwVBRhRQik7scW', 'Jiminy', 'Cricket', 'jiminy.cricket@isi-mtl.com');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `forfait`
--
ALTER TABLE `forfait`
ADD CONSTRAINT `forfait_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `forfait_category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
