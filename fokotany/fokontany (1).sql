-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 21 déc. 2020 à 20:18
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fokontany`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nom_admin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom_admin`, `password`) VALUES
(1, 'Angela', '202cb962ac59075b964b07152d234b70'),
(2, 'Darcia', '202cb962ac59075b964b07152d234b70'),
(3, 'Kanto', '202cb962ac59075b964b07152d234b70'),
(4, 'Kenny', '202cb962ac59075b964b07152d234b70'),
(5, 'Salema', '202cb962ac59075b964b07152d234b70'),
(6, 'Nirina', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Structure de la table `carnet_fokotany`
--

DROP TABLE IF EXISTS `carnet_fokotany`;
CREATE TABLE IF NOT EXISTS `carnet_fokotany` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_Integration` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1490 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `carnet_fokotany`
--

INSERT INTO `carnet_fokotany` (`id`, `nom`, `prenom`, `date_Integration`) VALUES
(1, 'RAKOTO', 'Mirana', '2000-10-10'),
(2, 'fano', 'hery', '2010-02-11'),
(3, 'bako', 'te', '2002-06-22'),
(4, 'Ahmed', 'Buckminster', '2020-03-25'),
(19, 'Dai', 'Knox', '2021-05-05'),
(34, 'Tucker', 'Lawrence', '2020-10-15'),
(49, 'Zelenia', 'Mia', '2021-05-11'),
(64, 'Lucius', 'Dana', '2021-03-10'),
(79, 'Ramona', 'Tanek', '2020-10-18'),
(94, 'Susan', 'Kevyn', '2020-03-10'),
(109, 'Sylvia', 'Pandora', '2021-12-01'),
(124, 'Brenna', 'Leroy', '2020-10-21'),
(139, 'Clare', 'Athena', '2020-07-30'),
(154, 'Tucker', 'Arthur', '2021-09-01'),
(169, 'Evangeline', 'Marvin', '2020-11-01'),
(184, 'Francis', 'Hope', '2021-07-26'),
(199, 'Jerry', 'Robin', '2021-05-17'),
(214, 'Fallon', 'Cecilia', '2021-02-18'),
(229, 'Genevieve', 'Branden', '2021-10-17'),
(244, 'Hayes', 'Byron', '2021-07-24'),
(259, 'Mia', 'Emmanuel', '2021-05-24'),
(274, 'Sybil', 'Zena', '2020-03-01'),
(289, 'Melyssa', 'Uta', '2020-08-25'),
(304, 'Sydnee', 'Nathaniel', '2021-11-26'),
(319, 'Reuben', 'Harper', '2021-03-11'),
(334, 'Rahim', 'Deanna', '2021-08-13'),
(349, 'Zachary', 'Casey', '2020-03-11'),
(364, 'Cedric', 'Holmes', '2021-08-26'),
(379, 'Astra', 'Griffith', '2021-03-16'),
(394, 'Cedric', 'Timon', '2020-03-24'),
(409, 'Barrett', 'Madison', '2020-01-07'),
(424, 'Yasir', 'Bruno', '2021-12-13'),
(439, 'Jared', 'Clare', '2021-02-12'),
(454, 'Malcolm', 'Iola', '2020-12-08'),
(469, 'Aimee', 'Idola', '2020-02-26'),
(484, 'Axel', 'Fletcher', '2021-03-10'),
(499, 'Russell', 'Brian', '2020-04-21'),
(514, 'Len', 'Iris', '2020-09-29'),
(529, 'Shad', 'Ann', '2020-01-24'),
(544, 'Lawrence', 'Arsenio', '2021-01-20'),
(559, 'Adena', 'Reese', '2020-05-13'),
(574, 'Quon', 'Hayfa', '2021-02-17'),
(589, 'Francis', 'Melvin', '2020-12-30'),
(604, 'Abraham', 'Ciara', '2020-05-01'),
(619, 'Preston', 'Jarrod', '2020-11-15'),
(634, 'Brenden', 'Shea', '2020-08-20'),
(649, 'Mikayla', 'Tad', '2021-06-20'),
(664, 'Adrian', 'Lillith', '2020-12-04'),
(679, 'Darryl', 'Shelly', '2020-05-07'),
(694, 'Whilemina', 'Katell', '2020-04-06'),
(709, 'Martina', 'Dante', '2021-12-14'),
(724, 'Keelie', 'Susan', '2020-08-03'),
(739, 'Jack', 'Freya', '2020-09-20'),
(754, 'Jerome', 'Cruz', '2020-03-13'),
(769, 'Molly', 'Bree', '2021-05-24'),
(784, 'Clarke', 'Randall', '2020-07-23'),
(799, 'Acton', 'Jack', '2020-06-18'),
(814, 'Brian', 'Nissim', '2020-07-18'),
(829, 'Howard', 'Martha', '2020-11-19'),
(844, 'Katell', 'Tyler', '2021-07-31'),
(859, 'Dean', 'Jaden', '2021-04-15'),
(874, 'TaShya', 'Dante', '2020-11-13'),
(889, 'Kyle', 'Jasper', '2020-11-20'),
(904, 'Xandra', 'Erasmus', '2020-09-06'),
(919, 'Stacy', 'William', '2020-07-19'),
(934, 'Coby', 'Faith', '2020-03-10'),
(949, 'Joseph', 'Vera', '2021-10-16'),
(964, 'Mason', 'Jessamine', '2021-01-05'),
(979, 'Steven', 'Regan', '2021-01-05'),
(994, 'Sigourney', 'Norman', '2019-12-28'),
(1009, 'Kylynn', 'Eve', '2021-08-04'),
(1024, 'Fletcher', 'Erica', '2021-02-17'),
(1039, 'Rhea', 'Prescott', '2021-04-30'),
(1054, 'Alden', 'Denton', '2021-05-20'),
(1069, 'Piper', 'Margaret', '2021-02-01'),
(1084, 'Mohammad', 'Howard', '2021-08-12'),
(1099, 'Emerson', 'Ashely', '2021-09-24'),
(1114, 'Uriah', 'Melissa', '2020-07-15'),
(1129, 'Latifah', 'Stone', '2021-09-26'),
(1144, 'Nora', 'Demetrius', '2020-02-07'),
(1159, 'Nash', 'Hakeem', '2020-07-12'),
(1174, 'Henry', 'Christen', '2021-07-16'),
(1189, 'Cairo', 'Kirestin', '2021-10-24'),
(1204, 'Abel', 'Whitney', '2020-03-15'),
(1219, 'Honorato', 'Kiara', '2021-11-22'),
(1234, 'Devin', 'Marsden', '2020-08-22'),
(1249, 'David', 'Gisela', '2021-11-18'),
(1264, 'Simon', 'Rogan', '2020-01-18'),
(1279, 'Porter', 'Mona', '2021-04-11'),
(1294, 'Heidi', 'Allistair', '2020-08-19'),
(1309, 'Stephanie', 'Nina', '2021-11-04'),
(1324, 'Deborah', 'Inga', '2020-08-29'),
(1339, 'Dalton', 'Georgia', '2020-03-14'),
(1354, 'Jackson', 'Reese', '2020-05-30'),
(1369, 'Quail', 'Dexter', '2020-12-15'),
(1384, 'Alexandra', 'Karina', '2021-03-23'),
(1399, 'Zachery', 'Lilah', '2020-11-17'),
(1414, 'Susan', 'Basia', '2021-03-14'),
(1429, 'Hillary', 'Jael', '2021-01-10'),
(1444, 'Dale', 'Lance', '2020-11-19'),
(1459, 'Brittany', 'Xander', '2020-09-08'),
(1474, 'Idola', 'Flavia', '2020-06-21'),
(1489, 'Renee', 'Kasimir', '2020-06-24');

-- --------------------------------------------------------

--
-- Structure de la table `certificat_residence`
--

DROP TABLE IF EXISTS `certificat_residence`;
CREATE TABLE IF NOT EXISTS `certificat_residence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_demenagement` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1490 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `certificat_residence`
--

INSERT INTO `certificat_residence` (`id`, `nom`, `prenom`, `date_demenagement`) VALUES
(1, 'Mahefa', 'Antsa', '2019-01-23'),
(2, 'RAKOTO', 'Mirana', '2018-02-15'),
(3, 'bako', 'te', '2020-02-23'),
(4, 'Justin', 'Ishmael', '2020-01-22'),
(19, 'Xanthus', 'Walter', '2021-05-02'),
(34, 'Sydnee', 'Mason', '2021-04-08'),
(49, 'Graham', 'Peter', '2020-06-05'),
(64, 'Cedric', 'Keaton', '2021-01-07'),
(79, 'Kitra', 'Elvis', '2021-06-15'),
(94, 'Ainsley', 'Kuame', '2020-06-04'),
(109, 'Jorden', 'Beau', '2021-10-19'),
(124, 'Connor', 'Lewis', '2020-11-21'),
(139, 'Magee', 'Kenyon', '2021-11-02'),
(154, 'Lisandra', 'Jackson', '2019-12-26'),
(169, 'Amanda', 'Kevin', '2021-08-14'),
(184, 'Yasir', 'Jemima', '2020-12-14'),
(199, 'Tobias', 'Micah', '2020-09-03'),
(214, 'Cameron', 'Quinn', '2020-06-09'),
(229, 'Harper', 'Kelly', '2020-11-03'),
(244, 'Stacy', 'Blair', '2021-07-11'),
(259, 'Linda', 'Quincy', '2021-10-24'),
(274, 'Adrian', 'Len', '2020-10-14'),
(289, 'Malik', 'Nomlanga', '2020-03-28'),
(304, 'Conan', 'Fulton', '2021-01-30'),
(319, 'Macon', 'Noah', '2020-08-10'),
(334, 'Ruth', 'Dawn', '2020-03-31'),
(349, 'Xavier', 'Colin', '2021-07-02'),
(364, 'Yasir', 'Hector', '2020-07-29'),
(379, 'Rafael', 'Lucy', '2021-09-27'),
(394, 'Brennan', 'Whitney', '2020-05-06'),
(409, 'Iona', 'Chava', '2020-10-23'),
(424, 'Raphael', 'Lee', '2021-05-04'),
(439, 'Sydney', 'Tasha', '2021-09-25'),
(454, 'Fletcher', 'Ifeoma', '2021-11-28'),
(469, 'Rhonda', 'Ila', '2020-12-08'),
(484, 'Rogan', 'Arthur', '2021-08-10'),
(499, 'Carolyn', 'Christian', '2020-01-19'),
(514, 'Xantha', 'Aurelia', '2020-07-31'),
(529, 'Maggy', 'Amity', '2021-02-11'),
(544, 'Chandler', 'Ariana', '2021-01-24'),
(559, 'Galvin', 'Autumn', '2020-10-09'),
(574, 'Gannon', 'Gareth', '2020-02-08'),
(589, 'Kato', 'Hammett', '2021-03-13'),
(604, 'Melyssa', 'Bradley', '2021-04-10'),
(619, 'Hadley', 'Nyssa', '2020-06-03'),
(634, 'Kevyn', 'Dakota', '2021-06-21'),
(649, 'Brock', 'Zorita', '2020-11-15'),
(664, 'Palmer', 'Regina', '2020-04-30'),
(679, 'Griffin', 'Louis', '2020-12-08'),
(694, 'Allegra', 'Lacey', '2021-04-05'),
(709, 'Anne', 'Scarlet', '2021-03-04'),
(724, 'Baxter', 'Xerxes', '2021-11-29'),
(739, 'Jordan', 'Kelly', '2021-04-18'),
(754, 'Wang', 'Bianca', '2021-11-13'),
(769, 'Quin', 'Orli', '2020-11-03'),
(784, 'Marshall', 'Molly', '2021-02-16'),
(799, 'Selma', 'Piper', '2021-05-22'),
(814, 'Melodie', 'Caldwell', '2021-06-09'),
(829, 'Myra', 'Grady', '2020-11-05'),
(844, 'May', 'Destiny', '2020-09-08'),
(859, 'Orson', 'Willa', '2020-02-11'),
(874, 'Kelly', 'Francesca', '2021-12-14'),
(889, 'Keelie', 'Julie', '2020-11-26'),
(904, 'Dorothy', 'Aspen', '2020-05-15'),
(919, 'Zenaida', 'Palmer', '2021-10-11'),
(934, 'Aaron', 'Lucius', '2020-11-14'),
(949, 'Reagan', 'Tanner', '2020-05-01'),
(964, 'Pandora', 'Sage', '2021-11-12'),
(979, 'Jonah', 'Abel', '2020-11-21'),
(994, 'Savannah', 'Harlan', '2020-07-07'),
(1009, 'Lyle', 'Clayton', '2021-11-09'),
(1024, 'Zenaida', 'Raymond', '2021-07-13'),
(1039, 'Yasir', 'Dakota', '2020-07-29'),
(1054, 'Alexander', 'Howard', '2020-09-24'),
(1069, 'Genevieve', 'Mikayla', '2021-02-26'),
(1084, 'Marny', 'Scarlet', '2020-11-17'),
(1099, 'Kaden', 'Vincent', '2021-01-16'),
(1114, 'Orla', 'Matthew', '2020-10-23'),
(1129, 'Mason', 'Serina', '2020-11-22'),
(1144, 'Eve', 'Grant', '2021-03-27'),
(1159, 'Ethan', 'Moana', '2020-04-15'),
(1174, 'Jermaine', 'Macon', '2020-12-29'),
(1189, 'Fiona', 'Hanae', '2021-09-17'),
(1204, 'Octavia', 'Micah', '2020-08-31'),
(1219, 'Jada', 'Magee', '2021-07-30'),
(1234, 'Scott', 'Fulton', '2021-01-26'),
(1249, 'Kennan', 'Jamalia', '2020-01-15'),
(1264, 'Jameson', 'Laurel', '2020-05-29'),
(1279, 'Karly', 'Xantha', '2020-09-24'),
(1294, 'Tyler', 'Barrett', '2021-08-20'),
(1309, 'Allistair', 'Angela', '2020-04-05'),
(1324, 'Yoko', 'Willa', '2020-07-25'),
(1339, 'Brenden', 'Dane', '2021-05-11'),
(1354, 'Ella', 'Devin', '2021-01-23'),
(1369, 'Armand', 'Brock', '2020-04-22'),
(1384, 'Stephanie', 'Victor', '2020-05-21'),
(1399, 'Channing', 'Keith', '2019-12-28'),
(1414, 'Abdul', 'Griffith', '2021-07-24'),
(1429, 'Cade', 'Amanda', '2020-03-18'),
(1444, 'Jane', 'Kelsie', '2020-09-17'),
(1459, 'Dara', 'Gemma', '2020-11-02'),
(1474, 'Jasper', 'Jesse', '2020-05-22'),
(1489, 'Alexis', 'Kenneth', '2020-03-13');

-- --------------------------------------------------------

--
-- Structure de la table `impot`
--

DROP TABLE IF EXISTS `impot`;
CREATE TABLE IF NOT EXISTS `impot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `montant` int(11) NOT NULL,
  `reste` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date_paiement` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `impot`
--

INSERT INTO `impot` (`id`, `type`, `montant`, `reste`, `nom`, `date_paiement`) VALUES
(1, 'Poubelle', 500, 1000, 'Mahefa', '2020-04-22'),
(2, 'poubelle', 5000, 1000, 'kanto', '2014-02-20'),
(3, 'poubelle', 1000, 5000, 'leka', '2022-08-20'),
(4, 'poubelle', 2000, 4000, 'murielle', '2022-04-20'),
(5, 'cotisation', 10000, 10000, 'naya', '2026-09-20'),
(6, 'cotisation', 20000, 0, 'david', '2001-09-20'),
(7, 'cotisation', 5000, 15000, 'koto', '2014-12-20');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `id_personne` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `date_Naissance` date NOT NULL,
  `date_Integration` date NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `zone_localisation` varchar(255) NOT NULL,
  PRIMARY KEY (`id_personne`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id_personne`, `Nom`, `Prenom`, `date_Naissance`, `date_Integration`, `adresse`, `sexe`, `zone_localisation`) VALUES
