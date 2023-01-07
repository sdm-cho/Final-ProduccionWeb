-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 11-07-2022 a las 17:07:43
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `metroidvaniatp2`
--
CREATE DATABASE IF NOT EXISTS `metroidvaniatp2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `metroidvaniatp2`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Accion'),
(2, 'Aventura'),
(3, 'Suspenso'),
(4, 'Deportes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` float(8,2) NOT NULL,
  `id_categoria` int(10) UNSIGNED NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `id_categoria`, `fecha_alta`, `fecha_modificacion`, `fecha_baja`) VALUES
(1, 'Mass Effect Legendary Edition', 'The Mass Effect™ Legendary Edition includes single-player base content and over 40 DLC from the highly acclaimed Mass Effect, Mass Effect 2, and Mass Effect 3 games, including promo weapons, armors, and packs — remastered and optimized for 4K Ultra HD.', 7000.00, 1, '2022-05-25 21:22:09', '2022-06-16 15:11:18', NULL),
(2, 'Days Gone', 'Ride and fight into a deadly, post pandemic America. Play as Deacon St. John, a drifter and bounty hunter who rides the broken road, fighting to survive while searching for a reason to live in this open-world action-adventure game.', 4200.00, 1, '2022-05-25 21:22:59', '2022-06-16 04:32:41', NULL),
(3, 'Resident Evil Village', 'Experience survival horror like never before in the 8th major installment in the Resident Evil franchise - Resident Evil Village. With detailed graphics, intense first-person action and masterful storytelling, the terror has never felt more realistic.', 2500.00, 3, '2022-05-25 21:24:43', '2022-05-25 21:24:43', NULL),
(4, 'Red Dead Redemption 2', 'Winner of over 175 Game of the Year Awards and recipient of over 250 perfect scores, RDR2 is the epic tale of outlaw Arthur Morgan and the infamous Van der Linde gang, on the run across America at the dawn of the modern age.', 2500.00, 2, '2022-05-25 21:56:50', '2022-06-16 04:32:51', NULL),
(5, 'Hollow Knight: Silksong', 'Discover a vast, haunted kingdom in Hollow Knight: Silksong! The sequel to the award winning action-adventure. Explore, fight and survive as you ascend to the peak of a land ruled by silk and song.', 1500.00, 2, '2022-05-25 21:57:39', '2022-05-25 21:57:39', NULL),
(6, 'Life is Strange: True Colors', 'Alex Chen hides her \'curse\': the psychic power of Empathy, the ability to absorb the emotions of others. When her brother dies in a so-called accident, Alex must embrace her power to find the truth.', 3500.00, 2, '2022-05-25 21:58:20', '2022-05-26 05:51:36', NULL),
(7, 'Far Cry 6', 'Welcome to Yara, a tropical paradise frozen in time. Far Cry® 6 thrusts players into the adrenaline-filled world of a modern-day guerrilla revolution. As dictator of Yara, Antón Castillo is intent on restoring his nation back to its former glory by any means, with his son, Diego, dutifully at his side. Become a guerrilla fighter and burn their regime to the ground.', 3500.00, 1, '2022-05-25 21:59:22', '2022-05-26 07:06:30', NULL),
(8, 'Hogwarts Legacy', 'Hogwarts Legacy is an immersive, open-world action RPG set in the world first introduced in the Harry Potter books. \r\nEmbark on a journey through familiar and new locations as you explore and discover fantastic beasts, customize your character and craft potions, master spell casting, upgrade talents and become the wizard you want to be.', 6000.00, 2, '2022-05-25 22:03:25', '2022-05-25 22:03:25', NULL),
(9, 'Biomutant', 'BIOMUTANT® is an open-world, post-apocalyptic Kung-Fu fable RPG, with a unique martial arts styled combat system allowing you to mix melee, shooting and mutant ability action.', 2200.00, 2, '2022-05-26 04:04:15', '2022-05-26 04:04:15', NULL),
(10, 'Sniper Elite 5', 'The award-winning series returns as Karl Fairburne fights to uncover Project Kraken in 1944 France. The genre-defining authentic sniping, with enhanced kill cam, has never looked or felt better as you fight across immersive maps to stop the Nazi war machine in its tracks.', 2500.00, 1, '2022-05-26 05:54:56', '2022-05-26 05:54:56', NULL),
(11, 'Nobody Saves the World', 'Transform from a featureless nobody into a SLUG, a GHOST and a DRAGON in this new take on Action RPGs from the creators of Guacamelee! Discover 15+ distinct Forms, mix-and-match their abilities, clear evolving dungeons and... SAVE THE WORLD!?', 670.00, 1, '2022-05-26 20:52:59', '2022-05-26 20:52:59', NULL),
(12, 'FIFA 22', 'Powered by Football™, EA SPORTS™ FIFA 22 brings the game even closer to the real thing with fundamental gameplay advances and a new season of innovation across every mode.', 5500.00, 4, '2022-05-26 20:55:26', '2022-05-26 20:55:26', NULL),
(13, 'Forza Horizon 5', 'Your Ultimate Horizon Adventure awaits! Explore the vibrant and ever-evolving open world landscapes of Mexico with limitless, fun driving action in hundreds of the world’s greatest cars. Begin Your Horizon Adventure today and add to your Wishlist!', 3600.00, 4, '2022-05-26 22:08:51', '2022-05-26 22:09:23', NULL),
(14, 'Battlefield V', 'This is the ultimate Battlefield V experience. Enter mankind’s greatest conflict with the complete arsenal of weapons, vehicles, and gadgets plus the best customization content of Year 1 and 2.', 5300.00, 1, '2022-05-26 22:10:30', '2022-05-26 22:11:29', NULL),
(15, 'Rust', 'The only aim in Rust is to survive. Everything wants you to die - the island’s wildlife and other inhabitants, the environment, other survivors. Do whatever it takes to last another night.', 2440.00, 1, '2022-05-26 22:11:06', '2022-05-26 22:11:06', NULL),
(16, 'Dying Light 2: Stay Human', 'The virus won and civilization has fallen back to the Dark Ages. The City, one of the last human settlements, is on the brink of collapse. Use your agility and combat skills to survive, and reshape the world. Your choices matter.', 3000.00, 1, '2022-05-26 22:13:03', '2022-05-26 22:13:03', NULL),
(17, 'Dishonored 2', 'Reprise your role as a supernatural assassin. Dishonored 2 is the follow up to Arkane Studio\'s first-person action blockbuster and winner of more than 100 \'Game of the Year\' awards, Dishonored.', 1200.00, 1, '2022-05-26 22:14:50', '2022-05-26 22:14:50', NULL),
(18, 'DOOM Eternal', 'Hell’s armies have invaded Earth. Become the Slayer in an epic single-player campaign to conquer demons across dimensions and stop the final destruction of humanity. The only thing they fear... is you.', 2000.00, 1, '2022-05-26 22:16:49', '2022-05-26 22:16:49', NULL),
(19, 'Devil May Cry 5', 'The ultimate Devil Hunter is back in style, in the game action fans have been waiting for.', 1600.00, 1, '2022-05-26 22:17:29', '2022-05-26 22:17:29', NULL),
(20, 'Elden Ring', 'THE NEW FANTASY ACTION RPG. Rise, Tarnished, and be guided by grace to brandish the power of the Elden Ring and become an Elden Lord in the Lands Between.', 4000.00, 1, '2022-05-26 22:17:54', '2022-05-26 22:17:54', NULL),
(21, 'The Ascent', 'The Ascent is a solo and co-op Action-shooter RPG set in a cyberpunk world. The mega corporation that owns you and everyone, The Ascent Group, has just collapsed. Can you survive without it?', 1500.00, 1, '2022-05-26 22:18:41', '2022-05-26 22:18:41', NULL),
(22, 'It Takes Two', 'Embark on the craziest journey of your life in It Takes Two. Invite a friend to join for free with Friend’s Pass and work together across a huge variety of gleefully disruptive gameplay challenges. Winner of GAME OF THE YEAR at the Game Awards 2021.', 4200.00, 2, '2022-05-26 22:19:35', '2022-05-26 22:19:35', NULL),
(23, 'STAR WARS Jedi: Fallen Order', 'A galaxy-spanning adventure awaits in Star Wars Jedi: Fallen Order, a 3rd person action-adventure title from Respawn. An abandoned Padawan must complete his training, develop new powerful Force abilities, and master the art of the lightsaber - all while staying one step ahead of the Empire.', 2500.00, 1, '2022-05-26 22:20:28', '2022-05-26 22:20:28', NULL),
(24, 'Titanfall® 2', 'Respawn Entertainment gives you the most advanced titan technology in its new, single player campaign &amp; multiplayer experience. Combine &amp; conquer with new titans &amp; pilots, deadlier weapons, &amp; customization and progression systems that help you and your titan flow as one unstoppable killing force.', 1400.00, 1, '2022-05-26 22:22:42', '2022-05-26 22:22:42', NULL),
(25, 'Blasphemous', 'Blasphemous is a brutal action-platformer with skilled hack’n slash combat set in the nightmare world of Cvstodia. Explore, upgrade your abilities, and perform savage executions on the hordes of enemies that stand between you and your quest to break eternal damnation.', 550.00, 1, '2022-05-26 22:24:02', '2022-06-15 15:47:19', NULL),
(28, 'Blasphemous', 'saksak', 1234.00, 1, '2022-06-16 15:12:05', '2022-06-16 15:12:05', '2022-06-16 15:12:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuarios`
--

CREATE TABLE `tipo_usuarios` (
  `id` tinyint(2) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuarios`
--

INSERT INTO `tipo_usuarios` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Comprador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contrasena` text NOT NULL,
  `id_tipo_usuario` tinyint(2) UNSIGNED NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `contrasena`, `id_tipo_usuario`, `fecha_alta`, `fecha_modificacion`, `fecha_baja`) VALUES
(1, 'admin', 'admin@davinci.edu.ar', '$2y$10$PicRy0iB4hYGKoZaQTqRTuc3AN2olcmlfUwGh0HD7ejBE5ZT5xVze', 1, '2022-07-08 18:01:53', '2022-07-08 18:01:53', NULL),
(2, 'usuario', 'usuario@davinci.edu.ar', '$2y$10$drTMIcnjbUVf553zjXuGeO2sJZYFt3uW3tKh.7Q69eUPZnyIvZtrO', 2, '2022-07-08 18:01:54', '2022-07-08 18:01:54', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  MODIFY `id` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuarios` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
