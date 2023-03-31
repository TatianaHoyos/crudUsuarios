-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:5000
-- Tiempo de generación: 27-03-2023 a las 03:02:27
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crudusuario`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `crudUsuario` (IN `numeroDocumento` VARCHAR(20), IN `rol` INT(11), IN `nombres` VARCHAR(100), IN `apellidos` VARCHAR(100), IN `email` VARCHAR(100), IN `password` VARCHAR(100), IN `opcion` VARCHAR(20))   BEGIN
    SET @estadoUsuario = 'ACTIVO';
    CASE
    WHEN opcion = 'guardar' THEN
        INSERT INTO usuario VALUES (numeroDocumento,rol,nombres,apellidos,email,password,@estadoUsuario);
        SELECT CONCAT ('se ha agregado exitosamente el usuario ',nombres,' ',apellidos) as mensaje;
    END CASE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `datoUsuario` (IN `idDocumento` INT(11), IN `idRol` INT(11), IN `idUsuario` VARCHAR(20), IN `genero` VARCHAR(45), IN `fechaNacimiento` DATE, IN `direccionUsuario` VARCHAR(200), IN `telefonoUsuario` VARCHAR(45), IN `celularUsuario` VARCHAR(45), IN `opcion` VARCHAR(20))   BEGIN 
    SET @idDatoUsuario = (SELECT IFNULL(MAX(idDatoUsuario)+1,1) FROM datousuario); 
    SET @estadoDatoUsuario ='ACTIVO'; 
    SET @empresa = (SELECT idEmpresa  FROM empresa LIMIT 1); 
    CASE WHEN opcion = 'guardar' THEN
INSERT INTO datousuario VALUES (@idDatoUsuario,@empresa,idDocumento ,idRol,idUsuario,genero,fechaNacimiento,direccionUsuario,telefonoUsuario,celularUsuario,@estadoDatoUsuario); 
SELECT CONCAT ('se han agregado completamene los datos') as mensaje; 
END CASE; 
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datousuario`
--

