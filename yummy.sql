-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 08 mai 2020 à 21:40
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `yummy`
--

-- --------------------------------------------------------

--
-- Structure de la table `breakfast`
--

DROP TABLE IF EXISTS `breakfast`;
CREATE TABLE IF NOT EXISTS `breakfast` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `breakfast`
--

INSERT INTO `breakfast` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Simple 1 persone', 'Laptop01', 10.00, 'images/bekf1.JPG'),
(2, 'Clasique  2 personne', 'Bag01', 18.00, 'images/bekf2.JPG'),
(3, 'Clasique  4 personne', 'iphone01', 35.00, 'images/bekf3.JPG'),
(4, 'Tunisien', 'cxkisl', 12.00, 'images/bekf4.JPG'),
(5, 'Royal', 'L1', 35.00, 'images/bekf5.JPG'),
(6, 'Complet', 'cxs', 30.00, 'images/bekf6.JPG'),
(7, 'Francais', 'Lfapvohtop01', 25.00, 'images/b.JPG'),
(8, 'Anglais', 'cxkfisl', 27.00, 'images/b.JPG');

-- --------------------------------------------------------

--
-- Structure de la table `deserts`
--

DROP TABLE IF EXISTS `deserts`;
CREATE TABLE IF NOT EXISTS `deserts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `deserts`
--

INSERT INTO `deserts` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Pancake', 'Laptop01', 5.00, 'images/dessert-1.JPG'),
(2, 'Tiramisu', 'Bag01', 6.00, 'images/dessert-2.JPG'),
(3, 'Fondant chocolat', 'iphone01', 7.00, 'images/dessert-3.JPG'),
(4, 'Glace', 'cxkisl', 5.00, 'images/dessert-4.JPG'),
(5, 'Cake ice cream', 'Lopll1', 10.00, 'images/dessert-5.JPG'),
(6, 'Jus', 'cxsl4', 6.00, 'images/dessert-5.JPG');

-- --------------------------------------------------------

--
-- Structure de la table `dinner`
--

DROP TABLE IF EXISTS `dinner`;
CREATE TABLE IF NOT EXISTS `dinner` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `dinner`
--

INSERT INTO `dinner` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Plat viande', 'Laptop01', 25.00, 'images/dinner-1.JPG'),
(2, 'Soupe coreen', 'Bag01', 19.00, 'images/dinner-2.JPG'),
(3, 'Plat grillet', 'iphone01', 20.00, 'images/dinner-3.JPG'),
(4, 'Sauce salamon', 'cxkisl', 16.00, 'images/dinner-4.JPG'),
(5, 'Toste', 'Ljk01', 10.00, 'images/dinner-5.JPG'),
(6, 'Spagitti sauce blanche', 'cxskdl', 15.00, 'images/dinner-6.JPG');

-- --------------------------------------------------------

--
-- Structure de la table `drinks`
--

DROP TABLE IF EXISTS `drinks`;
CREATE TABLE IF NOT EXISTS `drinks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `drinks`
--

INSERT INTO `drinks` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Cocktail strawberry', 'Laptop01', 10.00, 'images/maxresdefault.JPG'),
(2, 'Mojito', 'Bag01', 11.00, 'images/maxresdefault5.JPG'),
(3, 'Cocktail orange', 'iphone01', 9.00, 'images/maxresdefault2.JPG'),
(4, 'Cola', 'cxkisl', 7.00, 'images/maxresdefault3.JPG'),
(5, 'Cocktail menthe', 'Lopsqjk01', 6.00, 'images/maxresdefault.JPG'),
(6, 'Cocktail peche', 'cxhujosl', 7.00, 'images/maxresdefault3.JPG');

-- --------------------------------------------------------

--
-- Structure de la table `lunch`
--

DROP TABLE IF EXISTS `lunch`;
CREATE TABLE IF NOT EXISTS `lunch` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lunch`
--

INSERT INTO `lunch` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Salamon griller + salade', 'Laptop01', 25.00, 'images/lunch-1.JPG'),
(2, 'Poulet grille + salade', 'Bag01', 24.00, 'images/lunch-2.JPG'),
(3, 'Scalloppe pane + sauce + salade', 'iphone01', 30.00, 'images/lunch-3.JPG'),
(4, 'Fruit de mer + salade ', 'cxkisl', 28.00, 'images/lunch-4.JPG'),
(5, 'Plat coreen', 'Laptoerp01', 28.00, 'images/lunch-5.JPG'),
(6, 'Plat viande', 'Berag01', 30.00, 'images/lunch-6.JPG'),
(7, 'Plat de poulet rôti convivial', 'ipherone01', 26.00, 'images/lunch-7.JPG'),
(8, 'Plat poulet roti', 'cxerkisl', 25.00, 'images/lunch-8.JPG');

-- --------------------------------------------------------

--
-- Structure de la table `pizza`
--

DROP TABLE IF EXISTS `pizza`;
CREATE TABLE IF NOT EXISTS `pizza` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pizza`
--

