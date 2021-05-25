-- Author : Luke Cornaz, Axel Pittet, Sven Volery
-- Hôte : 127.0.0.1:3308
-- Généré le :  mar. 25 mai 2021 à 09:35
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `artistName` (`artistName`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `artists`
--

INSERT INTO `artists` (`id`, `artistName`, `email`, `picture`) VALUES
(1, 'Damso', 'damso.pro@cpnv.ch', 'NULL'),
(2, 'PLK', 'polak.pro@cpnv.ch', 'NULL'),
(3, 'Larry', 'larry.pro@cpnv.ch', 'NULL'),
(4, 'Vald', 'valentin.pro@cpnv.ch', 'NULL'),
(5, 'Nekfeu', 'nekfeu.pro@cpnv.ch', 'NULL'),
(6, 'Freeze Coreleone', 'freeze.ekip@cpnv.ch', 'NULL'),
(7, 'Zola', 'zola.pro@cpnv.ch', 'NULL'),
(8, 'Laylow', 'laylow.pro@cpnv.ch', 'NULL'),
(9, 'PNL', 'pnl.onizuka@cpnv.ch', 'NULL'),
(10, 'Julien Beats', 'julien.beouts@cpnv.ch', 'NULL');

-- --------------------------------------------------------

--
-- Structure de la table `concerts`
--

DROP TABLE IF EXISTS `concerts`;
CREATE TABLE IF NOT EXISTS `concerts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `startTime` time(6) NOT NULL,
  `endTime` time(6) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `days_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_concerts_artists_idx` (`artist_id`),
  KEY `fk_concerts_days1_idx` (`days_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `concerts`
--

INSERT INTO `concerts` (`id`, `startTime`, `endTime`, `artist_id`, `days_id`) VALUES
(1, '18:30:00.000000', '20:00:00.000000', 1, 1),
(2, '19:00:00.000000', '21:00:00.000000', 2, 1),
(3, '20:30:00.000000', '22:00:00.000000', 3, 1),
(4, '21:00:00.000000', '23:00:00.000000', 4, 1),
(5, '22:30:00.000000', '00:00:00.000000', 5, 1),
(6, '23:00:00.000000', '01:00:00.000000', 6, 1),
(7, '18:30:00.000000', '20:00:00.000000', 7, 2),
(8, '19:00:00.000000', '21:00:00.000000', 8, 2),
(9, '21:30:00.000000', '00:00:00.000000', 9, 2),
(10, '20:30:00.000000', '22:00:00.000000', 6, 2),
(11, '22:30:00.000000', '00:00:00.000000', 10, 2);

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
  `reservations_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `date` (`date`),
  KEY `fk_days_reservations1_idx` (`reservations_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `days`
--

INSERT INTO `days` (`id`, `date`, `reservations_id`) VALUES
(1, '2021-06-26', 0),
(2, '2021-06-27', 0);

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vip` tinyint(4) NOT NULL,
  `price` decimal(45,0) NOT NULL,
  `reservationNumber` decimal(45,0) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reservationNumber` (`reservationNumber`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `phoneNumber` decimal(45,0) NOT NULL,
  `password` varchar(45) NOT NULL,
  `userType` varchar(45) NOT NULL,
  `reservations_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `fk_users_reservations1_idx` (`reservations_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `email`, `phoneNumber`, `password`, `userType`, `reservations_id`) VALUES
(1, 'Cornaz', 'Luke', 'luke.cornaz@cpnv.ch', '793463162', 'Luke', '2', 0),
(2, 'Pittet', 'Axel', 'axel.pittet@cpnv.ch', '796897681', 'Axel', '2', 0),
(3, 'Volery', 'Sven', 'sven.volery@cpnv.ch', '798494910', 'Sven', '2', 0),
(4, 'Pereira', 'Gabriel', 'gabriel.pereira@cpnv.ch', '797797979', 'Gabriel', '1', 0),
(5, 'Meylan', 'Loik', 'loik.meylan@cpnv.ch', '767767676', 'Loik', '1', 0),
(6, 'Lavaud', 'Mahe', 'mahe.lavaud@cpnv.ch', '791011011', 'Mahe', '1', 0),
(7, 'Santos', 'Tiago', 'tiago.santos@cpnv.ch', '757757575', 'Tiago', '1', 0),
(8, 'Cuany', 'Simon', 'simon.cuany@cpnv.ch', '781483038', 'Simon', '1', 0),
(9, 'Cornaz', 'Cédric', 'cedric.cornaz@cpnv.ch', '793065626', 'Cedric', '1', 0),
(10, 'Rapin', 'Mathis', 'mathis.rapin@cpnv.ch', '795002030', 'Mathis', '1', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