CREATE TABLE `datousuario` (
  `idDatoUsuario` int(11) NOT NULL,
  `idEmpresa` varchar(45) DEFAULT NULL,
  `idDocumento` int(11) DEFAULT NULL,
  `idRol` int(11) DEFAULT NULL,
  `idUsuario` varchar(20) DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `direccionUsuario` varchar(200) DEFAULT NULL,
  `telefonoUsuario` varchar(45) DEFAULT NULL,
  `celularUsuario` varchar(45) DEFAULT NULL,
  `estadoUsuario` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datousuario`
--

INSERT INTO `datousuario` (`idDatoUsuario`, `idEmpresa`, `idDocumento`, `idRol`, `idUsuario`, `genero`, `fechaNacimiento`, `direccionUsuario`, `telefonoUsuario`, `celularUsuario`, `estadoUsuario`) VALUES
(1, '1', 1, 3, '2684', 'F', '2023-03-10', 'rfasewf', '224', '63534', 'ACTIVO'),
(3, '1', 1, 3, '2323', 'F', '2020-03-31', 'xswjnx', '838', '7366263', 'ACTIVO'),
(5, '1', 1, 3, '5050', 'M', '2023-03-09', 'gabriea', '357', '3213', 'ACTIVO'),
(6, '1', 1, 3, '76', 'M', '2023-03-03', 'ggd', '321', '234', 'ACTIVO'),
(7, '1', 1, 1, '7687', 'M', '2023-03-03', 'ggd', '321', '234', 'ACTIVO'),
(8, '1', 1, 3, '123', 'F', '2023-03-09', 'fds', '345', '433', 'ACTIVO'),
(9, '1', 1, 3, '1234', 'F', '2023-02-28', 'sz', '21', '12', 'ACTIVO'),
(10, '1', 1, 3, '34', 'F', '2023-03-01', 'cwdq', '43', '2', 'ACTIVO'),
(11, '1', 1, 3, '342', 'F', '2023-03-02', 'ewdx', '23', '3312', 'ACTIVO'),
(12, '1', 1, 3, '343', 'F', '2023-02-28', 'das', '32', '23', 'ACTIVO'),
(13, '1', 1, 3, '3434', 'F', '2023-02-28', 'das', '32', '23', 'ACTIVO'),
(14, '1', 1, 3, '66', 'M', '2023-03-07', 'jmk,', '8876', '12345', 'ACTIVO'),
(15, '1', 3, 3, '0987', 'F', '2023-03-01', 'gfffff', '543', '345', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `idDocumento` int(11) NOT NULL,
  `tipoDocumento` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`idDocumento`, `tipoDocumento`) VALUES
(1, 'Cedula'),
(2, 'Cedula Extrangeria'),
(3, 'Pasaporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idEmpresa` varchar(45) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `ubicacion` varchar(200) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idEmpresa`, `nombre`, `ubicacion`, `telefono`, `email`, `estado`) VALUES
('1', 'copellia', 'en tu cora', '00000', 'entucora@copelita.com', 'activo'),
('2', 'pepsi', 'bello', '55555', 'pepsi@pepsi.com', 'activo'),
('3', 'cola', 'niquia', '98377', 'cola@cola.com', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purchases`
--

CREATE TABLE `purchases` (
  `purchasesid` int(11) NOT NULL,
  `amount` double NOT NULL,
  `purchase_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `purchases`
--

INSERT INTO `purchases` (`purchasesid`, `amount`, `purchase_date`) VALUES
(1, 15, '2023-03-03'),
(2, 17, '2023-04-04'),
(3, 17.1, '2023-05-05'),
(4, 30, '2023-03-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `rol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Usuario'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales`
--

CREATE TABLE `sales` (
  `salesid` int(11) NOT NULL,
  `amount` double NOT NULL,
  `sales_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sales`
--

INSERT INTO `sales` (`salesid`, `amount`, `sales_date`) VALUES
(1, 150, '2023-03-01'),
(2, 200, '2023-04-02'),
(3, 250, '2023-05-03'),
(4, 40, '2023-03-03'),
(5, 60, '2023-06-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` varchar(20) NOT NULL,
  `idRol` int(11) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `idRol`, `nombres`, `apellidos`, `email`, `password`, `estado`) VALUES
('0987', 3, 'hola', 'quetal', 'holaquetal@gmail.com', '1234', 'ACTIVO'),
('123', 3, 'tatiana', 'hoyos', 'tati@gmail.com', '321', 'ACTIVO'),
('1234', 3, 'asd', 'asd', 'da@da.com', '22', 'ACTIVO'),
('2323', 3, 'xdhsn', 'nsnw', 'a@gmail.com', '282u8', 'ACTIVO'),
('2684', 3, 'eagt', 'ag', 'dnd@fam.com', '43t', 'ACTIVO'),
('32', 3, 'dq', 'Df', 'eme.sn@ene32323.com', 'wqyu2y', 'ACTIVO'),
('34', 3, 'es', 'dasda', 'dnd@fam.com', '325', 'ACTIVO'),
('342', 3, 'edwe', 'wsfa', 'dnd@fam.com', 'earr', 'ACTIVO'),
('343', 3, 'asd', 'asda', 'dnd@fam.com', 'asd', 'ACTIVO'),
('3434', 3, 'asd', 'asda', 'dnd@fam.com', 'asd', 'ACTIVO'),
('5050', 3, 'eme', 'gonza', 'eme.sn@ene32323.com', '3222222222222222', 'ACTIVO'),
('66', 3, 'tyj', 'jhg', 'eme.sn@ene32323.com', '466', 'ACTIVO'),
('76', 3, 'eme', 'ginza', 'eme@gonza.co', '123', 'ACTIVO'),
('7687', 1, 'tatiana', 'ginza', 'tati@gonza.co', '1234', 'ACTIVO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datousuario`
--
ALTER TABLE `datousuario`
  ADD PRIMARY KEY (`idDatoUsuario`),
  ADD KEY `idEmpresa` (`idEmpresa`),
  ADD KEY `idDocumento` (`idDocumento`),
  ADD KEY `idRol` (`idRol`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`idDocumento`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idEmpresa`);

--
-- Indices de la tabla `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`purchasesid`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`salesid`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idRol` (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `purchases`
--
ALTER TABLE `purchases`
  MODIFY `purchasesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sales`
--
ALTER TABLE `sales`
  MODIFY `salesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datousuario`
--
ALTER TABLE `datousuario`
  ADD CONSTRAINT `datousuario_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`idEmpresa`),
  ADD CONSTRAINT `datousuario_ibfk_2` FOREIGN KEY (`idDocumento`) REFERENCES `documento` (`idDocumento`),
  ADD CONSTRAINT `datousuario_ibfk_3` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`),
  ADD CONSTRAINT `datousuario_ibfk_4` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
