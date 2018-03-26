-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-03-2018 a las 01:54:35
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ptjson`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cedula` varchar(11) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(30) COLLATE utf8_bin NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(55) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cedula`, `nombre`, `direccion`, `telefono`, `email`, `password`) VALUES
('10201654865', 'Anna Varney 2', 'Hell 2', 458, 'marroquin@gmail.com', 'asd'),
('1045236987', 'Jorge Humberto Polindara', 'Cll 56 # 89 N 23', 2147483647, 'poli02@gmail.com', 'asd'),
('10532844', 'CAPOTE CAMPO LEONEL', 'Cra 10 # 67 N 194', 7894568, 'capote@gmail.com', '6541515'),
('10536636', 'ALVAREZ JARAMILLO LUIS EVELIO', 'Cra 10 # 67 N 194', 4532168, 'alvarez@gmail.com', '78965asdf'),
('10547808', ' ACOSTA FAUSTO JOSE', 'Cra 10 # 67 N 194', 7895426, 'acosta@gmail.com', '234df45'),
('1061803365', 'Juan Sebastian Moriones', 'Cra 10 # 67 N 194', 2147483647, 'juansebastian@gmail.com', '123456'),
('1065487932', 'Jhonnier Steeven Fernandez', 'Cra 14 # 37 N 76', 8754235, 'jhonnier27@gmail.com', '124asp'),
('123456788', 'Daniel Mauricio Rivera', 'Cra 65 # 54 N 897', 2147483647, 'daniel@gmail.com', '123548'),
('343200842', 'Sonia Moncayo', 'Cll 20 # 145 N 120', 879621456, 'soniam0722@gmail.com', '11234435b'),
('4523169', 'Lucia Quinayas', 'Cll 56 # 89 N 23', 8974412, 'lucia22@gmail.com', 'poloiuy'),
('48600072', ' BENAVIDEZ COLLAZOS SANDRA PATRICIA', 'Cra 10 # 67 N 194', 4655467, 'benavidez@gmail.com', '7895sad'),
('76307332', 'ABELLA HERRERA WILLIAM EFRAIN', 'Cra 10 # 67 N 194', 87931575, 'abella@gmail.com', '10365879');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cedula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
