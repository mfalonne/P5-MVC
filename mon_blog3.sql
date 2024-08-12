-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 12 août 2024 à 20:50
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mon_blog3`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `content` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `is_validated` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `content`, `created_at`, `is_validated`) VALUES
(30, 20, 15, 'ajout de commentaire', '2024-08-12 18:04:23', 1),
(34, 20, 15, 'ajoute de commentaire++++', '2024-08-12 20:33:59', 1);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `chapo` text NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `chapo`, `content`, `created_at`) VALUES
(20, 15, ' PHP : Le Langage Indispensable pour Développer des Sites Web Dynamiques', 'PHP est l&#039;un des langages de programmation les plus populaires pour le développement web. Simple à apprendre et puissant, il est utilisé par des millions de sites à travers le monde. Découvrez pourquoi PHP est incontournable pour les développeurs.\r\n        ', '          PHP, ou Hypertext Preprocessor, est un langage de script open-source principalement utilisé pour créer des pages web dynamiques. Depuis son lancement en 1995, il s&#039;est imposé comme un outil essentiel pour les développeurs web. Mais qu&#039;est-ce qui rend PHP si spécial ?\r\n\r\nFacilité d&#039;apprentissage : PHP est conçu pour être simple à utiliser. Même les débutants peuvent rapidement créer des scripts fonctionnels, ce qui en fait un excellent point de départ pour ceux qui souhaitent se lancer dans le développement web.\r\n\r\nLarge communauté et support : PHP bénéficie d&#039;une immense communauté de développeurs. Cela signifie que vous trouverez une multitude de ressources, de tutoriels, et de forums pour vous aider à résoudre les problèmes et à améliorer vos compétences.\r\n\r\nCompatibilité et flexibilité : PHP est compatible avec la majorité des serveurs web et des systèmes d&#039;exploitation. De plus, il s&#039;intègre facilement avec des bases de données comme MySQL, ce qui permet de créer des sites et applications web robustes et interactifs.\r\n\r\nPuissance et performance : Malgré sa simplicité, PHP est capable de gérer des tâches complexes, y compris la gestion de contenu, l&#039;interaction avec des bases de données, et la gestion de fichiers, tout en offrant de bonnes performances.\r\n        ', '2024-08-12 18:03:30');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `is_admin`) VALUES
(14, 'falonne5', '$2y$10$iVnDcFTPxJO/mmGNLlMDROJS4mK4DM6BTBbWOS2x0tK5l6dzQQGri', 1),
(15, 'faladmin', '$2y$10$esoRmQrQDIvPMhxaWfn/H.v2JIGXqcqilp/GvnJIxo8Nsmel68D4q', 1),
(18, 'bene', '$2y$10$fgaObYz.T4zBHo9lk2Pqz.PHbYR0v54Wq7iuJeD54rd2/A4ZIQPaK', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
