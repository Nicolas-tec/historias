-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3310
-- Tiempo de generación: 13-12-2022 a las 18:47:46
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `historias_terror`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historias`
--

CREATE TABLE `historias` (
  `id_histroria` int(11) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `N_publicasion` varchar(100) NOT NULL,
  `N_historia` varchar(2000) NOT NULL,
  `historia` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historias`
--

INSERT INTO `historias` (`id_histroria`, `clave`, `N_publicasion`, `N_historia`, `historia`) VALUES
(2, '150820', 'saratos', 'Golpes en el coche', 'Una familia, compuesta por dos pequeños y sus padres, viajaban por carretera hacia [....] cuando el coche se les averió. Los padres salieron a buscar ayuda y, para que los niños no se aburrieran, les dejaron con la radio encendida. Cayó la noche y los padres seguían sin volver cuando escucharon una inquietante noticia en la radio: un asesino muy peligroso se había escapado de un centro penitenciario cercano a [....] y pedían que se extremaran las precauciones.\r\n\r\nLas horas pasaban y los padres de los niños no regresaban. De pronto, empezaron a escuchar golpes sobre sus cabezas. “Poc, poc, poc”. Los golpes, que parecían provenir de algo que golpeaba la parte de arriba del coche, eran cada vez más rápidos y más fuertes. “POC, POC, POC”. Los niños, aterrados, no pudieron resistir más: abrieron la puerta y huyeron a toda prisa.\r\n\r\nSolo el mayor de los niños se atrevió a girar la cabeza para mirar qué provocaba los golpes. No debería haberlo hecho: sobre el coche había un hombre de gran tamaño, que golpeaba la parte superior del vehículo con algo que tenía en las manos: eran las cabezas de sus padres.\r\n\r\n'),
(3, '1505n', 'el dador de luz', 'Yoduloso', 'Hace unos años, en un campamento, hubo un grupo de jóvenes que, durante una excusión, se perdió. Tras varias horas perdidos, encontraron a un hombre solitario: llevaba un hacha a la espalda y no les daba buena espina pero, desesperados, le preguntaron cómo se llegaba al pueblo. A pesar de la primera impresión, el hombre resultó ser supergradable: les dijo que se llamaba Yoduloso y les acompañó hasta el pueblo, donde se despidió. Antes, se hizo una foto junto a los jóvenes.\r\n\r\nEl grupo de jóvenes contó en el pueblo que el hombre que los había llevado hasta allí se llamaba Yoduloso, pero los vecinos de la localidad dijeron que aquello era imposible. El único Yoduloso que había habido en el pueblo falleció hace más de 100 años, y murió de una forma horrible: un grupo de niños jugaba a la pelota y se le escapó, y Yoduloso fue a por ella. Llevaba un hacha en la mano y tuvo la mala suerte de tropezar y cortarse su propia pierna. Murió desangrado.\r\n\r\nLos jóvenes escucharon incrédulos y pensaron que, incluso a pesar de las coincidencias del nombre y de que aquel señor también llevaba un hacha, era imposible que se trata de la misma persona. Sin embargo, cuando revelaron aquella foto que se habían hecho al llegar al pueblo, se percataron de algo que les hizo cambiar de parecer: Yoduloso había desaparecido de la fotografía.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usario`
--

CREATE TABLE `usario` (
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `edad` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usario`
--

INSERT INTO `usario` (`nombre`, `correo`, `edad`, `clave`) VALUES
('andres', 'aurorasc@yahoo.com', '43', '1505n'),
('nicolas', 'turcynicolas.102@gmail.com', '20', '150820');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historias`
--
ALTER TABLE `historias`
  ADD PRIMARY KEY (`id_histroria`),
  ADD KEY `id` (`clave`),
  ADD KEY `clave` (`clave`);

--
-- Indices de la tabla `usario`
--
ALTER TABLE `usario`
  ADD PRIMARY KEY (`clave`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historias`
--
ALTER TABLE `historias`
  MODIFY `id_histroria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historias`
--
ALTER TABLE `historias`
  ADD CONSTRAINT `historias_ibfk_1` FOREIGN KEY (`clave`) REFERENCES `usario` (`clave`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
