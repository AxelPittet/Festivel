-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  ven. 18 juin 2021 à 09:04
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `festivel`
--

-- --------------------------------------------------------

--
-- Structure de la table `artists`
--

DROP TABLE IF EXISTS `artists`;
CREATE TABLE IF NOT EXISTS `artists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artistName` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `picture` varchar(45) NOT NULL,
  `description` varchar(800) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `artistName` (`artistName`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `artists`
--

INSERT INTO `artists` (`id`, `artistName`, `email`, `picture`, `description`) VALUES
(1, 'Damso', 'damso.pro@cpnv.ch', 'damso.png', 'Damso est un rappeur et beatmaker originaire de Bruxelles en Belgique. Cet auteur, compositeur et interprète est également membre du collectif OPG (Original Player Gansta). La première réalisation de Damso, publiée gratuitement en 2014, s\'intitule Salle d\'Attente. En 2016, il signe avec le groupe Universal et fait son entrée dans les classements des meilleures ventes en France avec le simple « Débrouillard », puis « Bruxellesvie », respectivement 187ème et 101ème. Une montée en puissance qui prépare idéalement la publication de son premier album studio, Batterie Faible, en juillet 2016.'),
(2, 'PLK', 'polak.pro@cpnv.ch', 'PLK.jpg', 'Agé de seulement 23 ans, PLK a une armoire à disque d’or bien remplie. Il intègre, dès ses 14 ans, différents collectifs comme Panama Bende ou La Confrérie. Ces deux groupes s’illustrent notamment via des freestyles et des open-mics, et le premier réussira à se faire un petit nom. PLK sortira son premier EP solo en 2015, nommé Peur de me tromper. Par la suite, il rejoindra le label Panenka Music du beatmaker Fonky Flav’, et c’est à ce moment que les choses sérieuses commencent. Avec son dernier album \"Enna\" il est prêt à vous faire turn-up.'),
(3, 'Larry', 'larry.pro@cpnv.ch', 'larry.jpg', 'Du haut de ses 23 ans, Larry se définit lui-même comme un « enfant compliqué ». Un morceau du même nom figure sur sa première mixtape « Cité Blanche ». Pourtant Larry est un artiste à la rime ciselée et à l’énergie sauvage qui a vu sa carrière décoller très vite. Peu de temps est passé entre les freestyles donnés en bas de chez lui, à Elsau et son premier single d’or « Woin Woin » aux côtés de RK. Avec une fanbase grandissante, Larry est plus que jamais l’artiste à surveiller de ces prochaines années.'),
(4, 'Vald', 'valentin.pro@cpnv.ch', 'Vald.jpg', 'Le hip-hop français possède désormais toute une légion de rappeurs talentueux qui se sont construit une belle réputation. Au cours de ces dernières années, Vald a su imposer son style et prouver tout son talent dans toute la France. C\'est est un artiste réputé pour sa fascination pour l’absurde, qu’il n’hésite pas à exhiber dans ces clips. Il aborde aussi souvent les thèmes de la violence et de l’érotisme dans ces morceaux. C\'est un des rappeur à suivre de très près.'),
(5, 'Nekfeu', 'nekfeu.pro@cpnv.ch', 'Nekfeu.jpg', 'Nekfeu décide de sortir son premier album solo en 2015. Intitulé Feu, il contient des titres comme On Verra, qui dépasse les 40 millions de vues sur sa chaîne officielle Youtube ou encore Reuf. Pour cette chanson, le rappeur niçois peut compter sur un invité de marque : le chanteur britannique Ed Sheeran, qui est depuis devenu son ami. L’album quant à lui est un immense succès critique acclamé par la presse spécialisée. Il est même en rupture de stock et le concert de promotion prévu le 8 juin 2015 doit être annulé car le succès dépasse toutes les attentes. Sans surprise, Feu devient disque d’or en moins d’un mois. Imaginez-vous seulment un insatant pouvoir assister un l\'un de ses concerts. C\'est possible cet été à Festivel.'),
(6, 'Freeze Corleone', 'freeze.ekip@cpnv.ch', 'freeze.jpg', 'Freeze Corleone est connu pour ses couplets tranchants, abordant régulièrement les théories du complot, mais aussi pour ses nombreux surnoms (Chen Zen, Tom Elvis, Professeur Agrégé, …) et ses gimmicks dont le fameux “ekip” repris par son public. Le rappeur semble développer sa carrière en étant influencé par des artistes provenant d\'outre-Atlantique comme Fredo Santana ou Roi Heenok, parfois mentionnés dans ses titres, mais aussi en suivant le rayonnement du rap US des scènes d\'Atlanta et de Chicago. Il propulse en France, avec d\'autres rappeurs, comme Ashe 22, le genre musical de la UK drill, dont il est l\'un des principaux ambassadeurs dans l\'hexagone. EKIP'),
(7, 'Zola', 'zola.pro@cpnv.ch', 'Zola.jpg', 'Zola était membre du groupe Osiris et est signé sur le label français Truth Records, fondé par son cousin Nosky et son grand frère Zola Senior, ainsi qu\'en licence chez AWA.Il se fait connaître en solo notamment à travers sa série de morceaux “#alloicizolaski” en 2017. Certains médias rap contribuent grandement à sa notoriété et font de lui un des rookie du rap français en 2018. C\'est après son BAC Littéraire obtenu en 2018 qu\'il décide de se consacrer entièrement à la musique, et prépare ainsi son premier album.'),
(8, 'Laylow', 'laylow.pro@cpnv.ch', 'laylow.jpg', 'Auteur, interprète, producteur, Laylow est un grand passionné de cinéma en tout genre souhaitant mettre en avant sa créativité, et dit participer également à la réalisation et au montage de ses clips ; une envie pour pouvoir maitriser au mieux son art, notamment avec l\'utilisation de divers logiciels dont il a appris à se servir à l\'aide de tutoriels sur Internet, fruit de son époque et de sa génération connectée et “digitale”. Par ailleurs, il ne ferme pas la porte au cinéma et serait ouvert à une expérience en tant qu\'acteur. Avant ça, il est près à faire vibrer la scène du Festivel.'),
(9, 'PNL', 'pnl.onizuka@cpnv.ch', 'PNL.jpg', 'Le succès du duo est en partie imputé à son approche de l\'industrie musicale : n\'ayant accordé aucune interview, aucune intervention publique, les deux frères semblent tout à fait insaisissables par les médias. Ce relatif anonymat a grandement contribué à bâtir le “mythe PNL”, celui de deux “banlieusards” déchirés entre le vice et la raison, la drogue et la musique, n\'ayant compté que sur eux-mêmes et leurs proches pour percer et désormais occuper le devant de la scène du rap français aux côtés d\'autres artistes de renom. Et cet été, ils sont présents pour cet événement d\'ampleur.'),
(10, 'Julien Beats', 'julien.beouts@cpnv.ch', 'julien1.jpg', 'Il n\'a que douze ans et envoie des \"balles\" en rafale à tout le petit monde de la musique urbaine. Par balles, comprenez tacles à la gorge, pieds décollés et poings serrés. Face caméra, ce petit homme à lunettes au langage châtié qui tranche avec ses airs de premier de la classe n\'épargne personne. Il vient vous faire ses plus grands titres cet été au Festivel pour le bien du rap français.');

-- --------------------------------------------------------

--
-- Structure de la table `concerts`
--

DROP TABLE IF EXISTS `concerts`;
CREATE TABLE IF NOT EXISTS `concerts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `startTime` varchar(6) DEFAULT NULL,
  `endTime` varchar(6) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `days_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_concerts_artists_idx` (`artist_id`),
  KEY `fk_concerts_days1_idx` (`days_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `concerts`
--

INSERT INTO `concerts` (`id`, `startTime`, `endTime`, `artist_id`, `days_id`) VALUES
(1, '18:30', '20:00', 1, 1),
(2, '19:00', '21:00', 2, 1),
(3, '20:30', '22:00', 3, 1),
(4, '21:00', '23:00', 4, 1),
(5, '22:30', '00:00', 5, 1),
(6, '23:00', '01:00', 6, 1),
(7, '18:30', '20:00', 7, 2),
(8, '19:00', '21:00', 8, 2),
(9, '21:30', '00:00', 9, 2),
(10, '20:30', '22:00', 6, 2),
(11, '22:30', '00:00', 10, 2);

-- --------------------------------------------------------

--
-- Structure de la table `concerts_workthrough_scenes`
--

DROP TABLE IF EXISTS `concerts_workthrough_scenes`;
CREATE TABLE IF NOT EXISTS `concerts_workthrough_scenes` (
  `concerts_id` int(11) NOT NULL,
  `scenes_id` int(11) NOT NULL,
  KEY `fk_concerts_has_scenes_scenes1_idx` (`scenes_id`),
  KEY `fk_concerts_has_scenes_concerts1_idx` (`concerts_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `concerts_workthrough_scenes`
--

INSERT INTO `concerts_workthrough_scenes` (`concerts_id`, `scenes_id`) VALUES
(4, 1),
(3, 2),
(2, 1),
(1, 2),
(5, 2),
(6, 1),
(7, 2),
(8, 1),
(9, 1),
(10, 2),
(11, 2);

-- --------------------------------------------------------

--
-- Structure de la table `days`
--

DROP TABLE IF EXISTS `days`;
CREATE TABLE IF NOT EXISTS `days` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `date` (`date`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `days`
--

INSERT INTO `days` (`id`, `date`) VALUES
(1, '2021-06-26'),
(2, '2021-06-27');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `vip` tinyint(4) NOT NULL,
  `price` decimal(45,0) NOT NULL,
  `orderNumber` decimal(45,0) NOT NULL,
  `day` varchar(45) NOT NULL,
  `userEmailAddress` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `orderNumber` (`orderNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `name`, `vip`, `price`, `orderNumber`, `day`, `userEmailAddress`) VALUES
(12, 'Billet individuel pour le 26 Juin', 0, '40', '1', '2021-06-26', 'axel.pittet@cpnv.ch'),
(13, 'Billet individuel pour le 26 Juin', 0, '40', '2', '2021-06-26', 'axel.pittet@cpnv.ch'),
(16, 'Billet individuel pour le 26 Juin', 1, '60', '3', '2021-06-26', 'axel.pittet@cpnv.ch');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `vip` tinyint(4) NOT NULL,
  `price` decimal(45,0) NOT NULL,
  `reservationNumber` decimal(45,0) NOT NULL,
  `days_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reservationNumber` (`reservationNumber`),
  KEY `fk_reservations_days1_idx` (`days_id`),
  KEY `fk_reservations_users1_idx` (`users_id`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `scenes`
--

DROP TABLE IF EXISTS `scenes`;
CREATE TABLE IF NOT EXISTS `scenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `size` varchar(45) NOT NULL,
  `capacity` decimal(45,0) NOT NULL,
  `position` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `scenes`
--

INSERT INTO `scenes` (`id`, `name`, `size`, `capacity`, `position`) VALUES
(1, 'Scène Principal', '300', '7000', 'Au centre de la place des fêtes'),
(2, 'Scène Secondaire', '150', '3000', 'Derrière la scène principal, toujours au centre de la salle des fêtes');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  `userType` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `email`, `phoneNumber`, `password`, `userType`) VALUES
(1, 'Cornaz', 'Luke', 'luke.cornaz@cpnv.ch', '079 346 31 62', '$2y$10$g1kwaRZMaH267n5jnFRHXeyuqrJHTZYNPOv/Wne/3jryAheQgJMt2', 2),
(2, 'Pittet', 'Axel', 'axel.pittet@cpnv.ch', '079 689 76 81', '$2y$10$8LvKQo6m3pB9TD5VWa06QeuRSX1Tx/HBKcjMknc5IbuthG2fvmejy', 2),
(3, 'Volery', 'Sven', 'sven.volery@cpnv.ch', '079 847 49 10', '$2y$10$rH9dRTrzsrf81ZuN.8PqEuyLY4c6ExDbgR/fOibEYgLZgY7D6noL.', 2),
(4, 'test', 'test', 'test@cpnv.ch', '079 516 52 37', '$2y$10$L6.oUUL0dYnfo0kJmimWYejTSfTsblrs5Gs9mD6y6kCx3OlQRUn3K', 1),
(5, 'Nom', 'Prénom', 'VirginLord@cpnv.ch', '155555555555', '$2y$10$nvls3nOlfQ9GHWZMQDFZv.eSvx9IISzS9ovdx4QW2OjU6tTTqj4g6', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
