-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2017 a las 18:11:33
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
-- Estructura de tabla para la tabla `champions`
--

CREATE TABLE `champions` (
  `id` int(4) NOT NULL,
  `championKey` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `champions`
--

INSERT INTO `champions` (`id`, `championKey`, `name`, `title`) VALUES
(24, 'Jax', 'Jax', 'Grandmaster at Arms'),
(37, 'Sona', 'Sona', 'Maven of the Strings'),
(18, 'Tristana', 'Tristana', 'the Yordle Gunner'),
(110, 'Varus', 'Varus', 'the Arrow of Retribution'),
(114, 'Fiora', 'Fiora', 'the Grand Duelist'),
(27, 'Singed', 'Singed', 'the Mad Chemist'),
(223, 'TahmKench', 'Tahm Kench', 'the River King'),
(7, 'Leblanc', 'LeBlanc', 'the Deceiver'),
(412, 'Thresh', 'Thresh', 'the Chain Warden'),
(43, 'Karma', 'Karma', 'the Enlightened One'),
(202, 'Jhin', 'Jhin', 'the Virtuoso'),
(68, 'Rumble', 'Rumble', 'the Mechanized Menace'),
(77, 'Udyr', 'Udyr', 'the Spirit Walker'),
(64, 'LeeSin', 'Lee Sin', 'the Blind Monk'),
(83, 'Yorick', 'Yorick', 'Shepherd of Souls'),
(141, 'Kayn', 'Kayn', 'the Shadow Reaper'),
(38, 'Kassadin', 'Kassadin', 'the Void Walker'),
(15, 'Sivir', 'Sivir', 'the Battle Mistress'),
(21, 'MissFortune', 'Miss Fortune', 'the Bounty Hunter'),
(119, 'Draven', 'Draven', 'the Glorious Executioner'),
(157, 'Yasuo', 'Yasuo', 'the Unforgiven'),
(10, 'Kayle', 'Kayle', 'The Judicator'),
(35, 'Shaco', 'Shaco', 'the Demon Jester'),
(58, 'Renekton', 'Renekton', 'the Butcher of the Sands'),
(120, 'Hecarim', 'Hecarim', 'the Shadow of War'),
(105, 'Fizz', 'Fizz', 'the Tidal Trickster'),
(96, 'KogMaw', 'Kog\'Maw', 'the Mouth of the Abyss'),
(57, 'Maokai', 'Maokai', 'the Twisted Treant'),
(127, 'Lissandra', 'Lissandra', 'the Ice Witch'),
(222, 'Jinx', 'Jinx', 'the Loose Cannon'),
(6, 'Urgot', 'Urgot', 'the Dreadnought'),
(9, 'Fiddlesticks', 'Fiddlesticks', 'the Harbinger of Doom'),
(3, 'Galio', 'Galio', 'the Colossus'),
(80, 'Pantheon', 'Pantheon', 'the Artisan of War'),
(91, 'Talon', 'Talon', 'the Blade\'s Shadow'),
(41, 'Gangplank', 'Gangplank', 'the Saltwater Scourge'),
(81, 'Ezreal', 'Ezreal', 'the Prodigal Explorer'),
(150, 'Gnar', 'Gnar', 'the Missing Link'),
(17, 'Teemo', 'Teemo', 'the Swift Scout'),
(1, 'Annie', 'Annie', 'the Dark Child'),
(82, 'Mordekaiser', 'Mordekaiser', 'the Iron Revenant'),
(268, 'Azir', 'Azir', 'the Emperor of the Sands'),
(85, 'Kennen', 'Kennen', 'the Heart of the Tempest'),
(92, 'Riven', 'Riven', 'the Exile'),
(31, 'Chogath', 'Cho\'Gath', 'the Terror of the Void'),
(266, 'Aatrox', 'Aatrox', 'the Darkin Blade'),
(78, 'Poppy', 'Poppy', 'Keeper of the Hammer'),
(163, 'Taliyah', 'Taliyah', 'the Stoneweaver'),
(420, 'Illaoi', 'Illaoi', 'the Kraken Priestess'),
(74, 'Heimerdinger', 'Heimerdinger', 'the Revered Inventor'),
(12, 'Alistar', 'Alistar', 'the Minotaur'),
(5, 'XinZhao', 'Xin Zhao', 'the Seneschal of Demacia'),
(236, 'Lucian', 'Lucian', 'the Purifier'),
(106, 'Volibear', 'Volibear', 'the Thunder\'s Roar'),
(113, 'Sejuani', 'Sejuani', 'Fury of the North'),
(76, 'Nidalee', 'Nidalee', 'the Bestial Huntress'),
(86, 'Garen', 'Garen', 'The Might of Demacia'),
(89, 'Leona', 'Leona', 'the Radiant Dawn'),
(238, 'Zed', 'Zed', 'the Master of Shadows'),
(53, 'Blitzcrank', 'Blitzcrank', 'the Great Steam Golem'),
(33, 'Rammus', 'Rammus', 'the Armordillo'),
(161, 'Velkoz', 'Vel\'Koz', 'the Eye of the Void'),
(51, 'Caitlyn', 'Caitlyn', 'the Sheriff of Piltover'),
(48, 'Trundle', 'Trundle', 'the Troll King'),
(203, 'Kindred', 'Kindred', 'The Eternal Hunters'),
(133, 'Quinn', 'Quinn', 'Demacia\'s Wings'),
(245, 'Ekko', 'Ekko', 'the Boy Who Shattered Time'),
(267, 'Nami', 'Nami', 'the Tidecaller'),
(50, 'Swain', 'Swain', 'the Master Tactician'),
(44, 'Taric', 'Taric', 'the Shield of Valoran'),
(134, 'Syndra', 'Syndra', 'the Dark Sovereign'),
(497, 'Rakan', 'Rakan', 'The Charmer'),
(72, 'Skarner', 'Skarner', 'the Crystal Vanguard'),
(201, 'Braum', 'Braum', 'the Heart of the Freljord'),
(45, 'Veigar', 'Veigar', 'the Tiny Master of Evil'),
(101, 'Xerath', 'Xerath', 'the Magus Ascendant'),
(42, 'Corki', 'Corki', 'the Daring Bombardier'),
(111, 'Nautilus', 'Nautilus', 'the Titan of the Depths'),
(103, 'Ahri', 'Ahri', 'the Nine-Tailed Fox'),
(126, 'Jayce', 'Jayce', 'the Defender of Tomorrow'),
(122, 'Darius', 'Darius', 'the Hand of Noxus'),
(23, 'Tryndamere', 'Tryndamere', 'the Barbarian King'),
(40, 'Janna', 'Janna', 'the Storm\'s Fury'),
(60, 'Elise', 'Elise', 'the Spider Queen'),
(67, 'Vayne', 'Vayne', 'the Night Hunter'),
(63, 'Brand', 'Brand', 'the Burning Vengeance'),
(104, 'Graves', 'Graves', 'the Outlaw'),
(16, 'Soraka', 'Soraka', 'the Starchild'),
(498, 'Xayah', 'Xayah', 'the Rebel'),
(30, 'Karthus', 'Karthus', 'the Deathsinger'),
(8, 'Vladimir', 'Vladimir', 'the Crimson Reaper'),
(26, 'Zilean', 'Zilean', 'the Chronokeeper'),
(55, 'Katarina', 'Katarina', 'the Sinister Blade'),
(102, 'Shyvana', 'Shyvana', 'the Half-Dragon'),
(19, 'Warwick', 'Warwick', 'the Uncaged Wrath of Zaun'),
(115, 'Ziggs', 'Ziggs', 'the Hexplosives Expert'),
(240, 'Kled', 'Kled', 'the Cantankerous Cavalier'),
(121, 'Khazix', 'Kha\'Zix', 'the Voidreaver'),
(2, 'Olaf', 'Olaf', 'the Berserker'),
(4, 'TwistedFate', 'Twisted Fate', 'the Card Master'),
(20, 'Nunu', 'Nunu', 'the Yeti Rider'),
(107, 'Rengar', 'Rengar', 'the Pridestalker'),
(432, 'Bard', 'Bard', 'the Wandering Caretaker'),
(39, 'Irelia', 'Irelia', 'the Will of the Blades'),
(427, 'Ivern', 'Ivern', 'the Green Father'),
(62, 'MonkeyKing', 'Wukong', 'the Monkey King'),
(22, 'Ashe', 'Ashe', 'the Frost Archer'),
(429, 'Kalista', 'Kalista', 'the Spear of Vengeance'),
(84, 'Akali', 'Akali', 'the Fist of Shadow'),
(254, 'Vi', 'Vi', 'the Piltover Enforcer'),
(32, 'Amumu', 'Amumu', 'the Sad Mummy'),
(117, 'Lulu', 'Lulu', 'the Fae Sorceress'),
(25, 'Morgana', 'Morgana', 'Fallen Angel'),
(56, 'Nocturne', 'Nocturne', 'the Eternal Nightmare'),
(131, 'Diana', 'Diana', 'Scorn of the Moon'),
(136, 'AurelionSol', 'Aurelion Sol', 'The Star Forger'),
(143, 'Zyra', 'Zyra', 'Rise of the Thorns'),
(112, 'Viktor', 'Viktor', 'the Machine Herald'),
(69, 'Cassiopeia', 'Cassiopeia', 'the Serpent\'s Embrace'),
(75, 'Nasus', 'Nasus', 'the Curator of the Sands'),
(29, 'Twitch', 'Twitch', 'the Plague Rat'),
(36, 'DrMundo', 'Dr. Mundo', 'the Madman of Zaun'),
(61, 'Orianna', 'Orianna', 'the Lady of Clockwork'),
(28, 'Evelynn', 'Evelynn', 'the Widowmaker'),
(421, 'RekSai', 'Rek\'Sai', 'the Void Burrower'),
(99, 'Lux', 'Lux', 'the Lady of Luminosity'),
(14, 'Sion', 'Sion', 'The Undead Juggernaut'),
(164, 'Camille', 'Camille', 'the Steel Shadow'),
(11, 'MasterYi', 'Master Yi', 'the Wuju Bladesman'),
(13, 'Ryze', 'Ryze', 'the Rune Mage'),
(54, 'Malphite', 'Malphite', 'Shard of the Monolith'),
(34, 'Anivia', 'Anivia', 'the Cryophoenix'),
(98, 'Shen', 'Shen', 'the Eye of Twilight'),
(59, 'JarvanIV', 'Jarvan IV', 'the Exemplar of Demacia'),
(90, 'Malzahar', 'Malzahar', 'the Prophet of the Void'),
(154, 'Zac', 'Zac', 'the Secret Weapon'),
(79, 'Gragas', 'Gragas', 'the Rabble Rouser');

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
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `masteriesdescriptions`
--

INSERT INTO `masteriesdescriptions` (`masteryId`, `masteryDescriptionId`, `description`) VALUES
(6131, 0, '+0.4% Lifesteal and Spell Vamp'),
(6131, 1, '+0.8% Lifesteal and Spell Vamp'),
(6131, 2, '+1.2% Lifesteal and Spell Vamp'),
(6131, 3, '+1.6% Lifesteal and Spell Vamp'),
(6131, 4, '+2.0% Lifesteal and Spell Vamp'),
(6351, 0, 'Gain 1.2 Lethality and 0.3 + 0.05 per level Magic Penetration'),
(6351, 1, 'Gain 2.4 Lethality and 0.6 + 0.10 per level Magic Penetration'),
(6351, 2, 'Gain 3.6 Lethality and 0.9 + 0.15 per level Magic Penetration'),
(6351, 3, 'Gain 4.8 Lethality and 1.2 + 0.20 per level Magic Penetration'),
(6351, 4, 'Gain 6 Lethality and 1.5 + 0.25 per level Magic Penetration'),
(6252, 0, '+0.6 Armor and Magic Resist for each nearby enemy champion'),
(6252, 1, '+1.2 Armor and Magic Resist for each nearby enemy champion'),
(6252, 2, '+1.8 Armor and Magic Resist for each nearby enemy champion'),
(6252, 3, '+2.4 Armor and Magic Resist for each nearby enemy champion'),
(6252, 4, '+3 Armor and Magic Resist for each nearby enemy champion'),
(6251, 0, '+3% Tenacity and Slow Resist'),
(6251, 1, '+6% Tenacity and Slow Resist'),
(6251, 2, '+9% Tenacity and Slow Resist'),
(6251, 3, '+12% Tenacity and Slow Resist'),
(6251, 4, '+15% Tenacity and Slow Resist'),
(6111, 0, '+0.8% Attack Speed'),
(6111, 1, '+1.6% Attack Speed'),
(6111, 2, '+2.4% Attack Speed'),
(6111, 3, '+3.2% Attack Speed'),
(6111, 4, '+4% Attack Speed'),
(6331, 0, 'Deal 0.6% increased damage to champions below 40% Health'),
(6331, 1, 'Deal 1.2% increased damage to champions below 40% Health'),
(6331, 2, 'Deal 1.8% increased damage to champions below 40% Health'),
(6331, 3, 'Deal 2.4% increased damage to champions below 40% Health'),
(6331, 4, 'Deal 3% increased damage to champions below 40% Health'),
(6232, 0, '+10 Health'),
(6232, 1, '+20 Health'),
(6232, 2, '+30 Health'),
(6232, 3, '+40 Health'),
(6232, 4, '+50 Health'),
(6154, 0, '+1.4% Magic Penetration'),
(6154, 1, '+2.8% Magic Penetration'),
(6154, 2, '+4.2% Magic Penetration'),
(6154, 3, '+5.6% Magic Penetration'),
(6154, 4, '+7% Magic Penetration'),
(6352, 0, 'Your Cooldown Reduction cap is increased to 41% and you gain 1% Cooldown Reduction'),
(6352, 1, 'Your Cooldown Reduction cap is increased to 42% and you gain 2% Cooldown Reduction'),
(6352, 2, 'Your Cooldown Reduction cap is increased to 43% and you gain 3% Cooldown Reduction'),
(6352, 3, 'Your Cooldown Reduction cap is increased to 44% and you gain 4% Cooldown Reduction'),
(6352, 4, 'Your Cooldown Reduction cap is increased to 45% and you gain 5% Cooldown Reduction'),
(6231, 0, 'Shields, healing, regeneration, and lifesteal on you are 1.6% stronger'),
(6231, 1, 'Shields, healing, regeneration, and lifesteal on you are 3.2% stronger'),
(6231, 2, 'Shields, healing, regeneration, and lifesteal on you are 4.8% stronger'),
(6231, 3, 'Shields, healing, regeneration, and lifesteal on you are 6.4% stronger'),
(6231, 4, 'Shields, healing, regeneration, and lifesteal on you are 8% stronger'),
(6311, 0, '+0.6% Movement Speed out of combat'),
(6311, 1, '+1.2% Movement Speed out of combat'),
(6311, 2, '+1.8% Movement Speed out of combat'),
(6311, 3, '+2.4% Movement Speed out of combat'),
(6311, 4, '+3% Movement Speed out of combat'),
(6212, 0, '+1% Bonus Armor and Magic Resist'),
(6212, 1, '+2% Bonus Armor and Magic Resist'),
(6212, 2, '+3% Bonus Armor and Magic Resist'),
(6212, 3, '+4% Bonus Armor and Magic Resist'),
(6212, 4, '+5% Bonus Armor and Magic Resist'),
(6134, 0, 'Gain 0.4 + 0.09 per level Attack Damage, and 0.6 + 0.13 per level Ability Power (+2 Attack Damage and 3 Ability Power at level 18)'),
(6134, 1, 'Gain 0.8 + 0.18 per level Attack Damage, and 1.2 + 0.27 per level Ability Power (+4 Attack Damage and 6 Ability Power at level 18)'),
(6134, 2, 'Gain 1.2 + 0.27 per level Attack Damage, and 1.8 + 0.4 per level Ability Power (+6 Attack Damage and 9 Ability Power at level 18)'),
(6134, 3, 'Gain 1.6 + 0.36 per level Attack Damage, and 2.4 + 0.53 per level Ability Power (+8 Attack Damage and 12 Ability Power at level 18)'),
(6134, 4, 'Gain 2 + 0.44 per level Attack Damage, and 3 + 0.67 per level Ability Power (+10 Attack Damage and 15 Ability Power at level 18)'),
(6332, 0, 'Regenerate 0.25% of your missing Mana every 5 seconds'),
(6332, 1, 'Regenerate 0.5% of your missing Mana every 5 seconds'),
(6332, 2, 'Regenerate 0.75% of your missing Mana every 5 seconds'),
(6332, 3, 'Regenerate 1.0% of your missing Mana every 5 seconds'),
(6332, 4, 'Regenerate 1.25% of your missing Mana every 5 seconds'),
(6211, 0, '+0.4 Health per 5 seconds'),
(6211, 1, '+0.8 Health per 5 seconds'),
(6211, 2, '+1.2 Health per 5 seconds'),
(6211, 3, '+1.6 Health per 5 seconds'),
(6211, 4, '+2.0 Health per 5 seconds'),
(6114, 0, '+0.4% increased Ability damage'),
(6114, 1, '+0.8% increased Ability damage'),
(6114, 2, '+1.2% increased Ability damage'),
(6114, 3, '+1.6% increased Ability damage'),
(6114, 4, '+2.0% increased Ability damage'),
(6312, 0, 'Single target attacks and spells deal 1 bonus damage to minions and monsters'),
(6312, 1, 'Single target attacks and spells deal 2 bonus damage to minions and monsters'),
(6312, 2, 'Single target attacks and spells deal 3 bonus damage to minions and monsters'),
(6312, 3, 'Single target attacks and spells deal 4 bonus damage to minions and monsters'),
(6312, 4, 'Single target attacks and spells deal 5 bonus damage to minions and monsters'),
(6151, 0, '+1.4% Armor Penetration'),
(6151, 1, '+2.8% Armor Penetration'),
(6151, 2, '+4.2% Armor Penetration'),
(6151, 3, '+5.6% Armor Penetration'),
(6151, 4, '+7% Armor Penetration'),
(6142, 0, 'Deal 3% additional damage, take 1.5% additional damage.'),
(6164, 0, 'Your damaging abilities cause enemy champions to take magic damage over 4 seconds.<br><br>Damage: 8 + 45% Bonus Attack Damage and 25% Ability Power<br><br>Deathfire Touch\'s duration is reduced for:<br>     - Area of Effect: 2 second duration. <br>     - Damage over Time: 1 second duration.'),
(6362, 0, 'Your 3rd attack or damaging spell against the same enemy champion calls down a lightning strike, dealing magic damage in the area. <br><br>Damage: 10 per level, plus 30% of your Bonus Attack Damage, and 10% of your Ability Power (25-15 second cooldown, based on level).'),
(6241, 0, 'Reduces the cooldown of Summoner Spells by 15%'),
(6263, 0, 'Gain 5% total health.<br>Your movement impairing effects brand enemy champions with an earthen rune for 4 seconds. Other allied champions who attack branded enemies heal for 5 + 2.5% of your maximum health over 2 seconds (halved if you are ranged).'),
(6141, 0, 'Deal 1% increased damage for each unique enemy champion you have killed'),
(6361, 0, 'Dealing 30% of a champion\'s max Health within 2.5 seconds grants you 40% Movement Speed and 75% Slow Resistance for 3 seconds (10 second cooldown).'),
(6262, 0, 'Gain a shield for 3-54 (+5%  of your maximum health) for each nearby enemy champion for 3 seconds after hitting an enemy champion with a stun, taunt, snare, or knock up (45-30 second cooldown, based on level).'),
(6122, 0, 'Killing a unit restores 20 Health (30 second cooldown)'),
(6342, 0, 'Gain 1 gold for each nearby minion killed by an ally. <br><br>Gain 3 gold (10 if melee) when hitting an enemy champion with a basic attack (5 second cooldown)'),
(6221, 0, '+15 Movement Speed in Brush and River'),
(6243, 0, 'Gain 10% +1.5 per level bonus Armor and Magic Resist when damaged by an enemy champion for 2 seconds (9s Cooldown)'),
(6121, 0, 'Your first basic attack against a champion deals an additional 10 +1 per level damage (6 second cooldown)'),
(6143, 0, 'Gain up to 3% increased damage over 3 seconds when in combat with enemy Champions'),
(6341, 0, 'Stepping into brush causes your next damaging attack or ability to deal 3% of your target\'s current health as bonus magic damage (9s Cooldown)'),
(6363, 0, 'Your heals and shields are 10% stronger. Additionally, your shields and heals on other allies increase their armor by 5-22 (based on level) and their magic resistance by half that amount for 3 seconds.'),
(6242, 0, '+50% Base Health Regen, increased to +200% when below 25% Health'),
(6322, 0, 'Your Potions and Elixirs last 10% longer.<br><br>Your Health Potions are replaced with Biscuits that restore 15 Health and Mana instantly on use'),
(6223, 0, 'You take 2 less damage from champion and neutral monster basic attacks'),
(6123, 0, 'Damaging enemy champions causes them to take 3% more damage from your allies'),
(6321, 0, 'Buffs from neutral monsters last 15% longer'),
(6343, 0, 'Champion kills and assists restore 5% of your missing Health and Mana'),
(6222, 0, 'Gain 8 Armor and Magic Resistance when near an allied tower'),
(6323, 0, 'Deal 2% increased damage to champions when no allied champions are nearby'),
(6162, 0, 'Hitting champions with basic attacks generates a Fervor stack (2 for melee attacks). Stacks of Fervor last 8 seconds (max 8 stacks)and increase your AD by 1-8 for each stack.'),
(6261, 0, 'Every 4 seconds in combat, your next attack against an enemy champion deals damage equal to 3% of your max Health and heals you for 1.5% of your max Health (halved for ranged champions, deals magic damage)'),
(6161, 0, 'Moving or attacking will charge an Energized attack. Energized attacks heal for 5-40% of your total Attack Damage (amplified by Critical Strikes) and grant 30% Movement Speed for 0.75 seconds.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `spells`
--

CREATE TABLE `spells` (
  `id` int(4) NOT NULL,
  `summonerLevel` int(2) NOT NULL,
  `name` varchar(20) NOT NULL,
  `spellKey` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `spells`
--

INSERT INTO `spells` (`id`, `summonerLevel`, `name`, `spellKey`, `description`) VALUES
(21, 4, 'Barrier', 'SummonerBarrier', 'Shields your champion from 115-455 damage (depending on champion level) for 2 seconds.'),
(30, 1, 'To the King!', 'SummonerPoroRecall', 'Quickly travel to the Poro King\'s side.'),
(1, 6, 'Cleanse', 'SummonerBoost', 'Removes all disables (excluding suppression and airborne) and summoner spell debuffs affecting your champion and lowers the duration of incoming disables by 65% for 3 seconds.'),
(36, 1, 'Disabled Summoner Sp', 'SummonerDarkStarChampSelect2', 'Summoner spells are disabled in this mode.'),
(12, 6, 'Teleport', 'SummonerTeleport', 'After channeling for 4.5 seconds, teleports your champion to target allied structure, minion, or ward.'),
(35, 1, 'Disabled Summoner Sp', 'SummonerDarkStarChampSelect1', 'Summoner spells are disabled in this mode.'),
(4, 8, 'Flash', 'SummonerFlash', 'Teleports your champion a short distance toward your cursor\'s location.'),
(32, 1, 'Mark', 'SummonerSnowball', 'Throw a snowball in a straight line at your enemies. If it hits an enemy, they become marked, granting True Sight, and your champion can quickly travel to the marked target as a follow up.'),
(7, 1, 'Heal', 'SummonerHeal', 'Restores 90-345 Health (depending on champion level) and grants 30% Movement Speed for 1 second to you and target allied champion. This healing is halved for units recently affected by Summoner Heal.'),
(13, 1, 'Clarity', 'SummonerMana', 'Restores 50% of your champion\'s maximum Mana. Also restores allies for 25% of their maximum Mana.'),
(31, 1, 'Poro Toss', 'SummonerPoroThrow', 'Toss a Poro at your enemies. If it hits, you can quickly travel to your target as a follow up.'),
(11, 10, 'Smite', 'SummonerSmite', 'Deals 390-1000 true damage (depending on champion level) to target epic, large, or medium monster or enemy minion. Restores Health based on your maximum life when used against monsters.'),
(33, 1, 'Nexus Siege: Siege W', 'SummonerSiegeChampSelect1', 'In Nexus Siege, Summoner Spells are replaced with Siege Weapon Slots. Spend Crystal Shards to buy single-use Siege Weapons from the item shop, then use your Summoner Spell keys to activate them!'),
(34, 1, 'Nexus Siege: Siege W', 'SummonerSiegeChampSelect2', 'In Nexus Siege, Summoner Spells are replaced with Siege Weapon Slots. Spend Crystal Shards to buy single-use Siege Weapons from the item shop, then use your Summoner Spell keys to activate them!'),
(3, 4, 'Exhaust', 'SummonerExhaust', 'Exhausts target enemy champion, reducing their Movement Speed by 30%, and their damage dealt by 40% for 2.5 seconds.'),
(14, 10, 'Ignite', 'SummonerDot', 'Ignites target enemy champion, dealing 70-410 true damage (depending on champion level) over 5 seconds, grants you vision of the target, and reduces healing effects on them for the duration.'),
(6, 1, 'Ghost', 'SummonerHaste', 'Your champion gains increased Movement Speed and can move through units for 10 seconds. Grants a maximum of 28-45% (depending on champion level) Movement Speed after accelerating for 2 seconds.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `versions`
--

CREATE TABLE `versions` (
  `name` varchar(20) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `versions`
--

INSERT INTO `versions` (`name`, `value`) VALUES
('css', '7.15.1'),
('dd', '7.15.1'),
('l', 'es_AR'),
('item', '7.15.1'),
('rune', '7.15.1'),
('mastery', '7.15.1'),
('summoner', '7.15.1'),
('champion', '7.15.1'),
('profileicon', '7.15.1'),
('map', '7.15.1'),
('language', '7.15.1'),
('sticker', '7.15.1'),
('profileiconmax', '28'),
('v', '7.15.1'),
('lg', '7.15.1'),
('cdn', 'http://ddragon.leagueoflegends.com/cdn');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `champions`
--
ALTER TABLE `champions`
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

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
