-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : database:3306
-- Généré le :  mar. 01 déc. 2020 à 10:16
-- Version du serveur :  10.4.2-MariaDB-1:10.4.2+maria~bionic
-- Version de PHP :  7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `films`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `actors` varchar(255) NOT NULL,
  `years` int(11) NOT NULL,
  `synopsis` text NOT NULL,
  `duration` int(11) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id`, `name`, `director`, `actors`, `years`, `synopsis`, `duration`, `poster`, `color`) VALUES
(1, 'Blue Velvet', 'David Lynch ', 'Isabella Rossellini, Kyle MacLachlan, Dennis Hopper, Laura Dern', 1986, 'The discovery of a severed human ear found in a field leads a young man on an investigation related to a beautiful, mysterious nightclub singer and a group of psychopathic criminals who have kidnapped her child.', 120, '', 'blue'),
(2, 'Soylent Green', 'Richard Fleischer', 'Charlton Heston', 1973, 'In the world ravaged by the greenhouse effect and overpopulation, an NYPD detective investigates the murder of a big company CEO.', 93, '', 'green'),
(3, 'Orfeu Negro', 'Marcel Camus', 'Breno Mello, Marpessa Dawn', 1959, 'A retelling of the Orpheus and Eurydice myth, set during the time of the Carnaval in Rio de Janeiro.', 130, '', 'black'),
(4, 'The Colour Purple ', 'Steven Spielberg', 'Danny Glover, Whoopi Goldberg', 1954, 'A black Southern woman struggles to find her identity after suffering abuse from her father and others over four decades.', 154, '', 'purple'),
(5, 'Taste of cherry', 'Abbas Kiarostami', 'Homayun Ershadi, Abdolrahman Bagheri', 1997, 'An Iranian man drives his truck in search of someone who will quietly bury him under a cherry tree after he commits suicide.', 99, '', 'red'),
(6, 'A Clockwork Orange', 'Stanley Kubrick', 'Malcom McDowell', 1971, 'In the future, a sadistic gang leader is imprisoned and volunteers for a conduct-aversion experiment, but it doesn\'t go as planned.', 136, '', 'orange'),
(7, 'The Pink Panther', 'Blake Edwards ', 'Peter Sellers, David Niven, Robert Wagner, Claudia Cardinale', 1963, 'The bumbling Inspector Clouseau travels to Rome to catch a notorious jewel thief known as \"The Phantom\" before he conducts his most daring heist yet: a princess\' priceless diamond with one slight imperfection, known as \"The Pink Panther\".', 115, '', 'pink'),
(8, 'White Material', 'Claire Denis', 'Isabelle Huppert, Christopher Lambert, Isaach De Bankolé', 2009, 'Amidst turmoil and racial conflict in a Francophone African state, a white French woman fights for her coffee crop, her family and ultimately for her life.', 136, '', 'white'),
(9, 'The Cave of the yellow dog', 'Byambasuren Davaa', 'Nansalmaa Batchuluun, Batchuluun, Tsrenpuntsag Ish', 2006, 'The little Nansal finds a baby dog in the Mongolian veld, who becomes her best friend against all rejections of her parents.', 93, '', 'yellow'),
(10, 'Black Cat, White Cat', 'Emir Kusturica', 'Bajram Severdzan, Srdjan Todorovic,', 1998, 'Matko and his son Zare live on the banks of the Danube river and get by through hustling and basically doing anything to make a living. In order to pay off a business debt Matko agrees to marry off Zare to the sister of a local gangster.', 130, '', 'multicolor'),
(11, 'The Mystery of the yellow room', 'Bruno Podalydès', 'Denis Podalydès, Jean-Noël Brouté, Sabine Azéma', 2003, 'A woman is sleeping in her bedroom. Her room can not be opened from the outside, but only from inside. When suddenly one night somebody attempted to murder her. Before the police arrived ...', 118, '', 'yellow'),
(12, 'Le Grand Bleu', 'Luc Besson', 'Jean-Marc Barr, Rosanna Arquette', 1988, 'The rivalry between Enzo and Jacques, two childhood friends and now world-renowned free divers, becomes a beautiful and perilous journey into oneself and the unknown.', 168, '', 'blue'),
(13, 'Les Rivières pourpres ', 'Mathieu Kassovitz', 'Jean Reno, Vincent Cassel', 2000, 'A murder detective must follow the footsteps of a brutal killer within the secrets of a classist college.', 106, '', 'red'),
(14, 'The Green Miles', 'Frank Darabont', 'Tom Hanks, Michael Clarke Duncan, David Morse', 1999, 'The lives of guards on Death Row are affected by one of their charges: a black man accused of child murder and rape, yet who has a mysterious gift.', 189, '', 'green');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
