-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2017 a las 00:25:19
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `smartlol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `masteries`
--

CREATE TABLE `masteries` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `masteries`
--

INSERT INTO `masteries` (`id`, `name`) VALUES
(6111, 'Fury'),
(6114, 'Sorcery'),
(6121, 'Fresh Blood'),
(6122, 'Feast'),
(6123, 'Expose Weakness'),
(6131, 'Vampirism'),
(6134, 'Natural Talent'),
(6141, 'Bounty Hunter'),
(6142, 'Double Edged Sword'),
(6143, 'Battle Trance'),
(6151, 'Battering Blows'),
(6154, 'Piercing Thoughts'),
(6161, 'Warlord\'s Bloodlust'),
(6162, 'Fervor of Battle'),
(6164, 'Deathfire Touch'),
(6211, 'Recovery'),
(6212, 'Unyielding'),
(6221, 'Explorer'),
(6222, 'Siegemaster'),
(6223, 'Tough Skin'),
(6231, 'Runic Armor'),
(6232, 'Veteran\'s Scars'),
(6241, 'Insight'),
(6242, 'Perseverance'),
(6243, 'Fearless'),
(6251, 'Swiftness'),
(6252, 'Legendary Guardian'),
(6261, 'Grasp of the Undying'),
(6262, 'Courage of the Colossus'),
(6263, 'Stoneborn Pact'),
(6311, 'Wanderer'),
(6312, 'Savagery'),
(6321, 'Runic Affinity'),
(6322, 'Secret Stash'),
(6323, 'Assassin'),
(6331, 'Merciless'),
(6332, 'Meditation'),
(6341, 'Greenfather\'s Gift'),
(6342, 'Bandit'),
(6343, 'Dangerous Game'),
(6351, 'Precision'),
(6352, 'Intelligence'),
(6361, 'Stormraider\'s Surge'),
(6362, 'Thunderlord\'s Decree'),
(6363, 'Windspeaker\'s Blessing');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `masteriesdescriptions`
--

CREATE TABLE `masteriesdescriptions` (
  `masteryId` int(5) NOT NULL,
  `masteryDescriptionId` int(1) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `versions`
--

CREATE TABLE `versions` (
  `apiName` varchar(20) NOT NULL,
  `version` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `versions`
--

INSERT INTO `currentVersions` (`apiName`, `version`) VALUES
('mastery', '7.15.1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `masteries`
--
ALTER TABLE `masteries`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `masteriesdescriptions`
--
ALTER TABLE `masteriesdescriptions`
  ADD KEY `masteryId` (`masteryId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
