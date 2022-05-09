-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 09 mai 2022 à 15:38
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `contact_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `fk_username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `adresse`, `fk_username`) VALUES
(12, 'khadija', '+(212)626-96-29-49', 'makkaoui.khadija44@gmail.com', 'marrakech  N 123', 'khadija'),
(15, 'MAKKAOUI', '0609606', 'makkaoui.khadija44@gs', 'youssoufia', 'khadija'),
(16, 'Anas', '067272727', 'anas@gmail.com', 'Youssoufia N 565                                                ', 'Ahmed'),
(18, 'Noura', '05 0920292', 'mariam@hotmail.com', 'Maroc', 'mariam123'),
(19, 'Salim', '+33 1234433', 'slmd@1234.com', 'Rabat', 'Ahmed'),
(20, 'khadija', '+(212)626-96-29-49', 'makkaoui.khadija44@gmail.com', 'marrakech', 'Ahmed'),
(21, 'Ahmed', '06096063223', 'ahmed@email.com', '                                                ', 'User'),
(27, 'marwa', '0528282828', 'marwa@gmail.com', '                                                ', 'User'),
(28, 'dsssss', '', 'jsjj', '', 'User');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `username` varchar(50) NOT NULL,
  `signupDate` date NOT NULL,
  `password` varchar(40) NOT NULL,
  `lastLogin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`username`, `signupDate`, `password`, `lastLogin`) VALUES
('Ahmed', '2022-04-01', '1234', '2022-05-09'),
('Anas', '2022-04-19', '1234', '0000-00-00'),
('DAA', '2022-04-20', '12345678', '0000-00-00'),
('Doha12', '2022-04-20', 'azerty', '0000-00-00'),
('khadija', '2022-03-15', '1234', '2022-04-06'),
('khadija12', '2022-04-20', 'AZEEEEE', '0000-00-00'),
('mariam123', '2022-04-20', '1234567', '2022-04-20'),
('Samir', '2022-04-17', '45678', '2022-04-20'),
('User', '2022-05-09', '12345', '2022-05-09');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_username` (`fk_username`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `fk_username` FOREIGN KEY (`fk_username`) REFERENCES `utilisateurs` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
