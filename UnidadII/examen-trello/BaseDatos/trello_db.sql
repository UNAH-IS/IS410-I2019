-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2017 at 09:15 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trello_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_listas`
--

CREATE TABLE `tbl_listas` (
  `codigo_lista` int(11) NOT NULL,
  `titulo_lista` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_listas`
--

INSERT INTO `tbl_listas` (`codigo_lista`, `titulo_lista`) VALUES
(1, 'Tareas Pendientes'),
(2, 'Tareas en Proceso');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tarjetas`
--

CREATE TABLE `tbl_tarjetas` (
  `codigo_tarjeta` int(11) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  `codigo_lista` int(11) NOT NULL,
  `contenido_tarjeta` varchar(3000) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_tarjetas`
--

INSERT INTO `tbl_tarjetas` (`codigo_tarjeta`, `codigo_usuario`, `codigo_lista`, `contenido_tarjeta`, `fecha_creacion`) VALUES
(1, 1, 1, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2017-11-03'),
(2, 2, 1, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2017-11-03'),
(3, 3, 1, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2017-11-03'),
(4, 1, 1, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2017-11-03'),
(5, 2, 2, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2017-11-03'),
(6, 3, 2, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2017-11-03'),
(7, 1, 2, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2017-11-03'),
(8, 2, 2, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2017-11-03'),
(9, 3, 2, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2017-11-03'),
(10, 4, 2, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2017-11-03'),
(11, 5, 2, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2017-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `codigo_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(500) DEFAULT NULL,
  `url_imagen` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`codigo_usuario`, `nombre_usuario`, `url_imagen`) VALUES
(1, 'Goku', 'img/profile-pics/goku.jpg'),
(2, 'Vegeta', 'img/profile-pics/vegeta.jpg'),
(3, 'Trunks', 'img/profile-pics/trunks.jpg'),
(4, 'Goten', 'img/profile-pics/goten.png'),
(5, 'Pan', 'img/profile-pics/pan.png'),
(6, 'Dende', 'img/profile-pics/dende.jpg'),
(7, 'Krillin', 'img/profile-pics/krilin.jpg'),
(8, 'Bulma', 'img/profile-pics/bulma.jpg'),
(9, 'Kibito', 'img/profile-pics/kibito.jpg'),
(10, 'Videl', 'img/profile-pics/videl.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_listas`
--
ALTER TABLE `tbl_listas`
  ADD PRIMARY KEY (`codigo_lista`);

--
-- Indexes for table `tbl_tarjetas`
--
ALTER TABLE `tbl_tarjetas`
  ADD PRIMARY KEY (`codigo_tarjeta`),
  ADD KEY `fk_tbl_tarjetas_tbl_usuarios_idx` (`codigo_usuario`),
  ADD KEY `fk_tbl_tarjetas_tbl_listas1_idx` (`codigo_lista`);

--
-- Indexes for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`codigo_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_listas`
--
ALTER TABLE `tbl_listas`
  MODIFY `codigo_lista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_tarjetas`
--
ALTER TABLE `tbl_tarjetas`
  MODIFY `codigo_tarjeta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `codigo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_tarjetas`
--
ALTER TABLE `tbl_tarjetas`
  ADD CONSTRAINT `fk_tbl_tarjetas_tbl_listas1` FOREIGN KEY (`codigo_lista`) REFERENCES `tbl_listas` (`codigo_lista`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_tarjetas_tbl_usuarios` FOREIGN KEY (`codigo_usuario`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
