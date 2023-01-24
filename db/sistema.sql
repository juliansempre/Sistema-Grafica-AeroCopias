-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Mar-2022 às 18:22
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
-- Estrutura da tabela `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datadopedido` date DEFAULT NULL,
  `aprovacao` date DEFAULT NULL,
  `entrega` varchar(255) DEFAULT NULL,
  `horario` time(6) DEFAULT NULL,
  `funcionario` varchar(255) DEFAULT NULL,
  `cliente` varchar(255) DEFAULT NULL,
  `contato` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `arquivosalvoem` varchar(255) DEFAULT NULL,
  `quantidade1` varchar(11) DEFAULT NULL,
  `discriminacao1` varchar(255) DEFAULT NULL,
  `valorunitario1` varchar(11) DEFAULT NULL,
  `valortotal1` varchar(11) DEFAULT NULL,
  `quantidade2` varchar(11) DEFAULT NULL,
  `discriminacao2` varchar(255) DEFAULT NULL,
  `valorunitario2` varchar(255) DEFAULT NULL,
  `valortotal2` varchar(11) DEFAULT NULL,
  `quantidade3` varchar(11) DEFAULT NULL,
  `discriminacao3` varchar(255) DEFAULT NULL,
  `valorunitario3` varchar(11) DEFAULT NULL,
  `valortotal3` varchar(11) DEFAULT NULL,
  `quantidade4` varchar(11) DEFAULT NULL,
  `discriminacao4` varchar(255) DEFAULT NULL,
  `valorunitario4` varchar(11) DEFAULT NULL,
  `valortotal4` varchar(11) DEFAULT NULL,
  `quantidade5` varchar(11) DEFAULT NULL,
  `discriminacao5` varchar(255) DEFAULT NULL,
  `valorunitario5` varchar(11) DEFAULT NULL,
  `valortotal5` varchar(11) DEFAULT NULL,
  `quantidade6` varchar(11) DEFAULT NULL,
  `discriminacao6` varchar(255) DEFAULT NULL,
  `valorunitario6` varchar(11) DEFAULT NULL,
  `valortotal6` varchar(11) DEFAULT NULL,
  `quantidade7` varchar(11) DEFAULT NULL,
  `discriminacao7` varchar(255) DEFAULT NULL,
  `valorunitario7` varchar(11) DEFAULT NULL,
  `valortotal7` varchar(11) DEFAULT NULL,
  `quantidade8` varchar(11) DEFAULT NULL,
  `discriminacao8` varchar(255) DEFAULT NULL,
  `valorunitario8` varchar(11) DEFAULT NULL,
  `valortotal8` varchar(11) DEFAULT NULL,
  `quantidade9` varchar(11) DEFAULT NULL,
  `discriminacao9` varchar(255) DEFAULT NULL,
  `valorunitario9` varchar(11) DEFAULT NULL,
  `valortotal9` varchar(11) DEFAULT NULL,
  `quantidade10` varchar(11) DEFAULT NULL,
  `discriminacao10` varchar(255) DEFAULT NULL,
  `valorunitario10` varchar(11) DEFAULT NULL,
  `valortotal10` varchar(11) DEFAULT NULL,
  `total` varchar(11) DEFAULT NULL,
  `sinal` varchar(11) DEFAULT NULL,
  `resta` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id`, `datadopedido`, `aprovacao`, `entrega`, `horario`, `funcionario`, `cliente`, `contato`, `email`, `arquivosalvoem`, `quantidade1`, `discriminacao1`, `valorunitario1`, `valortotal1`, `quantidade2`, `discriminacao2`, `valorunitario2`, `valortotal2`, `quantidade3`, `discriminacao3`, `valorunitario3`, `valortotal3`, `quantidade4`, `discriminacao4`, `valorunitario4`, `valortotal4`, `quantidade5`, `discriminacao5`, `valorunitario5`, `valortotal5`, `quantidade6`, `discriminacao6`, `valorunitario6`, `valortotal6`, `quantidade7`, `discriminacao7`, `valorunitario7`, `valortotal7`, `quantidade8`, `discriminacao8`, `valorunitario8`, `valortotal8`, `quantidade9`, `discriminacao9`, `valorunitario9`, `valortotal9`, `quantidade10`, `discriminacao10`, `valorunitario10`, `valortotal10`, `total`, `sinal`, `resta`) VALUES
(23, '2022-01-01', '2022-01-01', '2022-01-01', '00:00:00.000000', 'julian', '', '', '', '', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '0', '0'),
(24, '2022-01-01', '2022-01-01', '2022-01-01', '00:00:00.000000', 'julian', '', '', '', '', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '0', '0'),
(25, '2022-01-01', '2022-01-01', '2022-01-01', '00:00:00.000000', 'julian', '', '', '', '', '0', 'banner 30x60', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', '0', '0'),
(26, '2022-03-12', '2022-03-12', '2022-03-14', '12:00:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(27, '2022-03-12', '2022-03-12', '2022-03-14', '12:00:00.000000', 'julian', '', '', '', '', '', '', '', '25', '', '', '', '5.25', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '30.25', '15.15', '15.1'),
(28, '2022-03-12', '2022-03-14', '2022-03-14', '17:55:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(29, '2022-03-12', '2022-03-12', '2022-02-13', '12:00:00.000000', 'Diego', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(30, '2022-02-02', '2200-02-20', '0220-02-20', '20:20:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(31, '2022-02-02', '2200-02-20', '0220-02-20', '20:20:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(32, '2022-02-02', '2200-02-20', '0220-02-20', '20:20:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(33, '0222-02-22', '0022-02-22', '0022-02-22', '22:22:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(34, '0222-02-22', '0022-02-22', '0022-02-22', '22:22:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(35, '0222-02-22', '0022-02-22', '0022-02-22', '22:22:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(36, '0022-02-02', '0202-02-20', '0022-02-20', '22:22:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(37, '2022-03-13', '2022-03-14', '2022-03-13', '12:00:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(38, '2022-03-13', '2022-03-14', '2022-03-13', '01:30:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(39, '2022-03-13', '2022-03-14', '2022-03-13', '01:47:00.000000', 'julian', 'Adryane Nunes', '(22) 99875-4211', 'adriane@gmail.com', 'banner/adryane', '1', 'banner 30x60', '17.3', '17.3', '1', 'adesivos 30x30', '17.3', '17.3', '1', 'adesivos 30x30', '17.3', '17.3', '1', 'adesivos 30x30', '17.3', '17.3', '1', 'adesivos 30x30', '17.3', '17.3', '1', 'adesivos 30x30', '17.3', '17.3', '1', 'adesivos 30x30', '17.3', '17.3', '1', 'adesivos 30x30', '17.3', '17.3', '1', 'adesivos 30x30', '17.3', '17.3', '1', 'adesivos 30x30', '17.3', '17.3', '173', '100', '73'),
(40, '2022-03-13', '2022-03-14', '2022-03-15', '03:30:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(41, '2022-03-13', '2022-03-14', '2022-03-15', '03:30:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(42, '0002-02-02', '0002-02-02', '0002-02-02', '02:02:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(43, '2022-02-02', '2022-02-20', '2200-02-02', '20:20:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(44, '2022-02-02', '2022-02-20', '2200-02-02', '20:20:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(45, '2022-02-02', '2022-02-20', '2200-02-02', '20:20:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(46, '2022-02-02', '2022-02-20', '2200-02-02', '20:20:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(47, '2022-02-02', '2022-02-20', '2200-02-02', '20:20:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(48, '2022-02-02', '2022-02-20', '2200-02-02', '20:20:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(49, '2022-01-01', '2022-02-02', '2022-02-02', '03:54:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(50, '2022-04-03', '2022-02-02', '2022-02-02', '03:45:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0'),
(51, '2022-03-13', '2022-03-15', '2022-03-16', '15:08:00.000000', 'julian', 'Silva', '22997857436', '', 'banner/silva', '1', 'banner 30x60', '0.25', '.25', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0.25', '0', '0.25'),
(52, '2022-03-13', '2022-03-14', '24hs apÃ³s aprovaÃ§Ã£o', '00:00:00.000000', 'julian', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '0', '0', '0');

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
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

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
(66, 'root', '123', '2022-02-27 10:07:33', NULL),
(67, 'Diego', '1234', '2022-03-12 18:45:10', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
