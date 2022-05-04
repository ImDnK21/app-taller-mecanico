-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-05-2022 a las 07:27:33
-- Versión del servidor: 5.7.33
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tallermecanico1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `RUT_CLIENTE` varchar(50) NOT NULL,
  `NOMBRE_CLIENTE` varchar(50) DEFAULT NULL,
  `APELLIDO_PATERNO_CLIENTE` varchar(50) DEFAULT NULL,
  `APELLIDO_MATERNO_CLIENTE` varchar(50) DEFAULT NULL,
  `TELEFONO_CLIENTE` varchar(50) DEFAULT NULL,
  `DIRECCION` varchar(50) DEFAULT NULL,
  `CORREO_ELECTRONICO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`RUT_CLIENTE`, `NOMBRE_CLIENTE`, `APELLIDO_PATERNO_CLIENTE`, `APELLIDO_MATERNO_CLIENTE`, `TELEFONO_CLIENTE`, `DIRECCION`, `CORREO_ELECTRONICO`) VALUES
('', '', '', '', '', '', ''),
('20.049.422-2', 'Danko', 'Sanchez', 'ARANCIBIA', '+56958608563', 'gounod 10676', ''),
('20.049.428-8', 'Danko', 'Sanchez', 'ARANCIBIA', '56958608563', 'gounod 10676', ''),
('20.049.429-6', 'Danko', 'Sanchez', 'Arancibia', '958608563', 'los malvekes 1040', 'asd@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mecanico`
--

CREATE TABLE `mecanico` (
  `RUT_MECANICO` varchar(50) NOT NULL,
  `NOMBRE_MECANICO` varchar(50) DEFAULT NULL,
  `APELLIDO_MECANICO` varchar(50) DEFAULT NULL,
  `CORREO_ELECTRONICO_MECANICO` varchar(50) DEFAULT NULL,
  `TELEFONO_MECANICO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mecanico`
--

INSERT INTO `mecanico` (`RUT_MECANICO`, `NOMBRE_MECANICO`, `APELLIDO_MECANICO`, `CORREO_ELECTRONICO_MECANICO`, `TELEFONO_MECANICO`) VALUES
('20.123.456-6', 'andrea', 'perez', 'jperez12@gmail.com', 95234512),
('45213', 'dsadas', 'gfdgfds', 'gdsfsd', 15213);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuesto`
--

CREATE TABLE `repuesto` (
  `id_respuesto` int(5) NOT NULL,
  `nombre_repuesto` varchar(30) DEFAULT NULL,
  `descrip_repuesto` varchar(50) DEFAULT NULL,
  `tipo_repuesto` varchar(30) DEFAULT NULL,
  `calidad` varchar(20) DEFAULT NULL,
  `anio_fabricacion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `repuesto`
--

INSERT INTO `repuesto` (`id_respuesto`, `nombre_repuesto`, `descrip_repuesto`, `tipo_repuesto`, `calidad`, `anio_fabricacion`) VALUES
(1, 'Bomba de Agua', 'kajskjsa', 'Refrigeracion', 'Nuevo', '2015'),
(1, 'bomba de agua', 'Lorem Ipsum is simply dummy text of the pr', 'tipo 1', 'nuevo', '2018'),
(2, 'bomba de bencina', 'Lorem Ipsum is simply dummy text of the printing', 'tipo 2', 'nuevo', '2019'),
(3, 'alzavidrios', 'Lorem Ipsum is simply dummy text of the printing a', 'tipo 3', 'nuevo', '2019');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_USUARIO` int(11) NOT NULL,
  `NOMBRE_USUARIO` varchar(50) DEFAULT NULL,
  `APELLIDO_USUARIO` varchar(50) DEFAULT NULL,
  `CORREO_ELECTRONICO` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `ROL` varchar(50) NOT NULL DEFAULT 'usuario'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_USUARIO`, `NOMBRE_USUARIO`, `APELLIDO_USUARIO`, `CORREO_ELECTRONICO`, `PASSWORD`, `ROL`) VALUES
(8, 'danko', 'sanchez', 'dsanchez@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'usuario'),
(9, 'diego', 'flores', 'dflores@gmail.com', '*00A51F3F48415C7D4E8908980D443C29C69B60C9', 'admin'),
(10, 'boris', 'huenullanca', 'boris@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(11, 'Karel', 'Poblete', 'karel@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(12, 'alan', 'brito', 'alan@gmail.com', '202cb962ac59075b964b07152d234b70', 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `PATENTE_VEHICULO` varchar(50) NOT NULL,
  `MARCA_VEHICULO` varchar(50) DEFAULT NULL,
  `MODELO_VEHICULO` varchar(50) DEFAULT NULL,
  `ANIO_VEHICULO` int(11) DEFAULT NULL,
  `TIPO_COMBUSTIBLE` varchar(50) DEFAULT NULL,
  `TRANSMISION` varchar(50) DEFAULT NULL,
  `COLOR_PRIMARIO` varchar(50) DEFAULT NULL,
  `NUMERO_CHASIS` varchar(50) DEFAULT NULL,
  `KILOMETRAJE` int(11) DEFAULT NULL,
  `TIPO_VEHICULO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`PATENTE_VEHICULO`, `MARCA_VEHICULO`, `MODELO_VEHICULO`, `ANIO_VEHICULO`, `TIPO_COMBUSTIBLE`, `TRANSMISION`, `COLOR_PRIMARIO`, `NUMERO_CHASIS`, `KILOMETRAJE`, `TIPO_VEHICULO`) VALUES
('bksd23', 'nissan', 'xtrial', 2021, 'diesel', 'mecanica', 'blanco', 'negro', 110000, 'suv'),
('dasdsa', 'Subaru', 'gdsad', 124, 'gsadas', 'gsad', '#970707', '12342131', 51231, ''),
('dsad', 'BMW', 'gasdas', 123, 'dsagsa', 'dsagfa', '#9d0101', '#42245b', 521321, 'sgasdas'),
('gasdas', 'MG', 'gsads', 1984, 'Gas natural', 'CVT', '#9f1d1d', 'sadsagfsa', 213214, ''),
('jdasjd', 'Toyota', 'yaris', 2014, 'Electrico', 'Automatica', '#8f1919', '5213215', 21421, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`RUT_CLIENTE`);

--
-- Indices de la tabla `mecanico`
--
ALTER TABLE `mecanico`
  ADD PRIMARY KEY (`RUT_MECANICO`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`PATENTE_VEHICULO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
