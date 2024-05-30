-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 27 mai 2024 à 16:23
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ccp2b00`
--

-- --------------------------------------------------------

--
-- Structure de la table `demandeur`
--

CREATE TABLE `demandeur` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `certified` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `demandeur`
--

INSERT INTO `demandeur` (`id`, `pseudo`, `first_name`, `last_name`, `mail`, `pass`, `certified`) VALUES
(4, 'Techlab', 'Martin', 'Alonzo', 'techlab@gmail.com', '$2y$10$aeBSs7NXp8boTPe9bbiDBOBHSx/YDFnONaDlWYxVfZc', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `freelance`
--

CREATE TABLE `freelance` (
  `id` int(11) NOT NULL,
  `job` varchar(50) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `compagny_name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pass` varchar(130) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `nb_projects` int(11) DEFAULT NULL,
  `note` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `freelance`
--

INSERT INTO `freelance` (`id`, `job`, `pseudo`, `first_name`, `last_name`, `compagny_name`, `mail`, `pass`, `description`, `nb_projects`, `note`) VALUES
(11, 'Graphiste', 'Adrien Graphiste', 'Adrien', 'Ray', 'Adrien Ray Graphiste', 'toutemacom34@gmail.com', '$2y$10$m6ulnA9MfiCGmVYoDbz7hOuIy7iXDHSrOwr23SRxfLR3agASlus.6', 'Voici une courte description de mon profil', NULL, NULL),
(12, 'développeur back-end', 'Léo Dev', 'léo', 'Helley', 'les pervers en folie', 'helley.leo@hotmail.com', '$2y$10$G/A7KbwNNPy.qfgsPx1ZgO8z2UOlfCFS2DSoP4oFWkknTmbtOwdXO', '                        Développeur back end junior je cherche mes premières missions. Autodidacte, je connais les langages PHP, Html, CSS, Javascript. N\'hésitez pas à me contacter sur ma boite mail.                                                                                                     ', NULL, NULL),
(15, 'Web designer', 'David34', 'David', 'Delahaye', 'Graph\'art', 'david.delahaye06@gmail.com', '$2y$10$foSG83VuovC06vP4DAho0OQqDSi1Z96oJ1PGofu9GaPLvduJ.DJTK', 'Graphiste polyvalent, recherche missions. J\'ai 10 ans d\'expérience dans les logiciels de création d\'images. N\'hésitez-pas à me contacter !                  ', NULL, NULL),
(16, 'Développeur web', 'Mila Coding', 'Mila', 'Martigny', 'Mila Coding', 'milana34@gmail.com', '$2y$10$7Cy6dTXbOLJqlOQ4mGX5bOfLEwCm0pSPXQXEGLINLdINf8ScCu4qO', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `message` int(11) NOT NULL,
  `id_destinataire` int(11) NOT NULL,
  `id_auteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `demandeur`
--
ALTER TABLE `demandeur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `freelance`
--
ALTER TABLE `freelance`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `demandeur`
--
ALTER TABLE `demandeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `freelance`
--
ALTER TABLE `freelance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
