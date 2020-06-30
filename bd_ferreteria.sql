

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




--
-- Base de datos: `bd_ferreteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramientas`
--

CREATE TABLE IF NOT EXISTS `herramientas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `codigo` varchar(70) NOT NULL,
  `valor` int(100) NOT NULL,
  `cantidad_a` int(100) NOT NULL,
  `cantidad_i` int(100) NOT NULL,
  `dato` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `herramientas`
--

INSERT INTO `herramientas` (`id`, `nombre`, `codigo`, `valor`, `cantidad_a`, `cantidad_i`, `dato`) VALUES
(1, 'Conny', '#123', 5000, 21, 40, 'TiendaKK'),
(2, 'Lucas', '#333', 25, 30, 40, 'Tienda666');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
