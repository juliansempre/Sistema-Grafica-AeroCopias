-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Fev-2022 às 13:13
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `usuario`, `senha`, `email`) VALUES
(1, 'Maria', 'Maria123', '4003321', 'maria@gmail.com'),
(2, 'RDYFTUGH', 'TYUGHJ', 'GHJN', 'FYGJKL'),
(3, 'root', 'root', 'toor', 'rootnet@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `senha`, `created`, `modified`) VALUES
(61, 'julian', '123', '2022-02-27 09:52:34', NULL),
(49, '', '', '2022-02-26 14:36:05', NULL),
(50, 'Silva', 'ttt', '2022-02-26 14:36:24', NULL),
(60, 'julian', '123123', '2022-02-27 09:52:25', NULL),
(59, 'julian', '123', '2022-02-27 00:50:19', NULL),
(53, 'julian', '123123123', '2022-02-26 15:44:36', NULL),
(58, 'julian', '', '2022-02-27 00:44:54', NULL),
(57, 'Julian', '123', '2022-02-26 15:54:23', NULL),
(56, 'Julian', '123', '2022-02-26 15:54:13', NULL),
(55, 'julian', '123123123', '2022-02-26 15:45:51', NULL),
(54, 'julian', '123123123', '2022-02-26 15:45:01', NULL),
(52, 'joana ', 'dark', '2022-02-26 15:29:41', NULL),
(51, 'lol', 'lol', '2022-02-26 14:38:23', NULL),
(48, 'root', '', '2022-02-26 14:33:37', NULL),
(62, 'cs', 'saa', '2022-02-27 10:04:16', NULL),
(63, 'julian', '123', '2022-02-27 10:04:38', NULL),
(64, 'julian', '123', '2022-02-27 10:06:22', NULL),
(65, 'julian', '123', '2022-02-27 10:06:50', NULL),
(66, 'root', '123', '2022-02-27 10:07:33', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
