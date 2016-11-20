-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2016 a las 03:23:45
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `totalgames`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacioncontenido`
--

CREATE TABLE `clasificacioncontenido` (
  `idClasificacion` int(11) NOT NULL,
  `tipoClasificacion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clasificacioncontenido`
--

INSERT INTO `clasificacioncontenido` (`idClasificacion`, `tipoClasificacion`) VALUES
(1, '+18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadooperacion`
--

CREATE TABLE `estadooperacion` (
  `idEstadoOperacion` int(11) NOT NULL,
  `tipoEstado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estadooperacion`
--

INSERT INTO `estadooperacion` (`idEstadoOperacion`, `tipoEstado`) VALUES
(1, 'Realizada'),
(2, 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `idGenero` int(11) NOT NULL,
  `nombreGenero` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`idGenero`, `nombreGenero`) VALUES
(1, 'Terror');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `idIdioma` int(11) NOT NULL,
  `nombreIdioma` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`idIdioma`, `nombreIdioma`) VALUES
(1, 'Español'),
(2, 'Inglés'),
(3, 'Japonés'),
(4, 'Inglés-Subtitulado'),
(5, 'Japonés-Subtitulado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE `juego` (
  `idJuego` int(11) NOT NULL,
  `nombreJuego` varchar(45) NOT NULL,
  `descripcionJuego` varchar(45) NOT NULL,
  `requisitosJuego` varchar(100) DEFAULT NULL,
  `idClasificacion` int(11) NOT NULL,
  `idGenero` int(11) NOT NULL,
  `idIdioma` int(11) NOT NULL,
  `idPlataforma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `juego`
--

INSERT INTO `juego` (`idJuego`, `nombreJuego`, `descripcionJuego`, `requisitosJuego`, `idClasificacion`, `idGenero`, `idIdioma`, `idPlataforma`) VALUES
(1, 'PT', 'Teaser Silent Hill', 'Consola XBOX ONE', 1, 1, 3, 1),
(2, 'Resident Evil 6', 'Nueva entrega de la saga', 'Consola PS4', 1, 1, 4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operacion`
--

CREATE TABLE `operacion` (
  `idOperacion` int(11) NOT NULL,
  `fechaOperacion` date NOT NULL,
  `montoOperacion` int(11) NOT NULL,
  `emailUsuario` varchar(45) NOT NULL,
  `idJuego` int(11) NOT NULL,
  `idTipoOperacion` int(11) NOT NULL,
  `idEstadoOperacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operacionfinal`
--

CREATE TABLE `operacionfinal` (
  `idOperacionFinal` int(11) NOT NULL,
  `fechaOperacionFinal` date NOT NULL,
  `idOperacion` int(11) NOT NULL,
  `emailUsuarioFinal` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plataforma`
--

CREATE TABLE `plataforma` (
  `idPlataforma` int(11) NOT NULL,
  `nombrePlataforma` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plataforma`
--

INSERT INTO `plataforma` (`idPlataforma`, `nombrePlataforma`) VALUES
(1, 'XBOX ONE'),
(2, 'PC'),
(3, 'PS4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipooperacion`
--

CREATE TABLE `tipooperacion` (
  `idTipoOperacion` int(11) NOT NULL,
  `nombreOperacion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipooperacion`
--

INSERT INTO `tipooperacion` (`idTipoOperacion`, `nombreOperacion`) VALUES
(1, 'Compra'),
(2, 'Venta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `emailUsuario` varchar(45) NOT NULL,
  `nombreUsuario` varchar(45) NOT NULL,
  `claveUsuario` int(11) NOT NULL,
  `valoracionUsuario` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`emailUsuario`, `nombreUsuario`, `claveUsuario`, `valoracionUsuario`) VALUES
('dfabrega991@gmail.com', 'gahjkakajk', 1234, 1234);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clasificacioncontenido`
--
ALTER TABLE `clasificacioncontenido`
  ADD PRIMARY KEY (`idClasificacion`);

--
-- Indices de la tabla `estadooperacion`
--
ALTER TABLE `estadooperacion`
  ADD PRIMARY KEY (`idEstadoOperacion`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`idGenero`);

--
-- Indices de la tabla `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`idIdioma`);

--
-- Indices de la tabla `juego`
--
ALTER TABLE `juego`
  ADD PRIMARY KEY (`idJuego`),
  ADD KEY `clasificacionContenido_idClasificacion` (`idClasificacion`),
  ADD KEY `genero_idGenero` (`idGenero`),
  ADD KEY `idioma_idIdioma` (`idIdioma`),
  ADD KEY `plataforma_idPlataforma` (`idPlataforma`);

--
-- Indices de la tabla `operacion`
--
ALTER TABLE `operacion`
  ADD PRIMARY KEY (`idOperacion`),
  ADD KEY `Usuario_emailUsuario` (`emailUsuario`),
  ADD KEY `Juego_idJuego` (`idJuego`),
  ADD KEY `tipoOperacion_idTipoOperacion` (`idTipoOperacion`),
  ADD KEY `estadoOperacion_idEstadoOperacion` (`idEstadoOperacion`);

--
-- Indices de la tabla `operacionfinal`
--
ALTER TABLE `operacionfinal`
  ADD PRIMARY KEY (`idOperacionFinal`),
  ADD KEY `Operacion_idOperacion` (`idOperacion`),
  ADD KEY `Usuario_emailUsuarioFinal` (`emailUsuarioFinal`);

--
-- Indices de la tabla `plataforma`
--
ALTER TABLE `plataforma`
  ADD PRIMARY KEY (`idPlataforma`);

--
-- Indices de la tabla `tipooperacion`
--
ALTER TABLE `tipooperacion`
  ADD PRIMARY KEY (`idTipoOperacion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`emailUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clasificacioncontenido`
--
ALTER TABLE `clasificacioncontenido`
  MODIFY `idClasificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `estadooperacion`
--
ALTER TABLE `estadooperacion`
  MODIFY `idEstadoOperacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `idGenero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
  MODIFY `idIdioma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `juego`
--
ALTER TABLE `juego`
  MODIFY `idJuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `operacion`
--
ALTER TABLE `operacion`
  MODIFY `idOperacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `operacionfinal`
--
ALTER TABLE `operacionfinal`
  MODIFY `idOperacionFinal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `plataforma`
--
ALTER TABLE `plataforma`
  MODIFY `idPlataforma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipooperacion`
--
ALTER TABLE `tipooperacion`
  MODIFY `idTipoOperacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `juego`
--
ALTER TABLE `juego`
  ADD CONSTRAINT `juego_ibfk_1` FOREIGN KEY (`idIdioma`) REFERENCES `idioma` (`idIdioma`),
  ADD CONSTRAINT `juego_ibfk_2` FOREIGN KEY (`idPlataforma`) REFERENCES `plataforma` (`idPlataforma`),
  ADD CONSTRAINT `juego_ibfk_3` FOREIGN KEY (`idClasificacion`) REFERENCES `clasificacioncontenido` (`idClasificacion`),
  ADD CONSTRAINT `juego_ibfk_4` FOREIGN KEY (`idGenero`) REFERENCES `genero` (`idGenero`);

--
-- Filtros para la tabla `operacion`
--
ALTER TABLE `operacion`
  ADD CONSTRAINT `operacion_ibfk_1` FOREIGN KEY (`idJuego`) REFERENCES `juego` (`idJuego`),
  ADD CONSTRAINT `operacion_ibfk_2` FOREIGN KEY (`emailUsuario`) REFERENCES `usuario` (`emailUsuario`),
  ADD CONSTRAINT `operacion_ibfk_3` FOREIGN KEY (`idTipoOperacion`) REFERENCES `tipooperacion` (`idTipoOperacion`),
  ADD CONSTRAINT `operacion_ibfk_4` FOREIGN KEY (`idEstadoOperacion`) REFERENCES `estadooperacion` (`idEstadoOperacion`);

--
-- Filtros para la tabla `operacionfinal`
--
ALTER TABLE `operacionfinal`
  ADD CONSTRAINT `operacionfinal_ibfk_1` FOREIGN KEY (`idOperacion`) REFERENCES `operacion` (`idOperacion`),
  ADD CONSTRAINT `operacionfinal_ibfk_2` FOREIGN KEY (`emailUsuarioFinal`) REFERENCES `usuario` (`emailUsuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