INSERT INTO `pizza` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Pizza thon', 'Laptop01', 7.00, 'images/11.JPG'),
(2, 'Pizza 4 fromage', 'Bag01', 9.00, 'images/22.JPG'),
(3, 'Pizza 4 saison', 'iphone01', 10.00, 'images/33.JPG'),
(4, 'Pizza fruit de mer', 'cxkisl', 14.00, 'images/44.JPG'),
(5, 'Pizza margherita', 'Lop01', 7.00, 'images/55.JPG'),
(6, 'Pizza Beefy', 'cxsl', 12.00, 'images/66.JPG');

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

DROP TABLE IF EXISTS `plat`;
CREATE TABLE IF NOT EXISTS `plat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `plat`
--

INSERT INTO `plat` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Spagitti', 'Laptop01', 10.00, 'images/spag.JPG'),
(2, 'Soupe', 'Bag01', 5.00, 'images/soup.JPG'),
(3, 'Riz', 'iphone01', 7.00, 'images/riz1.JPG'),
(4, 'Poulet grillé', 'cxkisl', 8.00, 'images/griller.JPG'),
(5, 'Ouja', 'Lojkp01', 10.00, 'images/ojja.JPG'),
(6, 'Lasagna', 'cxsmil', 8.00, 'images/laz.JPG');

-- --------------------------------------------------------

--
-- Structure de la table `salade`
--

DROP TABLE IF EXISTS `salade`;
CREATE TABLE IF NOT EXISTS `salade` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salade`
--

INSERT INTO `salade` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Salade nicoise', 'Laptop01', 10.00, 'images/sc.JPG'),
(2, 'Salade classic', 'Bag01', 5.00, 'images/scl.JPG'),
(3, 'Salade Cesar', 'iphone01', 7.00, 'images/sg.JPG'),
(4, 'Salade crudites', 'cxkisl', 8.00, 'images/sr.JPG'),
(5, 'Salade riz', 'L6op01', 10.00, 'images/SM.JPG'),
(6, 'Salade d\'hiver', 'cxs5l', 8.00, 'images/SM.JPG');

-- --------------------------------------------------------

--
-- Structure de la table `sandwich`
--

DROP TABLE IF EXISTS `sandwich`;
CREATE TABLE IF NOT EXISTS `sandwich` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sandwich`
--

INSERT INTO `sandwich` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Sandwich kabeb', 'Laptop01', 8.00, 'images/maxresdefault.JPG'),
(2, 'Sandwich chawarma', 'Bag01', 7.00, 'images/maxresdefault5.JPG'),
(3, 'Sandwich thon', 'iphone01', 6.00, 'images/maxresdefault2.JPG'),
(4, 'Sandwich jombon', 'cxkisl', 6.00, 'images/maxresdefault3.JPG'),
(5, 'Sandwich scalope', '14724', 7.00, 'images/maxresdefault4.JPG'),
(6, 'Sandwich poulet', '1346', 9.00, 'images/maxresdefault6.JPG');

-- --------------------------------------------------------

--
-- Structure de la table `wine`
--

DROP TABLE IF EXISTS `wine`;
CREATE TABLE IF NOT EXISTS `wine` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `wine`
--

INSERT INTO `wine` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Vin rouge Mornag', 'Laptop01', 25.00, 'images/wine-1.JPG'),
(2, 'Vin rouge Chateau', 'Bag01', 27.00, 'images/wine-2.JPG'),
(3, 'Vin rose Mornag', 'iphone01', 25.00, 'images/wine-3.JPG'),
(4, 'Vin rose chateau', 'cxkisl', 30.00, 'images/wine-4.JPG'),
(5, 'Vin blanc Mornag', 'Llaptop01', 26.00, 'images/wine-5.JPG'),
(6, 'Vin blanc Chateau', 'Ballg01', 28.00, 'images/wine-6.JPG'),
(7, 'Vin rouge 6 ft 6', 'iphomlne01', 24.00, 'images/wine-7.JPG'),
(8, 'Vin rouge Baham\'s', 'cxkkjisl', 27.00, 'images/wine-8.JPG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