(1, 'Mahefa', 'Antsa', '1978-04-04', '2012-05-04', 'II D Antaniavo', 'Féminin', 'sud'),
(4, 'Naivo', 'Kanto', '2021-02-01', '2022-06-18', 'IIIN', 'Femme', 'Nord'),
(5, 'Ravo', 'Tsiro', '2021-03-06', '0225-07-20', 'IVD', 'Male', 'Sud'),
(6, 'Rakoto', 'sambatra', '2022-03-04', '2001-06-17', 'lot IID ', 'Femelle', 'Sud'),
(7, 'koto', 'zaka', '2012-12-19', '2012-05-20', 'lot 4D', 'masculin', 'sud'),
(8, 'kaya', 'velo', '2007-09-20', '2018-05-20', 'lot 12D', 'masculin', 'est'),
(9, 'leka', 'ravo', '2001-01-20', '2010-01-20', 'lot 1D', 'masculi', 'est'),
(10, 'murielle', 'shakira', '2017-03-20', '2010-01-20', 'lot 9D', 'masculin', 'est'),
(11, 'naya', 'njara', '2002-02-20', '2012-02-20', 'lot 2D', 'feminin', 'ouest'),
(12, 'david', 'njara', '2009-07-20', '2012-09-20', 'lot 8D', 'feminin', 'ouest'),
(13, 'lenaivo', 'mahandry', '2014-03-19', '2012-05-19', 'lot 7D', 'masculin', 'est'),
(14, 'lenaivo', 'mahandry', '2014-03-19', '2012-05-19', 'lot 7D', 'masculin', 'est'),
(15, 'lenaivo', 'mahandry', '2014-03-19', '2012-05-19', 'lot 7D', 'masculin', 'est'),
(16, 'lenaivo', 'mahandry', '2014-03-19', '2012-05-19', 'lot 7D', 'masculin', 'est'),
(17, 'lenaivo', 'mahandry', '2014-03-19', '2012-05-19', 'lot 7D', 'masculin', 'est');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
