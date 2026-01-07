-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2026 a las 20:22:14
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aplicacion_pedidos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `cod_categoria` int(11) NOT NULL,
  `nombre_cat` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`cod_categoria`, `nombre_cat`, `descripcion`, `slug`) VALUES
(1, 'Bebidas con', 'Bebidas con alcohol', 'bebidas-con-alcohol'),
(2, 'Bebidas sin', 'Bebidas sin alcohol', 'bebidas-sin-alcohol'),
(3, 'Comida', 'Productos alimenticios', 'comida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `cod_ped` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `enviado` int(11) NOT NULL,
  `restaurante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`cod_ped`, `fecha`, `enviado`, `restaurante`) VALUES
(19, '2025-12-19', 1, 1),
(20, '2025-12-23', 1, 1),
(21, '2025-12-23', 1, 1),
(22, '2025-12-28', 1, 1),
(23, '2025-12-28', 1, 1),
(24, '2025-12-28', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidosproductos`
--

CREATE TABLE `pedidosproductos` (
  `cod_ped_prod` int(11) NOT NULL,
  `pedido` int(11) NOT NULL,
  `producto` int(11) NOT NULL,
  `unidades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidosproductos`
--

INSERT INTO `pedidosproductos` (`cod_ped_prod`, `pedido`, `producto`, `unidades`) VALUES
(1, 21, 1, 4),
(2, 21, 2, 7),
(3, 22, 1, 2),
(4, 23, 1, 2),
(5, 24, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `cod_prod` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `peso` float NOT NULL,
  `stock` int(11) NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`cod_prod`, `nombre`, `descripcion`, `peso`, `stock`, `categoria`) VALUES
(3, 'Cerveza Estrella Galicia', 'Cerveza lager española 330ml', 0.33, 120, 1),
(4, 'Cerveza Mahou Clásica', 'Cerveza rubia lata 330ml', 0.33, 110, 1),
(5, 'Cerveza Heineken', 'Cerveza premium holandesa 330ml', 0.33, 95, 1),
(6, 'Vino Tinto Rioja', 'Vino tinto D.O. Rioja 750ml', 0.75, 60, 1),
(7, 'Vino Blanco Albariño', 'Vino blanco gallego 750ml', 0.75, 55, 1),
(8, 'Whisky Johnnie Walker Red', 'Whisky escocés blended 700ml', 0.7, 40, 1),
(9, 'Whisky Ballantines', 'Whisky escocés 700ml', 0.7, 38, 1),
(10, 'Gin Bombay Sapphire', 'Ginebra premium inglesa 700ml', 0.7, 35, 1),
(11, 'Ron Barceló', 'Ron dominicano añejo 700ml', 0.7, 42, 1),
(12, 'Vodka Absolut', 'Vodka sueco 700ml', 0.7, 50, 1),
(13, 'Agua Mineral Font Vella', 'Agua mineral natural 1.5L', 1.5, 200, 2),
(14, 'Agua Bezoya', 'Agua mineral 1.5L', 1.5, 180, 2),
(15, 'Coca-Cola', 'Refresco de cola lata 330ml', 0.33, 300, 2),
(16, 'Coca-Cola Zero', 'Refresco sin azúcar lata 330ml', 0.33, 250, 2),
(17, 'Fanta Naranja', 'Refresco sabor naranja 330ml', 0.33, 210, 2),
(18, 'Sprite', 'Refresco lima-limón 330ml', 0.33, 190, 2),
(19, 'Zumo de Naranja Granini', 'Zumo de naranja 1L', 1, 90, 2),
(20, 'Zumo Multifrutas Don Simón', 'Zumo multifrutas 1L', 1, 85, 2),
(21, 'Red Bull', 'Bebida energética 250ml', 0.25, 150, 2),
(22, 'Nestea Limón', 'Té frío sabor limón 330ml', 0.33, 170, 2),
(23, 'Pizza Margarita', 'Pizza clásica con tomate y mozzarella', 0.45, 50, 3),
(24, 'Pizza Barbacoa', 'Pizza con carne y salsa barbacoa', 0.5, 45, 3),
(25, 'Hamburguesa de Ternera', 'Hamburguesa 100% ternera', 0.3, 70, 3),
(26, 'Hamburguesa de Pollo', 'Hamburguesa de pollo crujiente', 0.28, 65, 3),
(27, 'Pasta Carbonara', 'Pasta con salsa carbonara', 0.4, 40, 3),
(28, 'Pasta Boloñesa', 'Pasta con salsa de carne', 0.42, 42, 3),
(29, 'Ensalada César', 'Ensalada con pollo y salsa césar', 0.35, 60, 3),
(30, 'Ensalada Mixta', 'Ensalada con verduras frescas', 0.3, 55, 3),
(31, 'Lasaña de Carne', 'Lasaña tradicional de carne', 0.45, 35, 3),
(32, 'Sándwich Mixto', 'Sándwich de jamón y queso', 0.25, 80, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurantes`
--

CREATE TABLE `restaurantes` (
  `cod_res` int(11) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `pais` varchar(200) NOT NULL,
  `cp` int(11) NOT NULL,
  `ciudad` varchar(200) NOT NULL,
  `direccion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `restaurantes`
--

INSERT INTO `restaurantes` (`cod_res`, `correo`, `clave`, `pais`, `cp`, `ciudad`, `direccion`) VALUES
(1, 'luis@gmail.com', '1234', 'España', 26006, 'Logroño', 'Estambrera');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`cod_ped`);

--
-- Indices de la tabla `pedidosproductos`
--
ALTER TABLE `pedidosproductos`
  ADD PRIMARY KEY (`cod_ped_prod`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`cod_prod`);

--
-- Indices de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
  ADD PRIMARY KEY (`cod_res`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `cod_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `cod_ped` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `pedidosproductos`
--
ALTER TABLE `pedidosproductos`
  MODIFY `cod_ped_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `cod_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
  MODIFY `cod_res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
