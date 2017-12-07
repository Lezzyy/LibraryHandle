-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 07 Décembre 2017 à 10:07
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `LibraryHandle`
--

-- --------------------------------------------------------

--
-- Structure de la table `booksList`
--

CREATE TABLE `booksList` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `abstract` text NOT NULL,
  `releaseDate` year(4) NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `booksList`
--

INSERT INTO `booksList` (`id`, `title`, `author`, `abstract`, `releaseDate`, `category`, `status`, `userId`) VALUES
(1, '1984', 'George Orwell', 'De tous les carrefours importants, le visage à la moustache noire vous fixait du regard. BIG BROTHER VOUS REGARDE, répétait la légende, tandis que le regard des yeux noirs pénétrait les yeux de Winston... Au loin, un hélicoptère glissa entre les toits, plana un moment, telle une mouche bleue, puis repartit comme une flèche, dans un vol courbe. C\'était une patrouille qui venait mettre le nez aux fenêtres des gens. Mais les patrouilles n\'avaient pas d\'importance. Seule comptait la Police de la Pensée.', 1949, 'Science fiction', 1, NULL),
(2, 'La controverse de Valladolid ', 'Jean-Claude Carrière', ' En 1550, une question agite la chrétienté : qui sont les Indiens ? Des êtres inférieurs qu\'il faut soumettre et convertir ? Ou des hommes, libres et égaux ? Un légat envoyé par le pape doit en décider. Pour l\'aider, deux religieux espagnols. Ginès de Sépulvéda, fin lettré, rompu à l\'art de la polémique, et Bartholomé de Las Casas, prêtre ayant vécu de nombreuses années dans le Nouveau Monde. Le premier défend la guerre au nom de Dieu. Le second lutte contre l\'esclavage des Indiens. Un face-à-face dramatique dont l\'écho retentit encore', 2012, 'Roman', 1, NULL),
(3, 'ugugu', 'rt', 'r(', 2020, 'thriller', 0, 1),
(4, 'ugugu', 'rt', 'r(', 2020, 'thriller', 1, NULL),
(5, 'la reine du bal', 'mary higgins clark', 'descriptive', 2017, 'thriller', 0, 1),
(6, 'evariste', 'françois-henri désérable', 'a quinze ans, evariste galois découvre les mathématiques ; à dix-huit, il les révolutionne ; à vingt, il meurt en duel. il a connu raspail, nerval, dumas, cauchy, les trois glorieuses et la prison, le miracle de la dernière nuit, l\'amour et la mort à l\'aube, sur le pré. c\'est cette vie fulgurante, cette vie qui fut un crescendo tourmenté, au rythme marqué par le tambour de passions frénétiques, qui nous est ici racontée.biographiefrançois-henri désérable a vingt-sept ans. il est l\'auteur de tu montreras ma tête au peuple,...', 2016, 'roman', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `usersList`
--

CREATE TABLE `usersList` (
  `idUser` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `userNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `usersList`
--

INSERT INTO `usersList` (`idUser`, `name`, `surname`, `email`, `userNumber`) VALUES
(1, 'London', 'Grammar', 'london@gmail.com', 5747),
(2, 'Lau', 'Ubk', 'lau@mail.com', 4567);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `booksList`
--
ALTER TABLE `booksList`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Index pour la table `usersList`
--
ALTER TABLE `usersList`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `booksList`
--
ALTER TABLE `booksList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `usersList`
--
ALTER TABLE `usersList`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `booksList`
--
ALTER TABLE `booksList`
  ADD CONSTRAINT `booksList_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `usersList` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
